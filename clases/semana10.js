$(function () {
    $("p").on("click", function () {
       // $(this).slideUp();
        $(this).removeClass("red");
        //$(this).addClass("green");
    });


    $("p").on("mouseover", function () {
        $(this).text("Nuevo texto");
        //$(this).css("color","blue");
        $(this).addClass("red");

        $("#principal").html("<h1> Cambio de html");
    });

    $("img").on("mouseenter", function () {
        $(this).attr("src","patio.jpg")
    });

    $("img").on("mouseleave", function () {
        $(this).attr("src","biblioteca.jpg")
    });

    $("a").on("click", function () {
        $(this).attr("href","youtube.com")
    });
});
