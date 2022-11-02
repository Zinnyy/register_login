<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="../model/backend.php" method="post">
            <?php echo "<div class=$clas>$err</div>" ?>
            <?php echo "<div class=$clas>$success</div>" ?>

            <br>
            <h4 class="info">STUDENT INFORMATION</h4>
            <p>
            <div class="surname">
                <label for="">Surname:</label>
                <input type="text" name="surname">
                <p>

            </div>
            <div class="firstname">
                <label for="">First name:</label>
                <input type="text" name="first_name">
                <p>

            </div>
            <div class="middlename">
                <label for="">Middle name:</label>
                <input type="text" name="middle_name">
                <p>

            </div>
            <div class="matric">
                <label for="">Matric No:</label>
                <input type="text" name="matric_no">
                <p>

            </div>
            <div class="phone">
                <label for="">Phone Number:</label>
                <input type="phone" name="phone">
                <p>

            </div>
            <div class="date">
                <label for="">Date of Birth:</label>
                <input type="date" name="date_of_birth">
                <p>

            </div>
            <div class="gender">
                <Label> Gender:</Label>

                <label for="Male">Male</label>
                <input type="radio" value='male' name="radio">

                <label for="Female">Female</label>
                <input type="radio" value="female" name="radio">
                <p>

            </div>
            <div class="level">
                <label for="">Level:</label>
                <select name="level" id="level">
                    <option value="">Select level</option>
                    <option value="level">100</option>
                    <option value="level">200</option>
                    <option value="level">300</option>
                    <option value="level">400</option>
                    <option value="level">500</option>

                </select>
                <p>

            </div>
            <input type="submit" name="student_btn">

        </form>
</body>
</html>