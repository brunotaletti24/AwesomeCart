<?php 
    include("../functions/session.php");
    include("../functions/admin.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/admin.css">
    <script src="https://kit.fontawesome.com/00ef49d3c2.js" crossorigin="anonymous"></script>
    <title>Awesome Cart - Admin</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="info">
                <nav class="navbar">
                    <h2>Welcome, <?php echo $_SESSION["firstname"]; ?></h2>
                    <a class="menu-btn" href="../functions/logout.php"><em class="fas fa-sign-out-alt"></em></a>                  
                </nav>
                <h1>Awesome Cart</h1>
                <h3>Manage our business</h3>
                <div class="sections">
                    <div class="section">
                        <em class="fas fa-chart-pie"></em>
                        <h2>Graphics</h2>
                        <h3>get a total view of everything</h3>
                    </div>
                    <div class="section">
                        <em class="fas fa-user-circle"></em>
                        <h2>Customers</h2>
                        <h3>manage customers</h3>
                    </div>
                    <div class="section">
                        <em class="fas fa-ticket-alt"></em>
                        <h2>Discount coupon</h2>
                        <h3>manage discount coupons</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/admin.js"></script>
</body>
</html>