<?php
    session_start();
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

    <title>PHP CRUD</title>
  </head>
  <body>
    <h2>PHP CRUD-By Jaivik Parekh</h2>

    <div class="container mt-4">
        <?php include('message.php'); ?>
    <div class = "row">
        <div class = "col-md-12">
            <div class = "card">
                <div class ="card-header">
                    
                    <h4>Student Details 

</h4>
<a href ="student-create.php" class = "btn btn-primary float-end">Add Students</a>

    </div>
    <div class="card-body">
    <div class="" role="alert">
    <strong>Here are the details</strong> 

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th> ID </th>
                <th> Student Name </th>
                <th>Student Email</th>
                <th>Phone</th>
                <th>Student Course</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $query = "SELECT * FROM `students`";
                $query_run = mysqli_query($con, $query);

                if(mysqli_num_rows($query_run) > 0)
                {
                    foreach ($query_run as $student) 
                    {
                       // echo $student['Name'];
                        # code...
                        ?>
                        <tr>
                            <td><?= $student['Id']; ?></td>
                            <td><?= $student['Name']; ?></td>
                            <td><?= $student['Email']; ?></td>
                            <td><?= $student['Phone']; ?></td>
                            <td><?= $student['Course']; ?></td>
                            <td>
                                <a href="student-view.php?id=<?=$student['Id']?>" class="btn btn-info btn-sm">View</a>
                                <a href="student-edit.php?id=<?=$student['Id']?>" class="btn btn-success btn-sm">Edit</a>
                                <form action = "code.php" method = "POST" class = "d-inline">
                                <button type="submit" name= "delete_student" value = "<?= $student['Id'];?>" class=" btn btn-danger btn-sm">Delete</button>
                                     
                                </form>
                            </td>
                         </tr>
                        <?php 
                    }
                }
                else
                {
                    echo "<h5> No Record Found </h5>";
                }
            ?>
           
        </tbody>
    </table>
         
    </div>

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