<div class="col-sm-3 text-center">
				   <strong> Enquiry </strong><hr>
				   <label id="mymsg">  </label>
					<div class="form-group">
						<input type="text" class="form-control input-sm" placeholder="Enter name" id="fname">
					</div>

					<div class="form-group">
						<input type="text" class="form-control input-sm" placeholder="Enter Mobile No" id="mobile">
					</div>
					
					<div class="form-group">
						<input type="text" class="form-control input-sm" placeholder="Enter e-Mail" id="email">
					</div>
					
					<div class="form-group">
						<textarea class="form-control" placeholder="Enter message" id="message"></textarea>
					</div>
					
					<div class="form-group text-center">
					<button class="btn btn-danger" onclick="saveenquiry()"> Send Now </button>
					</div>
				</div><!--3end-->
				
				<script src="assets/js/jquery.min.js">
				</script>
				<script>
				     function saveenquiry()
					 {
						 var name=$("#fname").val();
						 var mobile=$("#mobile").val();
						 var email=$("#email").val();
						 var message=$("#message").val();
						 
						 var mydata={"name":name, "mobile":mobile, "email":email, "message":message};
						 
						 $.ajax({
							 type:"POST",
							 url:"saveenquiry.php",
							 data:mydata,
							 sucess:function(response)
							 {
								 $(#mymsg).html(response);
							 }
						 });
					 }
				  
				</script>