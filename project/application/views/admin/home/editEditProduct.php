

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
    <form action="<?php echo base_url('Admin/updataProduct');  ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="aId" value="<?php echo $this->session->userdata('aId') ;  ?>">
        <input type="hidden" name="pId" value="<?php echo $data[0]['pId']; ;  ?>">
        <input type="hidden" name="pDp" value="<?php echo $data[0]['pDp'] ; ?>">
        <input type="hidden" name="categoryId" value="<?php echo $data[0]['categoryId'] ;  ?>">
        <label for="cName" class="form-label"> Enter Product Name</label>
        <br>
        <input class="form-control" name="pName" type="text" value="<?php echo $data[0]['pName'];  ?>" required id="formFileDisabled"/>
    
        <br><br>
        <label for="cName"  class="form-label"> Enter Company Name</label>
        <br>
        <input class="form-control" required name="pCompanyName" value="<?php echo $data[0]['pCompanyName'];  ?>" type="text" required id="formFileDisabled"/>
        <br><br>
        
  <div class="row mt" >
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="<?php echo base_url('assets/upload/productimage/'. $data[0]['pDp']);  ?>" alt="...">
    </a>
  </div>
  ...
</div>
        <label for="formFileDisabled" class="form-label">Upload Product Picture</label>
        <br>
        <input class="form-control" type="file"  name="pDp" required id="formFileDisabled"  />
        <br><br>
        <input type="submit" class="btn btn-success mt-5" value="Uploade">
    </form>
  </div>
</div>
</div>