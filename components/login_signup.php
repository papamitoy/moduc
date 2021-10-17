<div class="col-sm-6 form">

            <!-- Login Form -->
            <div class="login form-peice switched">
               <form class="login-form" action="#" method="post" id="loginForm" >
                  <div class="form-group">
                     <label for="loginemail">Email Adderss</label>
                     <input type="email" name="loginemail" id="loginemail" required>
                  </div>

                  <div class="form-group">
                     <label for="loginPassword">Password</label>
                     <input type="password" name="loginPassword" id="loginPassword" required>
                  </div>

                  <div class="CTA">
                     <input type="button" value="Login" onclick="loginAuth()" >
                     <a href="#" class="switch">I'm New</a>
                  </div>
               </form>
            </div><!-- End Login Form -->


            <!-- Signup Form -->
            <div class="signup form-peice">
               <form class="signup-form" action="#" method="post" id="registerForm">

                  <div class="form-group">
                     <label for="name">Full Name</label>
                     <input type="text" name="name" id="name" class="name">
                     <span class="error"></span>
                  </div>

                  <select class="form-select" name="type" aria-label="Default select example">
                  <option selected value="user">Register as Student</option>
                  <option value="adviser">Register as Teacher</option>
                  </select>

                  <div class="form-group">
                     <label for="email">Email Adderss</label>
                     <input type="email" name="emailAdress" id="email" class="email">
                     <span class="error"></span>
                  </div>

                  <div class="form-group">
                     <label for="username">Username</label>
                     <input type="text" name="username" id="username">
                  </div>

                  <div class="form-group">
                     <label for="password">Password</label>
                     <input type="password" name="password" id="password" class="pass">
                     <span class="error"></span>
                  </div>

                  <div class="form-group">
                     <label for="passwordCon">Confirm Password</label>
                     <input type="password" name="passwordCon" id="passwordCon" class="passConfirm">
                     <span class="error"></span>
                  </div>

                  <div class="CTA">
                     <input type="button" value="Signup Now" id="submit" onclick="registerForm()">
                     <a href="#" class="switch">I have an account</a>
                  </div>
               </form>
            </div><!-- End Signup Form -->
         </div>