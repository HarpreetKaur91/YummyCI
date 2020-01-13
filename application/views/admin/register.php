<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Registration</title>
    <link href="<?php echo base_url('assets/admin/css/style.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/vendors/pace-progress/css/pace.min.css')?>" rel="stylesheet">
  </head>
  <body class="app flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card mx-4">
            <div class="card-body p-4">
              <h1>Register</h1>
              <p class="text-muted">Create your account</p>
              <?php echo form_open('admin/register',['class'=>'form-horizontal','method'=>'post']);?>
                <?php if($msg = $this->session->flashdata('message') ):?>
                  <div class="row">
                    <div class='col-md-6'>
                      <div class="alert alert-dismissible alert-success">
                        <?php echo $msg;?>
                      </div>
                    </div>
                  </div>
                <?php endif;?>
                <div class="form-group mb-3">
                  <?php echo form_input(['name'=>'first_name','class'=>'form-control','placeholder'=>'Enter First Name','value'=>set_value('first_name')]);?>
                  <?php echo form_error('first_name','<div class="text-danger">','</div>'); ?>
                </div>
                <div class="form-group mb-3">
                  <?php echo form_input(['name'=>'last_name','class'=>'form-control','placeholder'=>'Enter Last Name','value'=>set_value('last_name')]);?>
                  <?php echo form_error('last_name','<div class="text-danger">','</div>');?>
                </div>
                <div class="form-group mb-3">
                  <?php echo form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Enter Email','value'=>set_value('email')]);?>
                  <?php echo form_error('email','<div class="text-danger">','</div>');?>
                </div>
                <div class="form-group mb-3">
                  <?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Enter Password']);?>
                  <?php echo form_error('password','<div class="text-danger">','</div>');?>
                </div>
                <div class="form-group mb-4">
                  <?php echo form_password(['name'=>'password_confirmation','class'=>'form-control','placeholder'=>'Enter Password Again']);?>
                  <?php echo form_error('password_confirmation','<div class="text-danger">','</div>');?>
                </div>
                <button class="btn btn-block btn-success" type="submit">Create Account</button>
              <?php echo form_close();?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo base_url('assets/admin/pace-progress/pace.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/js/coreui.min.js')?>"></script>
  </body>
</html>
