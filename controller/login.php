<?php
require_once __DIR__.'/../controller/session_control.php';
require_once __DIR__.'/../model/user.php';



function check(){
    if(isset($_SESSION['logged_user'])){
        echo "Привет, ". $_SESSION['logged_user'];
        echo "<a href = '/../controller/logout.php'> Выйти </a>";
    }

    else {
        echo "<a href='/view/login_form.php'><button type='button' class='btn btn-primary'>Авторизация</button></a>";
    }
}
