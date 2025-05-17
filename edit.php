<?php
$conn = mysqli_connect("localhost", "root", "", "student");

// Get the form data
$studentnum = $_POST['studentnum'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$course = $_POST['course'];
$email = $_POST['email'];
$bday = $_POST['bday'];


$query = "UPDATE student SET 
          fname = '$fname',
          lname = '$lname',
          course = '$course',
          email = '$email',
          bday = '$bday'
          WHERE studentnum = '$studentnum'";

mysqli_query($conn, $query);
?>

<script>
    window.location.href = "index.php?edit=true";
</script>
<?php
mysqli_close($conn);