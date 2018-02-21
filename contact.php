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
			<div class="panel panel-default">
				<div class="panel-heading"> 
				Please Enter your details 
				</div>
				<div class="panel-body">
					
	<div class="row form-group">
		<div class="col-sm-6">
			<input type="text" class="form-control" placeholder="Your Name">
		</div>
		
		<div class="col-sm-6">
			<input type="text" class="form-control"  placeholder="Your Mobile No">
		</div>
	</div><!--row end-->
	
	<div class="row form-group">
		<div class="col-sm-6">
			<input type="text" class="form-control" placeholder="Company Name">
		</div>
		
		<div class="col-sm-6">
			<input type="text" class="form-control"  placeholder="Your eMail">
		</div>
	</div><!--row end-->
	
	<div class="row form-group">
		<div class="col-sm-12">
			<textarea class="form-control" placeholder="Enter message"></textarea>
		</div>
	</div><!--row end-->
	
	<div class="form-group text-center">
		<button class="btn btn-success btn-md"> Submit </button>
	</div><!--row end-->
				
				</div><!--body end-->
			</div><!--panel end-->
				
				</div><!--9end-->
			</div><!--row end-->
		</div><!--container end-->
		
		<?php
		include("footer.php");
		?>