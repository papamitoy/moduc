<?php
session_start();

include "../../classes/Middleware.class.php";
if(!Middleware::adviser($_SESSION['user'])){
  $data = [
    "success" => false,
    "message" => "Unauthorize.",
   
  ];
 echo json_encode($data);
  return ;
}
include "../../connection/db.php";
if(isset($_POST['className']) and isset($_POST['subjectName']) and isset($_POST['sectionName']) and isset($_POST['room'])){
//check in database if exist

$stmt = $conn->prepare("SELECT * from tbl_subjects where class_name = :email and subject_name = :subjectname");
$stmt->bindValue(':email', $_POST['className'], PDO::PARAM_STR);
$stmt->bindValue(':subjectname', $_POST['subjectName'], PDO::PARAM_STR);
$stmt->execute();
$count = $stmt->rowCount();

if($count == 0){
  //check subject code
  generatecode:
  $code = rand(1000000,9999999);
  $stmt1 = $conn->prepare("SELECT * from tbl_subjects where subject_code = :code");
  $stmt1->bindValue(':code', $code, PDO::PARAM_STR);
  $stmt1->execute();
  if( $stmt1->rowCount() > 0){
  goto generatecode;
  }
  
  $sql = "INSERT INTO tbl_subjects (user_id,class_name, section_name, subject_name,room,subject_code,description)
  VALUES ( '".$_SESSION['user']['id']."', '".$_POST['className']."', '".$_POST['sectionName']."','".$_POST['subjectName']."','".$_POST['room']."','$code','".$_POST['description']."')";
  $conn->exec($sql);
  $data = [
    "success" => true,
    "message" => "Subject Added Successfully.",
    "testData" =>$count
  ];
 echo json_encode($data);
 return;
}else{
    $data = [
        "success" => false,
        "message" => "Subject Already Exist.",
        "testData" =>$count
     ];
     echo json_encode($data);
     return;
}


}
