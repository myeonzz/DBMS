<?php

$conn=mysqli_connect("localhost","root","","student");
$studentnum=$_POST['studentnum'];
$fName=$_POST['fName'];
$lName=$_POST['lName'];
$course=$_POST['course'];
$email=$_POST['email'];
$bday=$_POST['bday'];

mysqli_query($conn, "insert into student values(
    '$studentnum',
    '$fName',
    '$lName',
    '$course',
    '$email',
    '$bday'
    )");
?>

<script>
    alert("New Record Added");
    window.location="index.php";
</script>