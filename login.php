<html>
<head>
<title>
Login
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link href="estilo.css" rel="stylesheet" type="text/css" />
   <style type="text/css">
   </style>
   </head>
   <body>
<?php
include "conecta.php";
$a=$_POST['usuario'];
$b=$_POST['senha'];
include "seguranca.php";
$resultado= mysql_query ("SELECT * FROM tb_usuario WHERE usuario='$a'");
$linhas= mysql_num_rows ($resultado);
if ($linhas==0){
echo '<table>
<tr height="300">
<td>
</td>
</tr>
</table>
<table border="0"  align="center" class="borda">
<tr bgcolor="red" >
<td align="center"><font size=10 color=white>Usuário não encontrado</font></td>
</tr>
</table>';
}
else if($b != mysql_result ($resultado, 0, "senha")){
echo '<table>
<tr height="300">
<td>
</td>
</tr>
</table>
<table border="0"  align="center" class="borda">
<tr bgcolor="red" >
<td align="center"><font size=10 color=white>Senha incorreta</font></td>
</tr>
</table>';
}
else if (validaUsuario($a = "gustavo" AND $b = "81826455") == true){
setcookie("usuario",$a);
setcookie("senha",$b);
header ("location: menu_adm2.php");
}
else if (validaUsuario($a, $b) == true){
setcookie("usuario",$a);
setcookie("senha",$b);
header ("location: menu_adm.php");
}
mysql_close($conexao);
?>
