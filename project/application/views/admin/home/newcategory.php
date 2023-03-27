

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
<form action="<?php echo base_url('Admin/creatCategory');  ?>" method="post" enctype="multipart/form-data">
<label for="cName" class="form-label"> Enter Catagory Name</label>
<br>
<input class="form-control" name="cName" type="text" required id="formFileDisabled"/>
<br><br>
<label for="formFileDisabled" class="form-label">Upload Picture</label>
<br>
<input class="form-control" type="file" name="cDp" required id="formFileDisabled"  />
<br><br>
<input type="submit" class="btn btn-success mt-5" value="Uploade">
  </form>
  </div>
</div>
</div>