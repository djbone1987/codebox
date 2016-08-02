$(document).ready(function () {
    $(".cx").click(function () {
        $(".code-example").collapse('hide');

        $(".cx").removeClass("btn-primary");
        $(".cx").addClass("btn-default");

        $(this).addClass("btn-primary");
        $(this).removeClass("btn-default");
    });
});