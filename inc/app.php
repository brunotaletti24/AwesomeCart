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
    <link rel="stylesheet" href="../css/app.css">
    <script src="https://kit.fontawesome.com/00ef49d3c2.js" crossorigin="anonymous"></script>
    <title>Awesome Cart - App</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="info">
                <nav class="navbar">
                    <h2>Welcome, <?php echo $_SESSION["firstname"]; ?></h2>
                    <a class="menu-btn" href="../inc/settings.php"><em class="fas fa-cog"></em></a>                  
                    <a class="menu-btn" href="../functions/logout.php"><em class="fas fa-sign-out-alt"></em></a>                  
                </nav>
                <h1>Awesome Cart</h1>
                <h3>Take one discount code bellow and be happy</h3>
                <div class="products">
                    <table>
                        <th></th>
                        <?php while($data = mysqli_fetch_array($product)){ ?>
                            <tr>
                                <td>
                                    <div class="product">
                                        <img src="../img/mainmonster.png" alt="Product photo">
                                        <h1><?php echo $data['percentage']; ?>%</h1>
                                        <h2><?php echo $data['name']; ?></h2>
                                        <h3><?php echo $data['description']; ?></h3> 
                                        <button class="btn btn-purple btn-block"><?php echo $data['code']; ?></button>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/app.js"></script>
    <script src="../js/revealcode.js"></script>
</body>
</html>