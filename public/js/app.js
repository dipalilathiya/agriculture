// navbar start
$(window).scroll(function () { 
    var ad = $(window).scrollTop(); 
    if(ad >= 183.1999969482422){
       $(".sticky").css({
        "position":"fixed",
        "top" : "0",
        "width": "100%",
        "box-shadow": "0px 1px 30px -21px black",
        "background-color":" var(--lightblack)",
        "z-index":"5"
    })
}else{
    $(".sticky").css({
        "position":"initial",
        "top" : "initial",
        "width": "initial",
        "box-shadow": "0px -38px 24px 21px white",
        "background-color":"initial"
    })
}
});
// navbar End
// Tool details start
    $("#disp").click(function() { 
        $("#disp").addClass("border-b");
        $("#revi").removeClass(" border-b" )
        $(".disp").css("display","block");
        $(".Review").css("display","none");

    });
    $("#revi").click(function() { 
        $("#disp").removeClass(" border-b" )
        $("#revi").addClass(" border-b" )
        $(".Review").css("display","block");
        $(".disp").css("display","none");
    });
   // Spinner
   var spinner = function () {
    setTimeout(function () {
        if ($('#spinner').length > 0) {
            $('#spinner').removeClass('show');
        }
    }, 1);
};
spinner();

