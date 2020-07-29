<?php 
require('templates/parts/header.php');?>



<?php
require('templates/parts/footer.php');?>
<?php

if (session_status() !== PHP_SESSION_ACTIVE) { 
    header("Location: templates/login.php");
}
else {
    header("Location: templates/dashboard.php");
} 
?>
