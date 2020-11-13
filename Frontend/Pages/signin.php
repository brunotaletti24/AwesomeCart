<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../Helpers/inserctions.php")?>
    <link rel="stylesheet" href="../Css/signin.css">
    <title>Awesome Cart - Sign in</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="monster">
                <div class="circle"></div>
                <img src="../Img/signinmonster.png" alt="logo">
            </div>
            <div class="info">
                <h1>Awesome Cart</h1>
                <h3>Welcome back! Login to access your Awesome Cart.</h3>
                <?php include("../Helpers/Forms/signin.php"); ?>
                <div class="buttons"> 
                    <h3>Did you <a class="btn-link" href="./recovery.php">forget your passoword?</a></h3>
                    <h3>or</h3>
                    <h3>Dont have an account? <a class="btn-link" href="./signup.php">Sign Up</a></h3>
                </div>
            </div>
        </div>
    </div>
    <script src="../Js/signin.js"></script>
</body>
</html>