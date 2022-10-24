<?php
$conn=new mysqli('localhost','root','','movies');//connection variable to connect with db(any name of variable you want)
/*if($conn)//to check if connection is successful
{
    echo "connection successful ";
}
else{
    die(mysqli_error($conn));  //passing of variable mandatory 
}*/

//only keeping error statement once we come to know that connection is successful
if(!$conn)
{
    die(mysqli_error($conn));
}

?>