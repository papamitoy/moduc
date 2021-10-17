<?php

include "../../connection/connection.php";
$st = $con->prepare("DELETE from record where id = ?");
$st->bind_param("s",$_POST['data']);
$st->execute();
echo "success";