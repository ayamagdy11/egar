<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="title" content=" ">
        <meta name="description" content=" ">
        <meta name="keywords" content=" ">
        <title>Create offer</title>
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
							<form enctype="multipart/form-data" action="<?php echo $this->config->base_url();?>egar/offer2" method="POST">
							<div class="form-group">
        <select class="form-control" name="city" >
                  <?php
                            foreach ($result as $value) { echo "<option value='$value->name'>$value->name</option>"; }
                        ?>
              </select>							</div>
							<div class="form-group">
								<select id="Flatshares-RoomFlats-Flats-Houses" class="form-control" name="building_type" required>
									<option value="" selected="">-= Please select =-</option>
									<option value="Flatshares">Flatshares</option>
									<option value="RoomFlats">1 Room Flats</option>
									<option value="Flats">Flats</option>
									<option value="Houses">Houses</option>
								</select>
							</div>
							<div class="form-group">
								<select id="Long-Short-Rent" class="form-control" name="period" required>
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
	
	
	
<?php $this->load->view('en/footer')?>
<?php $this->load->view('en/footer-small')?>