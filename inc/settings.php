<?php 
    include("../functions/session.php");
    include("../functions/products.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/settings.css">
    <script src="https://kit.fontawesome.com/00ef49d3c2.js" crossorigin="anonymous"></script>
    <title>Awesome Cart - Settings</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="info">
                <nav class="navbar">
                    <h2>Welcome, <?php echo $_SESSION["firstname"]; ?></h2>
                    <a class="menu-btn" href="app.php"><em class="fas fa-arrow-circle-left"></em></a>                  
                    <a class="menu-btn" href="../functions/logout.php"><em class="fas fa-sign-out-alt"></em></a>                  
                </nav>
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