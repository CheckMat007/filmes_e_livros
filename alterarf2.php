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
<?php
include "conecta.php";
$a=$_POST['codigo'];
$b=$_POST['titulo'];
$c=$_POST['diretor'];
$d=$_POST['genero'];
$e=$_POST['ano'];
$f=$_POST['classificacau'];
$alterar="UPDATE tb_filmes SET titulo='$b' WHERE codigo='$a'";
$resultado=mysql_query($alterar);
if ($resultado) {
echo '<table>
<tr height="300">
<td>
</td>
</tr>
</table>
<table border="0"  align="center" class="borda">
<tr bgcolor="red" >
<td align="center"><font size=10 color=white>Concluido</font><br>
<a href="menu_adm.php">Voltar</a></td>
</tr>
</table>';
}
else {
echo '<table>
<tr height="300">
<td>
</td>
</tr>
</table>
<table border="0"  align="center" class="borda">
<tr bgcolor="red" >
<td align="center"><font size=10 color=white>Erro</font>
><br>
<a href="menu_adm.php">Voltar</a></td>
</tr>
</table>';
}
mysql_close($conexao);
?>
</body>
</html>