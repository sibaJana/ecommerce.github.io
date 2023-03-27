<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="#">
                        <img src="/photos/logo.png" alt=""  width="125px">
                    </a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="<?php echo site_url('Home_controller/index');  ?>">Home</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Contacts</a></li>
                        <li><a href="<?php  echo base_url('Home_controller/account') ; ?>">Account</a></li>
                        
                    </ul>
                </nav>

                <!-- <a href="<?php echo base_url('Home_controller/cartProduct') ; ?>">

                    <img src="photos/cart.png" alt="" width="30px" height="30px" />
                </a> -->
                <img src="images/menu.png" alt="" class="menu-icon" onclick="menutoggle()">
            </div>
            
       

            <div class="container">
            <div class="row">
                             
        
                <?php 
                      
                        if($siba->num_rows()>0){
                            // echo 'hi';
                            foreach($siba->result_array() as $d){
                                ?>
                                
                                <div class="col-md-4 ">  
                            <div class="card " >
                         
                            <img class="card-img-top x" src="<?php  echo base_url().'assets/upload/'.$d['cDp'] ?>" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title"><?php   echo  $d['cName']; ?></h5>

  


                           
                           
                    </div>
                            </div>
                            </div>
                            
                                <?php
                            }
                        }else{
                            ?>
                            <p>No Category Found</p>
                            <?php
                        }

                    ?>
    
  
    
                            </div>
    

                    </div>

                </div> 
            </div>

        </div>
    </div>
</div>