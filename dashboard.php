<?php
include('sidebar.php');
?>

<style>
<?php include('css/dashboard.css'); ?>
</style>

<section>
    <div id="maincontent">
        <div class=header><p class=wel>Welcome Admin<p></div>
        <div class=header><p class=con><b>Dashboard</b></p></div>
    </div>
    <main>
            <div class="cards">
               <div class="card-single">
                    <div>
                       <?php
                       include("connection.php");
    $query ="SELECT * FROM student";
    $run = $conn->query($query);
    if($run->rowCount() > 0){
        while ($row = $run->fetch(PDO::FETCH_ASSOC)){

        }

    }

?>
                        <span><b>Total Students</b></span>
                    </div>
                    <div>
                        <span class="fas fa-user-graduate"></span>
                    </div>
                </div>

                <div class="card-single">
                  <div>
                                         <?php
                       include("connection.php");
    $query ="SELECT * FROM student";
    $run = $conn->query($query);
    if($run->rowCount() > 0){
        while ($row = $run->fetch(PDO::FETCH_ASSOC)){

        }

    }

?>
                        <span><b>Departments</b></span>
                    </div>
                    <div>
                        <span class="fas fa-university"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                      <?php
    $query ="SELECT * FROM courses";
    $run = $conn->query($query);
    if($run->rowCount() > 0){
        while ($row = $run->fetch(PDO::FETCH_ASSOC)){

        }

    }

?>
                        <span><b>Courses</b></span>
                    </div>
                    <div>
                        <span class="fas fa-book"></span>
                    </div>
                </div>
            </div>
        </main>

</section>
  </body>
</html>

