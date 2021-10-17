
<?php
		
		//Oop ni sya nga sample
	
		if(isset($_POST['btn-add'])){
			include "../connection/connection.php";
			
			if(empty($_POST['fname']) or empty($_POST['lname']) or empty($_POST['username']) or empty($_POST['pass']) or empty($_POST['email']))
			{
				echo'<script language="javascript"></script>';
				echo"<meta http-equiv='refresh' content='0.5;url=http://localhost/abiero2/project/index.php'>";
				return;
			}
			
			
				
				$st = $con->prepare("INSERT INTO record (fname, lname, u_username, password, email) values (?,?,?,?,?) ");//insert to database
				$st->bind_param("sssss",$_POST['fname'],$_POST['lname'],$_POST['username'],$_POST['pass'],$_POST['email']);
				$st->execute();
				echo'<script language="javascript"> alert("Record successfully added!") </script>';
				echo"<meta http-equiv='refresh' content='0.5;url=http://localhost/abiero2/project/index.php'>";
			
			
			
		}
		
		
		?>




		