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
        <form method="post" action="./login.php">
            <h1>Login</h1>
            <div class="input-box">
                <input type="email" name="email" placeholder="    Username/email" required>
            </div>
            <div class="input-box">
                <input type="password" name="pass" placeholder="    Password" required>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember Me</label>
                <a href="#">Forgot Password</a>
            </div>
            <input type="submit" name="save" id="">
            <div class="register-link">
                <p>Don't have an account? <a href="RegistrationPage.php">Register</a></p>
            </div>
        </form>
    </div>
</body>

</html>