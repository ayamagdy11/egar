<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="title" content=" ">
        <meta name="description" content=" ">
        <meta name="keywords" content=" ">
        <title>Create Offers</title>
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
					<div class="col-sm-12">
						<form class="margin-15" action="<?php echo $this->config->base_url();?>egar/add_offer" method="POST"  enctype="multipart/form-data">
							
							<div class="panel panel-form">
								<div class="panel-heading">
									<h4>Location <sup><span class="glyphicon glyphicon-asterisk mandatory" aria-hidden="true"></span></sup></h4>
								</div>
								<div class="panel-body">
								<div class="row">
										<div class="form-group col-sm-12">
											<input class="form-control" name="city_offer" type="hidden" value="<?php print_r($city);?>">
										</div>
									</div>

										<div class="row">
										<div class="form-group col-sm-12">
										<input class="form-control" name="building_type" type="hidden" value="<?php print_r($building_type);?>" >
										</div>
									</div>

										<div class="row">
										<div class="form-group col-sm-12">
											<input class="form-control" name="period" type="hidden" value="<?php print_r($period);?>">
										</div>
									<div class="row">
										<div class="form-group col-sm-12">
											<label class="control-label">City</label>
											<p><?php print_r($city);?></p>
										</div>
									<div class="row">
										<div class="form-group col-sm-12">
											<input  name="img" type="file">
										</div>

									</div>
										<div class="form-group col-sm-4">
											<label class="control-label">Street  & House Number</label>
											<input class="form-control" placeholder="Street  & House Number" type="text">
										</div>
										
									</div>
								</div>
							</div>
							
							<div class="panel panel-form">
								<div class="panel-heading">
									<h4>Details about the property <sup><span class="glyphicon glyphicon-asterisk mandatory" aria-hidden="true"></span></sup></h4>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="form-group col-sm-5">
											<div class="row">
												<div class="col-sm-12">
													<label class="control-label">Available from</label>
												</div>
												<div class="col-sm-4">
													<select class="form-control" name="available_from_d">
														<option value="01" selected="selected">01</option>
														<option value="02">02</option>
														<option value="03">03</option>
														<option value="04">04</option>
														<option value="05">05</option>
														<option value="06">06</option>
														<option value="07">07</option>
														<option value="08">08</option>
														<option value="09">09</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
														<option value="13">13</option>
														<option value="14">14</option>
														<option value="15">15</option>
														<option value="16">16</option>
														<option value="17">17</option>
														<option value="18">18</option>
														<option value="19">19</option>
														<option value="20">20</option>
														<option value="21">21</option>
														<option value="22">22</option>
														<option value="23">23</option>
														<option value="24">24</option>
														<option value="25">25</option>
														<option value="26">26</option>
														<option value="27">27</option>
														<option value="28">28</option>
														<option value="29">29</option>
														<option value="30">30</option>
														<option value="31">31</option>
													</select>
												</div>
												<div class="col-sm-4">
													<select class="form-control" name="available_from_m">
														<option value="01" selected="selected">Jun</option>
														<option value="02">Feb</option>
														<option value="03">Mar</option>
														<option value="04">Apr</option>
														<option value="05">Mai</option>
														<option value="06">Jun</option>
														<option value="07">Jul</option>
														<option value="08">Aug</option>
														<option value="09">Sept</option>
														<option value="10">Oct</option>
														<option value="11">Nov</option>
														<option value="12">Dec</option>
													</select>
												</div>
												<div class="col-sm-4">
													<select class="form-control" name="available_from_y">
														<option value="2016" selected="selected">2016</option>
														<option value="2017">2017</option>
														<option value="2018">2018</option>
														<option value="2017">2019</option>
														<option value="2018">2020</option>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group col-sm-5 col-sm-offset-1">
											<div class="row">
												<div class="col-sm-12">
													<label class="control-label">Available to</label>
												</div>
												<div class="col-sm-4">
													<select class="form-control" name="available_to_d">
														<option value="01" selected="selected">01</option>
														<option value="02">02</option>
														<option value="03">03</option>
														<option value="04">04</option>
														<option value="05">05</option>
														<option value="06">06</option>
														<option value="07">07</option>
														<option value="08">08</option>
														<option value="09">09</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
														<option value="13">13</option>
														<option value="14">14</option>
														<option value="15">15</option>
														<option value="16">16</option>
														<option value="17">17</option>
														<option value="18">18</option>
														<option value="19">19</option>
														<option value="20">20</option>
														<option value="21">21</option>
														<option value="22">22</option>
														<option value="23">23</option>
														<option value="24">24</option>
														<option value="25">25</option>
														<option value="26">26</option>
														<option value="27">27</option>
														<option value="28">28</option>
														<option value="29">29</option>
														<option value="30">30</option>
														<option value="31">31</option>
													</select>
												</div>
												<div class="col-sm-4">
													<select class="form-control" name="available_to_m">
														<option value="01" selected="selected">Jun</option>
														<option value="02">Feb</option>
														<option value="03">Mar</option>
														<option value="04">Apr</option>
														<option value="05">Mai</option>
														<option value="06">Jun</option>
														<option value="07">Jul</option>
														<option value="08">Aug</option>
														<option value="09">Sept</option>
														<option value="10">Oct</option>
														<option value="11">Nov</option>
														<option value="12">Dec</option>
													</select>
												</div>
												<div class="col-sm-4">
													<select class="form-control" name="available_to_y">
														<option value="2016" selected="selected">2016</option>
														<option value="2017">2017</option>
														<option value="2018">2018</option>
														<option value="2017">2019</option>
														<option value="2018">2020</option>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group col-sm-2">
											<label class="control-label">Room Size</label>
											<div class="input-group">
												<input class="form-control"name="room_size" size="5" maxlength="3" value="" tabindex="6" type="text">
												<div class="input-group-addon">m²</div>
											</div>
										</div>
										<div class="form-group col-sm-2">
											<label class="control-label">Total Flat Size</label>
											<div class="input-group">
												<input class="form-control" name="flat_size" size="5" maxlength="3" value="" tabindex="6" type="text">
												<div class="input-group-addon">m²</div>
											</div>
										</div>
										<div class="form-group col-sm-4">
											<label class="control-label">Property Type</label>
											<select class="form-control" name="property_type">
												<option value="" selected="">-= Please select =-</option>
												<option value="Old building">Old building</option>
												<option value="Renovated old building">Renovated old building</option>
												<option value="Newly built house">Newly built house</option>
												<option value="Terraced house">Terraced house</option>
												<option value="Semi-detached house">Semi-detached house</option>
												<option value="Detached house">Detached house</option>
												<option value="Multi family house">Multi family house</option>
												<option value="Multi storey building">Multi storey building</option>
												<option value="Slab construction/Prefabricated">Slab construction/Prefabricated</option>
											</select>
										</div>
										<div class="form-group col-sm-4">
											<label class="control-label">Floor Level</label>
											<select class="form-control" name="floor_level">
												<option value="" selected="">-= Please select =-</option>
												<option value="Cellar">Cellar</option>
												<option value="Basement">Basement</option>
												<option value="Ground floor">Ground floor</option>
												<option value="Raised ground floor/Mezzanine">Raised ground floor/Mezzanine</option>
												<option value="1st floor">1st floor</option>
												<option value="2nd floor">2nd floor</option>
												<option value="3rd floor">3rd floor</option>
												<option value="4th floor">4th floor</option>
												<option value="5th floor">5th floor</option>
												<option value="Higher than the 5th floor">Higher than the 5th floor</option>
												<option value="Loft/Attic">Loft/Attic</option>
											</select>
										</div>
										<div class="form-group col-sm-4">
											<label class="control-label">Handicapped Accessible</label>
											<select class="form-control" name="handicapped_accessible">
												<option value="">-= Please select =-</option>
												<option value="For wheelchair users">For wheelchair users</option>
												<option value="No">No</option>
											</select>
										</div>
										<div class="clearfix"></div>
										<div class="form-group col-sm-6">
											<label class="control-label">Parking</label>
											<select class="form-control" name="parking">
												<option value="" selected="">-= Please select =-</option>
												<option value="Many">Many</option>
												<option value="Limited">Limited</option>
												<option value="Residential Parking only">Residential Parking only</option>
												<option value="Private Parking">Private Parking</option>
												<option value="Underground Parking">Underground Parking</option>
											</select>
										</div>
										<div class="form-group col-sm-6">
											<label class="control-label">Public Transport</label>
											<div class=" form-inline">
												<input id="distanz_haltestelle" class="form-control" name="public_transport" value="" maxlength="2" size="3" tabindex="12" type="text"> minutes walking distance
											</div>
										</div>
									</div>
								</div>
							</div>
							
							
							
							<div class="panel panel-form">
								<div class="panel-heading">
									<h4>Details about the property <sup><span class="glyphicon glyphicon-asterisk mandatory" aria-hidden="true"></span></sup></h4>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="form-group col-sm-5">
											<div class="row">
												<div class="col-sm-12">
													<label class="control-label">Available from</label>
												</div>
												<div class="col-sm-4">
													<select class="form-control" name="available_from_d_f">
														<option value="01" selected="selected">01</option>
														<option value="02">02</option>
														<option value="03">03</option>
														<option value="04">04</option>
														<option value="05">05</option>
														<option value="06">06</option>
														<option value="07">07</option>
														<option value="08">08</option>
														<option value="09">09</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
														<option value="13">13</option>
														<option value="14">14</option>
														<option value="15">15</option>
														<option value="16">16</option>
														<option value="17">17</option>
														<option value="18">18</option>
														<option value="19">19</option>
														<option value="20">20</option>
														<option value="21">21</option>
														<option value="22">22</option>
														<option value="23">23</option>
														<option value="24">24</option>
														<option value="25">25</option>
														<option value="26">26</option>
														<option value="27">27</option>
														<option value="28">28</option>
														<option value="29">29</option>
														<option value="30">30</option>
														<option value="31">31</option>
													</select>
												</div>
												<div class="col-sm-4">
													<select class="form-control" name="available_from_m_f">
														<option value="01" selected="selected">Jun</option>
														<option value="02">Feb</option>
														<option value="03">Mar</option>
														<option value="04">Apr</option>
														<option value="05">Mai</option>
														<option value="06">Jun</option>
														<option value="07">Jul</option>
														<option value="08">Aug</option>
														<option value="09">Sept</option>
														<option value="10">Oct</option>
														<option value="11">Nov</option>
														<option value="12">Dec</option>
													</select>
												</div>
												<div class="col-sm-4">
													<select class="form-control" name="available_from_y_f">
														<option value="2016" selected="selected">2016</option>
														<option value="2017">2017</option>
														<option value="2018">2018</option>
														<option value="2017">2019</option>
														<option value="2018">2020</option>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group col-sm-5 col-sm-offset-1">
											<div class="row">
												<div class="col-sm-12">
													<label class="control-label">Available to</label>
												</div>
												<div class="col-sm-4">
													<select class="form-control" name="available_to_d_f">
														<option value="01" selected="selected">01</option>
														<option value="02">02</option>
														<option value="03">03</option>
														<option value="04">04</option>
														<option value="05">05</option>
														<option value="06">06</option>
														<option value="07">07</option>
														<option value="08">08</option>
														<option value="09">09</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
														<option value="13">13</option>
														<option value="14">14</option>
														<option value="15">15</option>
														<option value="16">16</option>
														<option value="17">17</option>
														<option value="18">18</option>
														<option value="19">19</option>
														<option value="20">20</option>
														<option value="21">21</option>
														<option value="22">22</option>
														<option value="23">23</option>
														<option value="24">24</option>
														<option value="25">25</option>
														<option value="26">26</option>
														<option value="27">27</option>
														<option value="28">28</option>
														<option value="29">29</option>
														<option value="30">30</option>
														<option value="31">31</option>
													</select>
												</div>
												<div class="col-sm-4">
													<select class="form-control"  name="available_to_m_f">
														<option value="01" selected="selected">Jun</option>
														<option value="02">Feb</option>
														<option value="03">Mar</option>
														<option value="04">Apr</option>
														<option value="05">Mai</option>
														<option value="06">Jun</option>
														<option value="07">Jul</option>
														<option value="08">Aug</option>
														<option value="09">Sept</option>
														<option value="10">Oct</option>
														<option value="11">Nov</option>
														<option value="12">Dec</option>
													</select>
												</div>
												<div class="col-sm-4">
													<select class="form-control"  name="available_to_y_f">
														<option value="2016" selected="selected">2016</option>
														<option value="2017">2017</option>
														<option value="2018">2018</option>
														<option value="2017">2019</option>
														<option value="2018">2020</option>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group col-sm-2">
											<label class="control-label">Size </label>
											<div class="input-group">
												<input class="form-control" name="size" size="5" maxlength="3" value="" tabindex="6" type="text">
												<div class="input-group-addon">m²</div>
											</div>
										</div>
										<div class="form-group col-sm-4">
											<label class="control-label">Property Type</label>
											<select class="form-control" name="property_type_f">
												<option value="" selected="">-= Please select =-</option>
												<option value="Old building">Old building</option>
												<option value="Renovated old building">Renovated old building</option>
												<option value="Newly built house">Newly built house</option>
												<option value="Terraced house">Terraced house</option>
												<option value="Semi-detached house">Semi-detached house</option>
												<option value="Detached house">Detached house</option>
												<option value="Multi family house">Multi family house</option>
												<option value="Multi storey building">Multi storey building</option>
												<option value="Slab construction/Prefabricated">Slab construction/Prefabricated</option>
											</select>
										</div>
										<div class="form-group col-sm-4">
											<label class="control-label">Floor Level</label>
											<select class="form-control" name="floor_level_f">
												<option value="" selected="">-= Please select =-</option>
												<option value="Cellar">Cellar</option>
												<option value="Basement">Basement</option>
												<option value="Ground floor">Ground floor</option>
												<option value="Raised ground floor/Mezzanine">Raised ground floor/Mezzanine</option>
												<option value="1st floor">1st floor</option>
												<option value="2nd floor">2nd floor</option>
												<option value="3rd floor">3rd floor</option>
												<option value="4th floor">4th floor</option>
												<option value="5th floor">5th floor</option>
												<option value="Higher than the 5th floor">Higher than the 5th floor</option>
												<option value="Loft/Attic">Loft/Attic</option>
											</select>
										</div>




										<div class="form-group col-sm-4">
											<label class="control-label">Handicapped Accessible</label>
							                <select class="form-control" name="handicapped_accessible_f">
												<option value="">-= Please select =-</option>
												<option value="For wheelchair users">For wheelchair users</option>
												<option value="No">No</option>
											</select>
										</div>
										<div class="clearfix"></div>
										<div class="form-group col-sm-6">
											<label class="control-label" for="wg_tauglich">Number of Rooms <sup><span class="glyphicon glyphicon-asterisk mandatory" aria-hidden="true"></span></sup></label>
											<input id="zimmeranzahl" class="form-control" name="number_of_rooms" maxlength="2" size="5" value="" tabindex="10" type="text">
										</div>
										<div class="clearfix"></div>
										<div class="form-group col-sm-6">
											<label class="control-label" for="wg_tauglich">
												Sharehouse suitable
											</label>
											<select class="form-control" id="wg_tauglich" name="sharehouse_suitable" tabindex="11">
												<option value="">-= Please select =-</option>
												<option value="Yes">Yes</option>
												<option value="No">No</option>
											</select>
										</div>
										<div class="clearfix"></div>
										<div class="col-sm-5">
											<div class="form-group">
												<label class="control-label" for="parksituation">Parking</label>
											<select class="form-control" name="parking_f">
												<option value="" selected="">-= Please select =-</option>
												<option value="Many">Many</option>
												<option value="Limited">Limited</option>
												<option value="Residential Parking only">Residential Parking only</option>
												<option value="Private Parking">Private Parking</option>
												<option value="Underground Parking">Underground Parking</option>
											</select>
											</div>
										</div>
										<div class="col-sm-7">
											<div class="form-group ">
												<label class="control-label">Public Transport</label>
												<div class=" form-inline">
													<input class="form-control" name="public_transport_f" value="" maxlength="2" size="3" tabindex="13" type="text"> minutes walking distance
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							
							
							
							<div class="panel panel-form">
								<div class="panel-heading">
									<h4>Costs <sup><span class="glyphicon glyphicon-asterisk mandatory" aria-hidden="true"></span></sup></h4>
								</div>
								<div class="row">
									<div class="panel-body">
										<div class="form-group col-sm-4">
											<label class="control-label">Rent per month</label>
											<div class="input-group">
												<input class="form-control" size="5" name="rent_per_month" value="" tabindex="6" type="text" placeholder="Rent per month">
												<div class="input-group-addon">$</div>
											</div>
										</div>
										<div class="form-group col-sm-4">
											<label class="control-label">Utility Costs</label>
											<div class="input-group">
												<input class="form-control" size="5" name="utility_costs" value="" tabindex="6" type="text" placeholder="Utility Costs">
												<div class="input-group-addon">$</div>
											</div>
										</div>
										<div class="form-group col-sm-4">
											<label class="control-label">Other Costs (power/phone)</label>
											<div class="input-group">
												<input class="form-control" size="5" name="other_costs" value="" tabindex="6" type="text" placeholder="Other Costs (power/phone)">
												<div class="input-group-addon">$</div>
											</div>
										</div>
										<div class="form-group col-sm-4">
											<label class="control-label">Deposit</label>
											<div class="input-group">
												<input class="form-control" size="5" name="deposit" value="" tabindex="6" type="text" placeholder="Deposit">
												<div class="input-group-addon">$</div>
											</div>
										</div>
										<div class="form-group col-sm-4">
											<label class="control-label">Fee for existing equipment</label>
											<div class="input-group">
												<input class="form-control" size="5" name="fee_for_existing_equipment" value="" tabindex="6" type="text" placeholder="Fee for existing equipment">
												<div class="input-group-addon">$</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="panel panel-form">
								<div class="panel-heading">
									<h4>Information about the flatshare <sup><span class="glyphicon glyphicon-asterisk mandatory" aria-hidden="true"></span></sup></h4>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="form-group col-sm-4">
											<label class="control-label">Flatshare Size</label>
											<select class="form-control" name="flatshare_size">
												<option value="For 2 people" selected="">For 2 people</option>
												<option value="For 3 people">For 3 people</option>
												<option value="For 4 people">For 4 people</option>
												<option value="For 5 people">For 5 people</option>
												<option value="For 6 people">For 6 people</option>
												<option value="For 7 people">For 7 people</option>
												<option value="For 8 people">For 8 people</option>
												<option value="For 9 people">For 9 people</option>
												<option value="For 10 people">For 10 people</option>
												<option value="For 11 people">For 11 people</option>
												<option value="For 12 people">For 12 people</option>
												<option value="For 13 people">For 13 people</option>
												<option value="For 14 people">For 14 people</option>
												<option value="For 15 people">For 15 people</option>
												<option value="For 16 people">For 16 people</option>
												<option value="For 17 people">For 17 people</option>
											</select>
										</div>
										<div class="form-group col-sm-4">
											<label class="control-label">Current Flatmates</label>
											<div class="form-inline">
												<select class="form-control" name="current_flatmates_female">
													<option value="" selected="">0 females</option>
													<option value="1 femal">1 female</option>
													<option value="2 females">2 females</option>
													<option value="3 females">3 females</option>
													<option value="4 females">4 females</option>
													<option value="5 females">5 females</option>
													<option value="6 females">6 females</option>
													<option value="7 females">7 females</option>
													<option value="8 females">8 females</option>
													<option value="9 females">9 females</option>
													<option value="10 females">10 females</option>
													<option value="11 females">11 females</option>
													<option value="12 females">12 females</option>
													<option value="13 females">13 females</option>
													<option value="14 females">14 females</option>
													<option value="15 females">15 females</option>
													<option value="16 females">16 females</option>
													<option value="17 females">17 females</option>
												</select>
												<select class="form-control" name="current_flatmates_male" >
													<option value="" selected="">0 males</option>
													<option value="1 male">1 males</option>
													<option value="2 males">2 males</option>
													<option value="3 males">3 males</option>
													<option value="4 males">4 males</option>
													<option value="5 males">5 males</option>
													<option value="6 males">6 males</option>
													<option value="7 males">7 males</option>
													<option value="8 males">8 males</option>
													<option value="9 males">9 males</option>
													<option value="10 males">10 males</option>
													<option value="11 males">11 males</option>
													<option value="12 males">12 males</option>
													<option value="13 males">13 males</option>
													<option value="14 males">14 males</option>
													<option value="15 males">15 males</option>
													<option value="16 males">16 males</option>
													<option value="17 males">17 males</option>
												</select>
											</div>
										</div>
										<div class="form-group col-sm-4">
											<label class="control-label">Flatmate Age/s</label>
											<div class=" form-inline">
												<input class="form-control" name="flatmate_age_from" value="" maxlength="2" size="3" type="text">
												to
												<input class="form-control" name="flatmate_age_to" value="" maxlength="2" size="3" type="text">
											</div>
										</div>
										<div class="form-group col-sm-4">
											<label class="control-label">Searching For</label>
											<select class="form-control" name="searching_for">
												<option value="Either" selected="">Either</option>
												<option value="Female/s">Female/s</option>
												<option value="Male/s">Male/s</option>
											</select>
										</div>
										<div class="form-group col-sm-4">
											<label class="control-label">Aged from</label>
											<div class=" form-inline">
												<input class="form-control" name="aged_from" value="" maxlength="2" size="3" type="text">
												to
												<input class="form-control" name="aged_to" value="" maxlength="2" size="3" type="text">
											</div>
										</div>
										<div class="form-group col-sm-4">
											<label class="control-label">Smoking</label>
											<select class="form-control" name="smoking">
												<option value="" selected="">-= Please select =-</option>
												<option value="Smoking allowed anywhere">Smoking allowed anywhere</option>
												<option value="Smoking in your own room allowed">Smoking in your own room allowed</option>
												<option value="Smoking allowed on balcony">Smoking allowed on balcony</option>
												<option value="No smoking">No smoking</option>
											</select>
										</div>
										<div class="form-group col-sm-12">
											<div class="row">
												<hr>
											</div>
											<div class="row">
												<div class="col-sm-12">
													<label class="control-label">
														Flatshare Types (max. 3)
													</label>
												</div>
											</div>
														<div class="row">
													<div class="col-sm-4">
														<label><input type="checkbox" value="1" name="any">Any</label>
													</div>
													<div class="col-sm-4">
														<label><input type="checkbox"  value="1" name="students_only">Students Only</label>
													</div>
												
													<div class="col-sm-4">
														<label><input type="checkbox" value="1" name="mixed_gender">Mixed Gender</label>
													</div>
													<div class="col-sm-4">
														<label><input type="checkbox"  value="1" name="female_only">Female Only</label>
													</div>
													<div class="col-sm-4">
														<label><input type="checkbox" value="1" name="workers_only">Workers Only</label>
													</div>
													<div class="col-sm-4">
														<label><input type="checkbox"  value="1" name="business_people">Business People</label>
													</div>
													<div class="col-sm-4">
														<label><input type="checkbox" value="1" name="party">Party</label>
													</div>
													<div class="col-sm-4">
														<label><input type="checkbox" value="1" name="male_only">Male Only</label>
													</div>
													<div class="col-sm-4">
														<label><input type="checkbox" value="1" name="50">50+</label>
													</div>
													<div class="col-sm-4">
														<label><input type="checkbox" value="1" name="seniors_only">Seniors Only</label>
													</div>
													<div class="col-sm-4">
														<label><input type="checkbox" value="1" name="Residential_Home">Residential Home</label>
													</div>
													<div class="col-sm-4">
														<label><input type="checkbox" value="1" name="with_children">With Children</label>
													</div>
													<div class="col-sm-4">
														<label><input type="checkbox" value="1" name="varied_age">Varied Age</label>
													</div>
													
													<div class="col-sm-4">
														<label><input type="checkbox" value="1" name="room_for_help">Room for Help</label>
													</div>
													<div class="col-sm-4">
														<label><input type="checkbox" value="1"  name="vegetarian">Vegetarian/Vegan</label>
													</div>
												</div>
										</div>
										<div class="form-group col-sm-12">
											<div class="row">
												<hr>
											</div>
											<div class="row">
												<div class="col-sm-12">
													<label>
													Languages
												</label>
											</div>
										</div>
										
										<div class="row">
											<div class="form-group col-lg-3">
												<div class="checkbox">
													<label for="de">
														<input id="de" name="German" tabindex="139" value="1" type="checkbox">
														German
													</label>
												</div>
												<div class="mehrSprachen1 hideMe" style="margin-top: -5px;">
													<div class="checkbox">
														<label for="al">
															<input id="al" name="Albanian" tabindex="140" value="1" type="checkbox">
															Albanian
														</label>
													</div>
													<div class="checkbox">
														<label for="cn">
															<input id="cn" name="Chinese" tabindex="141" value="1" type="checkbox">
															Chinese
														</label>
													</div>
													<div class="checkbox">
														<label for="dk">
															<input id="dk" name="Danish" tabindex="142" value="1" type="checkbox">
															Danish
														</label>
													</div>
													<div class="checkbox">
														<label for="it">
															<input id="it" name="Italian" tabindex="143" value="1" type="checkbox">
															Italian
														</label>
													</div>
													<div class="checkbox">
														<label for="no">
															<input id="no" name="Norwegian" tabindex="144" value="1" type="checkbox">
															Norwegian
														</label>
													</div>
													<div class="checkbox">
														<label for="ru">
															<input id="ru" name="Russian" tabindex="145" value="1" type="checkbox">
															Russian
														</label>
													</div>
													<div class="checkbox">
														<label for="cz">
															<input id="cz" name="Czech" tabindex="146" value="1" type="checkbox">
															Czech
														</label>
													</div>
												</div>
											</div>
											<div class="form-group col-lg-3">
												<div class="checkbox">
													<label for="en">
														<input id="en" name="English" tabindex="147" value="1"  type="checkbox">
														English
													</label>
												</div>
												<div class="mehrSprachen1 hideMe" style="margin-top: -5px;">
													<div class="checkbox">
														<label for="ae">
															<input id="ae" name="Arabic" tabindex="148" value="1" type="checkbox">
															Arabic
														</label>
													</div>
													<div class="checkbox">
														<label for="fi">
															<input id="fi" name="Finnish" tabindex="149" value="1"  type="checkbox">
															Finnish
														</label>
													</div>
													<div class="checkbox">
														<label for="jp">
															<input id="jp" name="Japanese" tabindex="150" value="1" type="checkbox">
															Japanese
														</label>
													</div>
													<div class="checkbox">
														<label for="pl">
															<input id="pl" name="Polish" tabindex="151" value="1" type="checkbox">
															Polish
														</label>
													</div>
													<div class="checkbox">
														<label for="se">
															<input id="se" name="Swedish" tabindex="152"  value="1" type="checkbox">
															Swedish
														</label>
													</div>
													<div class="checkbox">
														<label for="tr">
															<input id="tr" name="Turkish" tabindex="153" value="1" type="checkbox">
															Turkish
														</label>
													</div>
												</div>
											</div>
											<div class="form-group col-lg-3">
												<div class="checkbox">
													<label for="es">
														<input id="es" name="Spanish" tabindex="154"  value="1" type="checkbox">
														Spanish
													</label>
												</div>
												<div class="mehrSprachen1 hideMe" style="margin-top: -5px;">
													<div class="checkbox">
														<label for="bd">
															<input id="bd" name="Bengali" tabindex="155" value="1" type="checkbox">
															Bengali
														</label>
													</div>
													<div class="checkbox">
														<label for="gr">
															<input id="gr" name="Greek" tabindex="156" value="1" type="checkbox">
															Greek
														</label>
													</div>
													<div class="checkbox">
														<label for="hr">
															<input id="hr" name="Croatian" tabindex="157" value="1" type="checkbox">
															Croatian
														</label>
													</div>
													<div class="checkbox">
														<label for="pt">
															<input id="pt" name="Portuguese" tabindex="158" value="1" type="checkbox">
															Portuguese
														</label>
													</div>
													<div class="checkbox">
														<label for="rs">
															<input id="rs" name="Serbian" tabindex="159"   value="1" type="checkbox">
															Serbian
														</label>
													</div>
													<div class="checkbox">
														<label for="hu">
															<input id="hu" name="Hungarian" tabindex="160" value="1" type="checkbox">
															Hungarian
														</label>
													</div>
												</div>
											</div>
											<div class="form-group col-lg-3">
												<div class="checkbox">
													<label for="fr">
														<input id="fr" name="French" tabindex="161"  value="1" type="checkbox">
														French
													</label>
												</div>
												<div class="mehrSprachen1 hideMe" style="margin-top: -5px;">
													<div class="checkbox">
														<label for="ba">
															<input id="ba" name="Bosnian" tabindex="162" value="1" type="checkbox">
															Bosnian
														</label>
													</div>
													<div class="checkbox">
														<label for="in">
															<input id="in" name="Hindi" tabindex="163" value="1" type="checkbox">
															Hindi
														</label>
													</div>
													<div class="checkbox">
														<label for="nl">
															<input id="nl" name="Dutch" tabindex="164" value="1" type="checkbox">
															Dutch
														</label>
													</div>
													<div class="checkbox">
														<label for="ro">
															<input id="ro" name="Romanian" tabindex="165" value="1" type="checkbox">
															Romanian
														</label>
													</div>
													<div class="checkbox">
														<label for="si">
															<input id="si" name="Slovakian" tabindex="166" value="1" type="checkbox">
															Slovakian
														</label>
													</div>
													<div class="checkbox">
														<label for="sign">
															<input id="sign" name="Sign_Language" value="1" type="checkbox">
															Sign Language
														</label>
													</div>
												</div>
											</div>
																
							<div class="panel panel-form">
								<div class="panel-toggle panel-heading">
									<h4>
										Energy Certificate
									</h4>
								</div>
								<div class="panel-body panel-collapse collapse in">
									<div class="row">
										<div class="form-group col-lg-4">
											<label class="control-label" for="energie_ausweis">
												Type of Energy Certificate
											</label>
											<select id="energie_ausweis" class="form-control" name="type_of_energy_certificate" tabindex="76">
												<option value="" selected="">-= Please select =-</option>
												<option value="Demand Certificate">Demand Certificate</option>
												<option value="Consumption Certificate">Consumption Certificate</option>
											</select>
										</div>
										<div class="form-group col-lg-4 ">
											<label class="control-label">Consumption Value</label>
											<div class="input-group">
												<input class="form-control" name="consumption_value" size="5" maxlength="4" value="" type="text">
												<div class="input-group-addon">kW h/(m²a)</div>
											</div>
										</div>
										<div class="form-group col-lg-4">
											<label class="control-label">
												Energy Source
											</label>
											<select class="form-control" name="energy_source">
												<option value="" selected="">-= Please select =-</option>
												<option value="Geothermal">Geothermal</option>
												<option value="Solar">Solar</option>
												<option value="Wood Pellet">Wood Pellet</option>
												<option value="Gas">Gas</option>
												<option value="Petroleum">Petroleum</option>
												<option value="Community Heating">Community Heating</option>
												<option value="Electricity - Current">Electricity - Current</option>
												<option value="Coal">Coal</option>
												<option value="Natural Light Gas">Natural Light Gas</option>
												<option value="Natural Heavy Gas">Natural Heavy Gas</option>
												<option value="Liquid Gas">Liquid Gas</option>
												<option value="Community Heating-Vapor">Community Heating-Vapor</option>
												<option value="Wood">Wood</option>
												<option value="Wood Chips">Wood Chips</option>
												<option value="Coal/Coke">Coal/Coke</option>
												<option value="Local Heat">Local Heat</option>
												<option value="Heat Suppy (Tech)">Heat Suppy (Tech)</option>
											</select>
										</div>
									</div>
									<div class="row">
										<div class="form-group col-lg-4 ">
											<label class="control-label" for="sonstige_kosten">Property built in</label>
											<input class="form-control"  name="property_built_in" size="5" maxlength="4" value="" type="text">
										</div>
										<div class="form-group col-lg-4">
											<label class="control-label">
												Energy Efficiency Class
											</label>
											<select class="form-control" name="energy_efficiency_class">
												<option value="" selected="">-= Please select =-</option>
												<option value="A+">A+</option>
												<option value="A">A</option>
												<option value="B">B</option>
												<option value="C">C</option>
												<option value="D">D</option>
												<option value="E">E</option>
												<option value="F">F</option>
												<option value="G">G</option>
												<option value="H">H</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-form">
								<div class="panel-toggle panel-heading" id="heading-property-features" data-toggle="collapse" data-target="#panel-property-features" aria-controls="panel-property-features" aria-expanded="true">
									<h4>
										Features
										<span class="pull-right collapsed glyphicon glyphicon glyphicon-chevron-down" aria-hidden="true" data-parent="#property-features-main" aria-expanded="true"></span>
									</h4>
								</div>
								<div class="panel-body panel-collapse collapse in" id="panel-property-features" role="tabpanel" aria-labelledby="heading-property-features" aria-expanded="true" style="">
									<div class="row">
										<div class="col-lg-4">
											<div class="form-group">
												<label for="oekostrom">Green Power</label>
												<select name="green_power" id="oekostrom" class="form-control" tabindex="81">
													<option value="" selected="">-= Please select =-</option>
													<option value="Yes">Yes</option>
													<option value="No">No</option>
													<option value="Unknown">Unknown</option>
												</select>
											</div>
											<div class="form-group">
												<label for="heizung">Heating</label>
												<select class="form-control" id="heizung" name="heating" tabindex="82">
													<option value="" selected="">-= Please select =-</option>
													<option value="Central heating">Central heating</option>
													<option value="Gas heating">Gas heating</option>
													<option value="Stove heating">Stove heating</option>
													<option value="Long distance heating">Long distance heating</option>
													<option value="Coal burning stove">Coal burning stove</option>
													<option value="Night storage heater">Night storage heater</option>
												</select>
											</div>
															<div class="form-group">
												<label class="control-label">Internet</label>
												<div class="checkbox">
													<label>
														<input id="dsl" name="DSL" tabindex="83" value="1" type="checkbox"> DSL
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input id="flatrate" name="Flatrate" value="1" tabindex="84" type="checkbox"> Flatrate
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input id="wlan" name="WLAN" tabindex="85" value="1" type="checkbox"> WLAN
													</label>
												</div>
											</div>
											<div class="form-group">
												<label>DSL Speed</label>
												<select id="dsl_speed" class="form-control" name="dsl_speed" onchange="if(document.angebot_aufgeben.dsl_speed.value>0) document.angebot_aufgeben.dsl.checked=true;" tabindex="86">
													<option value="" selected="">-= Please select =-</option>
													<option value="Slower than 1 Mbit/s">Slower than 1 Mbit/s</option>
													<option value="Up to 3 Mbit/s">Up to 3 Mbit/s</option>
													<option value="Up to 6 Mbit/s">Up to 6 Mbit/s</option>
													<option value="Up to 10 Mbit/s">Up to 10 Mbit/s</option>
													<option value="Up to 16 Mbit/s">Up to 16 Mbit/s</option>
													<option value="Up to 25 Mbit/s">Up to 25 Mbit/s</option>
													<option value="Up to 50 Mbit/s">Up to 50 Mbit/s</option>
													<option value="Faster than 50 Mbit/s">Faster than 50 Mbit/s</option>
												</select>
											</div>
											<div class="form-group">
												<label class="control-label">DSL Provider</label>
												<div class="checkbox">
													<label>
														<input id="anbieterwechsel" value="1" name="Provider_change_planned" tabindex="87" type="checkbox"> Provider change planned
													</label>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label">Telephone</label>
												<div class="checkbox">
													<label>
														<input id="telefon_analog" value="1" name="Analog" tabindex="88" type="checkbox"> Analog
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input id="telefon_isdn"  value="1" name="ISDN" tabindex="89" type="checkbox"> ISDN
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input id="telefon_voip" value="1" name="VoiP" tabindex="90" type="checkbox"> VoiP
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input id="telefon_flatrate" value="1" name="Telephone_Flatrate" tabindex="91" type="checkbox">Telephone Flatrate
													</label>
												</div>
							
											</div>
														</div>
										<div class="col-lg-4">
											<div class="form-group">
												<label class="control-label">Furnished</label>
												<div class="checkbox">
													<label>
														<input id="moebliert"value="1" name="Furnished" tabindex="92" type="checkbox"> Furnished
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input id="teilmoebliert" value="1" name="Partly_Furnished" tabindex="93" type="checkbox"> Partly Furnished
													</label>
												</div>
											</div>
											<div class="form-group">
												<label>Bathroom</label>
																	<div class="checkbox">
													<label>
														<input id="badewanne" value="1" name="Bath" tabindex="94" type="checkbox"> Bath
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input id="dusche" value="1" name="Shower" tabindex="95" type="checkbox"> Shower
													</label>
												</div>
																</div>
															<div class="form-group">
												<label class="control-label">Flooring</label>
												<div class="checkbox">
													<label>
														<input id="dielen" value="1" name="Floorboards" tabindex="96" type="checkbox"> Floorboards
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input id="parkett" value="1" name="Parquet_Flooring" tabindex="97" type="checkbox"> Parquet Flooring
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input id="laminat" value="1" name="Laminate" tabindex="98" type="checkbox"> Laminate
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input id="teppich" value="1" name="Carpet" tabindex="99" type="checkbox"> Carpet
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input id="fliesen"value="1" name="Tiles" tabindex="100" type="checkbox"> Tiles
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input id="pvc" value="1" name="Lino" tabindex="101" type="checkbox"> Lino/Linoleum
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input id="fussbodenheizung"  value="1" name="Underfloor_Heating" tabindex="102" type="checkbox"> Underfloor Heating
													</label>
												</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="form-group">
												<label class="control-label">TV</label>
												<div class="checkbox">
													<label>
														<input id="kabel_tv" name="Cable_TV" value="1" tabindex="103" type="checkbox"> Cable TV
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input id="satellit_tv" name="Satellite_Tv" value="1" tabindex="104" type="checkbox"> Satellite TV
													</label>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label">Miscellaneous</label>
												<div class="checkbox">
													<label>
														<input id="waschmaschine" name="Washing_Machine" value="1" tabindex="105" type="checkbox"> Washing Machine
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input id="spuelmaschine" name="Dishwasher" value="1" tabindex="106" type="checkbox"> Dishwasher
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input id="terasse" name="Terrace" value="1" tabindex="107" type="checkbox"> Terrace
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input id="balkon" name="Balcony" value="1" tabindex="108" type="checkbox"> Balcony
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input id="garten" name="Garden" value="1" tabindex="109" type="checkbox"> Garden
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input id="garten_mitbenutzung" value="1" name="Shared_Garden" tabindex="110" type="checkbox"> Shared Garden
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input id="keller" name="Basement" value="1" tabindex="111" type="checkbox"> Basement
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input id="aufzug" name="Elevator" value="1" tabindex="112" type="checkbox"> Elevator
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input id="haustiere_erlaubt"value="1" name="Pets_are_welcome" tabindex="113" type="checkbox"> Pets are welcome
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input id="fahrradkeller" value="1" name="Bicycle_Storage" tabindex="114" type="checkbox"> Bicycle Storage
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="panel panel-form">
								<div class="panel-heading">
									<h4>
										Description
									</h4>
								</div>
								<div class="panel-body">
									<a name="title"></a>
									<div class="row">
										<div class="form-group col-lg-12 ">
											<label for="">Title</label>
											<input class="form-control" id="title" name="titel" maxlength="255" value="" placeholder="e.g. Furnished room in friendly flatshare for 3, city center" tabindex="115" style="color: rgb(170, 170, 170);" type="text">
										</div>
										<div class="form-group col-lg-12 ">
											<ul class="nav nav-pills nav-wgg-default">
												<li class="active" role="presentation">
													<a id="freitextReiter0" href="#freitext0-panel" aria-controls="freitext0-panel" role="tab" data-toggle="tab" tabindex="116">
																						Room
																					<span id="wordCount0" class="badge freitextWordcount" wordcount="0">0</span>
													</a>
												</li>
							
												<li role="presentation">
													<a id="freitextReiter1" href="#freitext1-panel" tabindex="117" aria-controls="freitext1-panel" role="tab" data-toggle="tab">
														Location <span id="wordCount1" class="badge freitextWordcount" wordcount="0">0</span>
													</a>
												</li>
							
																		<li role="presentation">
														<a id="freitextReiter2" href="#freitext2-panel" tabindex="118" aria-controls="freitext2-panel" role="tab" data-toggle="tab">
															Flatshare Type <span id="wordCount2" class="badge freitextWordcount" wordcount="0">0</span>
														</a>
													</li>
												
												<li role="presentation">
													<a id="freitextReiter3" href="#freitext3-panel" tabindex="119" aria-controls="freitext3-panel" role="tab" data-toggle="tab">
														Miscellaneous <span id="wordCount3" class="badge freitextWordcount" wordcount="0">0</span>
													</a>
												</li>
							
												<li>
													<span class="ShowWithJS" style="display: inline;"><sup></sup></span>
												</li>
											</ul>
							
											<div class="tab-content" style="margin-top: 10px;">
												<div id="freitext0-panel" class="tab-pane active" role="tabpanel">
													<textarea id="freitext0" rows="5" name="room_desc" class="form-control" placeholder="e.g. What are the characteristic features of the room? How many rooms does your apartment have? On which floor is the apartment located?" tabindex="120" style="color: rgb(170, 170, 170); height: 250px;" wrap="virtual"></textarea>
												</div>
							
												<div id="freitext1-panel" class="tab-pane " role="tabpanel">
													<textarea id="freitext1" rows="5" name="location_desc" class="form-control" placeholder="e.g. How are the transport connections? What are the characteristic features of the neighbourhood? Where are the nearest shopping facilities?" tabindex="121" style="color: rgb(170, 170, 170); height: 250px;" wrap="virtual"></textarea>
												</div>
							
												<div id="freitext2-panel" class="tab-pane " role="tabpanel">
													<textarea id="freitext2" rows="5" name="flatshare_type_desc" class="form-control" placeholder="e.g. Who are the flatmates? How is everday life in the flatshare? What requirements must be fulfilled?" tabindex="122" style="color: rgb(170, 170, 170); height: 250px;" wrap="virtual"></textarea>
												</div>
							
												<div id="freitext3-panel" class="tab-pane " role="tabpanel">
													<textarea id="freitext3" cols="78" rows="5" name="miscellaneous" class="form-control" placeholder="e.g. What about your contact preferences? At what time?" tabindex="123" style="color: rgb(170, 170, 170); height: 250px;" wrap="virtual"></textarea>
												</div>
											</div>
							
										</div>
									</div>
								</div>
							</div>
							
								<div class="panel panel-form">
								<div class="panel-heading">
									<h4>You have an Account, but are missing some important details <sup><span class="glyphicon glyphicon-asterisk mandatory" aria-hidden="true"></span></sup></h4>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="form-group col-sm-2">
											<label class="control-label">Title <sup><span class="glyphicon glyphicon-asterisk mandatory" aria-hidden="true"></span></sup></label>
											<select class="form-control" name="gender">
												<option value=""></option>
												<option value="0" <?php if($user_data){ if($user_data[0]->gender=="0"){echo "selected='selected'";}} ?>>Mr</option>
												<option value="1" <?php if($user_data){ if($user_data[0]->gender=="1"){echo "selected='selected'";}} ?>>Ms/Mrs</option>
											</select>
										</div>
										<div class="form-group col-sm-5">
											<label class="control-label">First Name <sup><span class="glyphicon glyphicon-asterisk mandatory" aria-hidden="true"></span></sup></label>
											<input class="form-control"name="first_name" value="<?php if($user_data){echo $user_data[0]->first_name;} ?>" type="text" placeholder="First Name">
										</div>
										<div class="form-group col-sm-5">
											<label class="control-label">Last Name <sup><span class="glyphicon glyphicon-asterisk mandatory" aria-hidden="true"></span></sup></label>
											<input class="form-control"name="last_name" value="<?php if($user_data){echo $user_data[0]->last_name;} ?>" type="text" placeholder="Last Name">
										</div>
										<div class="form-group col-sm-6">
											<label class="control-label">Name Display Status <sup><span class="glyphicon glyphicon-asterisk mandatory" aria-hidden="true"></span></sup></label>
											<input class="form-control" name="name_display" value="<?php if($user_data){echo $user_data[0]->name_display;} ?>" type="text" placeholder="Last Name">

										</div>
										<div class="clearfix"></div>
										<div class="col-sm-6">
											<div class="form-group ">
												<label class="control-label">
													Mobile
												</label>
												<div class="form-inline">
													<input name="mobile"value="<?php if($user_data){echo $user_data[0]->mobile;} ?>"  class="form-control" maxlength="16" style="width:33%;" value="" tabindex="47" type="text"> 
												</div>
									
											</div>
										</div>
										<div class="col-sm-6">
											<label class="control-label">
												Mobile Contact Times
											</label>
											<div class="form-group">
												<div class="pull-left" style="width:42%;">
													<select id="t_kontakt_hour_von" class="col-sm-6 form-control pull-left " name="mobile_available_from_h" style="width: 49%;">
											<option value=""></option>
											<option value="00" <?php if($user_data){ if($user_data[0]->mobile_available_from_h=="00"){echo "selected='selected'";}} ?>>00</option>
											<option value="01" <?php if($user_data){ if($user_data[0]->mobile_available_from_h=="01"){echo "selected='selected'";}} ?>>01</option>
											<option value="02" <?php if($user_data){ if($user_data[0]->mobile_available_from_h=="02"){echo "selected='selected'";}} ?>>02</option>
											<option value="03" <?php if($user_data){ if($user_data[0]->mobile_available_from_h=="03"){echo "selected='selected'";}} ?>>03</option>
											<option value="04" <?php if($user_data){ if($user_data[0]->mobile_available_from_h=="04"){echo "selected='selected'";}} ?>>04</option>
											<option value="05" <?php if($user_data){ if($user_data[0]->mobile_available_from_h=="05"){echo "selected='selected'";}} ?>>05</option>
											<option value="06" <?php if($user_data){ if($user_data[0]->mobile_available_from_h=="06"){echo "selected='selected'";}} ?>>06</option>
											<option value="07" <?php if($user_data){ if($user_data[0]->mobile_available_from_h=="07"){echo "selected='selected'";}} ?>>07</option>
											<option value="08" <?php if($user_data){ if($user_data[0]->mobile_available_from_h=="08"){echo "selected='selected'";}} ?>>08</option>
											<option value="09" <?php if($user_data){ if($user_data[0]->mobile_available_from_h=="09"){echo "selected='selected'";}} ?>>09</option>
											<option value="10" <?php if($user_data){ if($user_data[0]->mobile_available_from_h=="10"){echo "selected='selected'";}} ?>>10</option>
											<option value="11" <?php if($user_data){ if($user_data[0]->mobile_available_from_h=="11"){echo "selected='selected'";}} ?>>11</option>
											<option value="12" <?php if($user_data){ if($user_data[0]->mobile_available_from_h=="12"){echo "selected='selected'";}} ?>>12</option>
											<option value="13" <?php if($user_data){ if($user_data[0]->mobile_available_from_h=="13"){echo "selected='selected'";}} ?>>13</option>
											<option value="14" <?php if($user_data){ if($user_data[0]->mobile_available_from_h=="14"){echo "selected='selected'";}} ?>>14</option>
											<option value="15" <?php if($user_data){ if($user_data[0]->mobile_available_from_h=="15"){echo "selected='selected'";}} ?>>15</option>
											<option value="16" <?php if($user_data){ if($user_data[0]->mobile_available_from_h=="16"){echo "selected='selected'";}} ?>>16</option>
											<option value="17" <?php if($user_data){ if($user_data[0]->mobile_available_from_h=="17"){echo "selected='selected'";}} ?>>17</option>
											<option value="18" <?php if($user_data){ if($user_data[0]->mobile_available_from_h=="18"){echo "selected='selected'";}} ?>>18</option>
											<option value="19" <?php if($user_data){ if($user_data[0]->mobile_available_from_h=="19"){echo "selected='selected'";}} ?>>19</option>
											<option value="20" <?php if($user_data){ if($user_data[0]->mobile_available_from_h=="20"){echo "selected='selected'";}} ?>>20</option>
											<option value="21" <?php if($user_data){ if($user_data[0]->mobile_available_from_h=="21"){echo "selected='selected'";}} ?>>21</option>
											<option value="22" <?php if($user_data){ if($user_data[0]->mobile_available_from_h=="22"){echo "selected='selected'";}} ?>>22</option>
											<option value="23" <?php if($user_data){ if($user_data[0]->mobile_available_from_h=="23"){echo "selected='selected'";}} ?>>23</option>
										</select> 
										<select id="t_kontakt_minute_von" class="pull-left form-control " name="mobile_available_from_m" style="width: 49%;">
											<option value=""></option>
											<option value="00" <?php if($user_data){ if($user_data[0]->mobile_available_from_m=="00"){echo "selected='selected'";}} ?>>00</option>
											<option value="15" <?php if($user_data){ if($user_data[0]->mobile_available_from_m=="15"){echo "selected='selected'";}} ?>>15</option>
											<option value="30" <?php if($user_data){ if($user_data[0]->mobile_available_from_m=="30"){echo "selected='selected'";}} ?>>30</option>
											<option value="45" <?php if($user_data){ if($user_data[0]->mobile_available_from_m=="45"){echo "selected='selected'";}} ?>>45</option>
										</select>
												</div>
												<div style="width:4%; margin-top:4px;" class="pull-left">
													&nbsp;-&nbsp;
												</div>
												<div class="pull-left" style="width:42%;">
													<select id="t_kontakt_hour_bis" class="col-sm-6 form-control pull-left " name="mobile_available_to_h" style="width: 49%;">
				                            <option value=""></option>
											<option value="00" <?php if($user_data){ if($user_data[0]->mobile_available_to_h=="00"){echo "selected='selected'";}} ?>>00</option>
											<option value="01" <?php if($user_data){ if($user_data[0]->mobile_available_to_h=="01"){echo "selected='selected'";}} ?>>01</option>
											<option value="02" <?php if($user_data){ if($user_data[0]->mobile_available_to_h=="02"){echo "selected='selected'";}} ?>>02</option>
											<option value="04" <?php if($user_data){ if($user_data[0]->mobile_available_to_h=="04"){echo "selected='selected'";}} ?>>04</option>
											<option value="05" <?php if($user_data){ if($user_data[0]->mobile_available_to_h=="05"){echo "selected='selected'";}} ?>>05</option>
											<option value="06" <?php if($user_data){ if($user_data[0]->mobile_available_to_h=="06"){echo "selected='selected'";}} ?>>06</option>
											<option value="07" <?php if($user_data){ if($user_data[0]->mobile_available_to_h=="07"){echo "selected='selected'";}} ?>>07</option>
											<option value="08" <?php if($user_data){ if($user_data[0]->mobile_available_to_h=="08"){echo "selected='selected'";}} ?>>08</option>
											<option value="09" <?php if($user_data){ if($user_data[0]->mobile_available_to_h=="09"){echo "selected='selected'";}} ?>>09</option>
											<option value="10" <?php if($user_data){ if($user_data[0]->mobile_available_to_h=="10"){echo "selected='selected'";}} ?>>10</option>
											<option value="11" <?php if($user_data){ if($user_data[0]->mobile_available_to_h=="11"){echo "selected='selected'";}} ?>>11</option>
											<option value="12" <?php if($user_data){ if($user_data[0]->mobile_available_to_h=="12"){echo "selected='selected'";}} ?>>12</option>
											<option value="13" <?php if($user_data){ if($user_data[0]->mobile_available_to_h=="13"){echo "selected='selected'";}} ?>>13</option>
											<option value="14" <?php if($user_data){ if($user_data[0]->mobile_available_to_h=="14"){echo "selected='selected'";}} ?>>14</option>
											<option value="15" <?php if($user_data){ if($user_data[0]->mobile_available_to_h=="15"){echo "selected='selected'";}} ?>>15</option>
											<option value="16" <?php if($user_data){ if($user_data[0]->mobile_available_to_h=="16"){echo "selected='selected'";}} ?>>16</option>
											<option value="17" <?php if($user_data){ if($user_data[0]->mobile_available_to_h=="17"){echo "selected='selected'";}} ?>>17</option>
											<option value="18" <?php if($user_data){ if($user_data[0]->mobile_available_to_h=="18"){echo "selected='selected'";}} ?>>18</option>
											<option value="19" <?php if($user_data){ if($user_data[0]->mobile_available_to_h=="19"){echo "selected='selected'";}} ?>>19</option>
											<option value="20" <?php if($user_data){ if($user_data[0]->mobile_available_to_h=="20"){echo "selected='selected'";}} ?>>20</option>
											<option value="21" <?php if($user_data){ if($user_data[0]->mobile_available_to_h=="21"){echo "selected='selected'";}} ?>>21</option>
											<option value="22" <?php if($user_data){ if($user_data[0]->mobile_available_to_h=="22"){echo "selected='selected'";}} ?>>22</option>
											<option value="23" <?php if($user_data){ if($user_data[0]->mobile_available_to_h=="23"){echo "selected='selected'";}} ?>>23</option>
										</select>
											<select id="t_kontakt_minute_bis" class="pull-left form-control " name="mobile_available_to_m" style="width: 49%;">
												<option value=""></option>
											<option value="00" <?php if($user_data){ if($user_data[0]->mobile_available_to_m=="00"){echo "selected='selected'";}} ?>>00</option>
											<option value="15" <?php if($user_data){ if($user_data[0]->mobile_available_to_m=="15"){echo "selected='selected'";}} ?>>15</option>
											<option value="30" <?php if($user_data){ if($user_data[0]->mobile_available_to_m=="30"){echo "selected='selected'";}} ?>>30</option>
											<option value="45" <?php if($user_data){ if($user_data[0]->mobile_available_to_m=="45"){echo "selected='selected'";}} ?>>45</option>
										</select>
												</div>
											</div>
										</div>
										<div class="clearfix"></div>
										<div class="form-group col-sm-12">
											<label class="control-label">Other account settings and details (not public)</label>
										</div>
										<div class="form-group col-sm-6">
											<label class="control-label">Street</label>
											<input type="text" class="form-control" name="street" value="<?php if($user_data){echo $user_data[0]->street;} ?>" placeholder="Street ">
										</div>
										<div class="form-group col-sm-6">
											<label class="control-label">House Number</label>
											<input type="text"  name="house_no" value="<?php if($user_data){echo $user_data[0]->house_no;} ?>" class="form-control" placeholder="House Number">
										</div>
						
										<div class="form-group col-sm-3">
											<label class="control-label">City/Suburb</label>
											<input type="text" name="city" value="<?php if($user_data){echo $user_data[0]->city;} ?>" class="form-control" placeholder="City/Suburb">
										</div>
										<div class="clearfix"></div>
										<div class="form-group col-sm-6">
											<label class="control-label">I currently live in</label>
											<select class="form-control" name="current_live">
												<option value="">-= Please select =-</option>
												<option value="A flatshare" <?php if($user_data){ if($user_data[0]->current_live=="A flatshare"){echo "selected='selected'";}} ?>>A flatshare</option>
												<option value="An apartment" <?php if($user_data){ if($user_data[0]->current_live=="An apartment"){echo "selected='selected'";}} ?>>An apartment</option>
												<option value="Other" <?php if($user_data){ if($user_data[0]->current_live=="Other"){echo "selected='selected'";}} ?>>Other</option>
											</select>
										</div>
										<div class="clearfix"></div>
										<div class="col-sm-6">
											<div class="row">
												<div class="form-group col-sm-12">
													<label class="control-label">Date of Birth</label>
												</div>
												<div class="form-group col-sm-4">
													<input type="text" name="date_of_birth" class="form-control"value="<?php if($user_data){echo $user_data[0]->date_of_birth;} ?>" placeholder="YYYY-MM-DD">
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="row">
												<div class="form-group col-sm-12">
													<label class="control-label">Link to my Facebook Profile</label>
												</div>
												<div class="form-group col-sm-12">
													<input type="text" name="fb_link" value="<?php if($user_data){echo $user_data[0]->fb_link;} ?>" class="form-control" placeholder="e.g. www.facebook.com/Esam.A.Eisa">
												</div>
											</div>
										</div>
										<div class="clearfix"></div>
										<div class="col-sm-6">
										</div>
										<div class="col-sm-6">
											<div class="row">
												<div class="form-group col-sm-12">
													<label class="control-label">Occupational Status</label>
												</div>
												<div class="form-group col-sm-12">
													<select class="form-control" name="job">
														<option value="">-= Please select =-</option>
														<option value="High School student" <?php if($user_data){ if($user_data[0]->job=="High School student"){echo "selected='selected'";}} ?>>High School student</option>
														<option value="University student" <?php if($user_data){ if($user_data[0]->job=="University student"){echo "selected='selected'";}} ?>>University student</option>
														<option value="Military or civilian service" <?php if($user_data){ if($user_data[0]->job=="Military or civilian service"){echo "selected='selected'";}} ?>>Military or civilian service</option>
														<option value="Apprentice" <?php if($user_data){ if($user_data[0]->job=="Apprentice"){echo "selected='selected'";}} ?>>Apprentice</option>
														<option value="Executive employee" <?php if($user_data){ if($user_data[0]->job=="Executive employee"){echo "selected='selected'";}} ?>>Executive employee</option>
														<option value="Leading employee" <?php if($user_data){ if($user_data[0]->job=="Leading employee"){echo "selected='selected'";}} ?>>Leading employee</option>
														<option value="Official" <?php if($user_data){ if($user_data[0]->job=="Official"){echo "selected='selected'";}} ?>>Official</option>
														<option value="Freelancer" <?php if($user_data){ if($user_data[0]->job=="Freelancer"){echo "selected='selected'";}} ?>>Freelancer</option>
														<option value="Self employed" <?php if($user_data){ if($user_data[0]->job=="Self employed"){echo "selected='selected'";}} ?>>Self employed</option>
														<option value="House husband/wife" <?php if($user_data){ if($user_data[0]->job=="House husband/wife"){echo "selected='selected'";}} ?>>House husband/wife</option>
														<option value="Unemployed" <?php if($user_data){ if($user_data[0]->job=="Unemployed"){echo "selected='selected'";}} ?>>Unemployed</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="alert alert-info">
								<div class="panel-body">
									<h4>
										Important Terms of Use of Ejar
										<sup>
											<span class="glyphicon glyphicon-asterisk mandatory" aria-hidden="true"></span>
										</sup>
									</h4>
									<div class="checkbox " style="margin-bottom: 0;">
										<label for="agb">
											<input name="privacy_statement_wg_gesucht" class="privacyCheckBox" type="checkbox">
											<input id="agb" name="agb" type="checkbox">
											Yes, I accept the <a href="#" rel="nofollow" target="_blank" style="color:#696969; font-weight:normal;"><u>Terms and Conditions</u></a>
											and have read the <a href="#" rel="nofollow" target="_blank" style="color:#696969; font-weight:normal;"><u>Privacy Policy</u></a> .
										</label>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<input class="form-control btn btn-warning" value="Create Request" tabindex="175" type="submit">
							</div>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	
	
	

<?php $this->load->view('en/footer-small')?>
