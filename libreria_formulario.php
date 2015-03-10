<html>
<head>
	<title>Catalogo Libre&iacute;a</title>
</head>
<body>
	<h1>Catalogo de Busqueda de Libreria Online</h1>
    <form action="libreria_formuario_results.php" method="post">
       <p>Elige tipo de Busqueda</p>
       <select name="tipobusqueda">
          <option value="autor">Autor</option>
          <option value="titulo">Titulo</option>
          <option value="isbn">ISBN</option>
       </select>
       <p>Escribe termino de Busqueda:</p>
       <input type="text" name="terminobusqueda">
       <br><br>
       <input type="submit" value="Buscar">
    </form>
</body>
</html>