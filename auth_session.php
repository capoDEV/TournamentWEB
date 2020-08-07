<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: https://capo.network/penta/index.php");
        exit();
    }
?>