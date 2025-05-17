<html>
    <head>
        <title>Student Form</title>
        <link rel="stylesheet" href="CSS/form.css">
        <style>
            @font-face {
            font-family: "Roboto";
            src: url(Fonts/Roboto-Regular.ttf) format('truetype');
            }

            *{
            font-family: 'Roboto', sans-serif;
            }
</style>
    </head>
    <body>
        <div class="main">
            <div class="left">
            </div>
            <div class="right">
                <h2>Student Form </h2>
                <form method="post" action="form_act.php">
                    <label>Student Number </label>
                    <input type="text" name="studentnum"><br>

                    <label>First Name</label>
                    <input type="text" name="fname"><br>

                    <label>Last Name</label>
                    <input type="text" name="lname"><br>

                    <label>Course</label>
                    <input type="text" name="course"><br>

                    <label>Email</label>
                    <input type="email" name="email"><br>

                    <label>Birthdate</label>
                    <input type="date" name="bday"><br>

                    <div class="form-buttons">
                        <button type="button" onclick="history.back()">Back</button>
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>

