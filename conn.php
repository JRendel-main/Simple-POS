<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'posbooth';

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    echo "<script>
        alert('Connection failed: " . mysqli_connect_error() . "'')
    ";
}
?>