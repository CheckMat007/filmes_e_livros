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
<?php
include "conecta.php";
$a=$_POST['codigo'];
$deletar="DELETE FROM tb_filmes WHERE codigo=$a";
mysql_query($deletar);
if(mysql_affected_rows() == 1){
 echo '<table>
<tr height="300">
<td>
</td>
</tr>
</table>
<table border="0"  align="center" class="borda">
<tr bgcolor="red" >
<td align="center"><font size=10 color=white>Item excluido com sucesso! <br>
<a href="deletarf.php">Voltar</a>
</font></td>
</tr>
</table>';
 }
  else
  {
  echo '<table>
<tr height="300">
<td>
</td>
</tr>
</table>
<table border="0"  align="center" class="borda">
<tr bgcolor="red" >
<td align="center"><font size=10 color=white>Item não encontrado!<br><a href="deletarf.php">Voltar</a></font></td>
</tr>
</table>';
  }
  ?>
  <?php
  mysql_close ($conexao);
  ?>
  </body>
  </html>