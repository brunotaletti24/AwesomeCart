<?php 
    include("../../../Backend/Session/session.php");
    //include("../../../Backend/Products/products.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../../Helpers/admininserctions.php")?>
    <link rel="stylesheet" href="../../Css/discount.css">
    <title>Awesome Cart - Discount</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="info">
                <?php include("../../Helpers/Menu/menuadm.php"); ?>
                <h1>Awesome Cart</h1>
                <h3>Add discount codes based by interest</h3>
                <div class="settings">
                    <?php include("../../Helpers/Forms/discount.php"); ?>
                </div>
            </div>
        </div>
    </div>
    <script src="../../Js/discount.js"></script>
</body>
</html>