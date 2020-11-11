<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/recovery.css">
    <title>Awesome Cart - Recovery Password</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="monster">
                <div class="circle"></div>
                <img src="../img/recoverymonster.png" alt="logo">
            </div>
            <div class="info">
                <h1>Awesome Cart</h1>
                <h3>Password recovery</h3>
                <form method="POST" action="../functions/recovery.php">
                    <input type="email" placeholder="Email" name="email">
                    <div class="recovery">
                        <button type="submit">Send email</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../js/recovery.js"></script>
</body>
</html>