// menu desplegable

$(document).ready(function(){
    $('.menu li:has(ul)').click(function(e){
      e.preventDefault();

      if ($(this).hasClass('activado')){

        $(this).removeClass('activado');

        $(this).children('ul').slideUp();

      } else {
          
          $('.menu li ul').slideUp();
          $('.menu li').removeClass('activado');
          $(this).addClass('activado');
          $(this).children('ul').slideDown();
      }

    });

    $('.menu li ul li a').click(function(){
        window.location.href = $(this).attr("href");
    });


   

});

$(document).ready(function(){
    //   activar elnace
            $('#fondo_carrito .categorias[name="todo"] ').addClass('ct_item-active');
            $('.categorias').click(function(){
                var catproducto = $(this).attr('name');
                console.log(catproducto);

                $('.categorias').removeClass('ct_item-active');
                    $(this).addClass('ct_item-active');
            });
        
    
    });

    //  buscar
    $(buscar_datos());

    function buscar_datos(consulta){
        $.ajax({
            url: '../administrativo/buscar.php',
            type: 'POST',
            dataType: 'html',
            data: {consulta: consulta},

        })

        .done(function(respuesta){
            $("#datos").html(respuesta);
        })

        .fail(function(){
            console.log("error");
        })


    }

    $(document).on('keyup', '#caja_busqueda', function(){
         var valor = $(this).val();
         if(valor !=""){
             buscar_datos(valor);

         }else{
             buscar_datos();

         }

    })
/**************************buscar empresas************/ 
    $(buscar_datos1());

    function buscar_datos1(consulta1){
        $.ajax({
            url: '../administrativo/buscar_empresa.php',
            type: 'POST',
            dataType: 'html',
            data: {consulta1: consulta1},

        })

        .done(function(respuesta){
            $("#datos1").html(respuesta);
        })

        .fail(function(){
            console.log("error");
        })


    }

    $(document).on('keyup', '#caja_busqueda1', function(){
         var valor = $(this).val();
         if(valor !=""){
             buscar_datos1(valor);

         }else{
             buscar_datos1();

         }

    })
    /************************** fin buscar productos************/ 

/**************************buscar productos************/ 
    $(buscar_datos2());

    function buscar_datos2(consulta2){
        $.ajax({
            url: '../administrativo/buscar_producto.php',
            type: 'POST',
            dataType: 'html',
            data: {consulta2: consulta2},

        })

        .done(function(respuesta){
            $("#datos2").html(respuesta);
        })

        .fail(function(){
            console.log("error");
        })


    }

    $(document).on('keyup', '#caja_busqueda2', function(){
         var valor = $(this).val();
         if(valor !=""){
             buscar_datos2(valor);

         }else{
             buscar_datos2();

         }

    })

    /**************************FIN BUSCAR PRODUCTOS************/

