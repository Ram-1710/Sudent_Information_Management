<?php
include 'Connection.php';

if(isset($_POST['submit'])){
        $fname= $_POST['fname'];
        $lname= $_POST['lname'];
        $email= $_POST['email'];
        $phno= $_POST['phno'];
        $sid= $_POST['sid'];
        $dob= $_POST['dob'];
        $Cid= $_POST['Cid'];
        $gender= $_POST['gender'];
        $dep= $_POST['dep'];
        $d = "select * from courses where Course_Id= '$Cid'";
    $run = $conn->query($d);

    if($run->rowCount() > 0){
        while ($row = $run->fetch(PDO::FETCH_ASSOC)){

        }

    }

        $query= "INSERT INTO `student`(`S_Id`, `Fname`, `Lname`, `Email`, `Phno`, `Dob`, `Dep`, `Cid`, `Gender`) values ('$sid','$fname','$lname','$email','$phno','$dob','$dep','$Cid','$gender')";
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
?>

<?php
include('sidebar.php');
?>

<style>
<?php include('css/add student.css'); ?>
</style>



<section>
<div id="maincontent">
        <div class=header><p class=con><b>Add Student</b></p></div>
</div>
    <div class="container">
        <div class="title"><b>Student Details</b></div>
        <?php
         if(isset($_SESSION['status'])){
         ?>
         <p style="color: #006622; margin: 3% 0 5% 28%; font-size: 16px"><?php echo $_SESSION['status'];?></p>
         <?php
            unset($_SESSION['status']);
         }
         ?>
        <div class="content">
            <form action="" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">First Name</span>
                        <input type="text" name="fname" placeholder="Enter First name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Last Name</span>
                        <input type="text" name="lname" placeholder="Enter last username" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" name="email" placeholder="Enter email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="text" name="phno" placeholder="Enter phone number" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Student Id</span>
                        <input type="text" name="sid" placeholder="Enter StudentId" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Date of Birth</span>
                        <input type="text" name="dob" placeholder="yyyy-mm-dd" required>
                    </div>

                    <div class="input-box">
                        <span class="details"><label>Course:</label></span>
<?php
    $query ="SELECT course_name, course_id FROM courses";
    $run = $conn->query($query);

    if ($run->rowCount() > 0) {
    $options = array();
    while ($row = $run->fetch(PDO::FETCH_ASSOC)) {
        $options[] = $row;
    }

    }

?>

<?php
    $query ="SELECT department_name, department_id FROM department";
    $run = $conn->query($query);

    if ($run->rowCount() > 0) {
    $departs = array();
    while ($row = $run->fetch(PDO::FETCH_ASSOC)) {
        $departs[] = $row;
    }

    }

?>

<?php
include("connection.php");

?>
<select name="Cid">
   <option>Select Course</option>
  <?php
  foreach ($options as $option) {
  ?>
    <option value="<?php echo $option['course_id'] ?>"><?php echo $option['course_name'] ?> </option>
    <?php
    }
 ?>
</select>

<span class="details" style="margin-top:2rem;" ><label>Department:</label></span>

<select name="dep" style="margin-top:0.5rem;">
   <option>Select Department</option>
  <?php
  foreach ($departs as $depart) {
  ?>
    <option value="<?php echo $depart['department_id'] ?>"><?php echo $depart['department_name'] ?> </option>
    <?php
    }
 ?>
</select>
                    </div>
                </div>
                <div class="gender-details">
                <span class="gender-title">Gender</span><br>
                <div class="category">
                     <label><input type="radio" name="gender" value="male" required>Male</label>
                     <label><input type="radio" name="gender" value="female">Female</label>
                </div>
            </div>
            <div class="button">
            <input type="submit" name="submit" value="Register">
            </div>
        </form>
        </div>
    </div>
</section>


</body>
</html>
