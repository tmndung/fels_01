
$(window).load(function () {
    $('#JiSlider').JiSlider({color: '#fff', start: 1, reverse: true}).addClass('ff');
});





$(document).ready(function(){
    $('button[type="submit"]').click(function(event){
        event.preventDefault();
        $('#errordiv').removeClass('alert-success').addClass('alert-danger').html('Username hoáº·c password khÃ´ng há»£p lá»‡. <br> Vui lÃ²ng thá»­ láº¡i.');
    });

    var height = $(window).height();
    var height_signup_features = height - ($('header').height() + $('footer').height());
    if(height_signup_features > 430){
        $('#signup-features').css('height', height_signup_features - 100);
    }
});

/*$(document).ready(function(){
    $(function() {
        $("form[name='login']").validate({
            // Specify validation rules
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 5
                }
            },
            // Specify validation error messages
            messages: {
                password: {
                    required: "<p>Vui lÃ²ng nháº­p password</p>",
                    minlength: "<p>Password khÃ´ng há»£p lá»‡</p>"
                },
                email: "<p>Vui lÃ²ng nháº­p Ä‘á»‹a chá»‰ Email</p>"
            },
            submitHandler: function(form) {
                submitForm();
            }
        });
    });
});
function submitForm(){
    $('#errordiv').removeClass('alert-success').addClass('alert-danger').html('');
    //form.submit();
}*/
