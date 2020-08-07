<?php
require('../db.php');
include("../auth_session.php");
include("header.php");
$username = $_SESSION["username"];
?>
<head>
<style>
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
<?php
if($team == NULL) {
    header('Location: https://capo.network/penta/hub/team.php');
    die;
}
?>
<?php
   if(array_key_exists('button1', $_POST)) { 
            ter(); 
        } 
    if(array_key_exists('button2', $_POST)) { 
            leave(); 
        } ?>
<body>
<div class="main_content">
        <div class="header">
        <h2 style="color: white; text-align: center;">Team Panel</h2>

</div>
<div class="info"> 
<div class="container">
  <div class="row">
    <div class="col-xl-4 mx-auto">
      <!--Ticket Input Box-->
      <div id="ticketBox">
        <div id="ticketBoxCenter">

<p style="color: ;">Logged in as <strong><?php echo htmlspecialchars($username); ?>	</strong></p><br>
<p style="color: ;">Team Name: <strong><?php echo htmlspecialchars($tname); ?></strong>	</p><br>
<p style="color: ;">Rank: <strong><?php echo htmlspecialchars($trank); ?></strong>	</p><br>
<p style="color: ;">tKey: <strong><?php echo htmlspecialchars($tkey); ?></strong>	</p><br>

<?php
      if($trank == "leader") {
      echo('<center><form action="" method = "post">
      <button type="submit" name="button1" onclick="ter()" id="nigger" class="myButton"> <i class=""></i> Terminate Team</button><br><br><br><br>
</form></center>');
      } else {
        echo('<center><form action="" method = "post">
        <button type="submit" name="button2" onclick="leave()" id="nigger" class="myButton"> <i class=""></i> Leave Team</button><br><br><br><br>
  </form></center>');
      }
      ?>
			</div>



            <?php
function ter() {
$m   = $_POST['mid'];
global $tname;
$username2 = $_SESSION['username'];
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("62.108.32.189:3306","hnlwm_penta","Iyfi24@5","penta");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "DELETE FROM team
                WHERE teamname = '$tname'";
if(mysqli_query($link, $sql)){
    echo('SUCCESS');
    header('Location: https://capo.network/penta/hub/team.php');
} else{
    echo "error with db";
}
// Attempt insert query execution
 
// Close connection
mysqli_close($link);
}
?> 
            <?php
function leave() {
$m   = $_POST['mid'];
global $tname;
$username2 = $_SESSION['username'];
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("62.108.32.189:3306","hnlwm_penta","Iyfi24@5","penta");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "DELETE FROM team
                WHERE user = '$username2'";
if(mysqli_query($link, $sql)){
    echo('SUCCESS');
    header('Location: https://capo.network/penta/hub/team.php');
} else{
    echo "error with db";
}
// Attempt insert query execution
 
// Close connection
mysqli_close($link);
}
?> 
