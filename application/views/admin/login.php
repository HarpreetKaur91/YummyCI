<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.15
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

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
        <div class="col-md-8">
          <div class="card-group">
            <div class="card p-4">
              <div class="card-body">
                <h1>Login</h1>
                <p class="text-muted">Sign In to your account</p>
                <?php echo form_open('admin',['class'=>'form-horizontal','method'=>'post']);?>
                <div class="form-group mb-3">
                  <?php echo form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Enter Email','value'=>set_value('email')]);?>
                  <?php echo form_error('email','<div class="text-danger">','</div>');?>
                </div>
                <div class="form-group mb-4">
                  <?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Enter Password']);?>
                  <?php echo form_error('password','<div class="text-danger">','</div>');?>
                </div>
                <div class="row">
                  <div class="col-6">
                    <button class="btn btn-primary px-4" type="submit">Login</button>
                  </div>
                  <div class="col-6 text-right">
                    <button class="btn btn-link px-0" type="button">Forgot password?</button>
                  </div>
                </div>
                <?php echo form_close();?>
              </div>
            </div>
            <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
              <div class="card-body text-center">
                <div>
                  <h2>Sign up</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <a href="<?php echo base_url('admin/register')?>" class="btn btn-primary active mt-3">Register Now!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo base_url('assets/admin/pace-progress/pace.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/js/coreui.min.js')?>"></script>
  </body>
</html>
