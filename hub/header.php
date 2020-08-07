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
            $query = "SELECT * FROM `game1`";
      
      if ($result = $con->query($query)) {
    if ($row = $result->fetch_assoc()) {
        $t1 = $row["t1"];
		$t2 = $row["t2"];   
		$winner1 = $row["winner"];
		$score1 = $row["score"];
    }
    
} 
?>
<?php
            
            $username = $_SESSION['username'];
            $query = "SELECT * FROM `game2`";
      
      if ($result = $con->query($query)) {
    if ($row = $result->fetch_assoc()) {
		$t3 = $row["t1"];
		$t4 = $row["t2"];
		$winner2 = $row["winner"];
		$score2 = $row["score"];
    }
    
} 
?>
<?php
            
            $username = $_SESSION['username'];
            $query = "SELECT * FROM `game3`";
      
      if ($result = $con->query($query)) {
    if ($row = $result->fetch_assoc()) {
		$t5 = $row["t1"];
		$t6 = $row["t2"];   
		$winner3 = $row["winner"];
		$score3 = $row["score"];
    }
    
} 
?>
<?php
            
            $username = $_SESSION['username'];
            $query = "SELECT * FROM `game4`";
      
      if ($result = $con->query($query)) {
    if ($row = $result->fetch_assoc()) {
		$t7 = $row["t1"];
		$t8 = $row["t2"];   
		$winner4 = $row["winner"];
		$score4 = $row["score"];
    }
    
} 
?>
<?php
            
            $username = $_SESSION['username'];
            $query = "SELECT * FROM `game5`";
      
      if ($result = $con->query($query)) {
    if ($row = $result->fetch_assoc()) {  
		$winner5 = $row["winner"];
		$score5 = $row["score"];
    }
    
} 
?>
<?php
            
            $username = $_SESSION['username'];
            $query = "SELECT * FROM `game6`";
      
      if ($result = $con->query($query)) {
    if ($row = $result->fetch_assoc()) {
		$winner6 = $row["winner"];
		$score6 = $row["score"];
    }
    
} 
?>
<?php
            
            $username = $_SESSION['username'];
            $query = "SELECT * FROM `game7`";
      
      if ($result = $con->query($query)) {
    if ($row = $result->fetch_assoc()) {  
		$winner7 = $row["winner"];
		$score7 = $row["score"];
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
        $ban = $row["ban"];


        

        
    }
    
} 
?>
<?php
if ($ban == "yes") {
  die("<center><p style='color: white;'>security breach<br><br>SYSTEM: you have been banned</p></center>");
}

?>

<div class="wrapper">
    <div class="sidebar">
        <h2>PENTA</h2>
        <ul>
            <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
            <?php
         if($t11 == "1") {
          echo('<li><a href="tourny.php"><i class="fas fa-chess"></i>Tournament</a>');
        }
?>
            <li><a href="team.php"><i class="fas fa-users"></i>Team</a></li></li><br><br><br><br><br><br><br><br><br><br><br><br><center><h3 style="color: white;"><?php if($queued == $username) {
			echo('<li><a style="color: green;" href="treg.php">TOURNAMENT QUEUE</a>');
        }
        ?>
		</h3></center><br><br><br><br><br><br><br><br><br><br><br>
            <?php
         if($username == $admin) {
          echo('<li><a style="color: #ed000f;" href="admin.php"><i class="fas fa-user-shield"></i>Admin</a>');
        }
?>
            <li><a href="profile.php"><i class="fas fa-user"></i>Profile</a></li>
            <li><a href="support.php"><i class="fas fa-question-circle"></i>Support</a></li>
            <li><a href="../logout.php"><i class="fas fa-home"></i>Logout</a></li>
        </ul> 
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
