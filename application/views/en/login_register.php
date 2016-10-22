
	<!-- Modal Login -->
	<div class="modal fade bs-Login-modal-sm" tabindex="-1" role="dialog" id="login_modal" aria-labelledby="myModalLabelLogin">
	  <div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
            <form action="#" method="post" enctype="multipart/form-data" id="login">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <h4 class="modal-title" id="myModalLabelLogin">Login</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<input type="email" class="form-control"name="email" id="email" placeholder="Email" required>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<input type="Password" class="form-control" name="password" id="password" placeholder="Password" required>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember_me"> Remember me
									</label>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group text-center">
								<button type="submit" id="submitbtn" onclick="SubmitForm('login','egar','login')" class="btn btn-default">Login</button>
							</div>
						</div>
					</div>
				</div>

				<div class="modal-footer">
					<a href="<?php echo $this->config->base_url();?>_/#">Forget Password</a>
				</div>
			</form>
		</div>
	  </div>
	</div>
	
	
	
	
	<!-- Modal Register -->
	<div class="modal fade bs-Register-modal-sm" tabindex="-1" role="dialog" id="registermodal" aria-labelledby="myModalLabelRegister">
	  <div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
            <form action="#" method="post" enctype="multipart/form-data" id="register">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <h4 class="modal-title" id="myModalLabelRegister">Register</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-sm-12">
							<div class="btn-group btn-group-justified" data-toggle="buttons">
								<label class="btn btn-primary">
									<input id="title" value="0" name="title" autocomplete="off" type="radio" required> Mr
								</label>
	
								<label class="btn btn-primary">
									<input id="title_mam" value="1" name="title" autocomplete="off" type="radio" required> Ms/Mrs
								</label>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="First Name" name="first_name" required>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Last Name" name="last_name" required>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email"name="email" required>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<input type="Password" class="form-control" placeholder="Password" name="password" required>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<input type="Password" class="form-control" placeholder="Re-Enter Your Password" name="repassword" required>
							</div>
						</div>
<!-- 
						<div class="col-sm-12">
							<center>
							<div class="form-group">
								<label class="radio-inline">
									<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" required> Male
								</label>
								<label class="radio-inline">
									<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" required> Female
								</label>

							</div>
							</center>
						</div> -->
						<div class="col-sm-12">
							<div class="form-group">
								<div class="checkbox">
									<label>
										<input type="checkbox" required> Accept terms and condisions 
									</label>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group text-center">
								<button type="submit" class="btn btn-default" id="submitbtn" onclick="SubmitFormregister('register','egar','register')">Submit</button>
							</div>
							<center>
							<span  id="result">
								
							</span>
							</center>
						</div>
					</div>
				</div>
			</form>
		</div>
	  </div>
	</div>
	
	<script type="text/javascript">
function SubmitForm(FormID, Controller, FunctionName) {
            // alert("sd");
               $("#"+FormID).unbind('submit').submit(function (event) {
                   
                   var formData = $( this ).serialize();
                   $.ajax({
                            type: 'POST', 
                            url: "<?php echo $this->config->base_url(); ?>" + Controller + "/"+ FunctionName,
                            data: formData
                        })
                        .done(function (data) {
                            // $("#result").html(data);
                            if(data=="error"){
                        $('<div class="success-order">invalid email or password </div>').insertBefore('#submitbtn').delay(10000).fadeOut();
                       // $("#result").html("invalid email or password ");
                       // alert(data);
                       } else
                       {
                       	$('<div class="success-order">success </div>').insertBefore('#submitbtn').delay(10000).fadeOut();
                        $("#login_modal").modal('toggle');
                        location.reload();
                       }  
                   });

                        event.preventDefault();
                        
                        $("#"+FormID)[0].reset();
                        // $("#x").modal('toggle');
                    });
                
            }
    function SubmitFormregister(FormID, Controller, FunctionName) {
    	//if($("#password").val()== $("#repassword").val()){
               $("#"+FormID).unbind('submit').submit(function (event) {
                   
                   var formData = $( this ).serialize();
                   $.ajax({
                            type: 'POST', 
                            url: "<?php echo $this->config->base_url(); ?>" + Controller + "/"+ FunctionName,
                            data: formData
                        })
                        .done(function (data) {
                            // $("#result").html(data);
                       if(data!="you are successfully registered"){
                       $("#result").html(data);
                       // alert(data);
                       } else
                       {
                       	   $("#"+FormID)[0].reset();
                           $("#registermodal").modal('toggle');  
                           $("#result").val("");
                          // location.reload();
                           window.location.reload()


                     }  
                   });
                        event.preventDefault();
                        // $("#x").modal('toggle');
                    });
                
            }
</script>