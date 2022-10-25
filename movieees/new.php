
<?php
include 'connect.php';
if(isset($_POST['submit'])) //isset checks if variable is set and is not null $_post is used to collect data after form submission
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
$result=mysqli_query($conn,$sql);   //performs query on db
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
   <!-- css for adding new movie-->
    <link rel="stylesheet" href="style1.css">
    <title>Movies</title>
  </head>
  <body>
   
   <form method="post"> <!--post method is used to insert,send data and get is used to request data-->
  <div class="form-group">
    <p>Movie name</p> 
    <input type="text" class="form-control" autocomplete="off"
    placeholder="Enter the Name of the Movie" name="movie">
    </div>
<!--grouping is impt as it is easy to use it in css and all-->
    <div class="form-group">
    <p>Year of release</p>
    <input type="date" class="form-control" autocomplete="off" 
    placeholder="Enter the Year in which movie was released" name="released" >
    </div>
    <div class="form-group">
    <p>Producer name</p>
    <input type="text" class="form-control" autocomplete="off"
    placeholder="Enter the Name of the Producer" name="producer">
    </div>
    <div class="form-group">
    <p>Lead Actors</p>
    <input type="text" class="form-control" autocomplete="off"
    placeholder="Enter the Name of Lead Actors" name="actors">
    </div>
    <button type="submit" class="submit"
    name="submit">Submit</button>
</form>
   </div>
  </body>
</html>