<?php 
    include("../../Backend/Session/session.php");
    include("../../Backend/Products/products.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../Helpers/inserctions.php")?>
    <link rel="stylesheet" href="../Css/app.css">
    <title>Awesome Cart - App</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="info">
                <?php include("../Helpers/Menu/menu.php"); ?>
                <h1>Awesome Cart</h1>
                <h3>Take one discount code bellow and be happy</h3>
                <div class="products">
                    <?php include("../Helpers/table.php"); ?>
                </div>
            </div>
        </div>
    </div>
    <script src="../Js/app.js"></script>
    <script src="../Js/copycode.js"></script>
</body>
</html>