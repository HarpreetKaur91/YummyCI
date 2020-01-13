<div class="container">
	<?php echo form_open('welcome/post_sign_up',['class'=>'form-horizontal','method'=>'post']);?>
		<?php if($msg = $this->session->flashdata('message') ):?>
			<div class="row">
				<div class='col-md-6'>
					<div class="alert alert-dismissible alert-success">
						<?php echo $msg;?>
					</div>
				</div>
			</div>
		<?php endif;?>
		<h3>Registration</h3>
		<div class="row">
			<div class="col-md-6">
				<div class="form-goup">
					<label class="col-md-3 control-label">First Name</label>
					<div class="col-md-9">
						<?php echo form_input(['name'=>'first_name','class'=>'form-control','placeholder'=>'Enter First Name','value'=>set_value('first_name')]);?>
						<?php echo form_error('first_name','<div class="text-danger">','</div>'); ?>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-goup">
					<label class="col-md-3 control-label">Last Name</label>
					<div class="col-md-9">
						<?php echo form_input(['name'=>'last_name','class'=>'form-control','placeholder'=>'Enter Last Name','value'=>set_value('last_name')]);?>
						<?php echo form_error('last_name','<div class="text-danger">','</div>');?>
					</div>
				</div>
			</div>
		</div>
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
		
		<div class="row">
			<!-- <div class="col-md-6">
				<div class="form-goup">
					<label class="col-md-3 control-label">Re-enter Pass</label>
					<div class="col-md-9">
						<?php //echo form_password(['name'=>'password_confirmation','class'=>'form-control','placeholder'=>'Enter Password Again']);?>
						<?php //echo form_error('password_confirmation','<div class="text-danger">','</div>');?>
					</div>
				</div>
			</div> -->
			<div class="col-md-6">
				<div class="form-goup">
					<label class="col-md-3 control-label">Phone no</label>
					<div class="col-md-9">
						<?php echo form_input(['name'=>'phone','class'=>'form-control','placeholder'=>'Enter Phone no','value'=>set_value('newt_pop_help_line()')]);?>
						<?php echo form_error('phone','<div class="text-danger">','</div>');?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-goup">
					<label class="col-md-3 control-label">Gender</label>
					<div class="col-md-9">
						<select class="form-control" name="gender">
							<option value="">Select</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
						<?php echo form_error('gender','<div class="text-danger">','</div>');?>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-goup">
					<label class="col-md-3 control-label">Role</label>
					<div class="col-md-9">
						<select class="form-control" name="role_id">
							<option value="">Select</option>
							<?php if(count($roles)) :?>
								<?php foreach($roles as $role):?>
									<option value="<?php echo $role->role_id?>"><?php echo $role->role_name ?></option>
								<?php endforeach;?>
							<?php endif; ?>
						</select>
						<?php echo form_error('role_id','<div class="text-danger">','</div>');?>
					</div>
				</div>
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Sign Up</button>
	<?php echo form_close();?>
</div>