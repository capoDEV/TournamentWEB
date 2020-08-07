<?php
require('../db.php');
include("../auth_session.php");
include("header.php");
$username = $_SESSION["username"];
?>
<head>
<style>
body {
  padding: 0;
  margin: 0;
}
#ticketBox {
  padding: 1em;
  background: red;
  background-color: orange;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
#ticketBoxTwo {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  padding: 1em;
  background-color: lightgrey;
}
#confirmation {
  display: none;
}
#goBack {
  display: none;
}
#deleteTicket {
  display: none;
}
#closeTicket {
  display: none;
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

</style>
</head>
<?php
   if(array_key_exists('button1', $_POST)) { 
            create(); 
        } ?>
<body>
<div class="main_content">
        <div class="header">

Open Tickets: <strong><?php $result = $con->query("SELECT * FROM tickets WHERE username='$username' AND status='Open'"); //Player ready count
$rows = $result->num_rows;
echo "$rows";
        ?>


<h2 style="text-align: center; color: white;">Support Panel</h2>


        </div>
        <div class="info">
        
        <div class="grid-container">
       

<form action="" method = "post">
<div class="container">
  <div class="row">
    <div class="col-xl-4 mx-auto">
      <!--Ticket Input Box-->
      <div id="ticketBox">
        <div id="ticketBoxCenter">
          <label class="mt-3">Subject</label>
          <input name="penis" id="mainIssue" class="form-control"><br>
          <label class="mt-3">Details </label>
          <textarea name="clit" id="details" class="form-control" rows="2"></textarea><br>
          <label class="mt-3">Severity</label>
          <select name="prio" id="prio" class="form-control">
              <option>Low</option>
              <option>Normal</option>
              <option>High</option>
              <option>Urgent</option>
            </select><br>
          <div class="text-center">
            <p id="errMsg" class="text-center mt-2"></p>
            <button class="myButton" type="submit" name="button1" onclick="create()" id="nigger" style="font-size:110%;"> <i class=""></i> Create Ticket</button>
          </div>
        </div>
  </div>

</div>
      </form>
</div></div>

<?php
function create() {
$username2 = $_SESSION['username'];
$name   = $_POST['penis'];
$name = htmlspecialchars($name);
$key   = $_POST['clit'];
$key = htmlspecialchars($key);
$create_datetime = date("F j, Y, g:i a");
$priority = $_POST['prio'];
$priority = htmlspecialchars($priority);
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("62.108.32.189:3306","hnlwm_penta","Iyfi24@5","penta");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO tickets (username, subject, content, status, create_datetime, priority) VALUES ('$username2', '$name', '$key', 'Open', '$create_datetime', '$priority')";
if(mysqli_query($link, $sql)){
    echo('<div class="main_content"><div class="info" style="background: red;"><h2 style="text-align: center; color: white;">Successfully created Ticket!</h2></div></div>');
header("Refresh:1.5");
} else{
    echo "<center>ERROR: Could not able to execute cmd</center>";
}
 
// Close connection
mysqli_close($link);
}
?>