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
						<div class="col-sm-4">
							<input type="text" class="form-control" placeholder="city">
						</div>
						<div class="col-sm-3">
							<select class="form-control">
								<option>Flatshares</option>
								<option>1 Room Flats</option>
								<option>Flats</option>
								<option>Houses</option>
							</select>
						</div>
						<div class="col-sm-3">
							<select class="form-control">
								<option>Offers</option>
								<option>Requests</option>
							</select>
						</div>
						<div class="col-sm-2">
							<button type="submit" class="btn btn-default">Search</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	
	
	<!-- Modal Login -->
	<div class="modal fade bs-Login-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myModalLabelLogin">
	  <div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<form>
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <h4 class="modal-title" id="myModalLabelLogin">Login</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<input type="Password" class="form-control" placeholder="Password">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<div class="checkbox">
									<label>
										<input type="checkbox"> Remember me
									</label>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group text-center">
								<button type="submit" class="btn btn-default">Login</button>
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
	<div class="modal fade bs-Register-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myModalLabelRegister">
	  <div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<form>
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <h4 class="modal-title" id="myModalLabelRegister">Register</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-sm-12">
							<div class="btn-group btn-group-justified" data-toggle="buttons">
								<label class="btn btn-primary">
									<input id="title" value="1" name="title" autocomplete="off" type="radio"> Mr
								</label>
	
								<label class="btn btn-primary">
									<input id="title_mam" value="2" name="title" autocomplete="off" type="radio"> Ms/Mrs
								</label>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="First Name">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Last Name">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<input type="Password" class="form-control" placeholder="Password">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<input type="Password" class="form-control" placeholder="Re-Enter Your Password">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<label class="radio-inline">
									<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Male
								</label>
								<label class="radio-inline">
									<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Female
								</label>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<div class="checkbox">
									<label>
										<input type="checkbox"> Accept terms and condisions 
									</label>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group text-center">
								<button type="submit" class="btn btn-default">Login</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	  </div>
	</div>
	
	
	
	
	
	
	
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

