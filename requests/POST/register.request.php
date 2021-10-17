<?php
include "../../connection/db.php";
if(isset($_POST['username']) and isset($_POST['emailAdress'])){
//check in database if exist

$stmt = $conn->prepare("SELECT * from tbl_users where email = :email");
$stmt->bindValue(':email', $_POST['emailAdress'], PDO::PARAM_STR);
$stmt->execute();
$count = $stmt->rowCount();

if($count == 0){
  $sql = "INSERT INTO tbl_users (type, email, username,password)
  VALUES ('user', '".$_POST['emailAdress']."', '".$_POST['username']."','".$_POST['password']."')";
  $conn->exec($sql);
  $data = [
    "success" => true,
    "message" => "Registered Successfully.",
    "testData" =>$count
  ];
 echo json_encode($data);
 return;
}else{
    $data = [
        "success" => false,
        "message" => "Already Registered.",
        "testData" =>$count
     ];
     echo json_encode($data);
     return;
}


}




   