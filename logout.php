<?php
include('header.php');
    
    session_unset();
    session_destroy();
    header('location: index.php');
    include('footer.php');
?>