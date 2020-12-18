<?php include('header.php')?>
<div class="container">
	<h1><?= $title; ?></h1>
	            
	<table class="table table-hover" style="margin-top: 20px">
		<thead>
	    	<tr class="table-primary">
	    		<th>Sr.No</th>
		        <th>Full Name</th>
		        <th>Email</th>
		        <th>Feed-Back</th>
	      	</tr>
	    </thead>
	    <tbody>
	    	<?php
	    		$cout = 1;
	    		foreach($feedback as $row) {
	    	?>
		    	<tr>
		    		<td><?php echo $cout++; ?></td>
			        <td><?php echo $row->name ?></td>
			        <td><?php echo $row->email ?></td>
			        <td><?php echo $row->feedback ?></td>
		      	</tr>
	      <?php } ?>
	  	</tbody>
	</table>
	<div align="center">
		<form action="<?= base_url()?>/export/createXLS">
			<input type="submit" name = "export" class = "btn btn-outline-success" value = "Export">			
		</form>
		
	</div>
</div>
<?php include('footer.php')?>