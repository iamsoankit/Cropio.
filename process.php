<?php
include 'database.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $sql="insert into contacts(name,email,subject,message) values('$name','$email','$subject','$message')";
    if(mysqli_query($con,$sql)){
        echo "<script>alert('Done')</script>";
        echo "<script>window.open('insert.php','_self')</script>";
    }
    else{
        echo "Error".mysqli_error($con);
    }
    mysqli_close($con);
}
?>