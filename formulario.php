<?php
     if(!empty($_REQUEST['nombre'] and $_REQUEST['apellido'] and $_REQUEST['sexo'] and $_REQUEST['descripcion']))
   {
   	 echo "Nombre:".$_REQUEST['nombre']."<br>";
   	 echo "Nombre:".$_REQUEST['apellido']."<br>";
     echo "Nombre:".$_REQUEST['sexo']."<br>";
     echo "Descripcion: ".$_REQUEST['descripcion']."<br>";
   }
   else
   {
   	 echo "es necesario rellenar todos los campos";
    }
    
 
?>