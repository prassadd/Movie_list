<?php
include 'connect.php'; //db connection
//using get method variables from url
$srno=$_GET['viewsrno'];
$sql="SELECT * FROM `movies` WHERE srno=$srno";
//echo $sql;
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
//print_r($row); //to print array in browser we use print_r
       $movie=$row['movie'];
       $released= $row['released'];
       $producer= $row['producer'];
       $actors=$row['actors'];

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
    
    <input type="text" class="form-control" value="<?php echo $movie;?>"
    disabled
    placeholder="Enter the Name of the Movie" name="movie">

    </div>
    <div class="form-group">
    <label>Year of release</label>
    <input type="date" class="form-control" value="<?php echo $released;?>" 
    disabled placeholder="Enter the Year in which movie was released" name="released" >
    </div>
    <div class="form-group">
    <label>Producer name</label>
    <input type="text" class="form-control" value="<?php echo $producer;?>"
    disabled
    <input type="text" class="form-control" 
    placeholder="Enter the Name of the Producer" name="producer">
    </div>
    <div class="form-group">
    <label>Lead Actors</label>
    <input type="text" class="form-control" value="<?php echo $actors;?>"
    disabled
    placeholder="Enter the Name of Lead Actors" name="actors">
    </div>
</form>
   </div>

   
  </body>
</html>