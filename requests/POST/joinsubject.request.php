<?php
session_start();
include "../../classes/Middleware.class.php";
if(Middleware::adviser($_SESSION['user'])){
    $data = [
        "success" => false,
        "message" => "Unauthorize.",
       
      ];
     echo json_encode($data);
     return ;
}
include "../../connection/db.php";
if(isset($_POST['subject_code'])){
$stmt = $conn->prepare("SELECT * from tbl_subjects where subject_code = :subject_code");
$stmt->bindValue(':subject_code', $_POST['subject_code'], PDO::PARAM_STR);

$stmt->execute();
$result = $stmt->fetch();
$count = $stmt->rowCount();


if($count > 0){
  //check duplicate
    $stmt1 = $conn->prepare("SELECT * from tbl_enroll where subject_id = :id and student_id = :uid");
    $stmt1->bindValue(':id',$result['id'], PDO::PARAM_STR);
    $stmt1->bindValue(':uid', $_SESSION['user']['id'], PDO::PARAM_STR);
    $stmt1->execute();
    if($stmt1->rowCount() > 0){
      $data = [
        "success" => false,
        "message" => "Already enrolled.",
       
      ];
      echo json_encode($data);
      return ;
    }
    $sql = "INSERT INTO tbl_enroll (subject_id,student_id)
    VALUES ('".$result['id']."', '".$_SESSION['user']['id']."')";
    $conn->exec($sql);
    $data = [
        "success" => true,
        "message" => "Joined Successfully",
       
      ];
     echo json_encode($data);
     return ;
}else{
    $data = [
        "success" => false,
        "message" => "Subject not found",
       
      ];
     echo json_encode($data);
     return ;
}
}
