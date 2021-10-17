<?php 
session_start();
if(isset($_SESSION['user'])){
   include "pages/index.php";
}else{
   include "pages/login.page.php"; 
}

include "libraries/scripts.php";
