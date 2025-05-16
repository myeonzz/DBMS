<html>
<head>
    <title>Student Record</title>
</head>
<?php $conn = mysqli_connect("localhost", "root", "", "student"); ?>
<body>
    <center>
        <a href="form.php">+Add </a>
        <table border="1" width="80%" style="border-collapse:collapse;">
            <tr>
                <th>Student Name</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Course Name</th>
                <th>Email</th>
                <th>Birthdate</th>
                <th>&nbsp;</th>
            </tr>
            <?php
    $result = mysqli_query($conn, "SELECT * FROM student ORDER BY lname ASC");
    while($row = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $row['studentnum']; ?></td>
                <td><?php echo $row['fname']; ?></td>
                <td><?php echo $row['lname']; ?></td>
                <td><?php echo $row['course']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['bday']; ?></td>
                <td align="center"><a href="edit.php? studentnum=<?php echo
                $row['studentnum'];?>">Edit</a></td>
                <td align="center"><a href="delete.php? studentnum=<?php echo 
                $row['studentnum'];?>" onclick="return confirm('Are you sure sure you want to delete this record?');">X</a></td>
            </tr>
            <?php
    }
    ?>
    </table>
    </center>
</body>
</html>