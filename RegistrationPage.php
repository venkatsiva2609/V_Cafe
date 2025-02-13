<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akshaya Coffee Bar</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrapper">
        <form action="Register.php" method="post">
            <h1>Register</h1>
            <div class="input-box">
                <p>First Name</p>
                <input type="text" name="fname" placeholder="    First Name" required>
            </div>
            <div class="input-box">
                <p>Last Name</p>
                <input type="text" name="lname" placeholder="    Last Name" required>
            </div>
            <!-- <div class="remember-forgot">
                <label><input type="checkbox">Remember Me</label>
                <a href="#">Forgot Password</a>
            </div> -->
            <div class="input-box">
                <p>Email ID</p>
                <input type="email" name="email" placeholder="    Email ID" required>
            </div>
            <div class="input-box">
                <p>Password</p>
                <input type="password" name="pass" placeholder="    Password" required>
            </div>
            <div class="input-box">
                <p>Confirm Password</p>
                <input type="password" name="cpass" placeholder="    Confirm Password" required>
            </div>
            <button type="submit" class="btn">Register</button>
            <div class="register-link">
                <p>Already have an account? <a href="LoginPage.php">Login</a></p>
            </div>
        </form>
    </div>
</body>

</html>