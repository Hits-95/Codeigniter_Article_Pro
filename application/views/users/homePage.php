<?php include('header.php')?>
<body>
	<div class="container-fluid" style="margin-top: 10px">
  		<h2>All Articles</h2>
  		<table class="table table-bordered">
  			<thead>
    			<tr>
			        <th>Sr.No</th>
			        <th>Article Image</th>
			        <th>Article Title</th>
			        <th>Article Body</th>
			        <th> Publish On</th>
   			</thead>
	   		<tbody id = "myTable">
	   			<?php
	   				if(count($articles)):
	   					$count = $this->uri->segment(3);
	   					foreach ($articles as $art) :
	   			?>	
	   						<tr>
			        			<td><?= ++$count ?></td>
			        			<td>
						        	<?php 
						        		if(! is_null($art->image_path)){
						        	?>
						        		<img src="<?= $art->image_path?>" class="rounded" alt="Cinque Terre" widht = "200" height = "200">
						        	<?php
						        		}
						        	?>
						        </td>
						        <td class = "font-weight-bold text-primary"><?= anchor("admin/display_card_article/{$art->id}",$art->article_title) ?></td>
						        <td class = "font-italic"><?=$art->article_body?></td>
						        <td class = "text-center"><h6> <?= date("d M y H:i:s" ,strtotime($art->create_at)) ?> </h6></td>
			        		</tr>
	   			<?php
	   					endforeach;
	   				endif;
	   			 ?>
	    	</tbody>
  		</table>
  		<div class="row">
			<div class="col-lg-5"></div>
			<?= $this->pagination->create_links(); ?>
		</div>
	</div>
</body>


<?php include('footer.php')?>