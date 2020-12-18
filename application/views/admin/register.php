<?php include('header.php'); ?>

<div class="container">
	<h2 style="margin-top: 20px">Register Form</h2>
	<?php if($msg = $this->session->flashdata('msg')):?>
			<div class="row">
				<div class="col-lg-4">
					<div class="<?= $this->session->flashdata('msg_class')?>">
	    				<?= $msg; ?>
	    			</div>	
				</div>
			</div>	
	<?php endif;?>	
	<?php echo form_open('login/sendEmail'); ?>
		<div class="row" style="margin-top: 30px">
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
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
		    		<label for="Username"> First Name:</label>
		     		<?php echo form_input(['type' =>'text', 'class' => 'form-control', 'placeholder' => 'Enter First Name', 'name' => 'firstname','value' => set_value('firstname')]);?>
		     	</div>
			</div>
			<div class="col-lg-6" style=" margin-top: 20px;">
				<?php echo form_error('firstname');?>
			</div>
		</div>
		<!-- end of row -->
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
		    		<label for="Username"> Last Name:</label>
		     		<?php echo form_input(['type' =>'text', 'class' => 'form-control', 'placeholder' => 'Enter Last Name', 'name' => 'lastname','value' => set_value('lastname')]);?>
		     	</div>
			</div>
			<div class="col-lg-6" style=" margin-top: 20px;">
				<?php echo form_error('lastname');?>
			</div>
		</div>
		<!-- end of row -->
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
		    		<label for="Username"> Email:</label>
		     		<?php echo form_input(['type' =>'email', 'class' => 'form-control', 'placeholder' => 'Enter Email', 'name' => 'email','value' => set_value('email')]);?>
		     	</div>
			</div>
			<div class="col-lg-6" style=" margin-top: 20px;">
				<?php echo form_error('email');?>
			</div>
		</div>
		<!-- end of row -->

		<?php echo form_submit(['type' => 'submit', 'class' => 'btn btn-primary', 'value' => 'Register']);?>
		<?php echo form_reset(['type' => 'reset', 'class' => 'btn btn-danger', 'value' => 'Reset']);?>
</div>

<?php include('footer.php'); ?>