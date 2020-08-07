<?php
require('../db.php');
include("../auth_session.php");
include("header.php");
$username = $_SESSION["username"];
?>
<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
			<h2 style="text-align: center; color: white;">Penta | Tournaments</h2>
        <canvas id="canvas"></canvas>

  
      </div>
      <div class="info"> 
<div class="container">
  <div class="row">
    <div class="col-xl-4 mx-auto">
      <!--Ticket Input Box-->
      <div id="ticketBox">
        <div id="ticketBoxCenter">
Welcome
    </div>
</div>