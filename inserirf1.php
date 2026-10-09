<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link href="estilo.css" rel="stylesheet" type="text/css" />
   <style type="text/css">
   </style>
   <title>
   Inserir Livro
   </title>
</head>
<body>
<?php
include("seguranca.php");
protegePagina();
?>
<?php
include "conecta.php";
$a=$_POST[''];
$b=$_POST[''];
$inserir="INSERT INTO tb_filmes VALUES ('','$a','$b')";
mysql_query($inserir) OR DIE ('<table>
<tr height="300">
<td>
</td>
</tr>
</table>
<table border="0"  align="center" class="borda">
<tr bgcolor="red" >
<td align="center"><font size=10 color=white>Não foi possível inseir</font></td>
</tr>
</table>');
echo '<table>
<tr height="300">
<td>
</td>
</tr>
</table>
<table border="0"  align="center" class="borda">
<tr bgcolor="red" >
<td align="center"><font size=10 color=white>Item inserido</font><br>
<a href="inserirl.php">Voltar</a>
</td>
</tr>
</table>';
mysql_close ($conexao);
?>
</body>
</html>