	
	<nav class="navbar navbar-default">
	  <div class="container	">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <!--<a class="navbar-brand" href="<?php echo $this->config->base_url();?>_/#"><img src="<?php echo $this->config->base_url();?>_/images/logo.png" class="img-responsive center-block" alt="egar logo"></a>-->
		</div>
	
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<!--<li class="active"><a href="<?php echo $this->config->base_url();?>_/#">home <span class="sr-only">(current)</span></a></li>-->
		  </ul>
		  <ul class="nav navbar-nav navbar-right">
		  	<?php 	if(!$this->session->userdata('logged_in')){?>
			<li><a href="<?php echo $this->config->base_url();?>_/#" data-toggle="modal" data-target=".bs-Login-modal-sm">Login</a></li>
			<?php }?>

			<li><a href="<?php echo $this->config->base_url();?>_/#" data-toggle="modal" data-target=".bs-Register-modal-sm">Register</a></li>
		<?php 	if($this->session->userdata('logged_in')){?>

			<li class="dropdown">
			  <a href="<?php echo $this->config->base_url();?>_/#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <?php echo $this->session->userdata['logged_in']['first_name'];?>
 <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="<?php echo $this->config->base_url();?>egar/profile"><div class="EditProfileNav"></div> Edit Profile</a></li>
				<li><a href="<?php echo $this->config->base_url();?>egar/logout"><div class="LogoutNav"></div> Logout</a></li>
			  </ul>
			</li>
<?php } ?>
		  </ul>
		  <ul class="nav navbar-nav navbar-left">
			<li><a href="<?php echo $this->config->base_url();?>_/#" class="creatFreeAd">Create Free Ad</a></li>
			<li><a href="<?php echo $this->config->base_url();?>_/#">About</a></li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	
	