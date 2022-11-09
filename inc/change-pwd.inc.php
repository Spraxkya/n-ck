<?php
session_start();

if(isset($_POST["reset-password-submit"])) {

require 'db.inc.php';
    
$id = $_SESSION["userid"];
$pwd = $_POST["pwd"];
$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

$SQL = $conn->prepare("UPDATE members SET user_pwd = ? WHERE user_id=?");

$SQL->bind_param('ss', $hashedPwd, $id);
$SQL->execute();
header("location: ../tpl/konto.tpl.php?=ye");
exit();

} else {
header("location: ../index.php");
exit();
}