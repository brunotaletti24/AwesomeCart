<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/signup.css">
    <title>Awesome Cart</title>
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
                <h3>Sign Up</h3>
                <form method="POST" action="../functions/signup.php">
                    <input type="text" placeholder="First Name" name="name">
                    <input type="text" placeholder="Last Name" name="name">
                    <input type="text" placeholder="Username" name="username">
                    <input type="email" placeholder="Email" name="email">
                    <input type="text" placeholder="Phone number" name="phone">
                    <input type="password" placeholder="Password" name="password">
                    <div class="signup">
                        <button type="submit">Lets go!</button>
                    </div>
                </form>
                <div class="signin"> 
                    <h3>Already have an account? <a href="./signin.php">Sign In</a></h3>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/signup.js"></script>
</body>
</html>