<?php
include 'connect.php'; //db connection
//using get method variables from url
if(isset($_GET['deletesrno']))
{
     $srno=$_GET['deletesrno']; //accessing srno from url and passing it to get method

     //delete query
     $sql="delete from `movies` where srno=$srno";
     $result=mysqli_query($conn,$sql);
     if($result){
      //  echo "Movie details removed successfully"; (directly displaying display table after deletion)
      header('location:display.php');
     } 
     else{
        //displaying error
        die(mysqli_error($conn));
     }
}

?>