<?php
$conexao=mysql_connect("localhost","root","");
mysql_select_db ("filmes_livros");
if (!$conexao){
die ('sem conexão');}
?>