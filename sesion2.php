<?php
session_start();
echo "el contenido de \$_session['var'] es:".$_SESSION['var'] ."<br>";
//session_unregister("$_session['var']");
?>
<a href="sesion3.php">Sguiente pagina</a>