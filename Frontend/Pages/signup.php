<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../Helpers/inserctions.php")?>
    <link rel="stylesheet" href="../Css/signup.css">
    <title>Awesome Cart - Sign up</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="monster">
                <div class="circle"></div>
                <img src="../Img/signupmonster.png" alt="logo">
            </div>
            <div class="info">
                <h1>Awesome Cart</h1>
                <h3>Create your account, and get the best discount codes of the world!</h3>
                <?php include("../Helpers/Forms/signup.php"); ?>
                <div class="signin"> 
                    <h3>Already have an account? <a class="btn-link btn-link-purple" href="./signin.php">Sign In</a></h3>
                </div>
            </div>
        </div>
    </div>
    <script src="../Js/signup.js"></script>
</body>
</html>