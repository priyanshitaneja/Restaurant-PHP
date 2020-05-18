<?php

$errors = array();

$conn = new mysqli('localhost', 'root', '', 'foodshaladb');

if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}
?>