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
                  <label for="UsernameC">Username:</label>
                  <input class="form-control" name="UsernameC" id="UsernameC" type="text">
              </div>
              <div class="form-group">
                  <label for="FirstnameC">First Name:</label>
                  <input class="form-control" name="FirstnameC" id="FirstnameC" type="text">
              </div>
              <div class="form-group">
                  <label for="LastnameC">Last Name:</label>
                  <input class="form-control" name="LastnameC" id="LastnameC" type="text">
              </div>
              <div class="form-group">
                  <label for="Birthdate">Birthdate:</label>
                  <input class="form-control" name="Birthdate" id="Birthdate" type="date">
              </div>
              <div class="form-group">
                  <label for="EmailC">E-mail:</label>
                  <input class="form-control" name="EmailC" id="EmailC" type="email">
              </div>
              <div class="form-group">
                  <label for="ContactC">Contact:</label>
                  <input class="form-control" name="ContactC" id="ContactC" type="text">
              </div>
              <div class="form-group">
                  <label for="AddressC">Address:</label>
                  <input class="form-control" name="AddressC" id="AddressC" type="text">
              </div>
              <div class="form-group">
                  <label for="PasswordC">Password:</label>
                  <input class="form-control" name="Password" id="PasswordC" type="password">
              </div>
              <div class="form-group">
                  <label for="PasswordC">Confirm Password:</label>
                  <input class="form-control" name="PasswordC" id="PasswordC" type="password">
              </div>
              <div class="text-center">
                  <button class="btn btn-primary" name="register">Register</button>
              </div>
      </form>
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>