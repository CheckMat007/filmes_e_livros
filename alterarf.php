<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link href="estilo.css" rel="stylesheet" type="text/css" />
   <style type="text/css">
   </style>
<title>
Alterar Filmes
</title>
</head>
<body>
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
<form method="post" action="alterarf2.php">
Código:<b><input type="hidden" name="codigo" value="<?php echo $a; ?>"><?php echo $a; ?> <br>
Titulo:<b><input type="text" name="titulo" value="<?php echo $b; ?>"> <br>
<input type="submit" name="alterar" value="Alterar"><br>
</form>
<a href="menu_adm.php">Voltar</a>
</td>
</tr>
</table>
</body>
</html>