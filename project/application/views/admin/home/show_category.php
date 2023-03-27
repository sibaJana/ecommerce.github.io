

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

  <table class="table">
        <!-- <tr align="center">
            <th>Id</th>
            <th>Name</th>
            <th>Dept</th>
        </tr> -->
        <?php

            // var_dump($data);
            // die();

            foreach($data as $userdata){
                ?>
                <tr align="center">
                
                <td><img width="100px" height="100px" src="<?php echo base_url().'assets/upload/'.$userdata['cDp'] ?>" class="img-responsive">
                </td>
                <td><?php echo $userdata["cId"]; ?></td>
                <td><?php echo $userdata["cName"]; ?></td>
                <td><a class="btn btn-info" href="<?php echo base_url('Admin/editCategory/'.$userdata["cId"]) ; ?>">edit</a></td>
                <td><a class="btn btn-danger" href="<?php echo base_url('Admin/deleteCategory/'.$userdata["cId"]) ; ?>">delete</a></td>
                
                </tr>
                <?php
            }

        ?>
    </table>

  </div>
</div>
</div>