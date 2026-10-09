<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link href="estilo.css" rel="stylesheet" type="text/css" />
   <style type="text/css">
   </style>
<title>
Deletar Livro
</title>
</head>
<body>
<?php
include("seguranca.php");
protegePagina();
?>
<form method="post" action="deletarl1.php">
Código do livro: <input type="text" name="codigo">
<input type="submit" value="Deletar Livro">
</form>
</body>
</html>