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
            loli(); 
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

<h2 style="text-align: center; color: white;">Team Panel</h2>


        </div>
        <div class="info">
        <center><form action="" method = "post">
				      <p>Team Name:</p><br>
				<input name="user" size="15" style="height: 19px;"  type="text"><br><br>
                <button type="submit" name="button13" onclick="teams()" id="nigger2" class="myButton" style="font-size:100%;"> <i class=""></i>Terminate Team</button></form>

<?php
function teams() {
$username2 = $_SESSION['username'];
$team   = $_POST['user'];	
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("62.108.32.189:3306","hnlwm_penta","Iyfi24@5","penta");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "DELETE FROM team WHERE teamname='$team'";
if(mysqli_query($link, $sql)){
    echo('');
} else{
    echo "ERROR: Could not able to execute cmd";
}
 
// Close connection
mysqli_close($link);
}
?>
       <br><br> <center><h2 style="color: white;">ALL Registered Teams</h2><br>
<?php
			$username = "hnlwm_penta"; 
$password = "Iyfi24@5"; 
$database = "penta"; 
$mysqli = new mysqli("62.108.32.189:3306", $username, $password, $database); 
$query = "SELECT * FROM team";


echo '<table class="teams" border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Team Name</font> </td> 
          <td> <font face="Arial">Team Captain</font> </td> 
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["teamname"];
        $field2name = $row["user"];
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
              </tr>';
    }
    $result->free();
} 
?></center>