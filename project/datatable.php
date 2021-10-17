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
    <div class="modal-content" id="modalcontent<?php echo $row['id']; ?>">
     
		
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
                        <input value="<?php echo $row['fname']; ?>" name="fname" id="fname<?php echo $row['id']; ?>" onblur="myFunction1(this.id,'error<?php echo $row['id']; ?>')" type="text" class="form-control" placeholder="First name" >
						  <small id="error<?php echo $row['id']; ?>" style="color: red;"></small>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input value="<?php echo $row['lname']; ?>" name="lname" onblur="myFunction2(this.id,'error2<?php echo $row['id']; ?>')" id="lname<?php echo $row['id']; ?>" type="text" class="form-control" placeholder="Last Name" >
						  <small id="error2<?php echo $row['id']; ?>" style="color: red;"></small>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>username</label>
                        <input value="<?php echo $row['u_username']; ?>" onblur="myFunction3(this.id,'username-error<?php echo $row['id']; ?>')" id="username<?php echo $row['id']; ?>" name="username" type="text" class="form-control" >
						  <small id="username-error<?php echo $row['id']; ?>" style="color: red;"></small>
                      </div>
                    </div>
                  </div>
					<div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Password</label>
                        <input value="<?php echo $row['password']; ?>" onblur="myFunction4(this.id,'pass-error<?php echo $row['id']; ?>')" id="pass<?php echo $row['id']; ?>" name="pass" type="password" class="form-control" >
						  <small id="pass-error<?php echo $row['id']; ?>" style="color: red;"></small>
                      </div>
                    </div>
                  </div>
					<div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Birthdate</label>
                        <input value="<?php echo $row['email']; ?>" onBlur="myFunction5(this.id,'date-error<?php echo $row['id']; ?>')" id="bbdate<?php echo $row['id']; ?>" name="email" type="date" class="form-control" >
						  <small id="date-error<?php echo $row['id']; ?>" style="color: red;"></small>
                      </div>
                    </div>
                  </div>
				
					
				<div id="message<?php echo $row['id']; ?>"></div>
					
                  
                </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id='close<?php echo $row['id']; ?>'>Close</button>
        <button type="submit" class="btn btn-primary"
				onclick="updateData('message<?php echo $row['id']; ?>','fname<?php echo $row['id']; ?>','lname<?php echo $row['id']; ?>','username<?php echo $row['id']; ?>','pass<?php echo $row['id']; ?>','bbdate<?php echo $row['id']; ?>',<?php echo $row['id']; ?>,'close<?php echo $row['id']; ?>')" >Save changes</button>
      </div>
    </div>
  </div>
</div>
              		   
					  <?php
				}
			  
			
		  ?>
                  
                    </tbody>
					 
                  </table>