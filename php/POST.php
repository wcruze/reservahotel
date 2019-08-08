<?php
    
         $Nombre = $_POST['nombre'];        
         $Correo = $_POST['correo'];
         $Tel =  $_POST['telefono'];
         $NoHabit = $_POST['habit'];
         $Noadultos =  $_POST['adultos'];
         $Fecha = $_POST['datepicker'];
         $Mensaje = $_POST['mensaje'];

        echo "<br> Nombre:    $Nombre";
        echo "<br> Correo:    $Correo ";
        echo "<br> Telefono:  $Tel ";
        echo "<br> Numero Habitaciones: $NoHabit";
        echo "<br> Numero Adultos:      $Noadultos ";
        echo "<br> Fecha de Reserva:    $Fecha ";
        echo "<br> Mensaje:    -- $Mensaje --";

    

?>
