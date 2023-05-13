<?php
include 'Connection.php';
?>

<?php
include('sidebar.php');
?>

<style>
<?php include('css/add marks.css'); ?>
</style>


<section>
<div id="maincontent">
        <div class="header"><p class="mt-3"><b>Add Marks</b></p></div>
   </div>

    <div class="card-body">
        <div class="box">
            <form action="" method="POST">
            <div class="form-group">
                  <?php
    $query ="SELECT * from department";
    $result = $conn->query($query);
    if($result->rowCount() > 0){
      $departs = array();
      while ($row = $result->fetch(PDO::FETCH_ASSOC)){
            $departs[] = $row;
      }

    }
?>
                <select class="form-control" name="getid">
                <option value=" ">--Select--</option>
                <?php
                    while($result=mysqli_fetch_array($run)){
                ?>
                <?php
                foreach ($departs as $depart) {
                ?>
                    <option value="<?php echo $depart['Department_Id']; ?>"><?php
                    echo $depart['Department_Name'] ?> </option>
                    <?php
                    }
                ?>
                <?php
                    }
                ?>
                </select>
            </div>
                <input type="submit" name="searchbyid" value="search">
            </form>
        </div>
    <?php

        if(isset($_POST['searchbyid'])){
            $id=$_POST['getid'];
            $query="SELECT * FROM courses where Dep_Id='$id' ";
            $run=mysqli_query($conn, $query);
        }
    ?>

       <div class="main-div">
            <div class="center-div">
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Course Id</th>
                                <th>Course Name</th>
                                <th>Add</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                if(mysqli_num_rows($run) > 0){
                                    while($result=mysqli_fetch_array($run)){
                            ?>
                                        <tr>
                                            <td><?php echo $result['Course_Id']; ?></td>
                                            <td><?php echo $result['Course_Name']; ?></td>
                                            <td><a href="practice.php?id=<?php echo $result['Course_Id']; ?>"><i class="fas fa-edit"></i></a></td>
                                        </tr>
                                        <?php
                                            }
                                            }
                                            else{
                                        ?>
                                        <tr>
                                            <td colspan=1>No Data Found</td>
                                        </tr>
                                        <?php
                                            }
                                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</section>
</body>
</html>
