<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link href="estilo.css" rel="stylesheet" type="text/css" />
   <style type="text/css">
   </style>
<title>
Inserir Livro
</title>
<body >
<?php
include("seguranca.php");
protegePagina();
?>
<table>
<tr height="300">
<td>
</td>
</tr>
</table>
<table border="0"  align="center" class="borda">
<tr bgcolor="red" >
<td align="center">
<form method="post" action="inserirl1.php">
<font size="5" face="Calibria" color="White">Título</font><input type="text" name="titulo"><br><br>
<font size="5" face="Calibria" color="White">Autor:</font><input type="text" name="autor"><br><br>
<input type="submit" value="Cadastrar">
</form>
</td>
</tr>
<tr>
<td><a href="menu_adm.php">Voltar</a><td></tr>
</table>
</body>
</html>