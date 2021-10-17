<?php session_start(); 
//verify authentication
if(!isset($_SESSION['uid'])){
echo"<meta http-equiv='refresh' content='0.5;url=http://localhost/abiero2/index.php'>";
return;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Paper Dashboard 2 by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="" class="simple-text logo-normal">
          <?php echo $_SESSION['fname']; ?>
			
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
		  
      </div>
		
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
				
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
          
            <form action="<?php $_SERVER['REQUEST_URI']; ?>" method="GET" >
				
              <div class="input-group no-border">
            
                <input name="search" type="text" value="" class="form-control" placeholder="Search...">

                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
				  
              </div>
            </form>
          </div>
			<a href="../logout.php" class="btn text-white">Logout</a>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        
        
        <div class="row">
          
          <div class="col-md-8">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-title">Tables</h5>
                <p class="card-category">Make it fast</p>
              </div>
				<div class="content">
					
        	<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Simple Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive" id="loaddata">
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
				
             
              <div class="card-footer">
                <div class="chart-legend">
                  <i class="fa fa-circle text-info"></i> Tesla Model S
                  <i class="fa fa-circle text-warning"></i> BMW 5 Series
                </div>
                <hr />
                <div class="card-stats">
                  <i class="fa fa-check"></i> Data information certified
                </div>
              </div>
            </div>
          </div>
			
			<div class="col-md-4">
            
              
				<div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Add List</h5>
              </div>
              <div class="card-body">
				  
				  
                <form id="form1" action="javascript:null" method="post" onsubmit="addacount()">
                  
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>First Name</label>
                        <input name="fname" id="fname" onkeyup="myFunction1(this.id,'fnameerror')" type="text" class="form-control" placeholder="First name" >
						  <small id="fnameerror" style="color: red;"></small>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input name="lname" onblur="myFunction2(this.id,'lnameerror2')" id="lname" type="text" class="form-control" placeholder="Last Name" >
						  <small id="lnameerror2" style="color: red;"></small>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>username</label>
                        <input onblur="myFunction3(this.id,'username-error')" id="username" name="username" type="text" class="form-control" >
						  <small id="username-error" style="color: red;"></small>
                      </div>
                    </div>
                  </div>
					<div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Password</label>
                        <input onblur="myFunction4(this.id,'pass-error')" id="pass" name="pass" type="password" class="form-control" >
						  <small id="pass-error" style="color: red;"></small>
                      </div>
                    </div>
                  </div>
					<div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Birthdate</label>
                        <input onBlur="myFunction5(this.id,'date-error')" id="bbdate" name="email" type="date" class="form-control" >
						  <small id="date-error" style="color: red;"></small>
                      </div>
                    </div>
                  </div>
				
					
				
					
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button name="btn-add" type="submit" class="btn btn-primary btn-round">Add Account</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
              
				
				
            
          </div>
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a href="https://www.creative-tim.com" target="_blank">Creative Tim</a></li>
                <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
	
<script>
function myFunction1(id,error) {
	
	var fname = document.getElementById(id);
  
	var error = document.getElementById(error);
  console.log(fname);
	if(fname.value.length<=50 && fname.value.length>=3)
		{
      error.innerHTML = '';
			
		}
	else{
    error.innerHTML = '*maximum 50 min 3';
		
	}
  
}
	
	function myFunction2(id,error) {
	
		var lname = document.getElementById(id);
      
	var error = document.getElementById(error);
	if(lname.value.length<=100 && lname.value.length>=3)
		{
      error.innerHTML = '';
			
		}
	else{
		error.innerHTML = '*maximum 100 min 3 ';
		
	}
  
}
	function myFunction3(id,error) {
	
		var username = document.getElementById(id);
    var error = document.getElementById(error);
	if(username.value.length !=0)
		{
      error.innerHTML = '';
			
		}
	else{
		error.innerHTML = 'Please type username';
		
	}
  
}
	
	
	
	function myFunction4(id,error) {
	
		var pass = document.getElementById(id);
    var error = document.getElementById(error);
	if(pass.value.length>=10)
		{
      error.innerHTML = '';
		}
		
	else{
    error.innerHTML = '*Please type at least 10 characters ';
	}
  
}
	
	function myFunction5(id,error) {
	
		var bbdate = document.getElementById(id);
    var error = document.getElementById(error);
	if(bbdate.value.length ===0)
		{
			error.innerHTML = '*Please choose your bdate ';
		}
		
	else{
    error.innerHTML = '';
	}
  
}
	
	
	
	
	form1.addEventListener('submit' ,(error)=>{
			var cancel=0;

			if(fname.value.length ===0)
						{
							document.getElementById("error").innerHTML = 'empty field';
							cancel++;
						}
		if(lname.value.length ===0)
						{
							document.getElementById("error2").innerHTML = 'empty field';
							cancel++;
						}
		if(username.value.length ===0)
						{
							document.getElementById("username-error").innerHTML = 'empty field';
							cancel++;
						}
		if(pass.value.length ===0)
						{
							document.getElementById("pass-error").innerHTML = 'empty field';
							cancel++;
						}
		if(bbdate.value.length ===0)
						{
							document.getElementById("date-error").innerHTML = 'empty field';
							cancel++;
						}
			else{
				cancel=0;
			}
			
			if(cancel>0)
				{
					error.preventDefault()
				}
			
		})
	
	
	
</script>
	<script src="../js/jquery.js">	</script>
	<script src="../js/mainjs.js">	</script>
	
	
</body>

</html>
