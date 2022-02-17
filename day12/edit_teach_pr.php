<?php
include_once "connect.php";

$teacher_id=$_POST['teacher_id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];

$sql="update teacher_chon set fname='$fname' ,lname='$lname' where teacher_id='$teacher_id' ";
//echo $sql; exit();
if (mysqli_query($conn, $sql)) {
    echo "New record update successfully";
header ("location:show3.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
