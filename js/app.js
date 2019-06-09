(function ($) {

    const $items = $('.items');

    // add item   
    $('.addItem').click((e) => {
        const $button = $(e.target);
        const $item = $button.parents('.item').clone(true);
        $button.attr('disabled', true);
        $item.find('input').val('');
        $item.appendTo($items);
        $('.removeItem').attr('disabled', false)
    });

    //remove item
    $('.removeItem').click((e) => {
        if ($items.children().length >= 2) {
            $(e.target).parents('.item').remove();

            if ($items.children().length == 1) {
                $('.addItem').attr('disabled', false)
                $('.removeItem').attr('disabled', true)
            }
        }
    });


    $('#register-form').on('submit', (e) => {
        e.preventDefault();
       
        $.ajax({
            type: "POST",
            url: './ajax.php',
            data: $(e.target).serialize(),
            success: function (data) {
                console.log(data);
                message(data)
                
            }
        });
    });

    const message = (data)=>{
       if(data.errorCode === 1){
        $('#alert').removeClass('d-none alert-success').addClass('alert-danger')  
        $('#alert').text(data.message);
        

       }else{
        $('#alert').removeClass('d-none alert-danger').addClass('alert-success')  
        $('#alert').text(data.message); 
        $('.items .item').slice(1).remove();
        $('#register-form input').val('');
        
       }
    }

})(jQuery);