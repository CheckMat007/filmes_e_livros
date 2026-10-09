<html>
<head>
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
<form method="post" action="verifica.php">
<p>Código do filme
<input type="text" name="codigo" size="20"><br>
<input type="submit" value="Buscar"></p>
</form>
<a href="menu_adm.php">Voltar</a>
</td>
</tr>
</table>
</body>
</html>