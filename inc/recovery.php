<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../helpers/inserctions.php")?>
    <link rel="stylesheet" href="../css/recovery.css">
    <title>Awesome Cart - Recovery Password</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <a class="menu-btn" href="signin.php"><em class="fas fa-arrow-circle-left"></em></a>
            <div class="monster">
                <div class="circle"></div>
                <img src="../img/recoverymonster.png" alt="logo">
            </div>
            <div class="info">
                <h1>Awesome Cart</h1>
                <h3>Reover your account, just put your email bellow</h3>
                <form method="POST" action="../functions/recovery.php">
                    <input type="email" placeholder="Email" name="email">
                    <div class="recovery">
                        <button class="btn" type="submit">Send email</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../js/recovery.js"></script>
</body>
</html>