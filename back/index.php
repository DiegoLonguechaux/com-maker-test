<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: *");
header('Content-Type: application/json;charset=utf-8'); 
require_once 'dbManager.php';

$db = new dbManager;
$conn = $db->connect();


$method = $_SERVER['REQUEST_METHOD'];
$action = explode('/', $_SERVER['REQUEST_URI']);
$data = json_decode(file_get_contents('php://input'));

switch($method) {
    case "GET":
        switch($action[3]){
            case 'user':
                if(empty($action[4])){
                    echo json_encode('No id found');
                    die;
                }

                $id = $action[4];

                $sql = "SELECT * FROM posts WHERE id = :id";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':id', $id);
                $stmt->execute();
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                if($user){
                    echo json_encode($user);
                }else{
                    echo json_encode('User not found');
                }
                die;
            break;
            case 'users' :
                /* TO DO */
                $sql = "SELECT * FROM posts";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':id', $id);
                $stmt->execute();
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                if($user){
                    echo json_encode($user);
                }else{
                    echo json_encode('User not found');
                }
                die;
            break;
        }
    break;
    case "POST": 
        switch($action[3]){
            case 'user':
                /* TO DO */
            break;
        }
    break;
    case "PUT":
        switch($action[3]){ 
            case 'user':
                /* TO DO */
            break;
        }
    break;
    case "DELETE":
        switch($action[3]){ 
            case 'user':
                /* TO DO */
            break;
        }
    break;
    default:
        echo json_encode('error method');
    break;
}