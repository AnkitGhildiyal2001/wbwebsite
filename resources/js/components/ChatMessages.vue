<template>
<div class="content-right">
    <div class="content-wrapper">
        <div class="content-body">
            <section class="chat-app-window">
                <div class="active-chat">
                    <div class="chat_navbar">
                        <header class="chat_header d-flex justify-content-between align-items-center p-1">
                            <div class="vs-con-items d-flex align-items-center">
                                <div class="sidebar-toggle d-block d-lg-none mr-1"><i class="feather icon-menu font-large-1"></i></div>
                                <div class="avatar user-profile-toggle m-0 m-0 mr-1">
                                    <a v-if="myself.isCompanyContact" v-bind:href="this.baseurl + '/profil/' + other.slug">
                                        <img :src="other.image" alt="" height="40" width="40" />
                                    </a>
                                    <img v-else :src="other.image" alt="" height="40" width="40" />
                                </div>
                                <h6 class="mb-0">{{ other.firstname }} {{ other.lastname }}</h6>
                            </div>
                        </header>
                    </div>
                    <div class="user-chats">
                        <div class="chats" v-for="message in messages" :key="message.id">
                            <div v-bind:class="['chat', {'chat-left' : message.user_id != myself.id}]">
                                <div class="chat-avatar">
                                    <a class="avatar m-0" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
                                        <img v-if="message.user_id == myself.id" :src="myself.image" alt="avatar" height="40" width="40" />
                                        <img v-else :src="other.image" alt="avatar" height="40" width="40" />
                                    </a>
                                </div>
                                <div class="chat-body">
                                    <div class="chat-content">
                                        <p>{{ message.content }}</p>
                                        <span v-if="message.user_id == myself.id" style="font-size: 10px;">
                                            <span style="float:left;">{{ new Date(message.created_at) | dateFormat('HH:mm') }}</span>
                                            <span>{{ new Date(message.created_at) | dateFormat('DD.MM.YYYY') }}</span>
                                        </span>
                                        <span v-else style="font-size: 10px;">
                                            <span>{{ new Date(message.created_at) | dateFormat('DD.MM.YYYY') }}</span>
                                            <span style="float:right;">{{ new Date(message.created_at) | dateFormat('HH:mm') }}</span>
                                        </span>
                                    </div>
                                </div>
                                <div v-if="message.type == 'enquiry' && myself.isCompanyContact">
                                    <button type="button" @click="approve(message, other.id, myself.id, message.campaign_id, chatroom.id)" class="btn btn-success">Annehmen</button>
                                    <button type="button" @click="decline(message, other.id, myself.id, message.campaign_id, chatroom.id)" class="btn btn-danger">Ablehnen</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <chat-form @messagesent="addMessage"></chat-form>
                </div>
            </section>
        </div>
    </div>
</div>
</template>

<script>
    export default {
    props: {
        myself: {
            type:Object,
            required: true,
        },
        other: {
            type: Object,
            required: true,
        },
        chatroom: {
            required: true,
        },
        messages: {
            required: true,
        },
        baseurl: {
            type: String,
        }
    },
    // data: function() {
    //     return {
    //         messages: this.chatroom.messages,
    //     }
    // },
    created() {
        this.fetchMessages();
    },
    mounted() {
        var chat_window = document.getElementsByClassName("user-chats")[0];
        var newest_message = chat_window.lastChild;
        if( newest_message  ) {
          newest_message.scrollIntoView();
        }
        console.log(window.Echo);
        window.Echo.private('messages'+ this.chatroom.id)
            .listen('MessageSent', (e) => {
                console.log(e);
                var newMessage = {
                    "chatroom_id" : this.chatroom.id,
                    "user_id" : e.user,
                    "content" : e.message,
                    "created_at": new Date(),
                    "updated_at": new Date(),
                };
                
                this.chatroom.messages.push(newMessage);
            });
    },
    updated() {
        var chat_window = document.getElementsByClassName("user-chats")[0];
        var newest_message = chat_window.lastChild;
        if( newest_message  ) {
          newest_message.scrollIntoView();
        }
    },
    methods: {
        fetchMessages() {
            console.log("fetched");
            // axios.get('/messages').then(response => {
            //     this.messages = response.data;
            // });
        },

        addMessage(message) {
            message = {
                "chatroom_id" : this.chatroom.id,
                "user_id" : this.myself.id,
                "content" : message.message,
                "created_at": new Date(),
                "updated_at": new Date(),
            };
            this.chatroom.messages.push(message);

            axios.post('/add-message', message).then(response => {
                var chat_window = document.getElementsByClassName("user-chats")[0];
                var newest_message = chat_window.lastChild;
                newest_message.scrollIntoView();
            });
        },

        approve(message, applicant, company_user, campaign_id, chatroom_id) {

            var data = {
                message,
                applicant,
                company_user,
                campaign_id,
                chatroom_id,
            }

            axios.post('/approve', data).then(response => {
                message.type = 'approved';
            });
        },
        decline(message, applicant, company_user, campaign_id, chatroom_id) {
            var data = {
                message,
                applicant,
                company_user,
                campaign_id,
                chatroom_id,
            }

            axios.post('/decline', data).then(response => {
                message.type = 'dismissed';
            });
        },
    }
}
</script>