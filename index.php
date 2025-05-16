<html>
<head>
    <title>Student Record</title>
</head>
<?php $conn = mysqli_connect("localhost", "root", "", "student"); ?>
<body>
    <center>
        <a href="form.php">+Add </a>
        <table border="1">
            <tr>
                <th>Student Name</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Course Name</th>
                <th>&nbsp;</th>
            </tr>
            <?php
    $result = mysqli_query($conn, "SELECT * FROM student ORDER BY studentnum ASC");
    while($row = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $row['studentnum']; ?></td>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['course']; ?></td>
                <td><a href="edit.php?id=<?php echo $row['studentnum']; ?>">Edit</a> | <a href="delete.php?id=<?php echo $row['studentnum']; ?>">Delete</a></td>
            </tr>
            <?php
    }
    ?>
    </center>
</body>
</html>