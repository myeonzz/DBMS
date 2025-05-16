<?php

$conn=mysqli_connect("localhost","root","","student");
$studentnum=$_POST['studentnum'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$course=$_POST['course'];
$email=$_POST['email'];
$bday=$_POST['bday'];

mysqli_query($conn, "insert into student values(
    '$studentnum',
    '$fname',
    '$lname',
    '$course',
    '$email',
    '$bday'
    )");
?>

<script>
    alert("New Record Added");
    window.location="index.php";
</script>