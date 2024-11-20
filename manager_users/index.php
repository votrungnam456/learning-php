<?php
session_start();
require_once('config.php');

echo _CODE;

$module = _MODULE;
$action = _ACTION;

if (!empty($_GET["module"])) {
    $module = trim($_GET["module"]);
    echo "" . $module . "";
}
if (!empty($_GET["action"])) {
    $action = trim($_GET["action"]);
    echo "" . $action . "";
}

$path = 'modules/' . $module . '/' . $action . '.php';

if (file_exists($path)) {
    require_once($path);
} else {
    require_once 'modules/errors/404.php';
}
