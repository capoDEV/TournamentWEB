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
<div class="main_content">
        <div class="header">
        Registered Teams: <?php $result = $con->query("SELECT * FROM tourny1"); //Player ready count
$rows = $result->num_rows;
echo "$rows";
        ?>
<h2 style="text-align: center; color: white;">Game Lobby</h2>
        </div>
        <div class="info">
			<center><a class="myButton" href="thub.php"><h2 style="color: black;">Tourny Hub</h2></a></center><br>
			<?php
if($tname == $winner7) {
die('<h2 style="text-align: center; color: white;">Congratulations Team '. $tname . '. you have won the tournament!</h2><br>');
}

?>
			<?php
if($tname == $winner6) {
die('<h2 style="text-align: center; color: white;">Welcome Team '. $tname . '. You have entered Round 2!</h2><br>
<h3 style="text-align: center; color: white;">Lobby information - Finals!</h3><br>
<p style="text-align: center; color: white;"> Next Opponent: '. $winner5 .'</p><br>
<p style="text-align: center; color: white;"> Host: '. $winner5 .'</p><br>');
}

?>
			<?php
if($tname == $winner5) {
die('<h2 style="text-align: center; color: white;">Welcome Team '. $tname . '. You have entered Round 2!</h2><br>
<h3 style="text-align: center; color: white;">Lobby information - Finals!</h3><br>
<p style="text-align: center; color: white;"> Next Opponent: '. $winner6 .'</p><br>
<p style="text-align: center; color: white;"> Host: '. $winner5 .'</p><br>');
}

?>
			<?php
if($tname == $winner1) {
die('<h2 style="text-align: center; color: white;">Welcome Team '. $tname . '. You have entered Round 2!</h2><br>
<h3 style="text-align: center; color: white;">Lobby information - Semi-Finals!</h3><br>
<p style="text-align: center; color: white;"> Next Opponent: '. $winner2 .'</p><br>
<p style="text-align: center; color: white;"> Host: '. $winner2 .'</p><br>');
}

?>
<?php
if($tname == $winner2) {
die('<h2 style="text-align: center; color: white;">Welcome Team '. $tname . '. You have entered Round 2!</h2><br>
<h3 style="text-align: center; color: white;">Lobby information - Semi-Finals!</h3><br>
<p style="text-align: center; color: white;"> Next Opponent: '. $winner1 .'</p><br>
<p style="text-align: center; color: white;"> Host: '. $winner2 .'</p><br>');
}

?>
<?php
if($tname == $winner3) {
die('<h2 style="text-align: center; color: white;">Welcome Team '. $tname . '. You have entered Round 2!</h2><br>
<h3 style="text-align: center; color: white;">Lobby information - Semi-Finals!</h3><br>
<p style="text-align: center; color: white;"> Next Opponent: '. $winner4 .'</p><br>
<p style="text-align: center; color: white;"> Host: '. $winner4 .'</p><br>');
}

?>
<?php
if($tname == $winner4) {
die('<h2 style="text-align: center; color: white;">Welcome Team '. $tname . '</h2><br>
<h3 style="text-align: center; color: white;">Lobby information - Semi-Finals!</h3><br>
<p style="text-align: center; color: white;"> Next Opponent: '. $winner3 .'</p><br>
<p style="text-align: center; color: white;"> Host: '. $winner4 .'</p><br>');
}

?>



<?php
if($tname == $t1) {
echo('<h2 style="text-align: center; color: white;">Welcome Team '. $tname . ' !</h2><br>
<h3 style="text-align: center; color: white;">Lobby information!</h3><br>
<p style="text-align: center; color: white;"> Next Opponent: '. $t2 .'</p><br>
<p style="text-align: center; color: white;"> Host: '. $t1 .'</p><br>');
}

?>
<?php
if($tname == $t2) {
echo('<h2 style="text-align: center; color: white;">Welcome Team '. $tname . ' !</h2><br>
<h3 style="text-align: center; color: white;">Lobby information!</h3><br>
<p style="text-align: center; color: white;"> Next Opponent: '. $t1 .'</p><br>
<p style="text-align: center; color: white;"> Host: '. $t1 .'</p><br>');
}

?>
<?php
if($tname == $t3) {
echo('<h2 style="text-align: center; color: white;">Welcome Team '. $tname . ' !</h2><br>
<h3 style="text-align: center; color: white;">Lobby information!</h3><br>
<p style="text-align: center; color: white;"> Next Opponent: '. $t4 .'</p><br>
<p style="text-align: center; color: white;"> Host: '. $t3 .'</p><br>');
}

?>
<?php
if($tname == $t4) {
echo('<h2 style="text-align: center; color: white;">Welcome Team '. $tname . ' !</h2><br>
<h3 style="text-align: center; color: white;">Lobby information!</h3><br>
<p style="text-align: center; color: white;"> Next Opponent: '. $t3 .'</p><br>
<p style="text-align: center; color: white;"> Host: '. $t3 .'</p><br>');
}

?>
<?php
if($tname == $t5) {
echo('<h2 style="text-align: center; color: white;">Welcome Team '. $tname . ' !</h2><br>
<h3 style="text-align: center; color: white;">Lobby information!</h3><br>
<p style="text-align: center; color: white;"> Next Opponent: '. $t6 .'</p><br>
<p style="text-align: center; color: white;"> Host: '. $t5 .'</p><br>');
}

?>
<?php
if($tname == $t6) {
echo('<h2 style="text-align: center; color: white;">Welcome Team '. $tname . ' !</h2><br>
<h3 style="text-align: center; color: white;">Lobby information!</h3><br>
<p style="text-align: center; color: white;"> Next Opponent: '. $t5 .'</p><br>
<p style="text-align: center; color: white;"> Host: '. $t5 .'</p><br>');
}

?>
<?php
if($tname == $t7) {
echo('<h2 style="text-align: center; color: white;">Welcome Team '. $tname . ' !</h2><br>
<h3 style="text-align: center; color: white;">Lobby information!</h3><br>
<p style="text-align: center; color: white;"> Next Opponent: '. $t8 .'</p><br>
<p style="text-align: center; color: white;"> Host: '. $t7 .'</p><br>');
}

?>
<?php
if($tname == $t8) {
echo('<h2 style="text-align: center; color: white;">Welcome Team '. $tname . ' !</h2><br>
<h3 style="text-align: center; color: white;">Lobby information!</h3><br>
<p style="text-align: center; color: white;"> Next Opponent: '. $t7 .'</p><br>
<p style="text-align: center; color: white;"> Host: '. $t7 .'</p><br>');
}

?>
