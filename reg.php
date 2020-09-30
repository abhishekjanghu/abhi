<?php

session_start();

$conn = new mysqli('localhost','root','','sreg');

$name = $_POST['name'];
$age = $_POST['age'];
$rollno = $_POST['rollno'];
$m1 = $_POST['m1'];
$m2 = $_POST['m2'];

$stmt = $conn->prepare("insert into stud(firstname , lastname , age , rollno , m1 , m2) values(?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssi", $firstname, $lastname, $age, $rollno, $m1, $m2);
$execval = $stmt->execute();
echo $execval;
header("Location: a2.php");
$stmt->close();
$conn->close();
