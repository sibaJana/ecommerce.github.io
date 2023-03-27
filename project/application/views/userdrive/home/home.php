<!-- category -->
<div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src='./photos/dron.jpg' alt="" />
                </div>
                <div class="col-3">
                    <img src="./photos/dslr.jpg" alt="" />
                </div>
                <div class="col-3">
                    <img src="./photos/sony.jpg" alt="" />
                </div>
            </div>
        </div>
    </div>

    <!--  -->

    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <?php
            foreach($product->result_array() as $data){
                ?>
            
            <div class="col-4">
                <a href="<?php echo base_url('Home_controller/productdata/'.$data['pId']);?>">

                    <img class="card-img-top" src="<?php echo base_url().'assets/upload/productimage/'.$data['pDp']; ?>"   />
                </a>
                <!-- <a href="<?php //echo base_url('Home_controller/productdata/'.$data['pId']);  ?>"> -->

                    <h4><?php echo $data['pName'] ; ?></h4>

            </div>
            <?php
            }

            ?>


          <!--   <div class="col-4">
                <img src="./photos/Nikond6.jpg" alt="" />
                <h4>Nikon D6</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>CZK 183 990</p>
            </div>
            <div class="col-4">
                <img src="./photos/sonylen.png" alt="" />
                <h4>SAMYANG 35 mm f/1,8 AF FE pro Sony E</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>CZK 9 290</p>
            </div>
            <div class="col-4">
                <img src="./photos/triport.jpg" alt="" />
                <h4>ROLLEI C6i</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>CZK 4 990</p>
            </div> -->
            
        </div>

        <h2 class="title">Latest Products</h2>
        <div class="row">
            <div class="col-4">
                <img src="./photos/panasonic_hc-x1.jpg" alt="" />
                <h4>PANASONIC HC-X1</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>CZK 72 990</p>
            </div>
            <div class="col-4">
                <img src="./photos/panasonic_HC_VX1.jpg" alt="" />
                <h4>PANASONIC HC-VX1</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>CZK 15 990</p>
            </div>
            <div class="col-4">
                <img src="./photos//djimavic2zoom.jpg" alt="" />
                <h4>DJI MAVIC 2 Zoom</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>CZK 30 990</p>
            </div>
            <div class="col-4">
                <img src="./photos/zeissloxia.jpg" alt="" />
                <h4>ZEISS Loxia 85 mm f/2,4 Sonnar pro Sony E</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>CZK 30 590</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="./photos/tokina.jpg" alt="" />
                <h4>TOKINA 16-28 mm T3 Cinema ATX pro Canon EF</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>CZK 77 990</p>
            </div>
            <div class="col-4">
                <img src="/photos/canonc300.jpg" alt="" />
                <h4>CANON EOS C300 Mark III</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>CZK 327 000</p>
            </div>
            <div class="col-4">
                <img src="./photos/gitzo.jpg" alt="" />
                <h4>GITZO Adventury 30 L </h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>CZK 3 990,</p>
            </div>
            <div class="col-4">
                <img src="/photos/sonyPxW-FX9.jpg" alt="" />
                <h4>SONY PXW-FX9</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>CZK 333 990</p>
            </div>
        </div>
    </div>

    <!-- offer -->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="/photos/EOSR6.jfif" alt="" class="offer-img" />
                </div>
                <div class="col-2">
                    <p>Exclusively Available on PHOTOSCHOL</p>
                    <h1>NEW EOS R6 CAMERA</h1>
                    <small>
                        No matter what you shoot, the EOS R6 makes you love photography again.
                    </small>
                    <a href="#" class="btn">Find out more &#8594;</a>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam temporibus non sapiente nemo autem illo! Ea sunt corporis officia inventore.
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <img src="photos/profilGuy.jpg" alt="">
                    <h3>Jonh Joe</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam temporibus non sapiente nemo autem illo! Ea sunt corporis officia inventore.
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <img src="photos/profilGirl.jpg" alt="">
                    <h3>Victoria</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam temporibus non sapiente nemo autem illo! Ea sunt corporis officia inventore.
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <img src="images/user-3.jpg" alt="">
                    <h3>Scott
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="photos/canon.png" alt="">
                </div>
                <div class="col-5">
                    <img src="photos/nikon.jpg" alt="">
                </div>
                <div class="col-5">
                    <img src="photos/sonylogojpg.jpg" alt="">
                </div>
                <div class="col-5">
                    <img src="photos/leicalogo.jpg" alt="">
                </div>

            </div>
        </div>
    </div>