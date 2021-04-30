<?php
include 'plantilla/cabecera.php'
?>



<div class="row">
    <div class="col for_serviciot">

        <div class="col contacto">
            <form method="post" action="form_servicio.php">

                <h2>Datos del Contacto</h2>
                <hr>
                <label for="">nombre</label>
                <input name="nombre1" type="text" class="d-inline">
                <label for="">Apellido</label>
                <input name="apellido1" type="text" class="d-inline">
                <label for="">Telefono</label>
                <input type="text" name="telefono1" class="d-inline">
                <label for="">Correo</label>
                <input name="correo1" type="text">
                <p></p>

                <label for="">Direccion</label>
                <textarea rows="" cols="60" name="direccion1"></textarea>

               <input type="submit" value="registrar">


            </form>

    

        </div>



        <!------------------ consulta hacia la base de datos  ----------------------->
        <hr>

        <h2>Informacion del Equipo</h2>
        <div id="equipo">
            <label for=""> <a>Tipo Equipo</a>
                <select name="" id="">
                    <?php
                            include 'conexion/conexion1.php';

                            $consulta = "SELECT * FROM tipo_equipo";
                            $ejecutar = mysqli_query($mysqli,$consulta) or die(mysqli_error($conexion));

                        ?>

                    <?php foreach ($ejecutar as $opciones): ?>

                    <option name="tipo_equipo" value="<?php echo $opciones['tipo']?>"><?php echo $opciones['tipo']?>
                    
                    </option>

                    <?php endforeach?>
                </select>
               
            </label>
            <label for=""> <a>Memoria</a>
                <select name="" id="">
                    <?php
                          

                            $consulta = "SELECT * FROM tipo_memoria";
                            $ejecutar = mysqli_query($mysqli,$consulta) or die(mysqli_error($conexion));

                        ?>

                    <?php foreach ($ejecutar as $opciones): ?>

                    <option name="tipo_memoria" value="<?php echo $opciones['memoria']?>">
                        <?php echo $opciones['memoria']?></option>

                    <?php endforeach?>
                </select>
            </label>
            <label for=""> <a>Disco</a>
                <select name="" id="">
                    <?php
                          

                            $consulta = "SELECT * FROM tipo_disco";
                            $ejecutar = mysqli_query($mysqli,$consulta) or die(mysqli_error($conexion));

                        ?>

                    <?php foreach ($ejecutar as $opciones): ?>

                    <option name="tipo_disco" value="<?php echo $opciones['disco']?>"><?php echo $opciones['disco']?>
                    </option>

                    <?php endforeach?>
                </select>
            </label>
            <label for="">anydesk</label>
            <input type="text">
            <label for="">Teamweaver</label>
            <input type="text">

        </div>

        <!------------------ fin consulta hacia la base de datos  ----------------------->
        <hr>
        <div class="form">
            <h2>Descripcion del Problema</h2>
            <label for="">Descripción</label>
            <textarea rows="10" cols="40" minlength="40" maxlength="100" name="descripcion"></textarea>
        </div>



    </div>


</div>





<?php
include 'plantilla/pie.php'
?>