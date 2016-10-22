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
	
	
	<?php //print_r($result); ?>
	<?php //print_r($offer); ?>
	
	<!-- start userProfile -->
	<section class="userProfile">
		<div class="field">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-sm-offset-1">
						<div class="userImgDiv">
							<img src="<?php echo $this->config->base_url();?>_/images/awet-muda.jpg" class="img-responsive center-block userPIC" alt="">
						</div>
					</div>
					<div class="col-sm-7">
						<div class="detailes">
							<h1 class="name">

								<?php if($result){if($result[0]->gender==1){ echo "Ms/Mrs".".".$result[0]->first_name." ".$result[0]->last_name;}
								else{
									echo "Mr".".".$result[0]->first_name." ".$result[0]->last_name;
								} }?>
								</h1>
							<h2><i class="fa fa-user" aria-hidden="true"></i><span class="userName">Username :</span><span class="userData"><?php if($result){echo $result[0]->name_display ;} ?></span></h2>
							<h2><i class="fa fa-phone" aria-hidden="true"></i><span class="mobile">Mobile :</span><span class="userData"><?php if($result){echo $result[0]->mobile ;} ?></span></h2>
							<h2><i class="fa fa-clock-o" aria-hidden="true"></i><span class="mobileContactTimes">Mobile contact times :</span><span class="userData">


                         <?php if($result){echo $result[0]->mobile_available_from_h.":".$result[0]->mobile_available_from_m." to ".$result[0]->mobile_available_to_h.":". $result[0]->mobile_available_to_m ;} ?>


								</span></h2>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="col-sm-12">
						<div class="otherPersonalInfo">
							<h3 class="title">Other Personal Information's</h3>
							<div class="col-sm-6">
								<p>
									<i class="fa fa-map-marker" aria-hidden="true"></i>
									<span class="userPage">Adresse :</span>
									<span class="userData">
                       <?php if($result){echo $result[0]->house_no." ".$result[0]->street." ".$result[0]->city ;} ?>


										</span>
								</p>
								<p>
									<i class="fa fa-home" aria-hidden="true"></i>
									<span class="userPage">I currently live in :</span>
									<span class="userData"><?php if($result){echo $result[0]->current_live ;} ?></span>
								</p>
								<p>
									<i class="fa fa-language" aria-hidden="true"></i>
									<span class="userPage">Language :</span>

									<span class="userData">
									<?php if($result){echo $result[0]->language ;} ?>
									</span>
								</p>
							</div>
							<div class="col-sm-6">
							<!-- 	<p>
									<i class="fa fa-envelope" aria-hidden="true"></i>
									<span class="userPage">Postal Code :</span>
									<span class="userData">15012</span>
								</p> -->
								<p>
									<i class="fa fa-birthday-cake" aria-hidden="true"></i>
									<span class="userPage">Date of birth :</span>
									<span class="userData"><?php if($result){echo $result[0]->date_of_birth ;} ?></span>
								</p>
								<p>
									<i class="fa fa-briefcase" aria-hidden="true"></i>
									<span class="userPage">Occupational Status :</span>
									<span class="userData"><?php if($result){echo $result[0]->job ;} ?></span>
								</p>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="col-sm-12">
						<div class="allMyAds">
							<div class="tPe">
								<h3 class="title">All Requests</h3>
								<ul>
									<li><a href="<?php echo $this->config->base_url();?>_/profile.html" title="Grid"><i class="fa fa-th" aria-hidden="true"></i>Grid</a></li>
									<li><a href="<?php echo $this->config->base_url();?>_/profile-v.html" title="List"><i class="fa fa-list" aria-hidden="true"></i>List</a></li>
								</ul>
							</div>
							<div class="clearfix"></div>
																

							<?php foreach ($request as $value) {
								
							?>
							<div class="col-sm-6">
								<div class="oneAdOnProfile">
									<div class="adTitleDiv">
										<div class="smallMenuSetingOneAd">
											<i class="fa fa-cog" aria-hidden="true"></i>
											<div class="menu adSettingMenu">
												<ul>
													<li><a  href="<?php echo $this->config->base_url();?>/#"><i class="fa fa-check" aria-hidden="true"></i>Open</a></li>
												
													<li><a  data-id=<?php echo $value->id ; ?> href="<?php echo $this->config->base_url();?>_/#"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a></li>
													<?php if($value->deactive == 0){ ?>
													<li><a data-id=<?php echo $value->id ; ?> id="deactive_request" href="#"><i class="fa fa-bell-slash" aria-hidden="true"></i>Deactivate</a></li>
													<?php }else{ ?>

													<li><a data-id=<?php echo $value->id ; ?> id="active_request" href="#"><i class="fa fa-bell-slash" aria-hidden="true"></i>activate</a></li>
													<?php } ?>

													<li><a data-id=<?php echo $value->id ; ?> id="delete_request"  href="#"><i class="fa fa-trash" aria-hidden="true"></i>Delete</a></li>
												</ul>
											</div>
										</div>
										<h1 class="adName"><?php echo $value->title?></h1>
									</div>
									<div class="clearfix"></div>
									<a href="<?php echo $this->config->base_url();?>_/#">
										<div class="addLocationTime">
											<ul class="ulUserData">
												<li><i class="fa fa-map-marker" aria-hidden="true"></i><span class="userData"><?php echo $value->city?> </span></li>
												<li><i class="fa fa-clock-o" aria-hidden="true"></i><span class="userData"><?php echo $value->post_date?> </span></li>
											</ul>
										</div>
										<div class="clearfix"></div>
										<div class="desAd">
											<p>
												<span class="Description">Description: </span>
												<span class="pragDesc"><?php echo $value->add_text?>.</span>
											</p>
										</div>
									</a>
								</div>
							</div>
							<?php } ?>
							</div>
						</div>
				<!--aya  -->
					<div class="clearfix"></div>
					<div class="col-sm-12">
						<div class="allMyAds">
							<div class="tPe">
								<h3 class="title">All Offers</h3>
								<ul>
									<li><a href="<?php echo $this->config->base_url();?>_/profile.html" title="Grid"><i class="fa fa-th" aria-hidden="true"></i>Grid</a></li>
									<li><a href="<?php echo $this->config->base_url();?>_/profile-v.html" title="List"><i class="fa fa-list" aria-hidden="true"></i>List</a></li>
								</ul>
							</div>
							<div class="clearfix"></div>
					<?php foreach ($offer as $value) {
								
							?>
							<div class="col-sm-6">
								<div class="oneAdOnProfile">
									<div class="adTitleDiv">
										<div class="smallMenuSetingOneAd">
											<i class="fa fa-cog" aria-hidden="true"></i>
											<div class="menu adSettingMenu">
												<ul>
													<li><a target="_blank"  href="<?php echo $this->config->base_url();?>egar/offer_details/<?php echo $value->id;?>"><i class="fa fa-check" aria-hidden="true"></i>Open</a></li>
												
													<li><a  data-id=<?php echo $value->id ; ?> href="<?php echo $this->config->base_url();?>_/#"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a></li>
													<?php if($value->deactive == 0){ ?>
													<li><a data-id=<?php echo $value->id ; ?> id="deactive_offer" href="#"><i class="fa fa-bell-slash" aria-hidden="true"></i>Deactivate</a></li>
													<?php }else{ ?>

													<li><a data-id=<?php echo $value->id ; ?> id="active_offer" href="#"><i class="fa fa-bell-slash" aria-hidden="true"></i>activate</a></li>
													<?php } ?>

													<li><a data-id=<?php echo $value->id ; ?> id="delete_offer"  href="#"><i class="fa fa-trash" aria-hidden="true"></i>Delete</a></li>
												</ul>
											</div>
										</div>
										<h1 class="adName"><?php echo $value->title?></h1>
									</div>
									<div class="clearfix"></div>
									<a href="<?php echo $this->config->base_url();?>_/#">
										<div class="addLocationTime">
											<ul class="ulUserData">
												<li><i class="fa fa-map-marker" aria-hidden="true"></i><span class="userData"><?php echo $value->city?> </span></li>
												<li><i class="fa fa-clock-o" aria-hidden="true"></i><span class="userData"><?php echo $value->post_date?> </span></li>
											</ul>
										</div>
										<div class="clearfix"></div>
										<div class="desAd">
											<p>
												<span class="Description">Description: </span>
												<br>
												<span class="pragDesc">
												location description: <?php echo $value->location_desc?>.
												<br>
                                                room description: <?php echo $value->room_desc?>.
											</span>
											</p>
										</div>
									</a>
								</div>
							</div>
							<?php } ?>
							</div>
						</div>
				<!-- aya -->















				</div>
			</div>
		</div>
	</section>
	<!-- end userProfile -->
	
	
	
	
	
	
	
	
	
	
	
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

