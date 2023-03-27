

<div class="content-wrapper">

  <div class="container">
  <div class="jumbotron">
  <?php print_r($data);  ?>
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
    <form action="<?php echo base_url('Admin/editModelData');  ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="aId" value="<?php //echo $this->session->userdata('aId') ;  ?>">
        <input type="hidden" name="mId" value="<?php echo $data[0]['mId'];   ?>">
        <input type="hidden" name="mDp" value="<?php echo $data[0]['mDp'] ; ?>">
        <input type="hidden" name="categoryId" value="<?php echo $data[0]['productId'] ;  ?>">
        <label for="cName" class="form-label"> Enter Product Name</label>
        <br>
        <input class="form-control" name="mName" type="text" value="<?php echo $data[0]['mName'];  ?>" required id="formFileDisabled"/>
    
        <br><br>
        <label for="cName"  class="form-label"> Product Description Name</label>
        <br>
        <!-- <input class="form-control" required name="pCompanyName" value="<?php //echo $data[0]['pCompanyName'];  ?>" type="text" required id="formFileDisabled"/> -->
        
        <textarea name="mDescript" class="form-control"  cols="15" rows="10"><?php echo $data[0]['mDescript'];  ?></textarea>
        <br><br>
        
  <div class="row mt" >
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="<?php echo base_url('assets/model/'. $data[0]['mDp']);  ?>" alt="...">
    </a>
  </div>
  ...
</div>
        <label for="formFileDisabled" class="form-label">Upload Product Picture</label>
        <br>
        <input class="form-control" type="file"  name="mDp" required id="formFileDisabled"  />
        <br><br>
        <input type="submit" class="btn btn-success mt-5" value="Uploade">
    </form>
  </div>
</div>
</div>