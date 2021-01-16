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
	   		<tbody>
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
						        <td class = "font-weight-bold text-primary"><?=$art->article_title ?></td>
						        <td class = "font-italic"><?=$art->article_body?></td>
						        <td class = "text-center"><h6> <?= $art->create_at?> </h6></td>
			        		</tr>
	   			<?php
	   					endforeach;
	   				endif;
	   			 ?>
	    	</tbody>
  		</table>
	</div>
</body>

<?= $this->pagination->create_links()?> 
<?php include('footer.php')?>