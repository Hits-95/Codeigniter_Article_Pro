 <?php include('header.php'); 
 	$action = $this->session->userdata('action');
 	//print_r($article);
 ?>
<div class="container">
		<h2 style="margin-top: 20px;"><?= ($action == 'update_article') ? "Edit " : "Add " ?>Article</h2>
	
	<?= form_open_multipart($action == 'update_article' ? "admin/update_article/{$article->id}" :  "admin/userValidation");?>

	<?php echo form_hidden('user_id', $this->session->userdata('id'));?>
	<?php echo form_hidden('create_at', date('Y-M-d H:i:s'));?>
		<div class="row" style="margin-top: 20px">
			<div class="col-lg-6">
				<div class="form-group">
		    		<label for=""> Article Title:</label>
		     		<?php 
			     		if($action == 'update_article'){
			     			 echo form_input(['type' =>'text', 'class' => 'form-control', 'placeholder' => 'Enter Article Title', 'name' => 'article_title', 'value' => set_value('article_title', $article->article_title)]);
			     		}else{
			     			 echo form_input(['type' =>'text', 'class' => 'form-control', 'placeholder' => 'Enter Article Title', 'name' => 'article_title', 'value' => set_value('article_title')]);
			     		}
		     		?>
		     	</div>
			</div>
			<div class="col-lg-6" style=" margin-top: 40px;">
				<?php echo form_error('article_title');?>
			</div>
		</div>
		<!-- end of row -->
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
		    		<label for="Username">Article Body:</label>
		     		<?php 
			     		if($action == 'update_article'){
			     			echo form_textarea(['type' =>'text', 'class' => 'form-control', 'placeholder' => 'Enter Article Body', 'name' => 'article_body','value' => set_value('article_body',$article->article_body)]);
			     		}else{
			     			echo form_textarea(['type' =>'text', 'class' => 'form-control', 'placeholder' => 'Enter Article Body', 'name' => 'article_body','value' => set_value('article_body')]);
			       		}
			     	?>
		     	</div>
			</div>
			<div class="col-lg-6" style=" margin-top: 150px;">
				<?php echo form_error('article_body');?>
			</div>
		</div>
		<!-- end of row -->
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
		    		<label for="Username">Select Image:</label><br>
		     		<?php 
		     			echo form_upload(['name' => 'userfile']);
			     		// if($action == 'update_article'){
			     		// 	echo form_upload(['name' => 'userfile']);
			     		// }else{
			     		// 	echo form_upload(['name' => 'userfile']);
			       // 		}
			     	?>
		     	</div>
			</div>
			<div class="col-lg-6" style=" margin-top:40px;">
				<?php if(isset($upload_error)) { echo $upload_error;  }  ?>
			</div>
		</div>
		<!-- end of row -->
		<?php 
			if($action == 'update_article'){
				echo form_submit(['type' => 'submit', 'class' => 'btn btn-primary', 'value' => 'Update']);
				
			}else{
				echo form_submit(['type' => 'submit', 'class' => 'btn btn-primary', 'value' => 'Add']);
				echo form_reset(['type' => 'reset', 'class' => 'btn btn-danger', 'value' => 'Reset']);
			}
			echo anchor("admin/welcome",'Cancel',['class'=>'btn btn-secondary']);
		?>		
</div>

<?php include('footer.php'); ?>