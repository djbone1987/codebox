

//code example click
$(document).ready(function () {



    //code example click
    $(".cx").click(function () {
        $(".code-example").collapse('hide');

        $(".cx").removeClass("btn-primary");
        $(".cx").addClass("btn-default");

        $(this).addClass("btn-primary");
        $(this).removeClass("btn-default");
    });




});

function changeSection($sectionID) {
    console.log("changed " + $sectionID);
}