<?php
require_once __DIR__.'/../controller/session_control.php';
require_once __DIR__.'/../model/task_model.php';
$data = $_POST;

if( isset($data['add_task'])){
    $errors = [];
    if(trim($data['email'])==''){
        $errors[] = 'Email не валиден';
    }
    if(trim($data['body'])==''){
        $errors[] = 'Тело задачи пусто';
    }

    if (empty($errors)) {
        add_task($pdo, htmlspecialchars($data['user_name']), htmlspecialchars($data['email']), htmlspecialchars($data['body']));
        header("Location:/");
    } else {
        echo "<div style='color: #ff0000'>" . array_shift($errors) . "   </div><hr>";
    }
}
?>