<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="title" content=" ">
        <meta name="description" content=" ">
        <meta name="keywords" content=" ">
        <title>Create Request</title>
        <link href='<?php echo $this->config->base_url();?>_/css/bootstrap.min.css' rel='stylesheet'>
        <!--<link href='<?php echo $this->config->base_url();?>_/css/bootstrap-rtl.css' rel='stylesheet'>-->
        <link href='<?php echo $this->config->base_url();?>_/css/font-awesome.min.css' rel='stylesheet'>
		<link href='<?php echo $this->config->base_url();?>_/css/base.css' rel='stylesheet'>
		<link href='<?php echo $this->config->base_url();?>_/css/animate.css' rel='stylesheet'>
        <link href='<?php echo $this->config->base_url();?>_/css/style.css' rel='stylesheet'>
        <link href='<?php echo $this->config->base_url();?>_/css/media.css' rel='stylesheet'>
        <link href="<?php echo $this->config->base_url();?>_/css/owl.carousel.css" rel="stylesheet">
        <link href="<?php echo $this->config->base_url();?>_/css/owl.theme.css" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="<?php echo $this->config->base_url();?>_/images/logo.png">
        <!--[if lt IE 9]>
            <script src="<?php echo $this->config->base_url();?>_/js/html5shiv.min.js"></script>
            <script src="<?php echo $this->config->base_url();?>_/js/respond.min.js"></script>
        <![endif]-->
    </head>
<body>
	
	
           <?php $this->load->view('en/nav2')?>

	
	
	<section class="creat-request">
		<div class="field">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<div class="bg-static">
							<form action="<?php echo $this->config->base_url();?>egar/request2" method="POST">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="-= Enter City =-" name="city">
							</div>
							<div class="form-group">
								<select id="Flatshares-RoomFlats-Flats-Houses" class="form-control" name="building_type">
									<option value="" selected="">-= Please select =-</option>
									<option value="Flatshares">Flatshares</option>
									<option value="RoomFlats">1 Room Flats</option>
									<option value="Flats">Flats</option>
									<option value="Houses">Houses</option>
								</select>
							</div>
							<div class="form-group">
								<select id="Long-Short-Rent" class="form-control" name="period">
									<option value="" selected="">-= Please select =-</option>
									<option value="Long Term">Long Term</option>
									<option value="Short Term">Short Term</option>
									<option value="Rent by Day">Rent by Day</option>
								</select>
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-warning">Continue</button>
							</div>
						</div>
						</form>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	
	
	
	
	
	<!--<div class="group option1">op1</div>-->
	<!--<div class="group option1">op2</div>-->
	<!--<div class="group option3">op3</div>-->
	<!--<div class="group option4">op4</div>-->
	<!--<select id="selectMe">-->
	<!--  <option value="option1">option1</option>-->
	<!--  <option value="option2">option2</option>-->
	<!--  <option value="option3">option3</option>-->
	<!--  <option value="option4">option4</option>-->
	<!--</select>-->
		 <?php $this->load->view('en/login_register')?>

	
    <!-- start - shm -->
    <section id="shm">
        <div class="scroll-up">
            <i class="fa fa-arrow-up fa-3x"></i>
        </div>
    </section>
    <!-- End - shm -->
    
    
    
    <script src="<?php echo $this->config->base_url();?>_/js/jquery.min.js"></script>
    <script src="<?php echo $this->config->base_url();?>_/js/jquery-2.1.3.min.js"></script>
    <script src="<?php echo $this->config->base_url();?>_/js/bootstrap.min.js"></script>
    <script src="<?php echo $this->config->base_url();?>_/js/jquery.nicescroll.min.js"></script>
    <script src="<?php echo $this->config->base_url();?>_/js/owl.carousel.js"></script><!-- Include js plugin -->
    <script src="<?php echo $this->config->base_url();?>_/js/plugins.js"></script>
    <script src="<?php echo $this->config->base_url();?>_/js/wow.min.js"></script>
    <script>new WOW().init();</script>
</body>
</html>

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
                           $("#result").val()="";

                     }  
                   });
                        event.preventDefault();
                        location.reload();
                        // $("#x").modal('toggle');
                    });
                
            }
</script>