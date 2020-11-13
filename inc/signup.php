<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../helpers/inserctions.php")?>
    <link rel="stylesheet" href="../css/signup.css">
    <title>Awesome Cart - Sign up</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="monster">
                <div class="circle"></div>
                <img src="../img/signupmonster.png" alt="logo">
            </div>
            <div class="info">
                <h1>Awesome Cart</h1>
                <h3>Create your account, and get the best discount codes of the world!</h3>
                <form method="POST" action="../functions/signup.php">
                    <input type="text" placeholder="First Name" name="first_name">
                    <input type="text" placeholder="Last Name" name="last_name">
                    <input type="text" placeholder="Username" name="username">
                    <input type="email" placeholder="Email" name="email">
                    <input type="text" placeholder="Phone number" name="phone">
                    <input type="password" placeholder="Password" name="password">
                    <div class="signup">
                        <button class="btn" type="submit">Lets go!</button>
                    </div>
                </form>
                <div class="signin"> 
                    <h3>Already have an account? <a class="btn-link" href="./signin.php">Sign In</a></h3>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/signup.js"></script>
</body>
</html>