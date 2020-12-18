<?php include('header.php'); ?>

<div class="container">
	<h2 style="margin-top: 20px;">Admin Login</h2>
	<?php if($error = $this->session->flashdata('login_failed')):?>
		<div class="row" style="margin-top: 10px">
			<div class="col-lg-6">
				<div class="alert alert-danger">
    				<?= $error; ?>
 				</div>	
			</div>
		</div>
	<?php endif;?>
	<?php echo form_open('login/'); ?>
		<div class="row" style="margin-top: 20px">
			<div class="col-lg-6">
				<div class="form-group">
		    		<label for="Username"> Username:</label>
		     		<?php echo form_input(['type' =>'text', 'class' => 'form-control', 'placeholder' => 'Enter Username', 'name' => 'username', 'value' => set_value('username')]);?>
		     	</div>
			</div>
			<div class="col-lg-6" style=" margin-top: 20px;">
				<?php echo form_error('username');?>
			</div>
		</div>
		<!-- end of row -->
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
		    		<label for="Username"> Password:</label>
		     		<?php echo form_password(['type' =>'password', 'class' => 'form-control', 'placeholder' => 'Enter Password', 'name' => 'password','value' => set_value('password')]);?>
		     	</div>
			</div>
			<div class="col-lg-6" style=" margin-top: 20px;">
				<?php echo form_error('password');?>
			</div>
		</div>
		<!-- end of row -->

		<?php echo form_submit(['type' => 'submit', 'class' => 'btn btn-primary', 'value' => 'Login']);?>
		<?php echo form_reset(['type' => 'reset', 'class' => 'btn btn-danger', 'value' => 'Reset']);?>
		<?php echo anchor('users/register', 'Sing Up?', 'class="link-class"');?>
</div>

<?php include('footer.php'); ?>