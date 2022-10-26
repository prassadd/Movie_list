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
    
    <!-- css required for form in view section -->
    <link rel="stylesheet" href="style.css">

    <title>Movies</title>
  </head>
  <body>
   <div class="container my-3">
   <form method="get">
  <div class="form-group">
    <p>Movie name</p> <!--instead of label p is used so that box comes below text-->
    
    <input type="text" class="form-control" value="<?php echo $movie;?>"
    disabled
    placeholder="Enter the Name of the Movie" name="movie">

    </div>
    <div class="form-group">
    <p>Year of release</p>
    <input type="date" class="form-control" value="<?php echo $released;?>" 
    disabled placeholder="Enter the Year in which movie was released" name="released" >
    </div>
    <div class="form-group">
    <p>Producer name</p>
    <input type="text" class="form-control" value="<?php echo $producer;?>"
    disabled
    <input type="text" class="form-control" 
    placeholder="Enter the Name of the Producer" name="producer">
    </div>
    <div class="form-group">
    <p>Lead Actors</p>
    <input type="text" class="form-control" value="<?php echo $actors;?>"
    disabled
    placeholder="Enter the Name of Lead Actors" name="actors">
    </div>
</form>
   </div>

   
  </body>
</html>