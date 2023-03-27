<div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html">
                    <img src="/photos/logo.png" alt=""  width="125px">
                </a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="<?php  echo base_url('Home_controller/index') ?>">Home</a></li>
                    <li><a href="products.html">Products</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Contacts</a></li>
                    <li><a href="<?php  echo base_url('Home_controller/account') ?>">Account</a></li>
                </ul>
            </nav>
            <a href="cart.html">

                <img src="photos/cart.png" alt="" width="30px" height="30px" />
            </a>
            <img src="photos/menu.png" alt="" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>
    </div>
   
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="/photos/leica.png" alt="">
                </div>

                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                                         
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Sign up</span>
                            <hr id="Indicator">
                        </div>
                        <?php
                        if($this->session->flashdata('class')){
                          ?>
                          <div class="alert <?php echo $this->session->flashdata('class'); ?>  alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <?php  echo $this->session->flashdata('msg'); ?>
                        </div>
                          <?php
                        }
                        
                        
                        ?>
                        <form id="LoginForm" action="<?php echo base_url('Home_controller/login'); ?>" method="POST">
                            <input type="email" required name="email" placeholder="Enter Your Email">
                            <input type="password" name="password" placeholder="********">
                            <button type="submit" class="btn">Login</button>
                            <a href="">Forgot Password</a>
                        </form>
                        <form id="RegForm" action="<?php echo base_url('Home_controller/checkUser'); ?>" method="POST">
                            <input type="text" required name="name" placeholder="Username">
                            <input type="email" required name="email" placeholder="Email">
                            <input type="password" required name="password" placeholder="Password">
                            <button type="submit" class="btn">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--     <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download our App</h3>
                    <p>Download App for Andriod and ios mobile phone.</p>
                    <div class="app-logo">
                        <img src="images/play-store.png" alt="">
                        <img src="images/app-store.png" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="/photos/logo2.png" alt="">
                    <p>Our purpose is to give the best quality product to the customer and bring them back and make them happy.
                    </p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright &copy; 2021</p>
        </div> -->
    </div>