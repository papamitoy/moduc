<?php

include "../../connection/connection.php";

$st = $con->prepare("UPDATE  record set fname =? , lname= ? ,u_username =? ,password = ? , email = ? where id = ?");
$st->bind_param("ssssss",$_POST['fname'],$_POST['lname'],$_POST['username'],$_POST['pass'],$_POST['bbdate'],$_POST['data']);
$st->execute();
 echo $_POST['fname']." updated successfully";