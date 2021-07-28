$(document).ready(function () {
    $('.extra-fields-color').click(function() {
        $('.colors').clone().appendTo('.colors_dynamic');
        $('.colors_dynamic .colors').addClass('single remove');
        $('.single .extra-fields-color').remove();
        $('.single').append('<a href="#" class="remove-field btn-remove-color">Entfernen</a>');
        $('.colors_dynamic > .single').attr("class", "remove");
      
        $('.colors_dynamic input').each(function() {
          var count = 0;
          var fieldname = $(this).attr("name");
          $(this).attr('name', fieldname);
          count++;
        });
      
    });
    
    $(document).on('click', '.remove-field', function(e) {
        $(this).parent('.remove').remove();
        e.preventDefault();
    });
})