<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "login_system";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("সংযোগ ব্যর্থ হয়েছে: " . $conn->connect_error);
}
?>
