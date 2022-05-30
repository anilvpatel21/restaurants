<?php
session_start();
session_destroy();
header( "Location: http://anilpatel.tech/anil/restaurant/login.php" );
/* Redirect browser */
exit();
?> 