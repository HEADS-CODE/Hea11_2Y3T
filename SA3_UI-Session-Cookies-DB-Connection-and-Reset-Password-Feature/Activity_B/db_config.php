<?php
$conn = mysqli_connect("localhost", "root", "", "db_activity_b");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>