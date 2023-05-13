<?php
include('sidebar.php');
?>

<style>
<?php include('css/view department.css'); ?>
</style>

<section>
<div id="maincontent">
        <div class=header><p class=con><b>Department</b></p></div>
   </div>
<div class="main-div">
    <div class="center-div">
        <div class="table-responsive">
            <table>
            <thead>
                <tr>
                    <th>Department Id</th>
                    <th>Department Name</th>
                </tr>
            </thead>

            <tbody>
            <?php
            include 'Connection.php';
            $query= "select * from department";
            $run= $conn->query($query);
            if($run->rowCount() > 0){
                while ($row = $run->fetch(PDO::FETCH_ASSOC)){


            }

            ?>
                <tr>
                    <td><?php echo $run['Department_Id']?></td>
                    <td><?php echo $run['Department_Name']?></td>
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
