   <div class="container">
       <section id="formHolder">
           <div class="row">
               <!-- Logo -->
               <div class="col-sm-6 brand">
                   <a href="#" class="logo">B3ns44d <span>.</span></a>
                   <div class="heading">
                       <h2>Welcome</h2>
                       <p>Your Right Choice</p>
                       <a class="readmore">Read more</a>
                   </div>
               </div>
               <!-- Form -->
               <div class="col-sm-6 form">
                   <!-- Login Form -->
                   <div class="login form-peice ">
                       <form class="login-form" action="https://b3ns44dhost.local/Contact_application_Abdessamad/starter_files/login.php" method="post">
                           <h2>Login Test</h2>
                           <div class="form-group">
                               <?php if (isset($_GET['error'])) { ?>
                                   <p class="error"><?php echo $_GET['error']; ?></p>
                               <?php } ?>
                               <label id="test" for="login">Email Adderss</label>
                               <input type="text" name="uname" id="login_email" required>
                           </div>
                           <div class="form-group">
                               <label for="loginPassword">Password</label>
                               <input type="password" name="password" id="loginPassword" required>
                           </div>
                           <div class="CTA">
                               <input type="submit"></input>
                               <a href="#" class="switch">Remember me</a>
                           </div>
                       </form>
                   </div>
                   <!-- End Login Form -->
               </div>
           </div>
       </section>
   </div>