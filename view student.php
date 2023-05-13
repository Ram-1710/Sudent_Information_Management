<?php
include('sidebar.php');
?>

<style>
<?php include('css/view department.css'); ?>
</style>

<section>
<div id="maincontent">
        <div class=header><p class=con><b>Student Details</b></p></div>
   </div>
<div class="main-div">
    <div class="center-div">
        <div class="table-responsive">
            <table>
            <thead>
                <tr>
                    <th>Student Id</th>
                    <th>Student Name</th>
                    <th>Course</th>
                    <th>Email</th>
                    <th>Phone No</th>
                </tr>
            </thead>

            <tbody>
                      <?php
                       include("connection.php");
    $query ="SELECT * FROM student";
    $run = $conn->query($query);
    if($run->rowCount() > 0){
        while ($row = $run->fetch(PDO::FETCH_ASSOC)){



    }

?>
                <tr>
                    <td><?php echo $run['S_Id']?></td>
                    <td><?php echo $run['Fname']?></td>
                    <td><?php echo $run['Cid']?></td>
                    <td><?php echo $run['Email']?></td>
                    <td><?php echo $run['Phno']?></td>
                </tr>
                <?php } ?>
            </tbody>
            </table>
        </div>
    </div>
</div>
</section>
</body>
</html>
