<?php error_reporting (E_ALL ^ E_NOTICE); ?> 
<?php
include 'connect.php';
if(isset($_POST['submit']))
{   
    //db columns=names given in class form-group
    $movie=$_POST['movie'];
    $released=$_POST['released'];
    $producer=$_POST['producer'];
    $actors=$_POST['actors'];
    //values are passed 

    /*writing insert query
    create sql variable(any name)
    "insert into `table name`(table columns,)values('$values passed(names should not have spaces')*/ 

$sql="insert into `movies`(movie,released,producer,actors)values('$movie','$released','$producer','$actors')";
//to execute query create one variable (any name)
$result=mysqli_query($conn,$sql);   
//mysqli_query takes 2 parameters connection variable and query variable
//to check if query has executed successfully
if($result)//if true then show successfully
{
  // echo "data inserted successfully"; (this was removed and directly after adding new movie display is displayed using line below )
  header('location:display.php');
}
else //error
{
    die(mysqli_error($conn));
}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Movies</title>
  </head>
  <body>
   <div class="container my-3">
   <form method="post">
  <div class="form-group">
    <label>Movie name</label>
    <input type="text" class="form-control" autocomplete="off"
    placeholder="Enter the Name of the Movie" name="movie">

    </div>
    <div class="form-group">
    <label>Year of release</label>
    <input type="date" class="form-control" autocomplete="off" 
    placeholder="Enter the Year in which movie was released" name="released" >
    </div>
    <div class="form-group">
    <label>Producer name</label>
    <input type="text" class="form-control" autocomplete="off"
    placeholder="Enter the Name of the Producer" name="producer">
    </div>
    <div class="form-group">
    <label>Lead Actors</label>
    <input type="text" class="form-control" autocomplete="off"
    placeholder="Enter the Name of Lead Actors" name="actors">
    </div>
  
    <button type="submit" class="btn btn-primary"
    name="submit">Submit</button>
  
</form>
   </div>

   
  </body>
</html>