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