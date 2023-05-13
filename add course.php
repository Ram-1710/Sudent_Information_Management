<?php
include 'Connection.php';
if(isset($_POST['submit'])){
   if(!empty($_POST['courseid'])&& !empty($_POST['coursename'])){
       $cid= $_POST['courseid'];
       $cname= $_POST['coursename'];
       $dep= $_POST['dep'];
       $d = "select * from department where Department_Name";
    $run = $conn->query($d);
    if($run->rowCount() > 0){
        while ($row = $run->fetch(PDO::FETCH_ASSOC)){

        }

    }
       $query= "insert into courses(Dep_Id, Course_Id, Course_Name) values('$dep', '$cid','$cname')";
     $run = $conn->query($query);

        if($run->rowCount() > 0){
            while($row = $run->fetch(PDO::FETCH_ASSOC)){

            }
            $_SESSION['status']="**Data Added Successfully";
          }
    else{
       echo "All fields required";
    }
 }
}
?>

<?php
include('sidebar.php');
?>

<style>
<?php include('css/add department.css'); ?>
</style>

<section>
   <div id="maincontent">
        <div class=header><p class=con><b>Add Course</b></p></div>
   </div>
   <div class="container">
       <form action="" method="post">
         <h2>COURSE</h2>
            <div class="form-group">
                <label>Department:</label>
   <?php
    $query ="SELECT Department_Name, Department_Id from department";
    $result = $conn->query($query);

    if($result->rowCount() > 0){
      $departs = array();
      while ($row = $result->fetch(PDO::FETCH_ASSOC)){
            $departs[] = $row;
      }

    }
?>
<?php
include("connection.php");

?>
<select name="dep">
   <option>Select Department</option>
  <?php
  foreach ($departs  as $depart) {
  ?>
    <option value="<?php echo $depart['Department_Id']; ?>"><?php
    echo $depart['Department_Name'] ?> </option>
    <?php
    }
   ?>
</select>
            </div>
          <div class="form-group">
             <label>Course Id:</label><input type="text" class="form-control" name="courseid" placeholder="Id" required>
          </div>
          <div class="form-group">
             <label>Course Name:</label><input type="text" class="form-control" name="coursename" placeholder="Name" required>
          </div>
          <button type="submit" class="btn" name="submit">ADD</button>
       </form>
   </div>
</section>
</body>
</html>
