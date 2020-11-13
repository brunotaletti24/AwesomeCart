<?php 
    include("../functions/session.php");
    include("../functions/products.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../helpers/inserctions.php")?>
    <link rel="stylesheet" href="../css/app.css">
    <title>Awesome Cart - App</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="info">
                <?php include("../helpers/menu/appmenu.php")?>
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