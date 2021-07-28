<template>
    <div class="chat-app-form">
        <form class="chat-app-input d-flex" action="javascript:void(0);">
            <input v-model="newMessage" @keyup.enter="sendMessage" type="text" class="form-control message mr-1 ml-50" id="iconLeft4-1" placeholder="Nachricht">
            <button type="button" class="btn btn-primary send" @click="sendMessage"><i class="fa fa-paper-plane-o"></i></button>
        </form>
    </div>
    <!-- <div class="input-group">
        <input
                id="btn-input"
                type="text"
                name="message"
                class="form-control input-sm"
                placeholder="Type your message here..."
                v-model="newMessage"
                @keyup.enter="sendMessage"
                @keyup="sendTypingEvent">

        <span class="input-group-btn">
            <button class="btn btn-primary btn-sm" id="btn-chat" @click="sendMessage">
                Send
            </button>
        </span>
    </div> -->
</template>

<script>
 export default {
    props: ['user'],

    data() {
        return {
            newMessage: ''
        }
    },

    methods: {
        sendMessage() {
            this.$emit('messagesent', {
                user: this.user,
                message: this.newMessage
            });

            this.newMessage = ''
        }
    }
}
</script>