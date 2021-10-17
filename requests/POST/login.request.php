<?php
include "../../connection/db.php";
session_start();
if(isset($_POST['loginemail']) and isset($_POST['loginPassword'])){
    $email = $_POST['loginemail'];
    $password = $_POST['loginPassword'];
    $stmt = $conn->prepare("SELECT * from tbl_users where email = :email and password = :password");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    $count = $stmt->rowCount();
    if($count == 0){
        
        $data = [
            "success" => false,
            "message" => "User is not registered",
        ];
        echo json_encode($data);
        return;
    }else{
        $data = [
            "success" => true,
            "message" => "Login Successfully",
            "data" =>  $stmt->fetchAll(),
        ];
        $_SESSION['user'] = $data['data'];
        echo json_encode($data);
        return;
    }
    
}