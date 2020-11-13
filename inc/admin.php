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
                <?php include("../helpers/menu/adminmenu.php"); ?>
                <h1>Awesome Cart</h1>
                <h3>Manage our business</h3>
                <div class="sections">
                    <a class="btn-card" href="#1">
                        <div class="section">
                            <em class="fas fa-chart-pie"></em>
                            <h2>Graphics</h2>
                            <h3>get a total view of everything</h3>
                        </div>
                    </a>
                    <a class="btn-card" href="#2">
                        <div class="section">
                            <em class="fas fa-user-circle"></em>
                            <h2>Customers</h2>
                            <h3>manage customers</h3>
                        </div>
                    </a>
                    <a class="btn-card" href="#3">
                        <div class="section">
                            <em class="fas fa-ticket-alt"></em>
                            <h2>Discount coupon</h2>
                            <h3>manage discount coupons</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/admin.js"></script>
</body>
</html>