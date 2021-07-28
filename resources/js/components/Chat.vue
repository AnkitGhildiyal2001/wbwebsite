<template>
<div class="d-flex">
    <div class="sidebar-left">
        <div class="sidebar">
            <!-- Chat Sidebar area -->
            <div class="sidebar-content card">
                <span class="sidebar-close-icon">
                    <i class="feather icon-x"></i>
                </span>
                <div class="chat-fixed-search">
                    <div class="d-flex align-items-center">
                        <div class="sidebar-profile-toggle position-relative d-inline-flex">
                            <div class="avatar">
                                <img v-bind:src="user.image" alt="user_avatar" height="40" width="40">
                            </div>
                            <div class="bullet-success bullet-sm position-absolute"></div>
                        </div>
                        <fieldset class="form-group position-relative has-icon-left mx-1 my-0 w-100">
                            <input type="text" class="form-control round" id="chat-search" placeholder="Search or start a new chat">
                            <div class="form-control-position">
                                <i class="feather icon-search"></i>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div id="users-list" class="chat-user-list list-group position-relative">
                    <h3 class="primary p-1 mb-0">Chats</h3>
                    <ul class="chat-users-list-wrapper media-list" style="overflow-y: scroll;">
                        <template v-for="(chatroom, index) in chatrooms">
                        <span v-for="chatpartner in chatroom.members" :key="chatpartner.id" v-if="chatpartner.id != user.id">
                            <li :class="{'active' : index === activeIndex}" v-on:click="setChatroom(chatroom);setOther(chatpartner);setActive(index);">
                                    <div class="pr-1"><span class="avatar m-0 avatar-md"><img v-bind:src="chatpartner.image" height="42" width="42" alt="Generic placeholder image" class="media-object rounded-circle"> <i></i></span></div>
                                    <div class="user-chat-info">
                                        <div class="contact-info">
                                            <h5 class="font-weight-bold mb-0">{{ chatpartner.firstname }} {{ chatpartner.lastname }}</h5>
                                            <p class="truncate">{{ chatroom.messages[chatroom.messages.length-1].content | truncate(30, '...') }}</p>
                                        </div>
                                        <div class="contact-meta"><span class="float-right mb-25">{{ new Date(chatroom.updated_at) | dateFormat('DD.MM.YYYY HH:mm') }}</span> <span class="badge badge-primary badge-pill float-right">{{ (chatroom.unread_messages && chatroom.unread_messages > 0) ? chatroom.unread_messages : '' }}</span></div>
                                    </div>
                            </li>
                        </span>
                        </template>
                    </ul>
                </div>
            </div>
            <!--/ Chat Sidebar area -->
        </div>
    </div>
    <span></span>
    <ChatMessages
        :myself="this.user"
        :other="this.other"
        :chatroom="this.chatroom"
        :messages="this.messages"
        :baseurl="this.baseurl">
    </ChatMessages>
</div>
</template>

<script>
    import ChatMessages from './ChatMessages.vue';
    export default {
        components:{
            ChatMessages,
        },
        props: {
            user: {
                type: Object,
                required: true,
            },
            partner: {
                type: Object,
                required: true,
            },
            chatrooms: {
                required: true,
            },
            baseurl: {
                type: String,
                required: true,
            }
        },
        data: function() {
            return {
                myself: this.user,
                other: this.partner,
                chatroom: this.chatrooms[0],
                messages: this.chatrooms[0].messages,
                activeIndex: 0,
            }
        },
        mounted() {
            console.log(this.notifications);
            window.Echo.private('messages-'+ this.chatroom.id)
            //Echo.private('chat')
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
            window.Echo.private('App.User.'+ this.user.id)
             .notification(notification => {
                console.log('notification', notification);
                if(notification.type == "App\\Notifications\\MessageReceived") {
                    var chatroom_id = notification.data.chatroom_id;
                    console.log(chatroom_id);
                    console.log(this.chatrooms);
                }
            });
        },
        methods: {
            setChatroom: function(chatroom) {
                this.chatroom = chatroom;
                this.messages = chatroom.messages;
                axios.post('/read-chat/' + chatroom.id).then(response => {
                  this.chatrooms = this.chatrooms.map((chat) => {
                    if( chat.id == chatroom.id ) {
                      chat.unread_messages = 0;
                    }
                    return chat;
                  })
                });
            },
            setOther: function(other) {
                this.other = other;
            },
            setActive: function(index) {
                this.activeIndex = index;
            },
        },
        filters: {
            truncate: function (text, length, suffix) {
                if (text.length > length) {
                    return text.substring(0, length) + suffix;
                } else {
                    return text;
                }
            },
        },
    }
</script>