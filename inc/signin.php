<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/signin.css">
    <title>Awesome Cart</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="monster">
                <div class="circle"></div>
                <img src="../img/signinmonster.png" alt="logo">
            </div>
            <div class="info">
                <h1>Awesome Cart</h1>
                <h3>Welcome back! Login to access your Awesome Cart.</h3>
                <form method="POST" action="../functions/validate.php">
                    <input type="text" placeholder="Username" name="username">
                    <input type="password" placeholder="Password" name="password">
                    <div class="signup">
                        <button type="submit">Let's go!</button>
                    </div>
                </form>
                <div class="buttons"> 
                    <h3>Did you <a href="./recovery.php">forget your passoword?</a></h3>
                    <h3> or </h3>
                    <h3>Dont have an account? <a href="./signup.php">Sign Up</a></h3>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/global.js"></script>
    <script src="../js/signin.js"></script>
</body>
</html>