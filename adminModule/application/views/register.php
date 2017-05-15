<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Register</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      
      <div class="col-lg-5 col-lg-offset-2">
        <h1>Register Now!</h1>
        <p>Fill in the details to register on our website!</p>
          
          <?php if(isset($_SESSION['success'])){ ?>
          <div class="alert alert-success"> <?php echo $_SESSION['success']; ?> </div>
            <?php
          } ?>
          <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
          
          <form action="" method="POST">
              <div class="form-group">
                  <label for="UserName">Username:</label>
                  <input class="form-control" name="UserName" id="UserName" type="text">
              </div>
              <div class="form-group">
                  <label for="FirstName">First Name:</label>
                  <input class="form-control" name="FirstName" id="FirstName" type="text">
              </div>
              <div class="form-group">
                  <label for="LastName">Last Name:</label>
                  <input class="form-control" name="LastName" id="LastName" type="text">
              </div>             
              <div class="form-group">
                  <label for="type">User Type:</label>
                  <select class="form-control" id="type" name="type">
                    <option value="customer">Customer</option>
                    <option value="sp">Service Provider</option>
                  </select>
              </div> 
              <hr>
              <div class="form-group">
                  <label for="ifSP">(If your a service provider, fill out the following:)</label>
              </div>            
              <div class="form-group">
                  <label for="Category">Category:</label>
                   <select class="form-control" id="Category" name="Category">
                      <option value="Academics">Academics</option>
                      <option value="Instruments">Musical Instruments</option>
                      <option value="Languages">Languages</option>
                      <option value="cb">Cooking/Baking</option>
                    </select>
              </div>
              <div class="form-group">
                  <label for="Service">Service Provided:</label>
                  <input class="form-control" name="Service" id="Service" type="Service">
              </div>
              <hr>
              <div class="form-group">
                  <label for="Birthdate">Birthdate:</label>
                  <input class="form-control" name="Birthdate" id="Birthdate" type="date">
              </div> 
              <div class="form-group">
                  <label for="Email">E-mail:</label>
                  <input class="form-control" name="Email" id="Email" type="email">
              </div>
              <div class="form-group">
                  <label for="ContactNumber">Contact:</label>
                  <input class="form-control" name="ContactNumber" id="ContactNumber" type="text">
              </div>
              <div class="form-group">
                  <label for="Address">Address:</label>
                  <input class="form-control" name="Address" id="Address" type="text">
              </div>
              <div class="form-group">
                  <label for="Password">Password:</label>
                  <input class="form-control" name="PasswordC" id="Password" type="password">
              </div>
              <div class="form-group">
                  <label for="Password">Confirm Password:</label>
                  <input class="form-control" name="Password" id="Password" type="password">
              </div>
              <div class="text-center">
                  <button class="btn btn-primary" name="register">Register</button>
              </div>
              <br>
              <div class="text-center">
                  <p name="login"><a href="<?php echo base_url(); ?>login">Login now</a></p>
              </div>
      </form>
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>