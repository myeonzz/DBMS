<?php
$conn = mysqli_connect("localhost", "root", "", "student");
$studentnum = $_GET['studentnum'];

mysqli_query($conn, "DELETE FROM student WHERE studentnum='$studentnum'");
?>
<script>
    alert("Record Deleted");
    window.location="index.php";
    </script>
<?php
mysqli_close($conn);