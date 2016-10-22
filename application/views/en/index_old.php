<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="title" content=" ">
        <meta name="description" content=" ">
        <meta name="keywords" content=" ">
        <title>Index</title>
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
	
	
		     <?php $this->load->view('en/nav')?>

	
	
	<section class="home">
		<div class="field">
			<div class="container">
				<div class="row">
					<div class="search-home">
						<form action="<?php echo $this->config->base_url();?>egar/search" method="POST">

						<div class="col-sm-4">
							<input type="text" class="form-control" placeholder="city" name="city">
						</div>
						<div class="col-sm-3">
							<select class="form-control" name="category">
								<option value="Flatshares">Flatshares</option>
								<option value="1 Room Flats">1 Room Flats</option>
								<option value="Flats">Flats</option>
								<option value="Houses">Houses</option>
							</select>
						</div>
						<div class="col-sm-3" name="type">
							<select class="form-control">
								<option value="1">Offers</option>
								<option value="2">Requests</option>
							</select>
						</div>
						<div class="col-sm-2">
							<button type="submit" class="btn btn-default">Search</button>
						</div>
					</div>
				</form>
				</div>
			</div>
		</div>
	</section>
	
	
	
	
	<!-- Modal Login -->
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