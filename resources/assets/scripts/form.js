(function ($) {
    'use strict';
    
    $('.form').submit(function (e) {
        e.preventDefault()
        
        let formData = new FormData(this);
        const $output = $(this).find('.output')
        const $btn = $(this).find('.contact-form__btn')
        
        $.ajax({
            type: 'POST',
            url: '',
            data: formData,
            contentType: false,
            processData: false,
            success: function () {
                $output.html('<p class="success"><span class="success__text">Ваша заявка принята!<br>Мы свяжемся с вами в ближайшее время!</span><span class="success__icon icon-success"></span></p>')
                $btn.remove()
            },
            error: function () {
                $output.html('<p class="error"><span class="error__text">Заявка не отправлена.<br>Попробуйте снова</span><span class="error__icon icon-error"></span></p>')
            },
        });
        
        return false;
    });
    
})(jQuery);