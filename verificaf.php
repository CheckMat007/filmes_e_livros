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
<?php
include "conecta.php";
$a=$_POST['codigo'];
$consulta="select * FROM tb_filmes WHERE codigo=$a";

$resultado=mysql_query($consulta);
$linhas=mysql_num_rows($resultado);

if (($resultado) and ($linhas)) {
$dados=mysql_fetch_array($resultado);
$a=$dados['codigo'];
$b=$dados['titulo'];
include "alterarf.php";
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
<td align="center"><font size=10 color=white>Item não encontrado</font><br>
<a href="alterarf1.php">Voltar</a>
</td>
</tr>
</table>';
}
mysql_close($conexao);
?>
</body>
</html>