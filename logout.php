<?php
session_start();
    session_unset();
       
    
        session_regenerate_id();
        session_destroy();
        header('location:web_prototype_navbar.php');
?>