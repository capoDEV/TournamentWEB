<?php
require('../db.php');
include("../auth_session.php");
$username = $_SESSION["username"];
?>
<head>
<link rel="stylesheet/less" type="text/css" href="styles.less" />
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<title>PENTA</title>
</head>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<?php
            
            $username = $_SESSION['username'];
            $query = "SELECT * FROM `queue` WHERE username='$username'";
      
      if ($result = $con->query($query)) {
    if ($row = $result->fetch_assoc()) {
        $queued = $row["username"];
        

        
    }
    
} 
?>
<?php
            
            $username = $_SESSION['username'];
            $query = "SELECT * FROM `tourny1` WHERE username='$username'";
      
      if ($result = $con->query($query)) {
    if ($row = $result->fetch_assoc()) {
        $player = $row["username"];
        

        
    }
    
} 
?>
<?php
            
            $username = $_SESSION['username'];
            $query = "SELECT * FROM `users` WHERE rank='Admin' AND username='$username'";
      
      if ($result = $con->query($query)) {
    if ($row = $result->fetch_assoc()) {
        $admin = $row["username"];
        $id = $row["id"];
        

        
    }
    
} 
?>
<?php
            
            $username = $_SESSION['username'];
            $query = "SELECT * FROM `settings`";
      
      if ($result = $con->query($query)) {
    if ($row = $result->fetch_assoc()) {
        $teamaddon = $row["teamaddon"];
        $tournyaddon = $row["tournyaddon"];
        $t11 = $row["t11"];
        $t1reg = $row["t1reg"];
        $t1status = $row["t1status"];
        

        
    }
    
} 
?>
<?php
            
            $username = $_SESSION['username'];
            $query = "SELECT * FROM `team` WHERE user='$username'";
      
      if ($result = $con->query($query)) {
    if ($row = $result->fetch_assoc()) {
        $team = $row["user"];
        $tname = $row["teamname"];
        $tkey = $row["tkey"];
        $trank = $row["rank"];
        

        
    }
    
} 
?>
<?php
            
            $username = $_SESSION['username'];
            $query = "SELECT * FROM `users` WHERE username='$username'";
      
      if ($result = $con->query($query)) {
    if ($row = $result->fetch_assoc()) {
        $user = $row["username"];
        $id = $row["id"];
        $email = $row["email"];
        $create_datetime = $row["create_datetime"];
        $role = $row["rank"];

        

        
    }
    
} 
?>

<div class="wrapper">
    <div class="sidebar">
        <h2>PENTA</h2>
        <ul>
            <li><a href="admin.php"><i class="fas fa-home"></i>Main Panel</a></li>
            <li><a href="admintourny.php"><i class="fas fa-chess"></i>Tourny Panel</a></li>
            <li><a href="adminteam.php"><i class="fas fa-users"></i>Team Panel</a></li>
			            <li><a href="adminprofile.php"><i class="fas fa-user"></i>User Panel</a></li>
            <li><a href="adminsupport.php"><i class="fas fa-question-circle"></i>Support Panel</a></li>
            <li><a href="index.php" style="color: green;"><i class="fas fa-home"></i>BACK</a></li><br><br><br><br><br><br><br><br><br><br><br><br><center><h3 style="color: white;"><?php if($queued == $username) {
			echo('<li><a style="color: green;" href="treg.php">TOURNAMENT QUEUE</a>');
        }
        ?>
		</h3></center><br><br><br><br><br><br><br><br><br><br><br>

        </ul> 
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
