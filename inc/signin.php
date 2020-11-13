<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../helpers/inserctions.php")?>
    <link rel="stylesheet" href="../css/signin.css">
    <title>Awesome Cart - Sign in</title>
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
                    <div class="signin">
                        <button class="btn" type="submit">Login</button>
                    </div>
                </form>
                <div class="buttons"> 
                    <h3>Did you <a class="btn-link" href="./recovery.php">forget your passoword?</a></h3>
                    <h3>or</h3>
                    <h3>Dont have an account? <a class="btn-link" href="./signup.php">Sign Up</a></h3>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/global.js"></script>
    <script src="../js/signin.js"></script>
</body>
</html>