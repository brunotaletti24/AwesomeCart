<?php 
    include("../functions/session.php");
    include("../functions/admin.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../helpers/inserctions.php")?>
    <link rel="stylesheet" href="../css/admin.css">
    <title>Awesome Cart - Admin</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="info">
                <?php include("../helpers/menu/admin.php"); ?>
                <h1>Awesome Cart</h1>
                <h3>Manage our business</h3>
                <div class="sections">
                    <?php include("../helpers/cardsadm.php"); ?>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/admin.js"></script>
</body>
</html>