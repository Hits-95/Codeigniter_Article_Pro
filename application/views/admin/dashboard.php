<?php include('header.php');?>
<div class="container">
	<div class="row" style="margin-top: 10px">
		<div class="col-lg-10">
			<h2 class="text-center page-header">Article List</h2>
		</div> 
		<div class="col-lg-2" style="margin-top: 3px; margin-bottom: 3px">
			<a href="<?= base_url('admin/add_article'); ?>" class="btn btn-info"><span style="margin-right: 5px; font-size: 18px;">Add Article</span><i class='fas fa-plus' style=''></i></a>
		</div>
	</div>
		<?php if($msg = $this->session->flashdata('msg')):?>
			<div class="row">
				<div class="col-lg-4">
					<div class="<?= $this->session->flashdata('msg_class')?>">
	    				<?= $msg; ?>
	    			</div>	
				</div>
			</div>	
		<?php endif;?>	

	<div class="table-responsive">
		<table class="table table-hover ">
		    <thead>
		    	<tr class="table-primary">
		    		<th> Id </th>
			        <th>Article Title</th>
			        <th>Article Body</th>
			        <th>Edit</th>
			        <th>Delete</th>
		      	</tr>
		    </thead>
		    <tbody>
		    	<?php $count = $this->uri->segment(3);?>
		    	<?php if(count($articles)): ?>
			    	<?php foreach($articles as $art) :?>
				      <tr>
				      	<td><?= ++$count ?></td>
				        <td><strong><?= $art->article_title;?></strong></td>
				        <td><i><?= $art->article_body;?></i></td>
				        <td><?=  anchor("admin/edit_article/{$art->id}",'Edit',['class'=>'btn btn-outline-primary btn-sm']); ?></td>
				        <td>
				        	<?=
				        		form_open('admin/del_article'),
				        		form_hidden('id', $art->id),
				        		form_submit(['name' => 'submit', 'value' => 'Delete', 'class' => 'btn btn-outline-danger btn-sm']),
				        		form_close();
				        	?>
				        </td>
				      </tr>
			      	<?php endforeach;?>
			     <?php else: ?>
			     	<tr>
			     		<td colspan="3" class="text-danger">No Data Available !!!</td>
			     	</tr>
			    <?php endif;?>
		    </tbody>
	 	</table>
	</div>
	<div class="row">
		<div class="col-lg-4"></div>
			<?= $this->pagination->create_links(); ?>	
		</div>
		
	</div>
</div>
	
<?php include('footer.php'); ?>