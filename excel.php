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
				User Excel Upload
				</div>
				<div class="panel-body">
					<form method="POST" action="upload.php" enctype="multipart/form-data">
	<div class="form-group">
	<input type="file" name="user" >
	</div><!--row end-->
	
	<div class="form-group">
	<input type="text" class="form-control" placeholder="Your password">
	</div><!--row end-->
	
	<div class="form-group text-center">
		<button class="btn btn-success btn-md"> Upload </button>
	</div><!--row end-->
				</form>
				</div><!--body end-->
			</div><!--panel end-->
				
				</div><!--9end-->
			</div><!--row end-->
		</div><!--container end-->
		
		<?php
		include("footer.php");
		?>