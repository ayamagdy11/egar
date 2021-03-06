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

	
	
	
	
	
	
	
	<!-- start offerPageResult -->
	<section class="offerPageResult">
		<div class="field">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="imgTopAdOne">
						<?php 	if($result) { if($result[0]->image){
						 ?>
							<img src="<?php echo $this->config->base_url();?>_/images/ads/<?php echo $result[0]->image ?>" class="img-responsive img-block" alt=" ">
						<?php }else{ ?>
						<img src="<?php echo $this->config->base_url();?>_/images/ads/placeholder2.jpg" class="img-responsive img-block" alt=" ">

						<?php } }?>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="divAdName">
							<?php //print_r($result); ?>
							<h1 class="adName"><?php  if($result) {echo $result[0]->first_name." ".$result[0]->last_name;} ?></h1>
						</div>
					</div>
					<div class="col-sm-12">
						<h1 class="descriptionName">description</h1>
						<div class="clearfix"></div>
						<div class="titleAd"><span>Title:
						 </span> <?php  if($result) {echo $result[0]->title;} ?>
						<p class="descAdHead"><?php  if($result) {echo $result[0]->flatshare_type_desc;} ?>. 
						</p>
					</div>
					<div class="col-sm-12"><div class="margTP15px"><hr></div></div>
					<div class="col-sm-12">
						<h1 class="descriptionName">Location</h1>
					</div>
					<div class="clearfix"></div>
					<div class="col-sm-12">
						<p>
							<i class="fa fa-home" aria-hidden="true"></i>
							<span class="userPage">City :</span>
							<span class="userData"><?php  if($result) {echo $result[0]->city;} ?></span>
						</p>
					</div>
					<div class="col-sm-12">
						<p>
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							<span class="userPage">Adresse :</span>
							<span class="userData"><?php  if($result) {echo $result[0]->location_desc;} ?></span>
						</p>
					</div>
				<!-- 	<div class="col-sm-6">
						<p>
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<span class="userPage">Postal Code :</span>
							<span class="userData">12312</span>
						</p>
					</div> -->
					<div class="clearfix"></div>
					
					<!--line-->
					<div class="col-sm-12"><div class="margTP15px"><hr></div></div>
					
					<div class="col-sm-12">
						<h1 class="descriptionName">Details About Ad</h1>
					</div>
					<div class="clearfix"></div>
					<div class="col-sm-4">
						<p>
							<span class="userPage">Available from :</span>
							<span class="userData"><?php  if($result) {echo $result[0]->available_from_d."-".$result[0]->available_from_m."-".$result[0]->available_from_y;} ?></span>
						</p>
					</div>
					<div class="col-sm-4">
						<p>
							<span class="userPage">Available to :</span>
							<span class="userData"><?php  if($result) {echo $result[0]->available_to_d."-".$result[0]->available_to_m."-".$result[0]->available_to_y;} ?></span>
						</p>
					</div>
					<div class="col-sm-4">
						<p>
							<span class="userPage">Number of Rooms :</span>
							<span class="userData"><?php  if($result) {echo $result[0]->number_of_rooms;} ?> Rooms</span>
						</p>
					</div>
					<div class="col-sm-4">
						<p>
							<span class="userPage">Room Size :</span>
							<span class="userData"><?php  if($result) {echo $result[0]->room_size;} ?></span>
						</p>
					</div>
					<div class="col-sm-4">
						<p>
							<span class="userPage">Total Flat Size :</span>
							<span class="userData"><?php  if($result) {echo $result[0]->total_flat_size;} ?>m</span>
						</p>
					</div>
					<div class="col-sm-4">
						<p>
							<span class="userPage">Property Type :</span>
							<span class="userData"><?php  if($result) {echo $result[0]->property_type;} ?></span>
						</p>
					</div>
					<div class="col-sm-4">
						<p>
							<span class="userPage">Floor Level :</span>
							<span class="userData"><?php  if($result) {echo $result[0]->floor_level;} ?> Floor</span>
						</p>
					</div>
					<div class="col-sm-4">
						<p>
							<span class="userPage">Handicapped Accessible :</span>
							<span class="userData"><?php  if($result) {echo $result[0]->handicapped_accessible;} ?></span>
						</p>
					</div>
					<div class="col-sm-4">
						<p>
							<span class="userPage">Sharehouse suitable :</span>
							<span class="userData"><?php  if($result) {echo $result[0]->sharehouse_suitable;} ?></span>
						</p>
					</div>
					<div class="col-sm-4">
						<p>
							<span class="userPage">Parking :</span>
							<span class="userData"><?php  if($result) {echo $result[0]->parking;} ?></span>
						</p>
					</div>
					<div class="col-sm-4">
						<p>
							<span class="userPage">Public Transport :</span>
							<span class="userData"><?php  if($result) {echo $result[0]->public_transport;} ?> mins walking</span>
						</p>
					</div>
					<div class="clearfix"></div>
					
					<!--line-->
					<div class="col-sm-12"><div class="margTP15px"><hr></div></div>
					
					<div class="col-sm-12">
						<h1 class="descriptionName">Costs</h1>
					</div>
					<div class="clearfix"></div>
					<div class="col-sm-4">
						<p>
							<span class="userPage">Rent per Month :</span>
							<span class="userData"><?php  if($result) {echo $result[0]->rent_per_month;} ?> EGY</span>
						</p>
					</div>
					<div class="col-sm-4">
						<p>
							<span class="userPage">Utility Costs :</span>
							<span class="userData"><?php  if($result) {echo $result[0]->utility_costs;} ?> EGY</span>
						</p>
					</div>
					<div class="col-sm-4">
						<p>
							<span class="userPage">Other Costs :</span>
							<span class="userData"><?php  if($result) {echo $result[0]->other_costs;} ?> EGY</span>
						</p>
					</div>
					<div class="col-sm-4">
						<p>
							<span class="userPage">Deposit :</span>
							<span class="userData"><?php  if($result) {echo $result[0]->deposit;} ?> EGY</span>
						</p>
					</div>
					<div class="col-sm-4">
						<p>
							<span class="userPage">Fee for Existing Equipment :</span>
							<span class="userData"><?php  if($result) {echo $result[0]->fee_for_existing_equipment;} ?> EGY</span>
						</p>
					</div>
					<div class="clearfix"></div>
					
					<!--line-->
					<div class="col-sm-12"><div class="margTP15px"><hr></div></div>
					
					<div class="col-sm-12">
						<h1 class="descriptionName">Information About the Flatshare</h1>
					</div>
					<div class="clearfix"></div>
					<div class="col-sm-4">
						<p>
							<span class="userPage">Flatshare Size :</span>
							<span class="userData"><?php  if($result) {echo $result[0]->flatshare_size;} ?></span>
						</p>
					</div>
					<div class="col-sm-4">
						<p>
							<span class="userPage">Current Flatmates :</span>
							<span class="userData"><?php  if($result)if($result[0]->current_flatmates_male) {echo $result[0]->current_flatmates_male;}
							echo " & ";
							if($result[0]->current_flatmates_male) {echo $result[0]->current_flatmates_female;}
							 ?></span>
						</p>
					</div>
					<div class="col-sm-4">
						<p>
							<span class="userPage">Flatmate Age/s : </span>
							<span class="userData"><?php  if($result) {echo $result[0]->flatmate_age_from;} ?></span>
						</p>
					</div>
					<div class="col-sm-4">
						<p>
							<span class="userPage">Searching For : </span>
							<span class="userData"><?php  if($result) {echo $result[0]->searching_for;} ?></span>
						</p>
					</div>
					<div class="col-sm-4">
						<p>
							<span class="userPage">Aged from :</span>
							<span class="userData"><?php  if($result) {echo $result[0]->aged_from;} ?></span>
						</p>
					</div>
					<div class="col-sm-4">
						<p>
							<span class="userPage">Smoking :</span>
							<span class="userData"><?php  if($result) {echo $result[0]->smoking;} ?></span>
						</p>
					</div>
					<div class="col-sm-4">
						<p>
							<span class="userPage">Flatshare Types  :</span>
							<span class="userData"><?php  if($result) {echo $result[0]->flatshare_type_desc;} ?></span>
						</p>
					</div>
				<!-- 	<div class="col-sm-4">
						<p>
							<span class="userPage">Languages :</span>
							<span class="userData"><?php  if($result) {echo $result[0]->rent_per_month;} ?></span>
						</p>
					</div> -->
					<div class="clearfix"></div>
					
					<!--line-->
					<div class="col-sm-12"><div class="margTP15px"><hr></div></div>
					
					<div class="col-sm-12">
						<h1 class="descriptionName">Energy Certificate</h1>
					</div>
					<div class="clearfix"></div>
					<div class="col-sm-6">
						<p>
							<span class="userPage">Type of Energy Certificate :</span>
							<span class="userData"><?php  if($result) {echo $result[0]->type_of_energy_certificate;} ?></span>
						</p>
					</div>
					<div class="col-sm-6">
						<p>
							<span class="userPage">Consumption Value :</span>
							<span class="userData"><?php  if($result) {echo $result[0]->consumption_value;} ?></span>
						</p>
					</div>
					<div class="col-sm-6">
						<p>
							<span class="userPage">Energy Source :</span>
							<span class="userData"><?php  if($result) {echo $result[0]->energy_source;} ?></span>
						</p>
					</div>
					<div class="col-sm-6">
						<p>
							<span class="userPage">Energy Efficiency Class :</span>
							<span class="userData"><?php  if($result) {echo $result[0]->energy_efficiency_class;} ?></span>
						</p>
					</div>
				<!-- 	<div class="col-sm-4">
						<p>
							<span class="userPage">test</span>
							<span class="userData">test</span>
						</p>
					</div> -->
					<div class="clearfix"></div>
					
					<!--line-->
					<div class="col-sm-12"><div class="margTP15px"><hr></div></div>
					
					<div class="col-sm-12">
						<h1 class="descriptionName">Features</h1>
					</div>
					<div class="clearfix"></div>
					<div class="col-sm-4">
						<p>
							<span class="userPage">Green Power :</span>
							<span class="userData"><?php  if($result) {echo $result[0]->green_power;} ?></span>
						</p>
					</div>
					<div class="col-sm-4">
						<p>
							<span class="userPage">Heating :</span>
							<span class="userData"><?php  if($result) {if($result[0]->heating){echo"YES";}else{echo "No";}} ?></span>
						</p>
					</div>
					<div class="col-sm-4">
						<p>
							<span class="userPage">Furnished :</span>
							<span class="userData"><?php  if($result) {if($result[0]->rent_per_month){echo"YES";}else{echo "No";}} ?></span>
						</p>
					</div>
					<div class="col-sm-4">
						<p>
							<span class="userPage">TV :</span>
							<span class="userData"><?php  if($result) {if($result[0]->Cable_TV){echo"YES";}else{echo "No";}} ?></span>
						</p>
					</div>
					<div class="col-sm-4">
						<p>
							<span class="userPage">Bathroom :</span>
							<span class="userData"><?php  if($result) {if($result[0]->Bath){echo"YES";}else{echo "No";}}?></span>
						</p>
					</div>
					<div class="col-sm-4">
						<p>
							<span class="userPage">Miscellaneous :</span>
							<span class="userData"><?php  if($result) {if($result[0]->miscellaneous){echo"YES";}else{echo "No";}} ?></span>
						</p>
					</div>
					<div class="col-sm-4">
						<p>
							<span class="userPage">Flooring :</span>
							<span class="userData"><?php  if($result) {if($result[0]->Parquet_Flooring){echo"YES";}else{echo "No";}} ?></span>
						</p>
					</div>
					<div class="col-sm-4">
						<p>
							<span class="userPage">Internet :</span>
							<span class="userData"><?php  if($result) {if($result[0]->DSL ||$result[0]->WLAN){echo"YES";}else{echo "No";}} ?></span>
						</p>
					</div>
					<div class="col-sm-4">
						<p>
							<span class="userPage">DSL Speed :</span>
							<span class="userData"><?php if($result) {if($result[0]->dSL_speed){echo"YES";}else{echo "No";}} ?></span>
						</p>
					</div>
					<div class="col-sm-4">
						<p>
							<span class="userPage">DSL Provider :</span>
							<span class="userData"><?php  if($result) {if($result[0]->Provider_change_planned){echo"YES";}else{echo "No";}} ?></span>
						</p>
					</div>
					<div class="col-sm-4">
						<p>
							<span class="userPage">Telephone :</span>
							<span class="userData"><?php  if($result) {if($result[0]->Telephone_Flatrate){echo"YES";}else{echo "No";}} ?></span>
						</p>
					</div>
					<div class="clearfix"></div>
					
					<!--line-->
					<div class="col-sm-12"><div class="margTP15px"><hr></div></div>
					
				<!-- 	<div class="col-sm-12">
						<h1 class="descriptionName">Images</h1>
					</div> -->
					
					
					
					
					
			<!-- 		<div class="col-sm-12">
						<div class="owl-example-5 owl-carousel">
                            <div class="one-course">
								<a href="<?php echo $this->config->base_url();?>_/#">
									<div class="img-zoom">
										<img src="<?php echo $this->config->base_url();?>_/images/ads/sdsd23d2.jpg" class="img-responsive img-block" alt=" ">
									</div>
								</a>
							</div>
							<div class="one-course">
								<a href="<?php echo $this->config->base_url();?>_/#">
									<div class="img-zoom">
										<img src="<?php echo $this->config->base_url();?>_/images/ads/dqwd1.jpg" class="img-responsive img-block" alt=" ">
									</div>
								</a>
							</div>
							<div class="one-course">
								<a href="<?php echo $this->config->base_url();?>_/#">
									<div class="img-zoom">
										<img src="<?php echo $this->config->base_url();?>_/images/ads/gh3.jpg" class="img-responsive img-block" alt=" ">
									</div>
								</a>
							</div>
							<div class="one-course">
								<a href="<?php echo $this->config->base_url();?>_/#">
									<div class="img-zoom">
										<img src="<?php echo $this->config->base_url();?>_/images/ads/sd2.jpg" class="img-responsive img-block" alt=" ">
									</div>
								</a>
							</div>
							<div class="one-course">
								<a href="<?php echo $this->config->base_url();?>_/#">
									<div class="img-zoom">
										<img src="<?php echo $this->config->base_url();?>_/images/ads/wd12.jpg" class="img-responsive img-block" alt=" ">
									</div>
								</a>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</section>
	<!-- end offerPageResult -->
	
	
	
	
	
	
	
	
	
	

<?php $this->load->view('en/footer-small')?>