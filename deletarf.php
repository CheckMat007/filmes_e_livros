<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link href="estilo.css" rel="stylesheet" type="text/css" />
   <style type="text/css">
   </style>
<title>
Deletar Filme
</title>
</head>
<body>
<?php
include("seguranca.php");
protegePagina();
?>
<form method="post" action="deletarf1.php">
<font size=10 color=white>Código do Filme:</font> <input type="text" name="codigo">
<input type="submit" value="Deletar Filme">
</form>
<a href="menu_adm.php"><font size=10 color=white>Voltar</font></a>
</body>
</html>