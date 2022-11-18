<?php

include('../includes/header.php');

session_destroy();

header('location: login.php');

?>