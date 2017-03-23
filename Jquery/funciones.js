
    
$(document).ready(ini);


function ini (){
  pintar();
  parrafos();
  anyadir();
}

function pintar(){
   var i =  $("input");
    i.each( function(){
        $(this).focus( function(){
           // $(this).css("background-color", "#FF0000");
            $(this).addClass("rojo");
        
        });
        $(this).blur( function(){
            //$(this).css("background-color", "#FFFFFF"); // Aqui le aplicamos directamente el color sin necesidad de ir al documento CSS.
             $(this).removeClass("rojo"); // esto le asigna una clase de css
              
        
        });
    })

  }


  function parrafos(){
    var p = $("p");
    p.each(resalta);
  }


  function resalta(){
    if($(this).text().length> 5){
      $(this).addClass("resalta");
      //$(this).text("esto es muy largo");


    }
  }

  function anyadir(){

    var d = $("body");
    d.add("<p> esto es nuevo </p>");
  }
        

