<?php

include("db.class.php");

// Open the base (construct the object):
$base="BFI";
$server="localhost";
$user="root";
$pass="";
$db = new DB($base, $server, $user, $pass);
?>