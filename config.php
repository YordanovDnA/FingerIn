<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'fingerprint';

$conn = new mysqli($hostname, $username, $password, $dbname) or die("Can not connect to the database!");

?>