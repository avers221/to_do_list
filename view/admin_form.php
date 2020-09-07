<?php
require_once __DIR__.'/../controller/session_control.php';
require_once __DIR__.'/../model/task_model.php';
require_once __DIR__.'/../templates/header.php';
require_once __DIR__.'/../controller/login.php';

function out_tasks($tasks){
    if(count($tasks)!=0){
        foreach ($tasks as $task){
            echo "<div class='row'>";
            echo "<input type='text' name='login' value=".$task['user_name'].">";
            echo "<input type='text' name='login' value=".$task['email'].">";
            echo "<input type='text' name='login' value=".$task['body'].">";
            echo "<input type='text' name='login' value=".$task['status']."></div>";
        }echo "</div>";
    }else{

        echo "<div class='alert alert-primary' role='alert'>Список задач пуст</div>";

    }
}

check();

require_once __DIR__.'/../view/add_task_form.php';


$tasks = load_all_tasks($pdo);

$check = 0;

switch ($check){
    case 0:
        out_tasks(ksort($tasks));
        break;
    default:
        out_tasks($tasks);
}

require_once __DIR__.'/../templates/footer.php';

