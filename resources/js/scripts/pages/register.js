$(document).ready(function () {
    "use strict";

    if($('#isCompanyContact').prop("checked") == true) {
        $('#companyNameInput').removeClass("hidden");
        $('#company').prop('required', true);
    } else {
        $('#companyNameInput').addClass("hidden");
        $('#company').prop('required', false);
    }

    $('#isCompanyContact').on('click', function() {
        if($('#isCompanyContact').prop("checked") == true) {
            $('#companyNameInput').removeClass("hidden");
            $('#company').prop('required', true);
        } else {
            $('#companyNameInput').addClass("hidden");
            $('#company').prop('required', false);
        }
    });

});