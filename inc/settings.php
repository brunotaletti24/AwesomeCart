<?php 
    include("../functions/session.php");
    include("../functions/products.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../helpers/inserctions.php")?>
    <link rel="stylesheet" href="../css/settings.css">
    <title>Awesome Cart - Settings</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="info">
                <?php include("../helpers/menu/appmenu.php")?>
                <h1>Awesome Cart</h1>
                <h3>Change your profile settings</h3>
                <div class="settings">
                    <form method="POST" action="../functions/settings.php">
                        <input type="text" placeholder="First name" name="first_name">
                        <input type="text" placeholder="Last name" name="last_name">
                        <input type="text" placeholder="Phone number" name="phone">
                        <button class="btn btn-purple btn-block" type="submit">Change</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/settings.js"></script>
</body>
</html>