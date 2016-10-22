<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="title" content=" ">
        <meta name="description" content=" ">
        <meta name="keywords" content=" ">
        <title>egar</title>
        <link href='<?php echo $this->config->base_url();?>_/css/bootstrap.min.css' rel='stylesheet'>
        <!--<link href='<?php echo $this->config->base_url();?>_/css/bootstrap-rtl.css' rel='stylesheet'>-->
        <link href='<?php echo $this->config->base_url();?>_/css/font-awesome.min.css' rel='stylesheet'>
		<link href='<?php echo $this->config->base_url();?>_/css/base.css' rel='stylesheet'>
		<link href='<?php echo $this->config->base_url();?>_/css/animate.css' rel='stylesheet'>
		<link href="<?php echo $this->config->base_url();?>_/dist/css/datepicker.min.css" rel="stylesheet">
        <link href='<?php echo $this->config->base_url();?>_/css/style.css' rel='stylesheet'>
        <link href='<?php echo $this->config->base_url();?>_/css/media.css' rel='stylesheet'>
        <link href="<?php echo $this->config->base_url();?>_/css/owl.carousel.css" rel="stylesheet">
        <link href="<?php echo $this->config->base_url();?>_/css/owl.theme.css" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="<?php echo $this->config->base_url();?>_/images/logo-head.png">
        <!--[if lt IE 9]>
            <script src="<?php echo $this->config->base_url();?>_/js/html5shiv.min.js"></script>
            <script src="<?php echo $this->config->base_url();?>_/js/respond.min.js"></script>
        <![endif]-->
    </head>
<body>
	
			     <?php $this->load->view('en/nav2')?>

	
	<!-- start home -->
	<section class="home">
		<div class="field">
			<div class="container">
				<div class="row">
					<div class="search-home">
						<form action="<?php echo $this->config->base_url();?>egar/search" method="POST">

						<div class="col-sm-12 text-center">
							<img src="<?php echo $this->config->base_url();?>_/images/logo2.png" class="img-responsive center-block logo" alt="egar logo">
						</div>
						<div class="col-sm-12">
							<h1 class="titleSearch">You can Search about you need of apartments here</h1>
						</div>
						<div class="col-sm-4">
							<label class="textLabel">City</label>
