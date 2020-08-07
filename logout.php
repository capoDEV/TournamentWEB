<?php
    session_start();
    if(session_destroy()) {
        header("Location: http://capo.network/penta/index.php");
    }
?>