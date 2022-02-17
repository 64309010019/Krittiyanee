<?php include_once 'head.php';?>
<?php include_once 'jumbotron.php';?>
<?php include_once 'navigater.php';
include_once('connect.php'); 
$sql = "select * from teacher_chon";
$result = mysqli_query($conn, $sql);
?>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

<div class="container" style="margin-top:30px">
  <!-- <div class="row"> -->
  <table class="table" id="list">
    <thead><tr>
            <th>Teacher_id</th>
            <th>Fname</th>
            <th>Lname</th>
            <th>Process</th>
        </tr> 
    </thead>
    <tbody><?php
    while($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $row['teacher_id']?></td>
            <td><?php echo $row['fname']?></td>
            <td><?php echo $row['lname']?></td>
            <td>
              <a href="edit_teach.php?teacher_id=<?php echo $row['teacher_id']?>">
              <button class="btn bg-success"><i class="fas fa-edit"></i> แก้ไข</button>
              </a>

              <a href="del_teach.php?teacher_id=<?php echo $row['teacher_id']?>">
              <button class="btn bg-danger"><i class="fas fa-trash-alt"></i> ลบ</button>
              </a>
            </td>
        </tr>
        <?php
    }
    ?>
    </tbody>  
    </table>

    
  <!-- </div> -->
</div>
<script>
  $(document).ready( function () {
    $('#list').DataTable();
  } );
</script>


<?php include_once 'footer.php' ?>

</body>
</html>