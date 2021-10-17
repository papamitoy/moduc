<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
        <a class="large_logo" href="index.php"><img src="img/logo.png" alt=""></a>
        <a class="small_logo" href="index.php"><img src="img/mini_logo.png" alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li>
            <a href="index.php" aria-expanded="false">
                <div class="nav_icon_small">
                   <div class="fas fa-home"></div>
                </div>
                <div class="nav_title">
                    <span>Classes</span>
                </div>
            </a>
        </li>
		<li>
            <a href="calendar.php" aria-expanded="false">
                <div class="nav_icon_small">
                    <div class="fas fa-calendar"></div>
                </div>
                <div class="nav_title">
                    <span>Calendar </span>
                </div>
            </a>
        </li>
        <?php if(Middleware::adviser($_SESSION['user'])){ ?>
        <h4 class="menu-text"><span>TEACHING</span> <i class="fas fa-ellipsis-h"></i> </h4>
        
        <?php Subject::getSubjectListNav() ?>
        <?php }else{  ?>
        <h4 class="menu-text"><span>Enrolled</span> <i class="fas fa-ellipsis-h"></i> </h4>
        
        <?php  Subject::getEnrolledSubjects(); ?>
       
        <?php } ?>
      </ul>
</nav>