<?php 
    include("../functions/session.php");
    include("../functions/products.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../helpers/inserctions.php")?>
    <link rel="stylesheet" href="../css/app.css">
    <title>Awesome Cart - App</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="info">
                <?php include("../helpers/menu/app.php"); ?>
                <h1>Awesome Cart</h1>
                <h3>Take one discount code bellow and be happy</h3>
                <div class="products">
                    <?php include("../helpers/table.php"); ?>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/app.js"></script>
    <script src="../js/revealcode.js"></script>
</body>
</html>