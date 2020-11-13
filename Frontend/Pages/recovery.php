<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../Helpers/inserctions.php")?>
    <link rel="stylesheet" href="../Css/recovery.css">
    <title>Awesome Cart - Recovery Password</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="monster">
                <div class="circle"></div>
                <img src="../Img/recoverymonster.png" alt="logo">
            </div>
            <div class="info">
                <h1>Awesome Cart</h1>
                <h3>Reover your account, just put your email bellow</h3>
                <?php include("../Helpers/Forms/recovery.php"); ?>
                <div class="back"> 
                    <h3><a class="btn-link" href="javascript:history.back()">Back to login</a></h3>
                </div>
            </div>
        </div>
    </div>
    <script src="../Js/recovery.js"></script>
</body>
</html>