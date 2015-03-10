<?php
  session_start();
 // session_register("ses_var");
  $ses="Bienvenido al centro de Enseñanza Virtual";
  $_SESSION['var']=$ses;
  
  echo "El contenido de  es:".$_SESSION['var']."<br>";
?>
<a href="sesion2.php">Siguiente pagina</a>