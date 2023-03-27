

<div class="content-wrapper">

  <div class="container">
  <div class="jumbotron">
    <h2 class="text-center text-info" >model page</h2>
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
    <form action="<?php echo base_url('Admin/addmodel');  ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="aId" value="<?php echo $this->session->userdata('aId') ;  ?>">
        <label for="cName" class="form-label"> Enter Model Name</label>
        <br>
        <input class="form-control" name="mName" type="text" required id="formFileDisabled"/>
        <br><br>
        <label for="pName" class="form-label"> Select Product Category</label>
        <br>
        <!-- <input class="form-control" name="cName" type="text" required id="formFileDisabled"/> -->
        
        <!-- <label for="cars">Choose a car:</label> -->

        <select name="pId" class='form-control'  id="cars">
        <?php
        foreach($data as $val){
            ?>

        <option value="<?php echo $val['pId'];?>"> <?php echo $val['pName'];?></option>
       
  

            <?php

        }
        
        
        ?>


        </select>
        <br><br>
        <label for="cName"  class="form-label"> Model Description</label>
        <br>
        <!-- <input class="form-control" required name="pCompanyName" type="text" required id="formFileDisabled"/>
     -->
     <textarea name="mdescription" required class="form-control" id="" cols="10" rows="10"></textarea>
        <br><br>
        <label for="formFileDisabled" class="form-label">Upload model Picture</label>
        <br>
        <input class="form-control" type="file"  name="mDp" required id="formFileDisabled"  />
        <br><br>
        <input type="submit" class="btn btn-success mt-5" value="Uploade">
    </form>
  </div>
</div>
</div>