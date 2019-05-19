$(document).ready(function () {
    $(".submit-contact").click(function () {
        $(".submit-contact").attr("disabled", true);
        $('#form-contact').submit();
    });
});