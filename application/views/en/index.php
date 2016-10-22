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
							<!-- <input type="text" id="search-box" class="form-control"name="city" placeholder="city" > -->
							<!-- <div id="suggesstion-box"></div> -->
 					        <select class="form-control" name="city" >
					            <?php
		                            foreach ($result as $value) { echo "<option value='$value->name'>$value->name</option>"; }
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
	
	

	
	
	
<?php $this->load->view('en/footer')?>
<?php $this->load->view('en/footer-small')?>
	

<script type="text/javascript">

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
