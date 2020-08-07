<?php
require('../db.php');
include("../auth_session.php");
include("header.php");
$username = $_SESSION["username"];
?>
<head>
<style>
table {
  border-collapse: collapse;
  border-bottom: 1px solid white;
  width: 50%;
}

th, td {
  text-align: center;
  padding: 8px;
  color: white;
}

section {
	width: 10%;
	margin: 0 auto;
	margin-top: 5%;
}

.div2 {
	animation: timer 10s 1s infinite;
}

.div3 {
	animation: timer 10s 2s infinite;
}

.div4 {
	animation: timer 10s 3s infinite;
}

.div5 {
	animation: timer 10s 4s infinite;
}

.div6 {
	animation: timer 10s 5s infinite;
}

.div7 {
	animation: timer 10s 6s infinite;
}

.div8 {
	animation: timer 10s 7s infinite;
}

.div9 {
	animation: timer 10s 8s infinite;
}

.div10 {
	animation: timer 10s 9s infinite;
}

@keyframes timer {
	0% { background-color: #E1E4E6; }
	5% { background-color: #1c98d6; transform:     scale(1.1, 1.1); }
	10% { background-color: #E1E4E6; }
}
</style>
</head>
<?php
if($tdraft != 1) {
echo('');
} else {







}
?>
<?php
if($t11 != 1) {
die('<div class="main_content"><div class="info" style="background: red;"><h2 style="text-align: center; color: white;">SYSTEM: Enable Tournament 1</h2></div></div>');
}
?>
<?php
   if(array_key_exists('button1', $_POST)) { 
            create(); 
        } 
    if(array_key_exists('button2', $_POST)) { 
            leave(); 
        } 
    if(array_key_exists('button3', $_POST)) { 
            nigger(); 
        }
   if(array_key_exists('button10', $_POST)) { 
            paid(); 
        }  
   if(array_key_exists('button11', $_POST)) { 
            pay(); 
        } ?>
<body>
<div class="main_content">
        <div class="header">
        Registered Teams: <?php $result = $con->query("SELECT * FROM tourny1"); //Player ready count
$rows = $result->num_rows;
echo "$rows";
        ?>
<h2 style="text-align: center; color: white;">Tournament Registration</h2>
        </div>
        <div class="info">


      <div class="container-bottom"> 
<?php
if($t1reg == 1) {
echo('');
} else {
die('<div class="main_content"><div class="info"><h2 style="color: white;">Registration Closed.</h2></div></div>');
}
?>
      <?php
      if($player != $username) {
      echo('<center><form action="" method = "post">
      <button type="submit" name="button1" onclick="create()" id="nigger" class="noborder" style="font-size:185%;"> <i class=""></i> Register Team</button></form>
      ');
      } else {
      echo('');
      }
      ?>
<?php
$result = $con->query("SELECT * FROM tourny"); //Player ready count
$rows = $result->num_rows;


if($player != $username) {
die;
}
if($queued == $username) {
die('<head><style>divs {
	float: left;
	width: 5%;
	height: 25px;
	background-color: #E1E4E6;
	border-radius: 2px;
	margin-left: 2.5%;
	margin-right: 2.5%;
	animation: timer 10s infinite;
}
</style><center><h2 style="color: white;">Wait for Tournament start...<br>Teams in Queue: '. $rows .'</h2></center></head><center><section>
		<divs class="div1"></divs>
		<divs class="div2"></divs>
		<divs class="div3"></divs>
		<divs class="div4"></divs>
		<divs class="div5"></divs>
		<divs class="div6"></divs>
		<divs class="div7"></divs>
		<divs class="div8"></divs>
		<divs class="div9"></divs>
		<divs class="div10"></divs>
	</section></br></br></br>
  <form action="" method="post"><button type="submit" name="button10" onclick="paid()" id="nigger" class="noborder" style="font-size:185%;"> <i class=""></i> Leave Queue</button></form></center>');
}
if($t1status == 1) {
header("Location: https://capo.network/penta/hub/thub.php");
} else {
echo('<center><h1 style="color: white;">Team: '. htmlspecialchars($tname) .'</h1><br><br><h2 style="color: white;">Tournament is not Live.</h2><br><form action="" method = "post"><button type="submit" name="button11" onclick="pay()" id="nigger" class="noborder" style="font-size:185%;"> <i class=""></i> Leave Tournament</button></form></center>');
}
?>
      </div>   
<?php
function create() {
$username2 = $_SESSION['username'];
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */        
global $trank;
global $tname;
if($trank != 'leader')      {
die('<div class="main_content"><div class="info" style="background: red;"><h2 style="text-align: center; color: white;">SYSTEM: You are not a Team Leader!</h2></div></div>');
}   
  

$link = mysqli_connect("62.108.32.189:3306","hnlwm_penta","Iyfi24@5","penta");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO tourny1 (username, teamname) VALUES ('$username2', '$tname')";
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
function nigger() {
$username2 = $_SESSION['username'];
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("62.108.32.189:3306","hnlwm_penta","Iyfi24@5","penta");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO queue (username) VALUES ('$username2')";
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
function paid() {
$username2 = $_SESSION['username'];
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("62.108.32.189:3306","hnlwm_penta","Iyfi24@5","penta");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "DELETE FROM queue WHERE username = '$username2'";
if(mysqli_query($link, $sql)){
    header("Location: https://capo.network/penta/hub/treg.php");
    exit;
} else{
    echo "ERROR: Could not able to execute cmd";
}
 
// Close connection
mysqli_close($link);
}
?>
<?php
function pay() {
$username2 = $_SESSION['username'];
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("62.108.32.189:3306","hnlwm_penta","Iyfi24@5","penta");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "DELETE FROM tourny1 WHERE username = '$username2'";
if(mysqli_query($link, $sql)){
    header("Location: https://capo.network/penta/hub/tourny.php");
    exit;
} else{
    echo "ERROR: Could not able to execute cmd";
}
 
// Close connection
mysqli_close($link);
}
?>
			<br><br>	<center><h2 style="color: white;">Registered Teams</h2><br>
<?php
			$username = "hnlwm_penta"; 
$password = "Iyfi24@5"; 
$database = "penta"; 
$mysqli = new mysqli("62.108.32.189:3306", $username, $password, $database); 
$query = "SELECT * FROM tourny1";


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Team Name</font> </td> 
          <td> <font face="Arial">Team Captain</font> </td> 
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["teamname"];
        $field2name = $row["username"];
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
              </tr>';
    }
    $result->free();
} 
?></center>
