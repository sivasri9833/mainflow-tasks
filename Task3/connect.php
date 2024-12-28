<?php

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
    $conn=mysqli_connect('localhost','root','SRI@9949','test1',3307) or die("Connection failed:".mysql_connect_error());
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pass'])&& isset($_POST['phone'])){
        $name=$_POST['name'];#database---file
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $phone=$_POST['phone'];
        
    
        $sql="INSERT INTO `users` (`name`, `email`, `phone`,`pass`) VALUES ('$name', '$email', '$phone','$pass')";
        $query=mysqli_query($conn,$sql);
        if($query){
            // echo "Login Successful";
            header("Location:Thanku.html");

        }
        else{
            Echo "Error occured";
        }

        

        
    }
}



#run:http://localhost/phpt/DB/File.php
#on submit it goes to connect.php then it will store data in database
        
# to view database whether data is loaded or not 
        #phpMyAdmin
        #output: contains database test1
        #table:users
        #http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=test1&table=users

?>



