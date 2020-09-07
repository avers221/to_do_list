<?php
require_once __DIR__.'/../controller/session_control.php';


$data = $_POST;
if(isset($data['do_signup'])){
    $login = htmlspecialchars(trim($data['login']));
    $password = htmlspecialchars(trim($data['password']));

    $admin_login = 'admin';
    $admin_password = '123';


    if ($login == $admin_login && $password == $admin_password) {
        $_SESSION['logged_user'] = $login;
        header("Location:/view/admin_form.php");
    } else {
        echo "Введите корректный логин и пароль";
    }
}
