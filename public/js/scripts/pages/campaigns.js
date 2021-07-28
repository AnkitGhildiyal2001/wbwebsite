$.expr[":"].contains = $.expr.createPseudo(function(arg) {
    return function( elem ) {
        return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
    };
});

$(document).ready(function () {
    "use strict";
    var campaign_type;
    var shipping;
    var coupon;
    var numberOfInfluencer;
    var custom_packaging;
    var choiceKey = [];
    var age_range = [];
    var doPayment = true;
    var startAt = 0;
    var url = new URLSearchParams(window.location.search);
    var hasPayment = url.has('payment');
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    var toggle = 0;
    if(hasPayment){
        startAt = 4;
        $.ajax({
                headers: {
                    'X-CSRF-TOKEN': CSRF_TOKEN,
                },
                url: '/kampagne/pay-success',
                processData: false,
                contentType: false,
                type: 'post',
                data: { success: 'success'},
                dataType: 'json',
                success: function(status) {
                    //if(status.success == 'success')
                        //stepWizard.steps("setStep", 5);
                }
            });
    }

    var stepWizard = $("#example-basic").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "fade",
        autoFocus: true,
        enableFinishButton: false,
        enablePagination: false,
        startIndex: startAt,
        onInit: function (event, currentIndex) {
            
            $('#step_2_button').on("click", function() {
                var campaignForm = $("#campaign_description_form");

if($('#new_campaign_description').val().length === 0 || $('#need_to_do').val().length === 0){

                campaignForm.validate();
                campaignForm.valid();
            }else{

                var fd = new FormData();
            
                fd.append('new_campaign_description', $('#new_campaign_description').val());
                console.log($('#new_campaign_description').val());
                var need_to_do = $('input[name*=need_to_do]');

                for (var i = 0; i < need_to_do.length; i++) {
                    fd.append('need_to_do[]', need_to_do[i].value);
                }

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': CSRF_TOKEN,
                    },
                    url: '/campaign-details',
                    processData: false,
                    contentType: false,
                    type: 'post',
                    data: fd,
                    dataType: 'json',
                    success: function(status) {
                        if(status.success == 'success')
                            stepWizard.steps('next');
                    }
                });
            }
                
            });

            $('#options_button').on("click", function() {
                var fd = new FormData();
                fd.append('choice_key', choiceKey);
                fd.append('age_range', age_range);

                            if(shipping) {
                                $.ajax({
                                headers: {
                                    'X-CSRF-TOKEN': CSRF_TOKEN,
                                },
                                url: '/kampagne/update-options',
                                processData: false,
                                contentType: false,
                                type: 'post',
                                data: fd,
                                dataType: 'json',
                                success: function(status) {
                                    if(status.success == 'success')
                                        stepWizard.steps("setStep", 6);
                                }
                            });

                           }else{
                                const product_givaway_count = $('#product_givaway_count').length ? $('#product_givaway_count').val(): 0;
                                $.ajax({
                                    headers: {
                                        'X-CSRF-TOKEN': CSRF_TOKEN,
                                    },
                                    type: 'POST',
                                    url: "/kampagne/bezahlung",
                                    dataType: 'json',
                                    data: {
                                        product_givaway_count: product_givaway_count,
                                        campaign_type: campaign_type,
                                        shipping: shipping,
                                        coupon: coupon,
                                        numberOfInfluencer: numberOfInfluencer,
                                        custom_packaging: custom_packaging
                                    },
                                    success: function(data, status) {
                                        $('#shipping').text(data['shipping'] + "€ * " + data['numberOfInfluencer']);
                                        $('#customPackaging').text("(" + data['numberOfInfluencer'] + "/ 30) * " + data['custom_packaging'] + "€");
                                        $('#sum').text(data['sum'] + "€");
                                        $('#tax').text(data['tax'] + "€");
                                        $('#total').text(data['total'] + "€");
                                        console.log(data);
                                        goToPaymentSession();
                                        stepWizard.steps('next');
                                    },
                                    error: function() {

                                    }
                                });
                           }
                        });

            var slider = document.getElementById('slider');

            $('.dropdown-sin-1').dropdown({
              limitCount: 40,
              multipleMode: 'label',
              choice: function () {
                  const htm = $( ".dropdown-chose-list" ).html();
                  choiceKey = [];
                  $(htm).each(function(index, value) {
                    choiceKey.push($(value).find('i').attr("data-id"));
                  });
                  choiceKey.pop();
                  console.log(choiceKey);
              }
            });

            noUiSlider.create(slider, {
                start: [18, 80],
                step: 1,
                connect: true,
                range: {
                    'min': 18,
                    'max': 80
                }
            });

            slider.noUiSlider.on('update', function (values, handle) {
                age_range = values;
                $("#show_age").text(parseInt(values[0])+"-"+parseInt(values[1]))
            });

        },
        labels: {
            cancel: "Abbrechen",
            current: "Aktueller Schritt:",
            pagination: "Paginierung",
            finish: "Speichern",
            next: "Weiter",
            previous: "Zurück",
            loading: "Laden ..."
        }
    });

    $('#shipping_by_company').on("click", function() {
        if(toggle == 0) {
            $('#packaging-form-group').addClass("hidden");
            toggle = 1;
        } else {
            $('#packaging-form-group').removeClass("hidden");
            toggle = 0;
        }
    });

    $('#addTagBtn').click(function() {
        $('#tags option:selected').each(function() {
            $(this).appendTo($('#selectedTags'));
        });
    });
    $('#removeTagBtn').click(function() {
        $('#selectedTags option:selected').each(function(el) {
            $(this).appendTo($('#tags'));
        });
    });
    $('.tagRemove').click(function(event) {
        event.preventDefault();
        $(this).parent().remove();
    });
    $('ul.tags').click(function() {
        $('#search-field').focus();
    });
    $('#search-field').keypress(function(event) {
        if (event.which == '13') {
            if (($(this).val() != '') && ($(".tags .addedTag:contains('" + $(this).val() + "') ").length == 0 ))  {
                    $('<li class="addedTag">' + $(this).val() + '<span class="tagRemove" onclick="$(this).parent().remove();"></span><input type="hidden" value="' + $(this).val() + '" name="tags[]"></li>').insertBefore('.tags .tagAdd');
                    $(this).val('');

            } else {
                $(this).val('');

            }
        }
    });


    $('#campaign').on("submit", function(ev) {
        ev.preventDefault();
        var campaign_type = $('#campaign_type').val();
        var fd = new FormData();
        fd.append('title', $('#title').val());
        fd.append('description', $('#description').val());
        fd.append('publication_period_from', $('#publication_period_from').val());
        fd.append('publication_period_to', $('#publication_period_to').val());
        fd.append('influencer_product', $('#influencer_product').val());
        if(campaign_type != 3)
        fd.append('account_to_tag', $('#account_to_tag').val());
        else{
         fd.append('account_to_tag', '~');
         fd.append('hashtags', ['~']);
        }
        //fd.append('campaign_description', $('#campaign_description').val());
        fd.append('campaign_type', campaign_type);
        fd.append('campaign_url', $('#account_to_url').val()); 
        fd.append('review_url', $('#review_url').val());

        if ($('#product_givaway_count').length) {
            fd.append('product_givaway_count', $('#product_givaway_count').val());
        }
        if ($('#participation_terms').length) {
            fd.append('participation_terms', $('#participation_terms').val());
        }
        if(campaign_type != 3){
            var hashtags = [];

            $('li.addedTag').each(function (index) {
                var el = $(this);
                var hashtag = el.text();
                hashtags.push(hashtag);
            });

            fd.append('hashtags', hashtags);
        }
        if($('#youtube').prop("checked")) {
            fd.append('youtube', $('#youtube').val());
        }

        if($('#twitch').prop("checked")) {
            fd.append('twitch', $('#twitch').val());
        }

        if($('#instagram').prop("checked")) {
            fd.append('instagram', $('#instagram').val());
        }

        if($('#dummycode').prop("checked")) {
            fd.append('dummycode', $('#dummycode').val());
        }

        if($('#approve_influencer').prop("checked")) {
            fd.append('approve_influencer', $('#approve_influencer').val());
        }

        if($('#shipping_by_company').prop("checked")) {
            fd.append('shipping_by_company', $('#shipping_by_company').val());
        }

        if($('#custom_packaging').prop("checked")) {
            fd.append('custom_packaging', $('#custom_packaging').val());
        }

        if($('#coupon').length) {
            fd.append('coupon', $('#coupon').val());
        }

        fd.append('influencer_quantity', $('#influencer_quantity').val());
        fd.append('category_id', $('#category').val());

        if(!shipping){
            fd.append('choice_key', choiceKey);
            fd.append('age_range', age_range);
        }

        var gallery_length = $('#gallery').get(0).files.length;

        if(gallery_length > 0) {
            for(var i = 0; i < gallery_length; i++) {
                fd.append('gallery[]', $('#gallery')[0].files[i]);
            }
        }

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': CSRF_TOKEN,
            },
            url: '/kampagne/create',
            processData: false,
            contentType: false,
            type: 'post',
            data: fd,
            dataType: 'json',
            //    data: $(this).serialize(),
            success: function(data, status) {
                var sessionId = data['sessionId'];
                if(sessionId){
                    var stripeKey = data['stripeKey'];
                    if(doPayment)
                    redirectToStripeCheckout(stripeKey, sessionId);

                }else{
                    stepWizard.steps('next');
                }
            }
        });

        return false;
    });

    $('#create-form').on("click", function() {
        var title = $('#title');
        var description = $('#description');
        var influencer_quantity = $('#influencer_quantity');
        var category = $('#category');
        var tagsArray = $('input[name="tags[]"]');
        var max_users = influencer_quantity.data('max_users');
        var max_user_status = false;
        if(max_users != -1){
            if(parseInt(max_users)  < influencer_quantity.val()){
                max_user_status = true;
            }
        }
        console.log(max_user_status);
        if(
            title.val().length === 0 ||
            description.val().length === 0 ||
            influencer_quantity.val().length === 0 ||
            max_user_status ||
            category.val() == null
        ) {
            var campaignForm = $("#campaign");
            campaignForm.validate();
            campaignForm.valid();

            /*if (tagsArray.length == 0) {
                $('.tags').addClass('is-invalid');
            } else {
                $('.tags').removeClass('is-invalid');
            }*/
        } else {
            $('#campaign').submit();

            $('create-form').prop('disabled', true);
            $('create-form').html('');
            $('create-form').append('<i class="fa fa-circle-o-notch fa-spin"></i> Laden');

            stepWizard.steps('next');
        }
    });
    /*$('#next-pay').on("click", function() {
        stepWizard.steps('next');
    });*/
    $('#next-pay').on("click", function() {
        
        campaign_type = $('#campaign_type').val();
        numberOfInfluencer = $('#influencer_quantity').val();
        shipping = document.getElementById('shipping_by_company').checked;
        custom_packaging = document.getElementById('custom_packaging').checked;
        var account_to_url = $('#account_to_url ').val()
        var title = $('#title');
        var description = $('#description');
        var influencer_quantity = $('#influencer_quantity');
        var category = $('#category');
        coupon = $('#coupon').length ? $('#coupon').val() : null;
        var tagsArray = $('input[name="tags[]"]');
        if(campaign_type == 3)
          tagsArray = ['~'];
        var max_users = influencer_quantity.data('max_users');
        var max_user_status = false;
        if(max_users != -1){
            if(parseInt(max_users) < influencer_quantity.val()){
                max_user_status = true;
            }
        }
        console.log(max_users < influencer_quantity.val());
        console.log(influencer_quantity.val());
        console.log(max_user_status);
        /*if(!isValidURL(account_to_url)){
            alert("Please enter a valid url");
            return false;
        }*/
        var campaignForm = $("#campaign");
        if(
            title.val().length === 0 ||
            description.val().length === 0 ||
            influencer_quantity.val().length === 0 ||
            max_user_status ||
            category.val() == null
        ) {
            
            return validateUrl(campaignForm,campaign_type,1);

            /*if (tagsArray.length == 0) {
                $('.tags').addClass('is-invalid');
            } else {
                $('.tags').removeClass('is-invalid');
            }*/

        } else {

            const vali = validateUrl(campaignForm,campaign_type,2);

            if(vali){

            }else{
                return false;
            }

            if(shipping) {
                doPayment = false;
                $('#campaign').submit();

                $('create-form').prop('disabled', true);
                $('create-form').html('');
                $('create-form').append('<i class="fa fa-circle-o-notch fa-spin"></i> Laden');
                //stepWizard.steps("setStep", 5);
            }else
            stepWizard.steps('next');
        }
    });

    function goToPaymentSession(){
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(ev) {
            ev.preventDefault();
            $('#campaign').submit();
            //stepWizard.steps('next');
        });
    }
    function redirectToStripeCheckout(stripeKey, session_id){
        var stripe = Stripe(stripeKey);
        stripe.redirectToCheckout({
            // Make the id field from the Checkout Session creation API response
            // available to this file, so you can provide it as argument here
            // instead of the CHECKOUT_SESSION_ID placeholder.
            sessionId: session_id
        }).then(function (result) {
            console.log(result);
            // If `redirectToCheckout` fails due to a browser or network
            // error, display the localized error message to your customer
            // using `result.error.message`.
        });
    }
    function makeStripeForm(client_secret, client_name) {
        // Create a Stripe client.
        var stripe = Stripe('pk_test_WNFV5mebg1p5BVhPLoZjujUI00UoMCETqo');

        // Create an instance of Elements.
        var elements = stripe.elements();

        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
        base: {
            color: '#32325d',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
            color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
        };

        // Create an instance of the card Element.
        var card = elements.create('card', {style: style});

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');

        // Handle real-time validation errors from the card Element.
        card.addEventListener('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
        });

        var clientSecret = client_secret;

        // Handle form submission.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
        event.preventDefault();

        $('#submit').prop('disabled', true);
        $('#submit').html('');
        $('#submit').append('<i class="fa fa-circle-o-notch fa-spin"></i> Laden');

        stripe.createToken(card).then(function(result) {
            if (result.error) {
            // Inform the user if there was an error.
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
            } else {
            // Send the token to your server.
            stripeTokenHandler(result.token);
            }
        });
        });

        // Submit the form with the token ID.
        function stripeTokenHandler(token) {
        // Insert the token ID into the form so it gets submitted to the server
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);
        }

        var form = document.getElementById('payment-form');

        form.addEventListener('submit', function(ev) {
        ev.preventDefault();
        stripe.confirmCardPayment(clientSecret, {
            payment_method: {
            card: card,
            billing_details: {
                name: client_name,
            }
            }
        }).then(function(result) {
            if (result.error) {
            // Show error to your customer (e.g., insufficient funds)
            $('<p>'+ result.error.message +'</p>').appendTo('#card-errors');
            } else {
            // The payment has been processed!
            if (result.paymentIntent.status === 'succeeded') {
                $('#campaign').submit();
                stepWizard.steps('next');
                // Show a success message to your customer
                // There's a risk of the customer closing the window before callback
                // execution. Set up a webhook or plugin to listen for the
                // payment_intent.succeeded event that handles any business critical
                // post-payment actions.
                }
            }
        });
        });
    }

    $.fn.steps.setStep = function (step)
    {
        var currentIndex = $(this).steps('getCurrentIndex');
        for(var i = 0; i < Math.abs(step - currentIndex); i++){
            if(step > currentIndex) {
                $(this).steps('next');
            }
            else{
                $(this).steps('previous');
            }
        }
    };
});

$(window).on("resize", function () {
    if ($(window).outerWidth() >= 991) {
        $(".sidebar-shop").removeClass("show");
        $(".shop-content-overlay").removeClass("show");
    }
});
function validateUrl(campaignForm,campaign_type,from){

    if(campaign_type == 3)
        campaignForm.validate({  rules: {
                                account_to_url: {
                                  url: true
                              },
                              review_url: {
                                  url: true
                              },
                          }
        });
        else
        campaignForm.validate({  rules: {
                                account_to_url: {
                                  url: true
                              }
                          }
        });
        ret = campaignForm.valid();
        console.log(ret,from)
        return ret;

}
function isValidURL(string) {
  var res = string.match(/(http(s)?:\/\/.)?(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/g);
  return (res !== null)
};
function loadFile(event) {
    var image = document.getElementById('user-avatar');
    image.src = URL.createObjectURL(event.target.files[0]);
    $('removed-image').val("");
};
