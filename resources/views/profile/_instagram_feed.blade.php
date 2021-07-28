@if( isset($instagram->username) )
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>

    <script src="{{ asset('/plugins/instagram/instagram-feed.js') }}"></script>


    <script>
        (function($){
            $(window).on('load', function() {
                var currentURL = window.location.href;
                if( currentURL && currentURL.indexOf('profile/{{ $user->username }}/edit') > -1 ) {
                    getInstaFeed();
                }
                var instagramUser = localStorage.getItem("instagram-user-{{ $instagram->username }}");
                instagramUser     = JSON.parse(instagramUser);
                if( !instagramUser || !instagramUser.biography ) {
                    getInstaFeed();
                } else {
                    showInstaInfo(instagramUser);
                }
            });

            $(document).on('click', '.disconnect-instagram', function () {
                if( confirm('Are you sure you want to remove?') ) {
                    disconnectInstagram(true);
                }
                return false;
            });

            function disconnectInstagram( isDisconnect ) {
                isDisconnect = isDisconnect ? true : false;
                $.ajax({
                    type: 'POST',
                    url: '{{ url('profile/disconnect-instagram') }}?_token={{ csrf_token() }}',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: 'is_disconnect=' + (isDisconnect  ? 'yes' : ''),
                    dataType: 'json',
                }).done(function (response) {
                    location.reload();
                });
            }

            function getInstaFeed()
            {
                $.instagramFeed({
                    'host': 'https://images' + ~~(Math.random() * 3333) + '-focus-opensocial.googleusercontent.com/gadgets/proxy?container=none&url=https://www.instagram.com/',
                    'username': '{{ $instagram->username }}',
                    'callback': function(user) {
                        if( user ) {
                            localStorage.setItem("instagram-user-{{ $instagram->username }}", JSON.stringify(user));
                            showInstaInfo(user, true);
                        }
                    },
                    'on_error': function () {
                        setTimeout(function () {
                            //getInstaFeed();
                        }, 5000);
                    }
                });
            }

            function showInstaInfo(user, isFetched) {
                isFetched = isFetched ? isFetched : false;
                const followers = user.edge_followed_by.count;
                const media_count = user.edge_owner_to_timeline_media.count;
                const profile_img = user.profile_pic_url;
                const biography = user.biography;


                if( followers && !isNaN(parseInt(followers)) && parseInt(followers) < 1 && isFetched ) {
                    disconnectInstagram();
                }
                const media = user.edge_owner_to_timeline_media.edges;

                let total_engagement_ratio = 0;
                for(let i = 0; i < media.length; i++){
                    let total_engagement = 0;
                    let node = media[i]['node'];
                    total_engagement += node['edge_liked_by']['count'];
                    total_engagement += node['edge_media_to_comment']['count'];

                    total_engagement_ratio += (followers) ? (total_engagement / followers) * 100 : 0;
                }
                let engagement_rate = (media.length > 0) ? total_engagement_ratio /  media.length : 0;
                engagement_rate = engagement_rate.toFixed(2);
                $('.instagram-profile-card').find('.followers').html(followers);
                $('.instagram-profile-card').find('.media_count').html(media_count);
                //$('.instagram-profile-card').find('.profile_image').attr('src', profile_img);
                $('.instagram-profile-card').find('.bio').html(biography);
                $('.instagram-profile-card').find('.engagement_rate').html(engagement_rate + "%");

            }
        })(jQuery);
    </script>
@endif
