    <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script src="../js/jquery.validate.js"></script>
    <script src="../js/additional-methods.js"></script>
    <script src="../js/bootstrap.min.js"></script>
<script>
$(document).ready(function () {

    $('#contact-form').validate({
        rules: {
            name: {
                minlength: 2,
                required: true
            },
            email: {
                required: true,
                email: true
            },
            message: {
                minlength: 2,
                required: true
            }
        },
        highlight: function (element) {
            $(element).closest('.control-group').removeClass('success').addClass('error');
        },
        success: function (element) {
            element.text('OK!').addClass('valid')
                .closest('.control-group').removeClass('error').addClass('success');
        }
    });

</script>