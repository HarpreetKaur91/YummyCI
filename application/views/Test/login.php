<div class="container">
	<?php echo form_open('welcome/signin',['class'=>'form-horizontal','method'=>'post']);?>
		<?php if($msg = $this->session->flashdata('message') ):?>
			<div class="row">
				<div class='col-md-6'>
					<div class="alert alert-dismissible alert-success">
						<?php echo $msg;?>
					</div>
				</div>
			</div>
		<?php endif;?>
		<h3>Login</h3>
		<div class="row">
			<div class="col-md-6">
				<div class="form-goup">
					<label class="col-md-3 control-label">Email</label>
					<div class="col-md-9">
						<?php echo form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Enter Email','value'=>set_value('email')]);?>
						<?php echo form_error('email','<div class="text-danger">','</div>');?>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-goup">
					<label class="col-md-3 control-label">Password</label>
					<div class="col-md-9">
						<?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Enter Password']);?>
						<?php echo form_error('password','<div class="text-danger">','</div>');?>
					</div>
				</div>
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Sign in</button>
	<?php echo form_close();?>
</div>