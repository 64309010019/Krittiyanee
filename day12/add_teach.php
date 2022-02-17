<?php include_once 'head.php'?>
<?php require_once 'jumbotron.php';?>
<?php require_once 'navigater.php';?>


<div class="container" style="margin-top:30px">
        <h3>เพิ่มข้อมูลครู</h3>
    <div class='col-md-4'>
        <form action="add_teach_pr.php" method='post'>
            <div class="form-group">
                <label for="teacher_id">teacher_id :</label>
                <input type="text" class="form-control" placeholder="teacher_id" name="teacher_id" >
                
            <div class="form-group ">
                <label for="fname">Fname:</label>
                <input type="text" class="form-control" placeholder="Fname" name="fname">
            
            </div>
            <div class="form-group ">
                <label for="lname">Lname:</label>
                <input type="text" class="form-control" placeholder="Lname" name="lname">
            
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-info">Submit</button>
            </div>
        </form>
        <br>
    </div>    

</div>

<?php include_once 'footer.php'?>

</body>
</html>