<html>
<head>
    <title>Student Record</title>
    <link rel="stylesheet" href="CSS/table.css">
    <script src="JScript/modal.js"></script>
</head>
<style>
    @font-face {
    font-family: "Roboto";
    src: url(Fonts/Roboto-Regular.ttf) format('truetype');
}
    @font-face {
    font-family: "Bold";
    src: url(Fonts/THEBOLDFONT-FREEVERSION.ttf) format('truetype');
}
*{
    font-family: 'Roboto', sans-serif;
}
h1{
    font-family: 'Bold', sans-serif;
    color: #000;
    font-size:70px
}
</style>

<?php $conn = mysqli_connect("localhost", "root", "", "student"); ?>
<body>
    <center>
    <section>
        <div class="header">
            <div class="item1"><a href="form.php"  class="add">+Add </a></div>
            <div class="item2"><center><h1>Student Records</h1></center></div>

        </div>
        <table  width="80%" style="border-collapse:collapse;">
            <thead>
                
            <tr class="tableheader">
                <th>Student Number</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Course Name</th>
                <th>Email</th>
                <th>Birthdate</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
            </thead>
        
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
                <td align="center">
                    <button class="editbutt" onclick="openEditModal(
                        '<?php echo $row['studentnum']; ?>',
                        '<?php echo $row['fname']; ?>',
                        '<?php echo $row['lname']; ?>',
                        '<?php echo $row['course']; ?>',
                        '<?php echo $row['email']; ?>',
                        '<?php echo $row['bday']; ?>'
                    )">Edit</button>
                </td>
                <td align="center"><a class="delbutt" href="delete.php? studentnum=<?php echo 
                $row['studentnum'];?>" onclick="return confirm('Are you sure sure you want to delete this record?');">X</a></td>
            </tr>
            <?php
    }
    ?>
    </table>
    </center>

    <div id="editModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeEditModal()">&times;</span>
            <h2>Edit Student Record</h2>
            <form id="editForm" action="edit.php" method="post">
                <input type="hidden" name="studentnum" id="modalStudentNum">
                
                <div class="form-group">
                    <label>First Name:</label>
                    <input type="text" id="modalFname" name="fname" required>
                </div>
                
                <div class="form-group">
                    <label>Last Name:</label>
                    <input type="text" id="modalLname" name="lname" required>
                </div>
                
                <div class="form-group">
                    <label>Course:</label>
                    <input type="text" id="modalCourse" name="course" required>
                </div>
                
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" id="modalEmail" name="email" required>
                </div>
                
                <div class="form-group">
                    <label>Birthdate:</label>
                    <input type="date" id="modalBday" name="bday" required>
                </div>
                
                <button type="submit" class="submit-btn">Save Changes</button>
            </form>
        </div>
    </div>
</body>
</html>