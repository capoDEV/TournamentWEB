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
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <title> Penta | Tournament </title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Animated-CSS-Waves-Background-SVG.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Wave-Animation-Circle-and-Square.css">
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
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        
            
            $query2 = "SELECT * FROM `users` WHERE ban='yes' AND username='$username'";
      
      if ($result = $con->query($query2)) {
    if ($row = $result->fetch_assoc()) {
        $ban = $row["username"];
        $id = $row["id"];
        

        
    }
    
} 
 if($ban == $username) {
  die("<center><h1 style='color: white;'>YOU ARE BANNED</h1></center>");
 }

        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: https://capo.network/penta/hub");
        } else {
            echo "<center><div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='index.php'>Login</a> again.</p>
                  </div></center>";
        }
    } else {
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
            <h2 class="sr-only">Login</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline" style="color: #fcba03;"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Username"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="g-recaptcha" data-theme="dark" data-callback="captchaVerified" data-expired-callback="captchaExpired" data-sitekey=<?php echo $site_key; ?>></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" id="submit" style="background-color: #fcba03;" disabled>Log In</button></div><a class="forgot" href="register.php">Create an account now!</a></form>
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