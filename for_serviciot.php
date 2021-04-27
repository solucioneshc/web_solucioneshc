<?php
include 'plantilla/cabecera.php'
?>



<div class="row">
    <div class="col">
        <form action="">
            <h2>Datos del Contacto</h2>
            <hr>
            <label for="">nombre</label>
            <input type="text" name="nombre" class="d-inline">
            <label for="">Apellido</label>
            <input type="text" name="apellido" class="d-inline">
            <label for="">Telefono</label>
            <input type="text" name="telefono" class="d-inline">
            <label for="">Correo</label>
            <input type="text" name="Correo">
            <div class="form">
                <label for="">Direccion</label>
                <textarea rows="" cols="60"></textarea>
            </div>
            <!------------------ consulta hacia la base de datos  ----------------------->
            <hr>

            <h2>Informacion del Equipo</h2>

            




            <!------------------ fin consulta hacia la base de datos  ----------------------->
            <hr>
            <div class="form">
                <h2>Descripcion del Problema</h2>
                <label for="">Descripción</label>
                <textarea rows="10" cols="40" minlength="40" maxlength="100"></textarea>
            </div>


            <input type="button" value="">


        </form>
    </div>
</div>



<?php
include 'plantilla/pie.php'
?>