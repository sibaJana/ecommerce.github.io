

<div class="content-wrapper">

  <div class="container">
  <div class="jumbotron">
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
    <form action="<?php echo base_url('Admin/addNewProduct');  ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="aId" value="<?php echo $this->session->userdata('aId') ;  ?>">
        <label for="cName" class="form-label"> Enter Product Name</label>
        <br>
        <input class="form-control" name="pName" type="text" required id="formFileDisabled"/>
        <br><br>
        <label for="cName" class="form-label"> Select Product Category</label>
        <br>
        <!-- <input class="form-control" name="cName" type="text" required id="formFileDisabled"/> -->
        
        <!-- <label for="cars">Choose a car:</label> -->

        <select name="cId" class='form-control'  id="cars">
        <?php
        foreach($category as $val){
            ?>

        <option value="<?php echo $val['cId'];?>"> <?php echo $val['cName'];?></option>
       
  

            <?php

        }
        
        
        ?>


        </select>
        <br><br>
        <label for="cName"  class="form-label"> Enter Company Name</label>
        <br>
        <input class="form-control" required name="pCompanyName" type="text" required id="formFileDisabled"/>
        <br><br>
        <label for="formFileDisabled" class="form-label">Upload Product Picture</label>
        <br>
        <input class="form-control" type="file"  name="pDp" required id="formFileDisabled"  />
        <br><br>
        <input type="submit" class="btn btn-success mt-5" value="Uploade">
    </form>
  </div>
</div>
</div>