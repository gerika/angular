<html>
<head>
	<title>Resultados de Busqueda Online</title>
</head>
<body>
  
	<h1>Resultads de la Busqueda en la Libreria Online</h1>
    <?php
        $terminobusqueda=$_REQUEST['terminobusqueda'];
        $tipobusqueda=$_REQUEST['tipobusqueda'] ;
        $conexion=mysql_connect("localhost","ana2","ana2") or die("Problemas en la conexion");
        mysql_select_db("libreria3",$conexion) or die("Problemas en la seleccion de la base de datos");
        $consulta =" SELECT *FROM LIBROS WHERE $tipobusqueda LIKE '%$terminobusqueda%' ";
        $registro=mysql_query($consulta,$conexion) or die("Problemas en el select".mysql_error());
        $num_resultados=mysql_num_rows($registro);
        echo "<br>".$num_resultados;
        if($num_resultados==0)
        {
           echo"no hay datos";
           exit;
          
        }
        echo "<p>Numero de libros encontrados:".$num_resultados."</p>";
        for($i=0;$i<$num_resultados;$i++)
        {
           $row=mysql_fetch_array($registro);
           echo "<p><strong>".($i+1).".titulo:";
           echo stripslashes($row["titulo"]);
           echo "</strong><br>Autor:";
           echo stripslashes($row["autor"]);
           echo "<br>Precio:";
           echo stripslashes($row["precio"]);
           echo"</p>";
        }
        mysql_close($conexion);
    ?>
</body>
</html>