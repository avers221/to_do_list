<?php

$pdo = new PDO('mysql:host=localhost;dbname=tasks', 'root','root');

function load_all_tasks($pdo){
    $query = "select user_name, email, body, state from task ";
    $result = $pdo->prepare($query);
    $result->execute([]);
    $out =[];
    if($result->rowCount() > 0){
        while($res = $result->fetch(PDO::FETCH_BOTH)){
            $out[]=$res;
        }
    }
    return $out;
}

function add_task($pdo,$user_name,$email,$body){
    $query = "insert into task (user_name,email, body)
    values (:user_name,:email, :body)";
    $user = $pdo->prepare($query);
    $user->execute(['user_name' => $user_name,'email' => $email, 'body' => $body]);
}

function chek_validation($pdo, $data){

}