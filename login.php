<?php
include("topnav.php");
?>
		
		<div class="container">
			<div class="row">
				<?php
				include("enquiry.php");
				?>
				
		<div class="col-sm-9">
			<?php
			include("nav.php");
			?>
			<br>
			<div class="panel panel-primary">
				<div class="panel-heading"> 
				User Login
				</div>
				<div class="panel-body">
					
	<div class="form-group">
	<input type="text" class="form-control" placeholder="Your email">
	</div><!--row end-->
	
	<div class="form-group">
	<input type="text" class="form-control" placeholder="Your password">
	</div><!--row end-->
	
	<div class="form-group text-center">
		<button class="btn btn-success btn-md"> Login </button>
	</div><!--row end-->
				
				</div><!--body end-->
			</div><!--panel end-->
				
				</div><!--9end-->
			</div><!--row end-->
		</div><!--container end-->
		
		<?php
		include("footer.php");
		?>