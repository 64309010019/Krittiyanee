<?php
include_once('connect.php');
$teacher_id=$_GET['teacher_id'];

$sql = "DELETE FROM teacher_chon WHERE teacher_id = '$teacher_id' ";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
  header("location:show3.php");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>