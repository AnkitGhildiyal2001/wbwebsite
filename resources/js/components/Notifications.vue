<template>
<div>
    <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span v-if="this.alerts.length > 0" class="badge badge-pill badge-danger badge-up">{{ this.alerts.length }}</span></a>
        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right notification-window">
            <!-- <li class="dropdown-menu-header">
                <div class="dropdown-header m-0 p-2">
                    <h3 class="white">5 New</h3><span class="grey darken-2">App Notifications</span>
                </div>
            </li> -->
            <li class="scrollable-container media-list ps">
                <span v-if="this.alerts.length > 0">
                    <span v-for="(notification, index) in this.alerts" :key="index">
                        <a class="d-flex justify-content-between" v-on:click="setAsRead(notification.id, user.id, index, notification)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left"><i class="feather icon-mail font-medium-5 primary"></i></div>
                                <div class="media-body">
                                    <h6 class="primary media-heading truncate">Du hast eine neue Nachricht</h6>{{ notification.sender }}: <small class="notification-text">{{ notification.message !== null ? notification.message : notification.content | truncate(100, '...') }}</small>
                                </div>
                                <small><time class="media-meta" datetime="2015-06-11T18:29:20+08:00">{{ notification.time }}</time></small>
                            </div>
                        </a>
                    </span>
                </span>
                <span v-else>
                    <li class="dropdown-item p-1 text-center">Keine Neuigkeiten</li>
                </span>
                <!-- <a class="d-flex justify-content-between" href="javascript:void(0)">
                    <div class="media d-flex align-items-start">
                        <div class="media-left"><i class="feather icon-plus-square font-medium-5 primary"></i></div>
                        <div class="media-body">
                            <h6 class="primary media-heading">You have new order!</h6><small class="notification-text"> Are your going to meet me tonight?</small>
                        </div>
                        <small><time class="media-meta" datetime="2015-06-11T18:29:20+08:00">9 hoursago</time></small>
                    </div>
                </a>
                <a class="d-flex justify-content-between" href="javascript:void(0)">
                    <div class="media d-flex align-items-start">
                        <div class="media-left"><i class="feather icon-download-cloud font-medium-5 success"></i></div>
                        <div class="media-body">
                            <h6 class="success media-heading red darken-1">99% Server load</h6><small class="notification-text">You got new order of goods.</small>
                        </div>
                        <small><time class="media-meta" datetime="2015-06-11T18:29:20+08:00">5 hourago</time></small>
                    </div>
                </a>
                <a class="d-flex justify-content-between" href="javascript:void(0)">
                    <div class="media d-flex align-items-start">
                        <div class="media-left"><i class="feather icon-alert-triangle font-medium-5 danger"></i></div>
                        <div class="media-body">
                            <h6 class="danger media-heading yellow darken-3">Warning notifixation</h6><small class="notification-text">Server have 99% CPU usage.</small>
                        </div>
                        <small><time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                    </div>
                </a>
                <a class="d-flex justify-content-between" href="javascript:void(0)">
                    <div class="media d-flex align-items-start">
                        <div class="media-left"><i class="feather icon-check-circle font-medium-5 info"></i></div>
                        <div class="media-body">
                            <h6 class="info media-heading">Complete the task</h6><small class="notification-text">Cake sesame snaps cupcake</small>
                        </div>
                        <small><time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Lastweek</time></small>
                    </div>
                </a>
                <a class="d-flex justify-content-between" href="javascript:void(0)">
                    <div class="media d-flex align-items-start">
                        <div class="media-left"><i class="feather icon-file font-medium-5 warning"></i></div>
                        <div class="media-body">
                            <h6 class="warning media-heading">Generate monthly report</h6><small class="notification-text">Chocolate cake oat cake tiramisu marzipan</small>
                        </div>
                        <small><time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Lastmonth</time></small>
                    </div>
                </a>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                </div> -->
            </li>
            <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center" href="javascript:void(0)">Read all notifications</a></li>
        </ul>
    </li>
</div>
</template>

<script>
    export default {
        props: {
            user: {
                type: Object,
                required: true,
            },
            notifications: {
                required: true,
            },
        },
        data: function() {
            return {
                alerts: this.notifications,
            }
        },
        mounted() {
          window.Echo.private('App.User.'+ this.user.id)
            .notification(notification => {
                var newNotification =  {
                  "chatroom_id": notification.data.chatroom_id,
                  "content": notification.data.content,
                  "created_at": notification.data.created_at,
                  "id": notification.id,
                  "message": notification.data.content,
                  "sender": notification.sender,
                  "time": notification.time,
                  "user_id": notification.data.user_id,
                };
                this.alerts.splice(0, 0, newNotification);
                  axios.get('/notifications/get').then(response => {
                      this.alerts = response.data;
                  });
              });
        },
        methods: {
            setAsRead(id, user_id, notificationIndex, notification) {
                var userAndNotificationIds = {
                        'id': id,
                        'user_id': user_id,
                    };
                    axios.put('/api/notifications', userAndNotificationIds).then(response => {
                        this.notifications.splice(notificationIndex, 1);
                        if( notification.chatroom_id && notification.chatroom_id > 0  ) {
                          if( window.location.href.indexOf( '/nachrichten') < 0 ) {
                            window.location.href = '/nachrichten?chat=' + notification.chatroom_id;
                          }
                        }
                    });
            }
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