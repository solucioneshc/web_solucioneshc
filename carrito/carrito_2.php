
<?php

session_status();

$mensaje="";

if(isset($_POST['btnaction'])){

    switch($_POST['btnaction']){

        case 'agregar':

            if(is_numeric(openssl_decrypt($_POST ['id'],COD,KEY))){
                $ID=openssl_decrypt($_POST ['id'],COD,KEY);
                $mensaje.="ok id correcto".$ID."<br/>";

            }else{

                $mensaje.=" id incorrecto".$ID."<br/>";


            }

            if(is_string(openssl_decrypt($_POST ['nombre'],COD,KEY))){
                $NOMBRE=openssl_decrypt($_POST ['nombre'],COD,KEY);
                $mensaje.="ok nombre correcto".$NOMBRE."<br/>";

            }else{

                $mensaje.=" nombre incorrecto".$NOMBRE."<br/>";


            }

     

        if(is_numeric(openssl_decrypt($_POST ['cantidad'],COD,KEY))){
            $CANTIDAD=openssl_decrypt($_POST ['cantidad'],COD,KEY);
            $mensaje.="ok cantidad correcto".$CANTIDAD."<br/>";

        }else{

            $mensaje.=" cantidad incorrecto".$CANTIDAD."<br/>";


        }

        if(is_numeric(openssl_decrypt($_POST ['precio'],COD,KEY))){
            $PRECIO=openssl_decrypt($_POST ['precio'],COD,KEY);
            $mensaje.="ok precio correcto".$PRECIO."<br/>";

        }else{

            $mensaje=" precio incorrecto".$PRECIO."<br/>";
        
        break;


             }

        // validacion de la secion

        if(!isset($_SESSION['CARRITO'])){


            $producto=array(
                'ID' =>$ID,
                'NOMBRE' =>$NOMBRE,
                'CANTIDAD' =>$CANTIDAD,
                'PRECIO' =>$PRECIO

            );

            $_SESSION['CARRITO'][0]=$producto;
            $mensaje= ("Producto agregado al carrito");

            // fin validacion de la secion

        }else{

            $idProductos=array_column($_SESSION['CARRITO'],"ID");
            
            if(in_array($ID,$idProductos)){
                echo "<script>alert('El producto ya a sido seleccionado');</script>";
                $mensaje="";

            }else{

            

            $NumeroProductos=count($_SESSION['CARRITO']);
            $producto=array(
                'ID' =>$ID,
                'NOMBRE' =>$NOMBRE,
                'CANTIDAD' =>$CANTIDAD,
                'PRECIO' =>$PRECIO,

            );

            $_SESSION['CARRITO'][$NumeroProductos]=$producto;
            $mensaje= ("Producto agregado al carrito");
        }

        }

        // $mensaje= print_r( $_SESSION,true);

        

    break;

    case "Eliminar":

            if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY ))){
            $ID=openssl_decrypt($_POST ['id'],COD,KEY);
           

            foreach($_SESSION['CARRITO'] as $indice=>$producto){

                if($producto['ID']==$ID){
                    unset ($_SESSION['CARRITO'][$indice]);
                    echo "<script>alert('Elemento eliminado....');</script>";


                }


            }




        }else{

            $mensaje.=" id incorrecto".$ID."<br/>";
        }


        break;

    }

}

?>