<?php
require('../db.php');
include("../auth_session.php");
include("header.php");
$username = $_SESSION["username"];
?>
<?php
   if(array_key_exists('button1', $_POST)) { 
            passwd(); 
        } 
    if(array_key_exists('button2', $_POST)) { 
            steam(); 
        } 
 ?>
 <head>
 <style>
 .grid-container {
   display: grid;
   grid-template-columns: auto auto auto;
   grid-template-rows: 80px 200px;
   grid-gap: 10px;
   padding: 10px;
 }
 
 .grid-container > div {
   text-align: left;
   padding: 20px 0;
   font-size: 30px;
   border-style: outset;
   border-width: 3px;
   border-color: orange;  
 }
 .p {
    color: white;
 }
 .myButton {
	box-shadow:inset 0px 1px 0px 0px #ffffff;
	background:linear-gradient(to bottom, #ffffff 5%, #f6f6f6 100%);
	background-color:#ffffff;
	border-radius:6px;
	border:1px solid #dcdcdc;
	display:inline-block;
	cursor:pointer;
	color:#666666;
	font-family:Arial;
	font-size:17px;
	font-weight:bold;
	padding:10px 38px;
	text-decoration:none;
	text-shadow:0px 1px 0px #ffffff;
}
.myButton:hover {
	background:linear-gradient(to bottom, #f6f6f6 5%, #ffffff 100%);
	background-color:#f6f6f6;
}
.myButton:active {
	position:relative;
	top:1px;
}
#ticketBox {
  padding: 1em;
  background: red;
  background-color: orange;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
 </style>
 </head>

<body>

<div class="main_content">
        <div class="header">

        <h2 style="text-align: center; color: white;">Profile Panel</h2>

        </div>
        <div class="info">
        <div class="container">
  <div class="row">
    <div class="col-xl-4 mx-auto">
      <!--Ticket Input Box-->
      <div id="ticketBox">
        <div id="ticketBoxCenter">
        <div>
        <p style="text-align: center; color: ;">Profile</p><br>
<p style="color: ;">Username: <strong><?php echo htmlspecialchars($username); ?>	</strong></p><br>
        <p style="color: ;">Role: <strong><?php echo htmlspecialchars($role); ?></strong>	</p><br>
<p style="color: ;">E-Mail: <strong><?php echo htmlspecialchars($email); ?></strong>	</p><br>
<p style="color: ;">User-ID: <strong><?php echo htmlspecialchars($id); ?></strong>	</p><br>
<p style="color: ;">Join Date: <strong><?php echo htmlspecialchars($create_datetime); ?></strong>	</p><br>
			</div>
            </div>
            </div>
            </div>
            <div class="container">
  <div class="row">
    <div class="col-xl-4 mx-auto">
      <!--Ticket Input Box-->
      <div id="ticketBox">
        <div id="ticketBoxCenter">
            <div><center>
            <p style="text-align: center; color: ;">Misc</p><br>
<form method="post">
<input class="form-control" type="password" name="password" placeholder=" Enter new Password"><br><br>
<button type="submit" name="button1" onclick="passwd()" id="nigger2" class="myButton" style=""> <i class=""></i> Reset Password</button><br><br>
<input class="form-control" type="text" name="steam" placeholder=" Enter new E-Mail"><br><br>
<button type="submit" name="button2" onclick="steam()" id="nigger2" class="myButton" style=""> <i class=""></i> Reset E-Mail</button>
</center></form>
</div></div>
      <?php
function passwd() {
$username2 = $_SESSION['username'];
$password   = $_POST['password'];
$password = stripslashes($_POST['password']);
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("62.108.32.189:3306","hnlwm_penta","Iyfi24@5","penta");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if (strlen($_POST["password"]) <= '6') {
            die("<div class='container'><center><h1>Your Password Must Contain At Least 6 Characters!</h1></center></div>");
        }
        elseif (strlen($_POST["password"]) >= '15') {
            die("<div class='container'><center><h1>Your Password Must Contain Max 15 Characters!</h1></center></div>");
        }
        elseif(!preg_match("#[0-9]+#",$password)) {
            die("<div class='container'><center><h1>Your Password Must Contain At Least 1 Number/Integer!</h1></center></div>");
        }
        elseif(!preg_match("#[A-Z]+#",$password)) {
            die("<div class='container'><center><h1>Your Password Must Contain At Least 1 Capital Letter!</h1></center></div>");
        }
        elseif(!preg_match("#[a-z]+#",$password)) {
            die("<div class='container'><center><h1>Your Password Must Contain At Least 1 Lowercase Letter!</h1></center></div>");
        } else {
        echo "";
        }
 
// Attempt insert query execution
$sql = "UPDATE users SET password='".md5($password)."' WHERE username='$username2'";
if(mysqli_query($link, $sql)){
    echo('SUCCESS');
    header("Location: https://capo.network/penta/logout.php");
} else{
    echo "ERROR: Could not able to execute cmd";
}
 
// Close connection
mysqli_close($link);
}
?>
<?php
function steam() {
$username2 = $_SESSION['username'];
$steam   = $_POST['steam'];
$steam = stripslashes($_POST['steam']);
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("62.108.32.189:3306","hnlwm_penta","Iyfi24@5","penta");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
 if (strlen($_POST["steam"]) <= '4') {
            die("<div class='container'><center><h1>Your E-Mail Must Contain At Least 4 Characters!</h1></center></div>");
        }
// Attempt insert query execution
$sql = "UPDATE users SET email='$steam' WHERE username='$username2'";
if(mysqli_query($link, $sql)){
    echo('SUCCESS');
    header("Refresh:0");
} else{
    echo "ERROR: Could not able to execute cmd";
}
 
// Close connection
mysqli_close($link);
}
?>

