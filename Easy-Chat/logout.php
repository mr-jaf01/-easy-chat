<?php
session_start();
session_destroy();

header("Refresh:3; url=login.php");


?>