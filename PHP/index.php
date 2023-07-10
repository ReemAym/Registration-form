<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Registration webpage</title>
    <meta name="description" content="This Is Registration webpage" />
    <link rel="stylesheet" href="../CSS/style.css" />

</head>

<body>
    <?php include '../CSS/header.php'; ?> </br>

    </br>
    </br>

    <form onsubmit="return multi_check()" action="DB_Ops.php" method="POST" enctype="multipart/form-data">
        <div>
            <label for="full_name">Full Name:</label>
            <label id="d"> * </label>
            <input class="label" id="full_name" type="text" placeholder=" Enter your Full Name " name="full_name" required>
            <span id="fullName_message" class="error"></span><br><br>
        </div>
        <div>
            <label for="user_name">User Name:</label>
            <label id="d"> * </label>
            <input class="label" id="user_name" type="text" placeholder=" Enter your User Name " name="user_name" required> <br><br>
        </div>
        <div>
            <label for="date">Birthdate:</label>
            <label id="d"> * </label>
            <input class="label" id="date" type="date" name="birthdate" required>
            <button type="button" onclick="showActors()">Check</button> <br>
            <span id="txtHint"></span><br>
        </div>
        </div>
        <div>
            <label for="phone">Phone:</label>
            <label id="d"> * </label>
            <input class="label" id="phone" type="tel" placeholder=" Enter your phone number " name="phone" pattern="[0-9]*" required>
            <br><br>
        </div>
        <div>
            <label for="address">Address:</label>
            <label id="d"> * </label>
            <input class="label" id="address" type="text" placeholder=" Enter your address " name="address_" required> <br><br>
        </div>
        <div>
            <label for="password">Password:</label>
            <label id="d"> * </label>
            <label id="c"> Password is at least 8 characters with at least 1 number literal and 1 special character. </label>
            <input class="label" id="password" type="password" placeholder=" Enter your password " name="password_" required>
            <span id="passPattern_message" class="error"></span> <br><br>
        </div>
        <div>
            <label for="confirm_password">Confirm Password:</label>
            <label id="d"> * </label>
            <input class="label" id="confirm_password" type="password" placeholder=" Enter your password again " name="confirm_password" required>
            <span id="confirm_message" class="error"></span>
            <br><br>
        </div>
        <div>
            <label for="user_image">User Image:</label>
            <label id="d"> * </label>
            <input id="user_image" type="file" accept=".jpg, .jpeg, .png " name="image_" required> <br><br><br>
        </div>
        <div>
            <label for="email">Email:</label>
            <label id="d"> * </label>
            <input class="label" id="email" type="email" placeholder=" Enter your Email " name="email" required> <br><br>
        </div>



        <input name='save' class="submit" type="submit" value="Save" />
        <input class="submit" type="reset" value="Reset" />
    </form>
    <br><br>
    <?php include '../CSS/footer.php'; ?>

    <script src="../JS/check.js"></script>
</body>

</html>