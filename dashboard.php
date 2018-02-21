<div class="container">
			<div class="row">
				<div class="col-sm-3 text-center">
				   <strong> Enquiry </strong><hr>
					<div class="form-group">
						<input type="text" class="form-control input-sm" placeholder="Enter name">
					</div>

					<div class="form-group">
						<input type="text" class="form-control input-sm" placeholder="Enter Mobile No">
					</div>
					
					<div class="form-group">
						<input type="text" class="form-control input-sm" placeholder="Enter e-Mail">
					</div>
					
					<div class="form-group">
						<textarea class="form-control" placeholder="Enter message"></textarea>
					</div>
					
					<div class="form-group text-center">
					<button class="btn btn-danger"> Send Now </button>
					</div>
				</div><!--3end-->
				
		<div class="col-sm-9">
			<?php
			include("nav.php")
			?>
			<br>
			<div class="panel panel-default">
				<div class="panel-heading"> My Home </div>
				<div class="panel-body table-responsive">
					
					<table class="table table-bordered">
						<tr class="info">
							<th> # </th>
							<th> Name </th>
							<th> City </th>
							<th> Age </th>
						</tr>
						
						<tr class="active">
							<td> 01 </td>
							<td> Siyaram </td>
							<td> Bangalore </td>
							<td> 28 Years </td>
						</tr>
						<tr class="warning">
							<td> 02 </td>
							<td> AAAAAAAA </td>
							<td> Bangalore </td>
							<td> 28 Years </td>
						</tr>
						<tr class="active">
							<td> 01 </td>
							<td> Siyaram </td>
							<td> Bangalore </td>
							<td> 28 Years </td>
						</tr>
					</table>
					
					<ul class="pager">
						<li> <a href="#"> First </a></li>
						<li> <a href="#"> Next </a></li>
					</ul>
				</div>
			</div><!--panel end-->
				
				</div><!--9end-->
			</div><!--row end-->
		</div><!--container end-->
		