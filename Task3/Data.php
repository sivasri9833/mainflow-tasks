<?php

/*$name=$_POST('nm');
$email=$_POST('em');*/
# To run this program go to http://localhost/phpt/DB/Data.php
$servername="localhost";
$username="root";
$password="SRI@9949";
#$database="database1";
//http://localhost/htdocs/phpt/DB/Data.php/

$database="database1";
$conn=mysqli_connect($servername,$username,$password,$database,3307);


#$conn = new mysqli("localhost", "root", "password");
if(!$conn)
{
    die("Failed to connect".mysqli_connect_error());
}
else{
    echo "Connection successful";
}

#TO GET THE DATABASE  GO TO  localhost/phpMyAdmin amnd create a database
#http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=database1&table=student
$sql="INSERT INTO `student` (`Sno`, `Name`, `Age`, `Email` ,`password`) VALUES ('6', 'Ramya', '14', 'Ramyagmail')";
if(mysqli_query($conn,$sql))
{
    echo "Success";
}
else{
    echo "error".mysqli_error($conn);
}

mysqli_close($conn);
?>