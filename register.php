<!DOCTYPE html>
<?php
    require_once('environment.php');
  // Recommended to be always stored in environment variables
    $site_key = $_ENV['SITE_KEY'];
     $secret_key = $_ENV['SECRET_KEY'];
     ?>
<html>

<head>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title> BroCast | Tournament </title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="s.css">
</head>

<body>
<?php
      if (isset($_POST['submit'])) {
          // reCAPTCHA response on submitting the form
          $response = $_POST['g-recaptcha-response'];
          // remoteip param is optional
          $payload = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$response);
          // Decoding JSON response from Google. TRUE param for assoc. array
          $res = json_decode($payload, true);
          // Checking payload response
          if ($res['success'] != 1) {
              // Failure case
              $error = 'Sorry. Missing validation!!!';
          } else {
              // Success case
              $success = 'Thank you!';
          }
      }
    ?>
    <?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        $username = htmlspecialchars($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = htmlspecialchars($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("F j, Y, g:i a");
        $ip = $_SERVER['REMOTE_ADDR'];
        
        if (strlen($_POST["password"]) <= '6') {
            die("Your Password Must Contain At Least 6 Characters!");
        }
        elseif (strlen($_POST["password"]) >= '15') {
            die("Max lenght of a password is 15.");
        }
        elseif(!preg_match("#[0-9]+#",$password)) {
            die("Your Password Must Contain At Least 1 Number!");
        }
        elseif(!preg_match("#[A-Z]+#",$password)) {
            die("Your Password Must Contain At Least 1 Capital Letter!");
        }
        elseif(!preg_match("#[a-z]+#",$password)) {
            die("Your Password Must Contain At Least 1 Lowercase Letter!");
        } else {
        echo "";
        }
        
        if (strlen($_POST["username"]) <= '2') {
            die("Your User Must Contain At Least 3 Characters!");
        }    
        elseif (strlen($_POST["username"]) >= '14') {
            die("Max lenght of a username is 14.");
        } else {
          echo"";
        }
    
        
  	$sql_u = "SELECT * FROM users WHERE username='$username'";
  	$sql_e = "SELECT * FROM users WHERE email='$email'";
  	$res_u = mysqli_query($con, $sql_u);
  	$res_e = mysqli_query($con, $sql_e);

  	if (mysqli_num_rows($res_u) > 0) {
  	  die("<center><div class='form'>
                  <h3>Username already in use.</h3><br/>
                  <p class='link'>Click here to <a href='register.php'>registration</a> again.</p>
                  </div></center>"); 	
  	}else if(mysqli_num_rows($res_e) > 0){
  	  die("<center><div class='form'>
                  <h3>Email already in use.</h3><br/>
                  <p class='link'>Click here to <a href='register.php'>registration</a> again.</p>
                  </div></center>"); 	
  	} else {

        $query    = "INSERT into `users` (username, password, rank, create_datetime, email, ip)
                     VALUES ('$username', '" . md5($password) . "', 'Member', '$create_datetime', '$email', '$ip')";
        $result   = mysqli_query($con, $query);

        if ($result) {
            echo "<center><div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='index.php'>Login</a></p>
                  </div></center>";
        } else {
            echo "<center><div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='register.php'>registration</a> again.</p>
                  </div></center>";
        }
    } 
    }else {
?>
    <div class="w-100 p-5"><div class="svg-container">
<div class="waveWrapper waveAnimation">
  <div class="waveWrapperInner bgTop">
    <div class="wave waveTop" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-top.png')"></div>
  </div>
  <div class="waveWrapperInner bgMiddle">
    <div class="wave waveMiddle" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png')"></div>
  </div>
  <div class="waveWrapperInner bgBottom">
    <div class="wave waveBottom" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')"></div>
  </div>
</div>
</div>

	</div>
    <div class="login-dark">
        <form method="post">
            <h2 class="sr-only">Register</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline" style="color: #fcba03;"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="username" placeholder=" Enter Username"></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder=" Enter Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder=" Enter Password"></div>
            <div class="g-recaptcha" data-theme="dark" data-callback="captchaVerified" data-expired-callback="captchaExpired" data-sitekey=<?php echo $site_key; ?>></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" id="submit" style="background-color: #fcba03;" disabled>Register</button></div><a class="forgot" href="index.php">Sign in now!</a></form>
            <?php
    }
?>
<?php if (isset($_POST["submit"])): ?>
          <!-- Displaying validation status -->
          <?php if (!empty($success)): ?>
          <!-- Success case -->
          <div class="alert alert-success" role="alert">
            <strong>
              <?php echo $success; ?></strong>
          </div>
          <?php else: ?>
          <!-- Failure case -->
          <div class="alert alert-danger" role="alert">
            <strong>
              <?php echo $error; ?></strong>
          </div>
          <?php endif; ?>
          <?php endif; ?>
    </div>
    <script>
      // Verification function
      function captchaVerified() {
        var submitBtn = document.getElementById('submit');
        submitBtn.removeAttribute('disabled');
      }
      // reCAPTCHA Expired callback function
      function captchaExpired() {
        window.location.reload();
      }

    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
