

<div class="content-wrapper">

  <div class="container">
  <div class="jumbotron">
  <?php //print_r($data);  ?>
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
    <form action="<?php echo base_url('Admin/specsAdd');  ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="aId" value="<?php //echo $this->session->userdata('aId') ;  ?>">
        <input type="hidden" name="mId" value="<?php echo $data[0]['mId'];   ?>">
        <input type="hidden" name="mDp" value="<?php echo $data[0]['mDp'] ; ?>">
        <input type="hidden" name="productId" value="<?php echo $data[0]['productId'] ;  ?>">


        <label for="spModel" class="form-label"> Select Model Name</label>
        <br>
        <!-- <input class="form-control" name="cName" type="text" required id="formFileDisabled"/> -->
        
        <!-- <label for="cars">Choose a car:</label> -->

        <select name="modelId" class='form-control'  id="cars">
        <?php
        foreach($data as $val){
            ?>

        <option value="<?php echo $val['mId'];?>"> <?php echo $val['mName'];?></option>
       
  

            <?php

        }
        
        
        ?>
        </select>
        <br><br>
        <label for="spName" class="form-label"> Enter specs value</label>
        <input type="text" name="spName" class="form-control">
        <br>
         <br><br>
        <label for="spValue" class="form-label"> Enter specs value</label>
        <br>
        
      
                 
        <div class="table-responsive">  
                <table class="table table-bordered" id="dynamic_field">  
                    <tr>  
                        <td><input type="text" name="addmore[]" placeholder="Enter specs value" class="form-control name_list" required /></td>  
                        <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                    </tr>  
                </table>  
                <!-- <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />   -->
            </div>
                
                     
        <br><br>
        <input type="submit" class="btn btn-success mt-5" value="Click me!">
    </form>
  </div>
</div>
</div>
<script src="<?php echo base_url('assets/admin/bower_components/jquery/dist/jquery.min.js');  ?>"></script>
<script type="text/javascript">

    $(document).ready(function(){      
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="addmore[]" placeholder="Enter your Name" class="form-control name_list" required /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
    }); 

</script>