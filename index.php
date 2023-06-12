<?php
session_start();

try {
    $baglan = new PDO("mysql:host=localhost;dbname=calculator", 'root', 'mysql', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch (PDOException $hata) {
    echo 'Hata: ' . $hata->getMessage();
}

$user_id = $_GET['user_id'];
$_SESSION['user_id'] = $_GET['user_id'];

if ($_SESSION['user'] == 0) {
    header('Location:login');
} elseif ($_SESSION['user'] == 1) {
    header('Location:home');
}

?>