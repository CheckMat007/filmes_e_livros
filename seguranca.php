<?php
include "conecta.php";
$_SG ['validaSempre'] = true;
session_start();
function validaUsuario ($a, $b) {
global $_SG;
$sql = "SELECT codigo FROM tb_usuario WHERE usuario='$a' AND senha='$b'";
$query = mysql_query ($sql);
$resultado= mysql_fetch_assoc($query);
if (empty($resultado)) {
return false;
} else {
$_SESSION['usuarioID'] = $resultado['codigo'];
if ($_SG['validaSempre'] == true) {
$_SESSION['usuarioLogin'] = $a;
$_SESSION['usuarioSenha'] = $b;
}
return true;
}
}
function protegePagina() {
global $_SG;
if (!isset($_SESSION['usuarioID'])) {
expulsaVisitante();
} else if (!isset($_SESSION['usuarioID'])) {
if ($_SG['validaSempre'] == true) {
if (!validaUsuario($_SESSION['usuarioLogin'], $_SESSION['usuarioSenha'])) {
expulsaVisitante();
}
}
}
}
function expulsaVisitante() {
global $_SG;
unset ($_SESSION['usuarioID'], $_SESSION['usuarioLogin'], $_SESSION['usuarioSenha']); header("Location: login.html");
}
?>