<!-- 							<input type="text" id="search-box" class="form-control"name="city" placeholder="city" >
 --><!-- 	                        <div id="suggesstion-box"></div>
 -->					        <select class="form-control" name="city" >
			            <?php
                            foreach ($result as $value) { echo "<option value='$value->id'>$value->name</option>"; }
                        ?>
							</select>
                    	</div>
						<div class="col-sm-4">
							<label class="textLabel">Category</label>
							<select class="form-control" name="category" >
								<option value="Flatshares">Flatshares</option>
								<option value="1 Room Flats">1 Room Flats</option>
								<option value="Flats">Flats</option>
								<option value="Houses">Houses</option>
							</select>
						</div>
						<div class="col-sm-4">
							<label class="textLabel">Ad Type</label>
							<select class="form-control" name="type" >
								<option value="1">Offers</option>
								<option value="2">Requests</option>
							</select>
						</div>
						<div class="col-sm-12 text-center">
							<div class="btnEdit">
								<button type="submit" class="btn btn-success">Search</button>
							</div>
						</div>
						<div class="col-sm-12">
							<h4 class="langAR">إيجار متوفر باللغة : <a href="<?php echo $this->config->base_url();?>_/#" title="اللغة العربية"><span>العربية</span></a></h4>
						</div>
					</div>
								</form>

				</div>
			</div>
		</div>
	</section>
	<!-- end home -->
	
	
	
	
	
	<!-- start columnsFeatures -->
	<section class="columnsFeatures">
		<div class="field">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<div class="oneFeature"></div>
						<div class="mainTitle">
							<h1>NO REALTOR</h1>
						</div>
						<div class="mainP">
							<p>Exclusive offers without commission</p>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="twoFeature"></div>
						<div class="mainTitle">
							<h1>FREE OF CHARGE</h1>
						</div>
						<div class="mainP">
							<p>it is free and always will be free</p>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="threeFeature"></div>
						<div class="mainTitle">
							<h1>EASY AND QUICKLY</h1>
						</div>
						<div class="mainP">
							<p>Easy search using individual filters and quickly to find person for your house,flat or roommate </p>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="fourFeature"></div>
						<div class="mainTitle">
							<h1>TITLE HERE</h1>
						</div>
						<div class="mainP">
							<p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
						</div>
					</div>
					
					<!-- hr Line-->
					<div class="col-sm-12"><div class="margTP40px"><hr></div></div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- end columnsFeatures -->
	
	
	
	
	<!-- start infoMainPage -->
	<section class="infoMainPage">
		<div class="field">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="title">
							<h2>How to Use us successfully</h2>
						</div>
						<img src="<?php echo $this->config->base_url();?>_/images/layer-32.png" class="img-responsive center-block" alt="">
						<div class="infoP">
							<p>On WG-Gesucht.de you can quickly and easily advertise your Ad for a share apartment, a flat or a house for rent or short term rent.</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="title">
							<h2>Create Offers</h2>
						</div>
						<img src="<?php echo $this->config->base_url();?>_/images/layer-34.png" class="img-responsive center-block" alt="">
						<div class="infoP">
							<p>If you are searching for a new flat or house mate or your next tenant, please create your Offer here.</p>
						</div>
						<div class="form-group text-center">
							<a href="<?php echo $this->config->base_url();?>egar/offer" class="btn btn-success btn-block">CREATE OFFER</a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="title">
							<h2>How to Use us successfully</h2>
						</div>
						<img src="<?php echo $this->config->base_url();?>_/images/layer-32.png" class="img-responsive center-block" alt="">
						<div class="infoP">
							<p>If you are interested in finding a new home. please insert your Request here . Good luck!</p>
						</div>
						<div class="form-group text-center">
							<a href="<?php echo $this->config->base_url();?>egar/request" class="btn btn-success btn-block">Create Requests</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end infoMainPage -->
	
	
	
	<!-- start socialMediaBtn -->
	<section class="socialMediaBtn">
		<div class="field">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="social-media">
							<ul class="social-icons text-center">
								<li>
									<a href="<?php echo $this->config->base_url();?>_/#" target="_blank" title="egar facebook link">
										<i class="fa fa-facebook" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="egar facebook link"></i>
									</a>
								</li>
								<li>
									<a href="<?php echo $this->config->base_url();?>_/#" target="_blank" title="egar twitter link">
										<i class="fa fa-twitter" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="egar twitter link"></i>
									</a>
								</li>
								<li>
									<a href="<?php echo $this->config->base_url();?>_/#" target="_blank" title="egar instagram link">
										<i class="fa fa-instagram" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="egar instagram link"></i>
									</a>
								</li>
								<li>
									<a href="<?php echo $this->config->base_url();?>_/#" target="_blank" title="egar youtube-play link">
										<i class="fa fa-youtube-play" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="egar youtube-play link"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
					
					<!-- hr Line-->
					<div class="col-sm-12"><div class="margTP20px"><hr></div></div>
					
					<div class="col-sm-12">
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end socialMediaBtn -->
	
	
	
    <!-------------------- start copyrights -------------------->
    <section class="copyrights">
      <div class="container">
        <div class="row">
			<div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
            <ul>
				<li><a href="<?php echo $this->config->base_url();?>_/#" class="last">Terms of Use</a></li>
				<li><a href="<?php echo $this->config->base_url();?>_/#">Privacy Policy</a></li>
				<li><a href="<?php echo $this->config->base_url();?>_/#">Help</a></li>
				<li><a href="<?php echo $this->config->base_url();?>_/#">Sitemap</a></li>
				<li><a href="<?php echo $this->config->base_url();?>_/#">Feedback</a></li>
			</ul>
          </div>
          <div class="col-lg-6 col-md-5 col-sm-6 col-xs-12">
            <p class="footer-style-2">© 2016 EGAR. All Rights Reserved.<a class="designed" href="<?php echo $this->config->base_url();?>_/http://www.esameisa.com/" target="_blank" title="www.esameisa.com">Powered by Eisa Design</a></p>
          </div>          
        </div>
      </div>
    </section>
    <!-------------------- end copyrights -------------------->
	
	
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
                        location.reload();
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


      // AJAX call for autocomplete 
$(document).ready(function(){
	$("#search-box").keyup(function(){
		// alert("DDDd");
		$.ajax({
		type: "POST",
		url: "<?php echo $this->config->base_url(); ?>egar/city_search" ,
		data:'keyword='+$(this).val(),
		beforeSend: function(){
			$("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
			// alert(data);
			$("#suggesstion-box").show();
			$("#suggesstion-box").html(data);
			$("#search-box").css("background","#FFF");
		}
		});
	});
});
//To select country name
function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}      
</script>
