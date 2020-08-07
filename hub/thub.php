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
<h2 style="text-align: center; color: white;">Tournament HUB</h2>
        </div>
        <div class="info">
			<center><a class="myButton" href="lobby.php"><h2 style="color: black;">Game Lobby</h2></a></center><br>
<center><table border='1' cellspacing='1' cellpadding='1'>
<tr><th colspan='2' width='120'><b>Round 1</b></th></th><th colspan='2' width='120'><b>Round 2</b></th></th><th colspan='2' width='120'><b>Final</b></th><th width='120'><b>Winner</b></th></tr>
<tr><td colspan='2'>&nbsp;</td><td colspan='2' rowspan='2'></td><td colspan='2' rowspan='4'></td><td rowspan='8'></td></tr>
<tr><td><?php echo htmlspecialchars($t1); ?></td><td width='20'></td></tr>
<tr><td align='center'><?php if ($score1 == NULL) { 
	echo("Score 1 ");
} else {
	echo htmlspecialchars($score1);
}?></td><td></td><td><?php if ($winner1 == NULL) { 
	echo("Round 1 Winner");
} else {
	echo htmlspecialchars($winner1);
}?></td><td width='20'></td></tr>
<tr><td><?php echo htmlspecialchars($t2); ?></td><td></td><td rowspan='3' align='center'><?php if ($score5 == NULL) { 
	echo("Score 5 ");
} else {
	echo htmlspecialchars($score5);
}?></td><td></td></tr>
<tr><td colspan='2'></td><td></td><td><?php if ($winner5 == NULL) { 
	echo("Round 2 Winner");
} else {
	echo htmlspecialchars($winner5);
}?></td><td width='20'></td></tr>
<tr><td><?php echo htmlspecialchars($t3); ?></td><td></td><td></td><td rowspan='7' align='center'><?php if ($score7 == NULL) { 
	echo("Score 7 ");
} else {
	echo htmlspecialchars($score7);
}?></td><td></td></tr>
<tr><td align='center'><?php if ($score2 == NULL) { 
	echo("Score 2 ");
} else {
	echo htmlspecialchars($score2);
}?></td><td></td><td><?php if ($winner2 == NULL) { 
	echo("Round 1 Winner");
} else {
	echo htmlspecialchars($winner2);
}?><td></td><td></td></tr>
<tr><td><?php echo htmlspecialchars($t4); ?></td><td></td><td colspan='2' rowspan='3'></td><td></td></tr>
<tr><td colspan='2'></td><td></td><td><?php if ($winner7 == NULL) { 
	echo("Champion");
} else {
	echo htmlspecialchars($winner7);
}?></td></tr>
<tr><td><?php echo htmlspecialchars($t5); ?></td><td></td><td></td><td rowspan='8'></td></tr>
<tr><td align='center'><?php if ($score3 == NULL) { 
	echo("Score 3 ");
} else {
	echo htmlspecialchars($score3);
}?></td><td></td><td><?php if ($winner3 == NULL) { 
	echo("Round 1 Winner");
} else {
	echo htmlspecialchars($winner3);
}?></td><td></td><td></td></tr>
<tr><td><?php echo htmlspecialchars($t6); ?></td><td></td><td rowspan='3' align='center'><?php if ($score6 == NULL) { 
	echo("Score 6 ");
} else {
	echo htmlspecialchars($score6);
}?></td><td></td><td></td></tr>
<tr><td colspan='2'></td><td></td><td><?php if ($winner6 == NULL) { 
	echo("Round 2 Winner");
} else {
	echo htmlspecialchars($winner6);
}?></td><td></td></tr>
<tr><td><?php echo htmlspecialchars($t7); ?></td><td></td><td></td><td colspan='2' rowspan='3'></td></tr>
<tr><td align='center'><?php if ($score4 == NULL) { 
	echo("Score 4 ");
} else {
	echo htmlspecialchars($score4);
}?></td><td></td><td><?php if ($winner4 == NULL) { 
	echo("Round 1 Winner");
} else {
	echo htmlspecialchars($winner4);
}?></td><td></td></tr>
<tr><td><?php echo htmlspecialchars($t8); ?></td><td></td><td colspan='2'></td></tr>
</table><center>
				<br><br>	<center><h2 style="color: white;">ALL Teams</h2><br>
<?php
			$username = "hnlwm_penta"; 
$password = "Iyfi24@5"; 
$database = "penta"; 
$mysqli = new mysqli("62.108.32.189:3306", $username, $password, $database); 
$query = "SELECT * FROM tourny1";


echo '<table class="teams" border="0" cellspacing="2" cellpadding="2"> 
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