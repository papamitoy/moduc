<table class="table">
                    <thead class=" text-primary">
						
						
                      <th>
                        ID Number
                      </th>
                      <th>
                        First name
                      </th>
                      <th>
                        last Name
                      </th>
						<th>
                        Username
                      </th>
						<th>
                        Password
                      </th>
						<th>
                        Birthdate
                      </th>
						<th colspan="2">
                        Action
                      </th>
                     
                    </thead>
                    <tbody>
						  	<?php
include "../connection/connection.php";
if(isset($_POST['searchbar'])){
  $search = htmlspecialchars($_POST['searchbar']);
  if(empty($_POST['searchbar']))
  {
    $st = $con->prepare("SELECT * from record");//search all data
  }else{
	   $st = $con->prepare("SELECT * from record where 
  fname like '%".$search."%' or
  id like '%".$search."%' or
  lname like '%".$search."%' or
  u_username like '%".$search."%' or
  email like '%".$search."%' 
  ");//search specific data
	  
  }
 
  
}
else{
	$st = $con->prepare("SELECT * from record");//search all data
}
$st->execute();
$result = $st->get_result();
while($row= $result->fetch_assoc()){
                /*
						$sql = "SELECT * FROM users";
						if($result = mysqli_query($link, $sql)){
						if(mysqli_num_rows($result) > 0){
							while($row = mysqli_fetch_array($result)){*/
		 		?>
					
                      <tr>
						
                        <td>
                          <?php echo $row['id']; ?>
                        </td>
                        <td>
                          <?php echo $row['fname']; ?>
                        </td>
                        <td>
                          <?php echo $row['lname']; ?>
                        </td>
						  <td>
                          <?php echo $row['u_username']; ?>
                        </td>
						  <td>
                          <?php echo $row['password']; ?>
                        </td>
						  <td>
                          <?php echo $row['email']; ?>
                        </td>
						   <td >
                           <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $row['id']; ?>">Update</button> 
                        </td>
						  <td >
                           <button onclick="deleteData(<?php echo $row['id']; ?>)">Delete</button>
                        </td>
                        
				    </tr>
						<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
		
		<div class="card-header">
                <h5 class="card-title">Add List</h5>
              </div>
              <div class="card-body">
				  
				  
                
              </div>
      <div class="modal-body">
        <form id="form1" action="javascript:null" method="post">
                  
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>First Name</label>
                        <input name="fname" id="fname" onblur="myFunction1()" type="text" class="form-control" placeholder="First name" >
						  <small id="error" style="color: red;"></small>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input name="lname" onblur="myFunction2()" id="lname" type="text" class="form-control" placeholder="Last Name" >
						  <small id="error2" style="color: red;"></small>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>username</label>
                        <input onblur="myFunction3()" id="username" name="username" type="text" class="form-control" >
						  <small id="username-error" style="color: red;"></small>
                      </div>
                    </div>
                  </div>
					<div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Password</label>
                        <input onblur="myFunction4()" id="pass" name="pass" type="password" class="form-control" >
						  <small id="pass-error" style="color: red;"></small>
                      </div>
                    </div>
                  </div>
					<div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Birthdate</label>
                        <input onBlur="myFunction5()" id="bbdate" name="email" type="date" class="form-control" >
						  <small id="date-error" style="color: red;"></small>
                      </div>
                    </div>
                  </div>
				
					
				
					
                  
                </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
              		   
					  <?php
				}
			  
			
		  ?>
                  
                    </tbody>
					 
                  </table>