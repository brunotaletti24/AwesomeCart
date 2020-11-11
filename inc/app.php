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
    <title>Awesome Cart</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="info">
                <nav class="navbar">
                    <h2>Welcome, <?php echo($_SESSION["username"]); ?></h2>
                    <a class="menu-btn" href="../inc/settings.php"><i class="fas fa-cog"></i></a>                  
                    <a class="menu-btn" href="../functions/logout.php"><i class="fas fa-sign-out-alt"></i></a>                  
                </nav>
                <h1>Awesome Cart</h1>
                <h3>Take one discount code bellow and be happy</h3>
                <div class="products">
                    <table>
                        <?php while($data = mysqli_fetch_array($product)){ ?>
                            <tr>
                                <td>
                                    <div class="product">
                                        <img src="../img/mainmonster.png">
                                        <h2><?php echo $data['name']; ?></h2>
                                        <h3><?php echo $data['description']; ?></h3> 
                                        <button id="revealCode" class="btn btn-purple btn-block" onClick="confirm()" value="<?php echo $data['code']; ?>">Reveal Code</button>
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