<?php 
    include("../../Backend/Session/session.php");
    include("../../Backend/Pages/admin.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../Helpers/inserctions.php")?>
    <link rel="stylesheet" href="../Css/admin.css">
    <title>Awesome Cart - Admin</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="info">
                <?php include("../Helpers/Menu/admin.php"); ?>
                <h1>Awesome Cart</h1>
                <h3>Manage our business</h3>
                <div class="sections">
                    <?php include("../Helpers/admincards.php"); ?>
                </div>
            </div>
        </div>
    </div>
    <script src="../Js/admin.js"></script>
</body>
</html>