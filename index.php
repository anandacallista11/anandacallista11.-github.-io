<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <div class="container">
        <form action="controller/login.php" method="POST" class="login-username">
            <p class="login-text" style="font-size: 2rem, font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <p class="login register text">"Anda Belum Punya Akun" <a href="register.php"> Silahkan Register</a></p>
        </form>
    </div>
</body>
</html>