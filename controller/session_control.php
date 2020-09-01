<?php
session_start();


function logout(){
    unset($_SESSION['logged_user']);
}