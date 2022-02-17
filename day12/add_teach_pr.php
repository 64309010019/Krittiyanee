<?php
include_once "connect.php";

$teacher_id=$_POST['teacher_id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];

$sql="insert into student3 values('$teacher_id','$fname','$lname')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header ("location:show3.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}