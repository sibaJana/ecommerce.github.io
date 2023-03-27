<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
               
            <img src="images/menu.png" alt="" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>
    </div>
    <div class="small-container cart-page">

        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Sub Total</th>
            </tr>
            <tr>
                <?php 
                
                
                ?>

                <td>
                    <div class="cart-info">
                        <img src="<?php echo base_url('assets/upload/productimage/').$pData[0]['pDp'];  ?>" alt="">
                        <div>
                            <p><?php  echo $pData[0]['pName']; ?></p>
                            <small></small>
                            <br>
                            <a href="#">Remove</a>
                        </div>
                    </div>
                </td>
                <td> <input type="number" value="1"></td>
                <td><?php  echo '$'.$pData[0]['prise']; ?></td>
            </tr>
        </table>
        <?php //echo var_dump($pData) ;  ?>
        <div class="total-price">
            <table>
                <tr>
                    <td>Sub Total</td>
                    <td><?php  echo '$'.$pData[0]['prise']; ?></td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>-$10</td>
                </tr>
                <tr>
                    <td>Grand Total</td>
                    <td><?php  echo '$'.$pData[0]['prise']-10; ?></td>
                </tr>
                
            </table><br>
            
        </div>

    </div>







