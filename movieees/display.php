<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Movie List</title>
        <link rel="stylesheet" href="style.css">
        <!--abv css is impt to display final table-->
    </head>
    <body>
  <div class="container">
 <table class="table">
  <thead>
    <tr>
      <th scope="col">Sr No</th>  <!--col meaning header for column-->
      <th scope="col">Name of the Movie</th>
      <th scope="col">Actions</th>  
    </tr>
  </thead>
  <tbody>
    <!--displaying your data-->
    <?php
    $sql="select * from `movies`"; //* returns all columns
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
    while($row=mysqli_fetch_assoc($result)) //fetches row as an array
    {
        $srno=$row['srno'];
        $movie=$row['movie'];
       
        //to display in table
        
        echo ('<tr>
        <td>'.$srno.'</td>  
        <td>'.$movie.'</td>
       
        <td>
        <button class="bview"><a href="view.php?viewsrno='.$srno.' "class="text-light">View</a></button>
        <button class="bdelete"><a href="delete.php?deletesrno='.$srno.' "class="text-light">Delete</a></button>
        
        </td>
      </tr>');
    } 
    ?>
      </tbody>
</table>
<!--creating button,,,,anchor tag is used to link one page to another-->
<button class="badd"><a href="new.php" class="text-light">Add Movie</a></button>
</body>
</html>