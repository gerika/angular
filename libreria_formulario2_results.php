<html>
<head>
	<title>Añadir nuevos libros en la Libreria Online</title>
    <meta charset="UTF-8">
</head>
<body>
   <h1>Añadir nuevo Libros en la Libreria Online</h1>
   <?php
        $isbn=$_REQUEST['isbn'];
	    $autor=$_REQUEST['autor'];
	    $titulo=$_REQUEST['titulo'];
	    $precio=$_REQUEST['precio'];
        if(!$isbn || !$autor || !$titulo || !$precio)
        {
          echo"No has introducidos todos los detalles vuelve a intentarlo";
          exit;
        }
	    $isbn=addslashes($isbn);
	    $autor=addslashes($autor);
	    $titulo=addslashes($titulo);
	    $precio=doubleval($precio);
	    $conex=mysql_connect("localhost","ana2","ana2");
	    if(!$conex)
	    {
          echo "No se pudo conectar a a la base de datos";
	      exit;
	    }
	    mysql_select_db("libreria3",$conex) or die ("Problemas en la seleccion de la base de datos");
        $cons="INSERT INTO libros VALUES ('".$isbn."','".$autor."','".$titulo."','".$precio."')";
        $resul=mysql_query($cons,$conex);
        if($resul)
        {
          echo mysql_affected_rows()." libro introducido en la base de datos";
        }
   ?>
</body>
</html>