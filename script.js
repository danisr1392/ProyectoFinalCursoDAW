$(function(){

    /*slider index*/
    
    $(".text-slider").hide();

    $(".text-slider:first").show();

    /*botones slider*/
    $(".select-slider li").click(function(){
        
        $(".select-slider li").removeClass();
        $(this).addClass("active-slider");

        var id = $(".select-slider .active-slider").attr("id");

        $(".text-slider").hide();

        $(".text-slider:nth-child(" + id + ")").fadeIn("slow");
    });
    
    

    /*boton legalidad*/

    $(".legalidad-info").hide();


    $(".legalidad-clicker img").click(function(){

        let clase = $(".legalidad-clicker img").attr("class");

        if(clase == "legalidad-clicker-down"){

            $(".legalidad-clicker-down").attr("src", "../../css/imagenes/arriba.png");
            $(".legalidad-clicker-down").removeClass();
            $(".legalidad-clicker img").addClass("legalidad-clicker-up");
            $(".legalidad-info").show();
        }else if(clase == "legalidad-clicker-up"){

            $(".legalidad-clicker-up").attr("src", "../../css/imagenes/abajo.png");
            $(".legalidad-clicker-up").removeClass();
            $(".legalidad-clicker img").addClass("legalidad-clicker-down");
            $(".legalidad-info").hide();
        }

    });
    
    /*slider de la pagina news*/

    $(".ofertas-area img").hide();
    $(".ofertas-area img:nth-child(2)").show();

    var imgPos = 2;
    
    $(".forw-button").click(function(){
        if(imgPos == 6){
            imgPos = 2;
        }else{
            imgPos++;
        }
        
        $(".ofertas-area img").hide();
        $(".ofertas-area img:nth-child(" + imgPos + ")").show();
        
    })
    
    $(".back-button").click(function(){
        if(imgPos == 2){
            imgPos = 6;
        }else{
            imgPos--;
        }
        
        $(".ofertas-area img").hide();
        $(".ofertas-area img:nth-child(" + imgPos + ")").show();
        
    })

});