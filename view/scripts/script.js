
//code example click
$(document).ready(function () {

/*    window.onload = function() {
        changeSection(0);
    };*/

    //code example click
    $(".cx").click(function () {
        $(".code-example").collapse('hide');

        $(".cx").removeClass("btn-primary");
        $(".cx").addClass("btn-default");

        $(this).addClass("btn-primary");
        $(this).removeClass("btn-default");
    });



});
/*
function changeSection(sectionID) {

        $("#section-content").load('model/templates/box-section.php?id='+sectionID.value);

}*/

