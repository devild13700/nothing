<?php
    if($_SERVER['REQUEST_METHOD']=='POST'&& isset($_POST['submit'])){
       $conn=mysqli_connect('localhost','root','','demo') or die("Connection failed:" .mysqli_connect_error()); 
        if(isset($_POST['name']) && isset($_POST['roll']) && isset($_POST['course']) && isset($_POST['email']) && isset($_POST['number']) && isset($_POST['address'])){
           $name=$_POST['name']; 
           $roll=$_POST['roll'];
           $course=$_POST['course'];
           $email=$_POST['email'];
           $number=$_POST['number'];
           $address=$_POST['address'];

           $sql="INSERT INTO 'student' ('name', 'roll', 'course', 'email', 'number', 'address') VALUES ('$name', '$roll', '$course', '$email', '$number', '$address');";
           $query = mysqli_query($conn,$sql);
           if($query){
            echo 'Registered Sucessfully';
           }
           else{
            echo 'Registration Failed';
           }

        }
    }
?>