<script type="text/javascript">
$(document).on("click","#deactive_request",function () {
var id=$(this).data('id');
//alert(id);

 var data = {id:id};
       $.post("<?php echo $this->config->base_url(); ?>egar/deactive_request",data,function(data){   
			
		 	 location.reload();
		      // alert(data);
		 	});


 });
$(document).on("click","#active_request",function () {
var id=$(this).data('id');
//alert(id);

 var data = {id:id};
       $.post("<?php echo $this->config->base_url(); ?>egar/active_request",data,function(data){   
			
		 	 location.reload();
		      // alert(data);
		 	});


 });
$(document).on("click","#delete_request",function () {
var id=$(this).data('id');
//alert(id);

 var data = {id:id};
       $.post("<?php echo $this->config->base_url(); ?>egar/delete_request",data,function(data){   
			
		 	 location.reload();
		      // alert(data);
		 	});


 });

$(document).on("click","#deactive_offer",function () {
var id=$(this).data('id');
alert(id);

 var data = {id:id};
       $.post("<?php echo $this->config->base_url(); ?>egar/deactive_offer",data,function(data){   
			
		 	 location.reload();
		       alert(data);
		 	});


 });

$(document).on("click","#active_offer",function () {
var id=$(this).data('id');
alert(id);

 var data = {id:id};
       $.post("<?php echo $this->config->base_url(); ?>egar/active_offer",data,function(data){   
			
		 	 location.reload();
		       alert(data);
		 	});


 });

$(document).on("click","#delete_offer",function () {
var id=$(this).data('id');
alert(id);

 var data = {id:id};
       $.post("<?php echo $this->config->base_url(); ?>egar/delete_offer",data,function(data){   
			
		 	 location.reload();
		      // alert(data);
		 	});


 });
</script>