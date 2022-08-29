<?php 

require 'dbcon.php';
?>

<!doctype html>
<html lang="En">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">

    <title>Student Edit</title>
  </head>
  <body>
    
    
  
  </div>
</nav>
 <div class="container mt-5">
 <div class="" role="">
  
  
</div>
    <div class = "row">
        <div class = "col-md-17">
            <div class = "card">
                <div class ="card-header">
                    <h4>Student View Details</h4>
                      <a href = "index.php" class="btn btn-danger float-end">Back</a>

 </div>
 <div class = "card-body">
    <?php
    if(isset($_GET['id']))
    {
        $student_id = mysqli_real_escape_string($con, $_GET['id']);
        $query = "SELECT * FROM `students` WHERE id='$student_id' ";
        $query_run = mysqli_query($con, $query);

        if(mysqli_num_rows($query_run) > 0 )
        {
            $student = mysqli_fetch_array($query_run);
            
            
            ?>
            

    
    <form action="code.php" method="POST">
        

    <div class ="mb-3">
        <label>Student Name</label>
        
        <p class ="">
        <?=$student['Name'];?>
        </p>
        </div>
    <div class ="mb-3">
        <label>Student Email</label>
        <p class ="">
        <?=$student['Email'];?>
        </p>
        
    </div>
    <div class ="mb-3">
        <label>Phone</label>
        <p class ="">
        <?=$student['Phone'];?>
        </p>
    </div>
    <div class ="mb-3">
        <label>Student Course</label>
        <p class ="">
        <?=$student['Course'];?>
        </p>
    

    
</form>
<?php
        }
        else
        {
            echo '<h4> No Such Id found</h4>';
        }
    }

    ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    -->
  </body>
</html>