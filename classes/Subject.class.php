<?php

class Subject{
    public static function getSubjectList(){

    include "connection/db.php";
    $stmt = $conn->prepare("SELECT b.id,a.email,a.username,a.type,b.subject_name,b.class_name,b.section_name from tbl_users a left join tbl_subjects b on a.id = b.user_id where b.user_id = :id");
    $stmt->bindParam(":id",$_SESSION['user']['id']);
    $stmt->execute(); 
    foreach($stmt->fetchAll() as $key=>$value){
    ?>
    <div class="col-md-6 col-lg-6 col-xl-4 box-col-6">
        <div class="card custom-card">
            <div class="card-header"><img class="img-fluid" src="pages/img/profilebox/3.jpg" alt="" data-original-title="" title=""><h1 style="position: absolute; top: 8px;  left: 16px; color: white; ">CAP 101 <br><span>asdad</span></h1></div>
            <div class="card-profile"><img class="rounded-circle" src="pages/img/profilebox/9.jpg" alt="" data-original-title="" title=""></div>
            
            <div class="text-center profile-details">
            <h4><?=$value['email']?></h4>
            <h6><?=$value['type']?></h6>
            </div>
            
            <div class="card-footer row">
            <div class="col-4 col-sm-4">
                <h6>Student</h6>
                <h3 class="counter">54</h3>
            </div>
                <div class="col-4 col-sm-8">
                <button onclick="document.location='?page=subject&subject_id=<?=$value['id']?>'" class="btn_1 w-100 mb-2 btn-lg email-gradient gradient-9-hover email__btn waves-effect">View</button>
                
            </div>
            
            
            </div>
        </div>
    </div>
  <?php } }

public static function getSubjectListNav(){

    include "connection/db.php";
    $stmt = $conn->prepare("SELECT b.id,a.email,a.username,a.type,b.subject_name,b.class_name,b.section_name from tbl_users a left join tbl_subjects b on a.id = b.user_id where b.user_id = :id");
    $stmt->bindParam(":id",$_SESSION['user']['id']);
    $stmt->execute(); 
    foreach($stmt->fetchAll() as $key=>$value){
    ?>
    <li>
            <a href="?page=subject&subject_id=<?=$value['id']?>" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="pages/img/menu-icon/2.svg" alt="">
                </div>
                <div class="nav_title">
                    <span><?=$value['subject_name']?></span>
                </div>
            </a>
        </li>
  <?php } }

public static function getEnrolledSubjects(){

    include "connection/db.php";
    $stmt = $conn->prepare("SELECT b.id,a.email,a.username,a.type,b.subject_name,b.class_name,b.section_name from tbl_enroll c 
    left join tbl_subjects b on c.subject_id = b.id  
   LEFT join tbl_users a on c.student_id = a.id where a.id = :id");
    $stmt->bindParam(":id",$_SESSION['user']['id']);
    $stmt->execute(); 
    foreach($stmt->fetchAll() as $key=>$value){
    ?>
    <li class="">
            <a  href="?page=subject&subject_id=<?=$value['id']?>" aria-expanded="false">
              <div class="nav_icon_small">
                <i class="fas fa-chalkboard-teacher"></i>
            </div>
            <div class="nav_title">
                <span><?=$value['subject_name']?> <span style="opacity: .8; font-size: 10px;">(<?=$value['class_name']?>)</span></span>
            </div>
            </a>
        </li>
   
  <?php } }
}