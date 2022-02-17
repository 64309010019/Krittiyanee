<?php include_once 'head.php';?>
<?php require_once 'jumbotron.php';?>
<?php require_once 'navigater.php';?>
<?php include_once('connect.php'); 

$teacher_id=$_GET['teacher_id'];
$sql="SELECT * FROM teacher_chon WHERE teacher_id='$teacher_id' ";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>

<div class="container" style="margin-top:30px;">
    <h3>แก้ไขข้อมูลครู</h3>
    <div class='col-md-4'>
        <form action="edit_teach_pr.php" method='post'>
            <div class="form-group">
                <label for="teacher_id">teacher_id:</label>
                <input type="text" class="form-control" value="<?php echo $teacher_id ?>" name="teacher_id" readonly>
            </div>
            <div class="form-group">
                <label for="fname">Fname:</label>
                <input type="text" class="form-control" value="<?php echo $row['fname'] ?>" name="fname" >
                
            </div>
            <div class="form-group">
                <label for="lname">Lname:</label>
                <input type="text" class="form-control" value="<?php echo $row['lname'] ?>" name="lname" >
                
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-info">Submit</button>
            </div>
            
        </form>
        <br>
    </div>
</div>