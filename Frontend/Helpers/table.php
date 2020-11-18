<table>
    <th></th>
    <?php while($data = $stmt->fetch()){ ?>
        <tr>
            <td>
                <div class="product">
                    <img src="../Img/mainmonster.png" alt="Product photo">
                    
                    <h1><?php echo $data['percentage']; ?>%</h1>
                    
                    <h2><?php echo $data['name']; ?></h2>
                    
                    <h3><?php echo $data['description']; ?></h3>
                    
                    <input type="hidden" value="<?php echo $data['code']; ?>" id="copyCode"> 
                    
                    <a class="site" href="<?php echo $data['site']; ?>" target="_blank">
                        <button class="btn btn-purple btn-block" id="btnCode">
                            <?php echo $data['code']; ?>
                        </button>
                    </a>
                </div>
            </td>
        </tr>
    <?php } ?>
</table>