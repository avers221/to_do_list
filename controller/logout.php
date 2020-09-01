<?php
require_once __DIR__.'/../controller/session_control.php';
unset($_SESSION['logged_user']);
header('Location:/index.php');