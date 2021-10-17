<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Responsive Signup/Login form</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:300,600" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="css/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
   <section id="formHolder">
      <div class="row">
		
         <!-- Brand Box -->
         <div class="col-sm-6 brand">
			 
            <img style=" width: 100%;" src="img/banner log in.jpg">
         </div>
         <!-- Form Box -->
         
        <?php include "components/login_signup.php" ?>

      </div>

   </section>


   <footer>
      <p>
         <strong>Developers:</strong> <a href="http://mohmdhasan.tk" target="_blank">Charles Lydon Abiero | Juntinjo Ferolino | Carlo way gamit</a>
      </p>
   </footer>

</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script><script  src="script/script.js"></script>

</body>
</html>
