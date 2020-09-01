<?php
require_once "controller/session_control.php";
require_once 'model/task_model.php';
require_once "templates/header.php";
require_once "controller/login.php";

check();

require_once "view/add_task_form.php";


$tasks = load_all_tasks($pdo);

if(count($tasks)!=0){
    foreach ($tasks as $task){
        echo "<div class='row'><ul class='list-group'>";
        echo "<li class='list-group-item active'>".$task['user_name']."</li>";
        echo "<li class='list-group-item'>".$task['email']."</li>";
        echo "<li class='list-group-item'>".$task['body']."</li>";
        echo "<li class='list-group-item'>".$task['status']."</li></ul></div>";
        }echo "</div>";
}else{

    echo "<div class='alert alert-primary' role='alert'>Список задач пуст</div>";

}
require_once "templates/footer.php";