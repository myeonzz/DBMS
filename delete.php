<?php
$conn = mysqli_connect("localhost", "root", "", "student");
$studentnum = $_GET['studentnum'];

mysqli_query($conn, "DELETE FROM student WHERE studentnum='$studentnum'");
mysqli_close($conn);
?>
<script>
    window.location.href = "index.php?deleted=true";
</script>
