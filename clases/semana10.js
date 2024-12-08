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

    // Semana 11


    $("#mostrar").on("click", function () {
        $("#cuadrado").fadeIn();
    });


    $("#ocultar").on("click", function () {
        $("#cuadrado").fadeOut();
    });

    $("#color").on("click", function () {
        $("#cuadrado").toggleClass("blue");
    });


    $("#agrandar").on("click", function () {
        $("#cuadrado").animate({
            width: "500px",
            height: "500px",
            opacity: "0.7"
        }, 1000);
    });


    $("#achicar").on("click", function () {
        $("#cuadrado").animate({
            width: "50px",
            height: "50px",
            opacity: "0.2"
        }, 1000);
    });
  
    $("#normal").on("click", function () {
        $("#cuadrado").animate({
            width: "100px",
            height: "100px",
            opacity: "1"
        }, 1000);
    });
    $("#addTask").on("click", function () {
        let newTask = $("#task").val();
        if(newTask.trim() != ""){
            $("#listTasks").append("<li>"+newTask+"</li>");
            $("#task").val("");
        }
    });
});
