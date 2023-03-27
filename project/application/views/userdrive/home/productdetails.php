<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html">
                    <img src="/photos/logo.png" alt=""  width="125px">
                </a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="<?php echo base_url('Home_controller/index') ?>">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Contacts</a></li>
                    <li><a href="#">Account</a></li>
                </ul>
            </nav>
            <a href="cart.html">

                <img src="photos/cart.png" alt="" width="30px" height="30px" />
            </a>
            <img src="images/menu.png" alt="" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>
    <form action="#">

    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="<?php echo base_url('assets/upload/productimage/'.$val[0]['pDp']); ?>" alt="" width="100%" id="ProductImg">

                <!-- <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="images/gal1.png" alt="" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/gal2.png" alt="" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/gal3.png" alt="" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/gal4.png" alt="" width="100%" class="small-img">
                    </div>


                </div> -->

            </div>
            <div class="col-2">
                <p>Home / SweatShirt</p>
                <h1><?php echo $val[0]['pName'];  ?></h1>
                <h4><?php echo '$'.$val[0]['prise'];  ?></h4>
                <!-- <select name="sp"> -->
                    <?php 
                    // foreach($sp as $spec){
                    //     ?>
                        <!-- <option ><?php //echo $spec['spName'];    ?></option> -->
                        <?php 
                    // }

                    
                    
                    

                    ?>

                <!-- </select> -->
                <input type="number" value="1">
                <a href="<?php echo base_url('Home_controller/cartProduct/'.$val[0]['pId']) ?>" class="btn">Add to Cart</a>
                <h3>Product Details <i class="fa fa-indent"></i></h3>
                <br>
                <p><?php echo $model[0]['mDescript'];  ?></p>
                
                
            </div>
            
        </div>
        
    </div>
    </form>
    <script src="http://localhost/project/assets/user/js/main.js"></script>


  






   