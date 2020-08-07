<?php
require('../db.php');
include("../auth_session.php");
include("header.php");
?>
<head>
<style>
  #ticketBox {
  padding: 1em;
  background: red;
  background-color: orange;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
  </style>
</head>
<div class="main_content">
        <div class="header">
        <h2 style="color: white; text-align: center;">Team Panel</h2>
<?php
if (1 == $teamaddon) {
 echo "";
} else {
 die('<div class="container-top"> <center><h1>TEAM ADDON ISNT ACTIVATED!</h1></center></div>');
}
?>
<?php
   if(array_key_exists('button1', $_POST)) { 
            create(); 
        } 
   if(array_key_exists('button2', $_POST)) { 
            sax(); 
        }
        ?>
        </div>
        <div class="info">
        <div class="container">
  <div class="row">
    <div class="col-xl-4 mx-auto">
      <!--Ticket Input Box-->
      <div id="ticketBox">
        <div id="ticketBoxCenter">


<?php
function create() {
$username2 = $_SESSION['username'];
$name   = $_POST['penis'];
$name = htmlspecialchars($name);
$key   = $_POST['clit'];
$key = htmlspecialchars($key);
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("62.108.32.189:3306","hnlwm_penta","Iyfi24@5","penta");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO team (user, rank, teamname, tkey) VALUES ('$username2', 'leader', '$name', '$key')";
if(mysqli_query($link, $sql)){
    echo('');
    header("Refresh:0");
} else{
    echo "ERROR: Could not able to execute cmd";
}

 
// Close connection
mysqli_close($link);
}
?>
<?php
function sax() {
$username2 = $_SESSION['username'];
$username = $_SESSION['username']; 
$name   = $_POST['penis'];
$name = htmlspecialchars($name);
$key   = $_POST['clit'];
$key = htmlspecialchars($key);


/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("62.108.32.189:3306","hnlwm_penta","Iyfi24@5","penta");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO team (user, rank, teamname, tkey) VALUES ('$username2', 'player', '$name', '$key')";
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
<?php
function leave() {
$m   = $_POST['mid'];
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
    header("Refresh:0");
} else{
    echo "error with db";
}
// Attempt insert query execution


 
// Close connection
mysqli_close($link);
}
?> 
      <?php
      if($team == null) {
      echo('<center><form action="" method="post">
      <p style="color: ;">Team Name:</p><br>
<input name="penis" size="15" style="height: 19px;"  type="text"></br><br>
<p style="color: ;">Team Key:</p><br>
<input name="clit" size="15" style="height: 19px;"  type="text"></br><br>
      <button type="submit" name="button1" onclick="create()" id="nigger" class="noborder" style="font-size:185%;"> <i class=""></i> Create Team</button><br><br><br>
      <button type="submit" name="button2" onclick="sax()" id="nigger" class="noborder" style="font-size:185%;"> <i class=""></i> Join Team</button><br><br><br><br>
</form></center>');
      } else {
header('Location: https://capo.network/penta/hub/teamh.php');
      }
      if($team != $username) {
            echo('');
      } else {
      echo('');
      }
      ?>
      </div>   
      
      
<?php
if($tname == null) {
die;
}
?>


</div>
</div>