<?php
session_start();


$_SESSION['name'] = 'namvt';
$_SESSION['email'] = 'namvt@runsystem.net';

session_destroy();
unset($_SESSION['email']);


print_r($_SESSION);
