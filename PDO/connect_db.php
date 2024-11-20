<?php


const _HOST = "localhost";
const _DB = "learning_php";
const _USER = "root";
const _PASS = "";

try {
    if (class_exists('PDO')) {
        $dsn = 'mysql:dbname=' . _DB . ';host=' . _HOST;
        $option = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]; // cái này là default phải nhớ
        $connector = new PDO($dsn, _USER, _PASS, $option);

        var_dump($connector);
    }
} catch (Exception $e) {
    echo "" . $e->getMessage() . "<br/>";
    die();
}
