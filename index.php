<?php 
require('templates/parts/header.php');





if (session_status() !== PHP_SESSION_ACTIVE) { 
    header('Location: templates/login.php');

}
else { 
    header('Location: templates/dashboard.php');

} 

require('templates/parts/footer.php');?>
