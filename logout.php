<?php
session_start();
    session_unset();
       
    
        session_regenerate_id();
        session_destroy();
        header('location:index.php');
?>