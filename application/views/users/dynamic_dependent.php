<?php include('header.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
	<div class="container" align="center">
		<h2 >Code Dynamic Dependent Select Box</h2>
		<!-- for country -->
		<div class="form-group">
  			<select class="form-control" id="country">
			    <option>Select Country</option>
			   <?php 
			   		foreach ($country as $row) {
			   			echo '<option value =" '.$row->country_id.'">'.$row->country_name."</option>";
			   		}
			   ?>
 			 </select>
		</div>

		<!-- for state  -->
		<div class="form-group">
  			<select class="form-control" id="state">
  				<option>Select State</option>
 			 </select>
		</div>

		<!-- for city  -->
		<div class="form-group">
  			<select class="form-control" id="city">
  				<option>Select City</option>
 			 </select>
		</div>
	</div>
</body>
</html>
<script>
	$(document).ready(function(){
		$("#country").change(function(){
			var country_id = $("#country").val();
			// alert(country_id);
			if(country_id != ""){
				$.ajax({
					url     : "<?php echo base_url(); ?>dynamic_dependent/fetch_state",
					method  : "POST",
					data    : {country_id:country_id},
					success : function(data){
						$("#state").html(data);
						$("#city").html("<option>Select City</option>");
					}
				});
			}else{
				$("#state").html("<option>Select State</option>");
				$("#city").html("<option>Select City</option>");
			}
		});

		//get city data 
		$("#state").change(function(){
			var state_id = $("#state").val();
			if(state_id != ""){
				$.ajax({
					url     : "<?php echo base_url(); ?>dynamic_dependent/fetch_city",
					method  : "POST",
					data    : {state_id:state_id},
					success : function(data){
						$("#city").html(data);
					}
				});
			}else
				$("#city").html("<option>Select City</option>");
		});
  	});//end of ready ....
</script>
<?php include('footer.php')?>

