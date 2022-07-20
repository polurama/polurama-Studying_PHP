$(document).ready(function (){
    $("p").mouseenter(function (){
        $(this).hide("slow", function (){
            alert("The paragr in now hidden");
        });
    });
    // $("p").mouseleave(function (){
    //     $(this).show("slow");
    // });
});