<?php
if (isset($_POST["submitButton"])) {
    echo"Form Was Submitted";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Welcome to Monolith.tv</title>
</head>
<body>
    <div class="signInContainer">
    <div class="column">
        <div class="header">
        <img src="assets/img/Monolithtv.png" alt="logo" alt="Site logo">
            <h3>Sign-in</h3>
            <span>to continue streaming</span>
            </div>
        <form method="POST">

            <input type="text" name="userName" placeholder="Username" required>

            <input type="password" name="password" placeholder="Password" required>

            <input type="submit" name="submitButton" value="Submit">
        </form>

        <a href="register.php" class="signInMessage">Need an Account? Sign-Up Here</a>















    </div>
    </div>
</body>
</html>