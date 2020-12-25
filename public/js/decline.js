$(document).ready(function() {
    $("input[type='radio']").change(function() {
        if ($(this).val() == "decline") {
            $("#reason").show();
        } else {
            $("#reason").hide();
        }
    });
});