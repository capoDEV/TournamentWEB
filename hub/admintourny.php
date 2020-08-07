<?php
require('../db.php');
include("../auth_session.php");
include("adminheader.php");
$username = $_SESSION["username"];
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
	font-size:11px;
	font-weight:bold;
	padding:10px 18px;
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
		body {
			color: white;
		}
				p {
			color: white;
		}
				h2 {
			color: white;
		}
	</style>
</head>
<?php
if ($username == $admin) {
 echo "";
} else {
 die('<div class="main_content">
 <div class="header" style="background: red; text-align: center;">
<div>ERROR: You are not an Admin!</div>
</div>
</div>
</div><script type="text/javascript" language="Javascript"> 
 alert("ERROR: You are not an Admin!")
 </script> ');
}
?>
<?php
   if(array_key_exists('button1', $_POST)) { 
            ban(); 
        } 
    if(array_key_exists('button2', $_POST)) { 
            fuck(); 
        } 
    if(array_key_exists('button3', $_POST)) { 
            clear(); 
        } 
    if(array_key_exists('button4', $_POST)) { 
            site(); 
        } 
    if(array_key_exists('button5', $_POST)) { 
            url(); 
        } 
    if(array_key_exists('button6', $_POST)) { 
            shopa(); 
        } 
    if(array_key_exists('button7', $_POST)) { 
            shopd(); 
        } 
    if(array_key_exists('button9', $_POST)) { 
            shops(); 
        } 
if(array_key_exists('button8', $_POST)) { 
            shopf(); 
        } 
if(array_key_exists('button10', $_POST)) { 
            draft(); 
        } 
if(array_key_exists('button11', $_POST)) { 
            tdis(); 
        } 
if(array_key_exists('button12', $_POST)) { 
            ten(); 
        }
if(array_key_exists('button13', $_POST)) { 
            teams(); 
        }
if(array_key_exists('button14', $_POST)) { 
            game1(); 
        }
if(array_key_exists('button15', $_POST)) { 
            game2(); 
        }
if(array_key_exists('button16', $_POST)) { 
            game3(); 
        }
if(array_key_exists('button17', $_POST)) { 
            game4(); 
        }
if(array_key_exists('button18', $_POST)) { 
            game5(); 
        }
if(array_key_exists('button19', $_POST)) { 
            game6(); 
        }
if(array_key_exists('button20', $_POST)) { 
            game7(); 
        }
        ?>
<body>
<div class="main_content">
        <div class="header">
        <div class="container-top">
Registered Users: <strong><?php $result = $con->query("SELECT * FROM users"); //Player ready count
$rows = $result->num_rows;
echo "$rows";
        ?>
</div>

<h2 style="text-align: center; color: white;">Tourny Panel</h2>


        </div>
        <div class="info">
			<center><form action="" method = "post">
	            <?php
         if(1 == $t1status) {
          echo('<button type="submit" name="button7" onclick="shopd()" id="nigger2" class="myButton" style="font-size:100%;"> <i class=""></i> End Tournament </button>');
        } else {
echo('<button type="submit" name="button6" onclick="shopa()" id="nigger2" class="myButton" style="font-size:100%;"> <i class=""></i> Start Tournament</button>');
}
        ?>
<?php
         if(1 == $t1reg) {
          echo('<button type="submit" name="button8" onclick="shopf()" id="nigger2" class="myButton" style="font-size:100%;"> <i class=""></i> Block Tournament Registration</button>');
        } else {
echo('<button type="submit" name="button9" onclick="shops()" id="nigger2" class="myButton" style="font-size:100%;"> <i class=""></i> Enable Tournament Registration</button>');
}
        ?><br><br>
<?php
         if(1 == $t1status) {
          echo('<button type="submit" name="button10" onclick="draft()" id="nigger2" class="myButton" style="font-size:100%;"> <i class=""></i> DRAFT</button>');
        } 
        ?><br><br><p>Tournament TAB:</p><br>
	            <?php
         if(1 == $t11) {
          echo('<button type="submit" name="button11" onclick="tdis()" id="nigger2" class="myButton" style="font-size:100%;"> <i class=""></i> Tourny Disable</button>');
        } else {
echo('<button type="submit" name="button12" onclick="ten()" id="nigger2" class="myButton" style="font-size:100%;"> <i class=""></i> Tourny Enable</button>');
}
				?><div>       <br><br><p>Manual Tournament Hosting:</p><br>
				      <p>Enter Teams:</p><br>
				<input name="t1" size="15" style="height: 19px;"  type="text"> VS
				<input name="t2" size="15" style="height: 19px;"  type="text"></br>
<input name="t3" size="15" style="height: 19px;"  type="text">		VS
<input name="t4" size="15" style="height: 19px;"  type="text"></br>	
<input name="t5" size="15" style="height: 19px;"  type="text">  VS
			<input name="t6" size="15" style="height: 19px;"  type="text"></br>
<input name="t7" size="15" style="height: 19px;"  type="text">  VS
				<input name="t8" size="15" style="height: 19px;"  type="text"></br>
<button type="submit" name="button13" onclick="teams()" id="nigger2" class="myButton" style="font-size:100%;"> <i class=""></i> Submit Teams</button><br></br><p>Game 1:</p><br>
<input name="sc1" size="15" style="height: 19px; width: 135px;"  type="text" placeholder="Enter Game 1 Score"><input name="w1" size="15" style="height: 19px; width: 135px;"  type="text" placeholder="Enter Game 1 Winner"><br><button type="submit" name="button14" onclick="game1()" id="nigger2" class="myButton" style="font-size:100%;"> <i class=""></i> Submit Data</button><br></br><p>Game 2:</p><br>
<input name="sc2" size="15" style="height: 19px; width: 135px;"  type="text" placeholder="Enter Game 2 Score"><input name="w2" size="15" style="height: 19px; width: 135px;"  type="text" placeholder="Enter Game 2 Winner"><br><button type="submit" name="button15" onclick="game2()" id="nigger2" class="myButton" style="font-size:100%;"> <i class=""></i> Submit Data</button><br></br><p>Game 3:</p><br>
<input name="sc3" size="15" style="height: 19px; width: 135px;"  type="text" placeholder="Enter Game 3 Score"><input name="w3" size="15" style="height: 19px; width: 135px;"  type="text" placeholder="Enter Game 3 Winner"><br><button type="submit" name="button16" onclick="game3()" id="nigger2" class="myButton" style="font-size:100%;"> <i class=""></i> Submit Data</button><br></br><p>Game 4:</p><br>
<input name="sc4" size="15" style="height: 19px; width: 135px;"  type="text" placeholder="Enter Game 4 Score"><input name="w4" size="15" style="height: 19px; width: 135px;"  type="text" placeholder="Enter Game 4 Winner"><br><button type="submit" name="button17" onclick="game4()" id="nigger2" class="myButton" style="font-size:100%;"> <i class=""></i> Submit Data</button><br></br><p>Game 5:</p><br>
<input name="sc5" size="15" style="height: 19px; width: 135px;"  type="text" placeholder="Enter Game 5 Score"><input name="w5" size="15" style="height: 19px; width: 135px;"  type="text" placeholder="Enter Game 5 Winner"><br><button type="submit" name="button18" onclick="game5()" id="nigger2" class="myButton" style="font-size:100%;"> <i class=""></i> Submit Data</button><br></br><p>Game 6:</p><br>
<input name="sc6" size="15" style="height: 19px; width: 135px;"  type="text" placeholder="Enter Game 6 Score"><input name="w6" size="15" style="height: 19px; width: 135px;"  type="text" placeholder="Enter Game 6 Winner"><br><button type="submit" name="button19" onclick="game6()" id="nigger2" class="myButton" style="font-size:100%;"> <i class=""></i> Submit Data</button><br></br><p>Game 7:</p><br>
<input name="sc7" size="15" style="height: 19px; width: 135px;"  type="text" placeholder="Enter Game 7 Score"><input name="w7" size="15" style="height: 19px; width: 135px;"  type="text" placeholder="Enter Game 7 Winner"><br><button type="submit" name="button20" onclick="game7()" id="nigger2" class="myButton" style="font-size:100%;"> <i class=""></i> Submit Data</button><br></br>

			
				</form></center>
</div>
<?php
function shopa() {
$username2 = $_SESSION['username'];
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("62.108.32.189:3306","hnlwm_penta","Iyfi24@5","penta");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "UPDATE settings SET t1status='1'";
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
function shopd() {
$username2 = $_SESSION['username'];
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("62.108.32.189:3306","hnlwm_penta","Iyfi24@5","penta");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "UPDATE settings SET t1status='0'";
if(mysqli_query($link, $sql)){
    echo('');
header("Refresh:0");
} else{
    echo "ERROR: Could not able to execute cmd";
}
// Attempt insert query execution
$sql = "TRUNCATE TABLE game1";
if(mysqli_query($link, $sql)){
    echo('');
header("Refresh:0");
} else{
    echo "ERROR: Could not able to execute cmd";
}
	// Attempt insert query execution
$sql = "TRUNCATE TABLE game2";
if(mysqli_query($link, $sql)){
    echo('');
header("Refresh:0");
} else{
    echo "ERROR: Could not able to execute cmd";
}
	// Attempt insert query execution
$sql = "TRUNCATE TABLE game3";
if(mysqli_query($link, $sql)){
    echo('');
header("Refresh:0");
} else{
    echo "ERROR: Could not able to execute cmd";
}
	// Attempt insert query execution
$sql = "TRUNCATE TABLE game4";
if(mysqli_query($link, $sql)){
    echo('');
header("Refresh:0");
} else{
    echo "ERROR: Could not able to execute cmd";
}
	// Attempt insert query execution
$sql = "TRUNCATE TABLE game5";
if(mysqli_query($link, $sql)){
    echo('');
header("Refresh:0");
} else{
    echo "ERROR: Could not able to execute cmd";
}
	// Attempt insert query execution
$sql = "TRUNCATE TABLE game6";
if(mysqli_query($link, $sql)){
    echo('');
header("Refresh:0");
} else{
    echo "ERROR: Could not able to execute cmd";
}
	// Attempt insert query execution
$sql = "TRUNCATE TABLE game7";
if(mysqli_query($link, $sql)){
    echo('');
header("Refresh:0");
} else{
    echo "ERROR: Could not able to execute cmd";
}
	// Attempt insert query execution
$sql = "TRUNCATE TABLE tourny1";
if(mysqli_query($link, $sql)){
    echo('');
header("Refresh:0");
} else{
    echo "ERROR: Could not able to execute cmd";
}
	// Attempt insert query execution
$sql = "TRUNCATE TABLE queue";
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
function shops() {
$username2 = $_SESSION['username'];
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("62.108.32.189:3306","hnlwm_penta","Iyfi24@5","penta");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "UPDATE settings SET t1reg='1'";
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
function shopf() {
$username2 = $_SESSION['username'];
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("62.108.32.189:3306","hnlwm_penta","Iyfi24@5","penta");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "UPDATE settings SET t1reg='0'";
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
function ten() {
$username2 = $_SESSION['username'];
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("62.108.32.189:3306","hnlwm_penta","Iyfi24@5","penta");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "UPDATE settings SET t1='1'";
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
function tdis() {
$username2 = $_SESSION['username'];
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("62.108.32.189:3306","hnlwm_penta","Iyfi24@5","penta");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "UPDATE settings SET t1='0'";
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
function draft() {
$username = $_SESSION['username'];
$query = "SELECT * FROM `queue` ORDER BY RAND() LIMIT 1";
      
      if ($result = $con->query($query)) {
    if ($row = $result->fetch_assoc()) {
        $xusername = $row["username"];
die('$xusername');
        
$link = mysqli_connect("62.108.32.189:3306","hnlwm_penta","Iyfi24@5","penta");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "UPDATE tourny SET winner='1' WHERE username='$xusername'";
if(mysqli_query($link, $sql)){
    echo('');
	header("Refresh:0");
} else{
    echo "ERROR: Could not able to execute cmd";
}
 
// Close connection
mysqli_close($link);

        
    }
    
} 

}
?>
<?php
function teams() {
$username2 = $_SESSION['username'];
$t1   = $_POST['t1'];
$t2   = $_POST['t2'];	
$t3   = $_POST['t3'];
$t4   = $_POST['t4'];	
$t5   = $_POST['t5'];
$t6   = $_POST['t6'];	
$t7   = $_POST['t7'];
$t8   = $_POST['t8'];	
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("62.108.32.189:3306","hnlwm_penta","Iyfi24@5","penta");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO game1 (t1, t2) VALUES ('$t1', '$t2')";
if(mysqli_query($link, $sql)){
    echo('');
} else{
    echo "ERROR: Could not able to execute cmd";
}
// Attempt insert query execution
$sql = "INSERT INTO game2 (t1, t2) VALUES ('$t3', '$t4')";
if(mysqli_query($link, $sql)){
    echo('');
} else{
    echo "ERROR: Could not able to execute cmd";
}
	// Attempt insert query execution
$sql = "INSERT INTO game3 (t1, t2) VALUES ('$t5', '$t6')";
if(mysqli_query($link, $sql)){
    echo('');
} else{
    echo "ERROR: Could not able to execute cmd";
}
	// Attempt insert query execution
$sql = "INSERT INTO game4 (t1, t2) VALUES ('$t7', '$t8')";
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
function game1() {
$username2 = $_SESSION['username'];
$score   = $_POST['sc1'];
$winner   = $_POST['w1'];		
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("62.108.32.189:3306","hnlwm_penta","Iyfi24@5","penta");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "UPDATE game1 SET winner='$winner', score='$score'";
if(mysqli_query($link, $sql)){
    echo('');
} else{
    echo "ERROR: Could not able to execute cmd";
}
 
// Close connection
mysqli_close($link);
}
?>
<?php
function game2() {
$username2 = $_SESSION['username'];
$score   = $_POST['sc2'];
$winner   = $_POST['w2'];		
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("62.108.32.189:3306","hnlwm_penta","Iyfi24@5","penta");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "UPDATE game2 SET winner='$winner', score='$score'";
if(mysqli_query($link, $sql)){
    echo('');
} else{
    echo "ERROR: Could not able to execute cmd";
}
 
// Close connection
mysqli_close($link);
}
?>
<?php
function game3() {
$username2 = $_SESSION['username'];
$score   = $_POST['sc3'];
$winner   = $_POST['w3'];		
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("62.108.32.189:3306","hnlwm_penta","Iyfi24@5","penta");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "UPDATE game3 SET winner='$winner', score='$score'";
if(mysqli_query($link, $sql)){
    echo('');
} else{
    echo "ERROR: Could not able to execute cmd";
}
 
// Close connection
mysqli_close($link);
}
?>
<?php
function game4() {
$username2 = $_SESSION['username'];
$score   = $_POST['sc4'];
$winner   = $_POST['w4'];		
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("62.108.32.189:3306","hnlwm_penta","Iyfi24@5","penta");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "UPDATE game4 SET winner='$winner', score='$score'";
if(mysqli_query($link, $sql)){
    echo('');
} else{
    echo "ERROR: Could not able to execute cmd";
}
 
// Close connection
mysqli_close($link);
}
?>
<?php
function game5() {
$username2 = $_SESSION['username'];
$score   = $_POST['sc5'];
$winner   = $_POST['w5'];		
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("62.108.32.189:3306","hnlwm_penta","Iyfi24@5","penta");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO game5 (winner, score) VALUES ('$winner', '$score')";
if(mysqli_query($link, $sql)){
    echo('');
} else{
    echo "ERROR: Could not able to execute cmd";
}
 
// Close connection
mysqli_close($link);
}
?>
<?php
function game6() {
$username2 = $_SESSION['username'];
$score   = $_POST['sc6'];
$winner   = $_POST['w6'];		
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("62.108.32.189:3306","hnlwm_penta","Iyfi24@5","penta");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO game6 (winner, score) VALUES ('$winner', '$score')";
if(mysqli_query($link, $sql)){
    echo('');
} else{
    echo "ERROR: Could not able to execute cmd";
}
 
// Close connection
mysqli_close($link);
}
?>
<?php
function game7() {
$username2 = $_SESSION['username'];
$score   = $_POST['sc7'];
$winner   = $_POST['w7'];		
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("62.108.32.189:3306","hnlwm_penta","Iyfi24@5","penta");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO game7 (winner, score) VALUES ('$winner', '$score')";
if(mysqli_query($link, $sql)){
    echo('');
} else{
    echo "ERROR: Could not able to execute cmd";
}
 
// Close connection
mysqli_close($link);
}
?></div>				        <div class="grid-container"><br><br>	<center><h2 style="color: white;">ALL Teams</h2><br>
<?php
			$username = "hnlwm_penta"; 
$password = "Iyfi24@5"; 
$database = "penta"; 
$mysqli = new mysqli("62.108.32.189:3306", $username, $password, $database); 
$query = "SELECT * FROM tourny1";


echo '<table class="teams" border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["teamname"];
        $field2name = $row["username"];
        echo '<tr> 
                  <td>'.$field1name.'</td> 
              </tr>';
    }
    $result->free();
} 
	?></center></div>
       