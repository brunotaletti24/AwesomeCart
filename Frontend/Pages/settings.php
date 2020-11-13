<?php 
    include("../../Backend/Session/session.php");
    include("../../Backend/Products/products.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../Helpers/inserctions.php")?>
    <link rel="stylesheet" href="../Css/settings.css">
    <title>Awesome Cart - Settings</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="info">
                <?php include("../Helpers/Menu/settings.php"); ?>
                <h1>Awesome Cart</h1>
                <h3>Change your profile settings</h3>
                <div class="settings">
                    <?php include("../Helpers/Forms/settings.php"); ?>
                </div>
            </div>
        </div>
    </div>
    <script src="../Js/settings.js"></script>
</body>
</html>