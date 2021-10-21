<?php 
session_start();
include "libraries/classes.php";
if(isset($_SESSION['user'])){

   if(isset($_GET["page"])){
      if(file_exists("pages/".$_GET['page'].".php")){
         include "pages/".$_GET['page'].".php";
      }else{
         include "pages/index.php";
      }
   }else{
      include "pages/index.php";
   }


}else{
   include "pages/login.page.php"; 
}

include "libraries/scripts.php";


