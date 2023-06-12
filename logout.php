<?php 

try {
    $baglan = new PDO("mysql:host=localhost;dbname=calculator", 'root', 'mysql', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch (PDOException $hata) {
    echo 'Hata: ' . $hata->getMessage();
}
session_start();

session_destroy();

header('Location: login');
?>