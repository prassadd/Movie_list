<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Movie List</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    </head>

    <body>
  <!--creating button-->
  <div class="container">
    <button class="btn-primary my-3"><a href="new.php" class="text-light">Add Movie</a>


</button>
 <!--btn primary is a class used for button styling and margin from above and bottom=3
button is wrapped inside the anchor tag
text colour on button is changed so that it is visible
table is created below button class-->
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sr No</th>
      <th scope="col">Name of the Movie</th>
      <th scope="col">Actions</th>  
    </tr>
  </thead>
  <tbody>
    <!--displaying your data-->
    <?php
    $sql="select * from `movies`";
    $result=mysqli_query($conn,$sql);
    /* to print one by one
    if($result)
    {
       
        echo $row['movie'];
        echo $row['released'];
        echo $row['producer'];
        $row=mysqli_fetch_assoc($result);
        echo $row['movie'];
        echo $row['released'];
        echo $row['producer'];
    }*/

    //using while loop to print all togather to minimize code
    while($row=mysqli_fetch_assoc($result))
    {
        $srno=$row['srno'];
        $movie=$row['movie'];
       
        //to display in table
        
        echo ('<tr>
        <th scope="row">'.$srno.'</th>
        <td>'.$movie.'</td>
       
        <td>
        <button class="btn btn-primary"><a href="view.php?viewsrno='.$srno.' "class="text-light">View</a></button>
        <button class="btn btn-primary"><a href="delete.php?deletesrno='.$srno.' "class="text-light">Delete</a></button>
        
        </td>
      </tr>');
      //btn btn-primary is used for button styling,to change text color we have to give class in side anchor tag
    } 
    
    ?>
      </tbody>
</table>


</body>
</html>