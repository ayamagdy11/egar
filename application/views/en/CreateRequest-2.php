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
					
					<div class="col-sm-12">
						<form class="margin-15" enctype="multipart/form-data" action="<?php echo $this->config->base_url();?>egar/add_request" method="POST">
							
							<div class="panel panel-form">
								<div class="panel-heading">
									<h4>Title of Request <sup><span class="glyphicon glyphicon-asterisk mandatory" aria-hidden="true"></span></sup></h4>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="form-group col-sm-12">
											<label class="control-label">Title</label>
											<input class="form-control" name="title" type="text" placeholder="Title">
										</div>
									</div>

										<div class="row">
										<div class="form-group col-sm-12">
											<input class="form-control" name="city_request" type="hidden" value="<?php print_r($city);?>">
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
									</div>





								</div>
							</div>
							
							<div class="panel panel-form">
								<div class="panel-body">
									<div class="row">
										<div class="form-group col-sm-12">
											<label class="control-label">Ad Descriptions</label>
											<textarea class="form-control" rows="7" name="desc" placeholder="Ad Descriptions"></textarea>
										</div>
									</div>
								</div>
							</div>
							
							<div class="panel panel-form">
								<div class="panel-heading">
									<h4>Desired location <sup><span class="glyphicon glyphicon-asterisk mandatory" aria-hidden="true"></span></sup></h4>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="form-group col-sm-12">
  											<input  name="img" type="file">
										</div>

									</div>

								    <div class="row">
										<div class="form-group col-sm-12">
											<label class="control-label">City</label>
											<p><?php print_r($city);?></p>
										</div>

									</div>
								</div>
							</div>
							
							<div class="panel panel-form">
								<div class="panel-heading">
									<h4>Details regarding the property <sup><span class="glyphicon glyphicon-asterisk mandatory" aria-hidden="true"></span></sup></h4>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="form-group col-sm-12">
											<div class="row">
												<div class="col-sm-12">
													<label class="control-label">From</label>
												</div>
												<div class="col-sm-4">
													<select class="form-control" name="from_day">
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
													<select class="form-control" name="from_month">
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
													<select class="form-control" name="from_year">
														<option value="2016" selected="selected">2016</option>
														<option value="2017">2017</option>
														<option value="2018">2018</option>
														<option value="2017">2019</option>
														<option value="2018">2020</option>
													</select>
												</div>
											</div>

											<div class="row">
												<div class="col-sm-12">
													<label class="control-label">To</label>
												</div>
												<div class="col-sm-4">
													<select class="form-control" name="TO_day">
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
													<select class="form-control" name="to_month">
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
													<select class="form-control" name="to_year">
														<option value="2016" selected="selected">2016</option>
														<option value="2017">2017</option>
														<option value="2018">2018</option>
														<option value="2017">2019</option>
														<option value="2018">2020</option>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group col-sm-4">
											<label class="control-label">Max. Rent</label>
											<input class="form-control" type="text" placeholder="Max. Rent" name="max_rent">
										</div>
										<div class="form-group col-sm-4">
											<label class="control-label">Min. Size of room</label>
											<input class="form-control" type="text" placeholder="Min. Size of room" name="room_size">
										</div>
									</div>
										 <div class="row">
                    <div id="zimmeranzahlError" class="form-group col-lg-4 ">
                        <label class="control-label" for="zimmeranzahl_von">
                            Desired Number of rooms
                        </label>
                        <input id="zimmeranzahl_von" name="Desired_Number_of_rooms" class="form-control" type="text" maxlength="2" value="" tabindex="7">
                    </div>
                    <div id="zimmeranzahlError2" class="form-group col-lg-4 ">
                        <label class="control-label" for="zimmeranzahl">
                            to
                        </label>
                        <input id="zimmeranzahl" name="Desired_Number_of_rooms_to" class="form-control" type="text" maxlength="2" value="" tabindex="8">
                    </div>
                    <div class="col-lg-4 col-lg-offset-8"></div>
                </div>

										<div class="form-group col-sm-4">
											<label class="control-label">House type</label>
											<select class="form-control" name="House_type">
												<option value="">-= Please select =-</option>
												<option value="Old">Old</option>
												<option value="New">New</option>
												<option value="Either">Either</option>
											</select>
										</div>
										<div class="form-group col-sm-12">
											<label class="control-label">Facilities</label>
											<div class="checkbox">
												<div class="row">
													<div class="col-sm-4">
														<label><input type="checkbox" value="1" name="furnished">Furnished</label>
													</div>
													<div class="col-sm-4">
														<label><input type="checkbox" value="1" name="unfurnished">Unfurnished</label>
													</div>
													<div class="col-sm-4">
														<label><input type="checkbox"  value="1" name="with_a_kitchen">With a kitchen</label>
													</div>
													<div class="col-sm-4">
														<label><input type="checkbox" value="1" name="garden">Garden</label>
													</div>
													<div class="col-sm-4">
														<label><input type="checkbox" value="1" name="parking_spot">Parking spot</label>
													</div>
													<div class="col-sm-4">
														<label><input type="checkbox"  value="1" name="dishwasher">Dishwasher</label>
													</div>
													<div class="col-sm-4">
														<label><input type="checkbox" value="1" name="balcony">Balcony</label>
													</div>
													<div class="col-sm-4">
														<label><input type="checkbox" value="1" name="bathtub">Bathtub</label>
													</div>
													<div class="col-sm-4">
														<label><input type="checkbox" value="1" name="elevator" >Elevator/Lift</label>
													</div>
													<div class="col-sm-4">
														<label><input type="checkbox" value="1" name="terrace">Terrace</label>
													</div>
													<div class="col-sm-4">
														<label><input type="checkbox" value="1" name="bathroom_with_window">Bathroom with window/s</label>
													</div>
													<div class="col-sm-4">
														<label><input type="checkbox" value="1" name="pets_allowed">Pets allowed</label>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group col-sm-4">
											<label class="control-label">Flatshare Size</label>
											<select class="form-control" name="Flatshare_Size">
												<option value="">-= Please select =-</option>
												<option value="Up to 3 people">Up to 3 people</option>
												<option value="More than 3 people">More than 3 people</option>
												<option value="Does not matter">Does not matter</option>
											</select>
										</div>
										<div class="form-group col-sm-4">
											<label class="control-label">flatmates</label>
											<select class="form-control" name="flatmates">
												<option value="">-= Please select =-</option>
												<option value="Only male">Only males</option>
												<option value="Only females">Only females</option>
												<option value="Does not matter">Does not matter</option>
											</select>
										</div>
										<div class="form-group col-sm-4">
											<label class="control-label">Flatmates Age Group</label>
											<div class="row">
												<div class="col-sm-6">
													<input class="form-control" type="text" name="flatmates_age_group" placeholder="Flatmates Age Group">
												</div>
												<div class="col-sm-6">
													<input class="form-control" type="text" name="flatmates_age_group_to" placeholder="To">
												</div>
											</div>
										</div>

										<div class="form-group col-sm-12">
											<label class="control-label">Flatshare Types</label>
											<div class="checkbox">
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
										</div>
									</div>
								</div>
							</div>
							
							<div class="panel panel-form">
								<div class="panel-heading">
									<h4>Privacy settings <sup><span class="glyphicon glyphicon-asterisk mandatory" aria-hidden="true"></span></sup></h4>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="form-group col-sm-12">
											<p>Decide for yourself who is allowed to see your pictures and to contact you. </p>
											<label class="control-label">Permission for</label>
											<select class="form-control" name="Permission_for">
												<option value="" selected="">-= Please select =-</option>
												<option value="All users">All users</option>
												<option value="Only signed in users">Only signed in users</option>
												<option value="Only signed in users with Ad in Aichach-Friedberg">Only signed in users with Ad in Aichach-Friedberg</option>
											</select>
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
							
							<div class="panel panel-form">
									<div class="panel-heading">
										<h4>Hobbies</h4>
									</div>
									<div class="panel-body">
										
										<div class="row">
											<div class="col-lg-12">
												<label>
													Sport/s
												</label>
											</div>
										</div>
										<div class="row">
										    <div class="col-lg-3">
										        <div class="checkbox">
										            <label for="fitnessstudio">
										                <input id="fitnessstudio" type="checkbox" name="Gym" value="1"  tabindex="42">
										                Gym
										            </label>
										        </div>
										        <div class="mehrSport hideMe" style="margin-top:-5px;">
										            <div class="checkbox">
										                <label for="american_football">
										                    <input id="american_football" type="checkbox" name="American_Football" value="1"  tabindex="43">
										                    American Football
										                </label>
										            </div>
										            <div class="checkbox">
										                <label for="beach_volleyball">
										                    <input id="beach_volleyball" type="checkbox"  name="Beach_Volleyball" value="1"  tabindex="44">
										                    Beach-Volleyball
										                </label>
										            </div>
										            <div class="checkbox">
										                <label for="handball">
										                    <input id="handball" type="checkbox" name="Handball" value="1"  tabindex="45">
										                    Handball
										                </label>
										            </div>
										            <div class="checkbox">
										                <label for="radfahren">
										                    <input id="radfahren" type="checkbox" name="Cycling" value="1"  tabindex="46">
										                    Cycling
										                </label>
										            </div>
										            <div class="checkbox">
										                <label for="skateboarden">
										                    <input id="skateboarden" type="checkbox" name="Skateboarding" value="1"  tabindex="47">
										                    Skateboarding
										                </label>
										            </div>
										            <div class="checkbox">
										                <label for="tanzen">
										                    <input id="tanzen" type="checkbox" name="Dancing" value="1"  tabindex="48">
										                    Dancing
										                </label>
										            </div>
										            <div class="checkbox">
										                <label for="wasserball">
										                    <input id="wasserball" type="checkbox" name="Water_Polo" value="1"  tabindex="49">
										                    Water Polo
										                </label>
										            </div>
										        </div>
										    </div>
										    <div class="col-lg-3">
										        <div class="checkbox">
										            <label for="snowboarden">
										                <input id="snowboarden" type="checkbox" name="Snowboarding" value="1"  tabindex="50">
										                Snowboarding
										            </label>
										        </div>
										        <div class="mehrSport hideMe" style="margin-top:-5px;">
										            <div class="checkbox">
										                <label for="badminton">
										                    <input id="badminton" type="checkbox" name="Badminton" value="1"  tabindex="51">
										                    Badminton
										                </label>
										            </div>
										            <div class="checkbox">
										                <label for="billard">
										                    <input id="billard" type="checkbox" name="Billards" value="1"  tabindex="52">
										                    Billards
										                </label>
										            </div>
										            <div class="checkbox">
										                <label for="hockey">
										                    <input id="hockey" type="checkbox" name="Hockey" value="1"  tabindex="53">
										                    Hockey
										                </label>
										            </div>
										            <div class="checkbox">
										                <label for="reiten">
										                    <input id="reiten" type="checkbox" name="Horse_riding" value="1"  tabindex="54">
										                    Horse riding
										                </label>
										            </div>
										            <div class="checkbox">
										                <label for="ski">
										                    <input id="ski" type="checkbox" name="Skiing" value="1"  tabindex="55">
										                    Skiing
										                </label>
										            </div>
										            <div class="checkbox">
										                <label for="tennis">
										                    <input id="tennis" type="checkbox" name="Tennis" value="1"  tabindex="56">
										                    Tennis
										                </label>
										            </div>
										        </div>
										    </div>
										    <div class="col-lg-3">
										        <div class="checkbox">
										            <label for="joggen">
										                <input id="joggen" type="checkbox" name="Running" value="1"  tabindex="57">
										                Running
										            </label>
										        </div>
										        <div class="mehrSport hideMe" style="margin-top:-5px;">
										            <div class="checkbox">
										                <label for="ballett">
										                    <input id="ballett" type="checkbox" name="Ballet" value="1"  tabindex="58">
										                    Ballet
										                </label>
										            </div>
										            <div class="checkbox">
										                <label for="boxen">
										                    <input id="boxen" type="checkbox" name="Boxing" value="1"  tabindex="59">
										                    Boxing
										                </label>
										            </div>
										            <div class="checkbox">
										                <label for="kampfsport">
										                    <input id="kampfsport" type="checkbox" name="Martial_Arts" value="1"  tabindex="60">
										                    Martial Arts
										                </label>
										            </div>
										            <div class="checkbox">
										                <label for="rugby">
										                    <input id="rugby" type="checkbox" name="Rugby" value="1"  tabindex="61">
										                    Rugby
										                </label>
										            </div>
										            <div class="checkbox">
										                <label for="squash">
										                    <input id="squash" type="checkbox" name="Squash" value="1"  tabindex="62">
										                    Squash
										                </label>
										            </div>
										            <div class="checkbox">
										                <label for="tischtennis">
										                    <input id="tischtennis" type="checkbox" name="Table_Tennis" value="1"  tabindex="63">
										                    Table Tennis
										                </label>
										            </div>
										        </div>
										    </div>
										    <div class="col-lg-3">
										        <div class="checkbox">
										            <label for="fusball">
										                <input id="fusball" type="checkbox" name="Football" value="1"  tabindex="64">
										                Football
										            </label>
										        </div>
										        <div class="mehrSport hideMe" style="margin-top:-5px;">
										            <div class="checkbox">
										                <label for="basketball">
										                    <input id="basketball" type="checkbox" name="Basketball" value="1"  tabindex="65">
										                    Basketball
										                </label>
										            </div>
										            <div class="checkbox">
										                <label for="eishockey">
										                    <input id="eishockey" type="checkbox" name="Ice Hockey" value="1"  tabindex="66">
										                    Ice Hockey
										                </label>
										            </div>
										            <div class="checkbox">
										                <label for="klettern">
										                    <input id="klettern" type="checkbox" name="Climbing" value="1"  tabindex="67">
										                    Climbing
										                </label>
										            </div>
										            <div class="checkbox">
										                <label for="schwimmen">
										                    <input id="schwimmen" type="checkbox" name="Swimming" value="1"  tabindex="68">
										                    Swimming
										                </label>
										            </div>
										            <div class="checkbox">
										                <label for="surfen">
										                    <input id="surfen" type="checkbox" name="Surfing" value="1"  tabindex="69">
										                    Surfing
										                </label>
										            </div>
										            <div class="checkbox">
										                <label for="volleyball">
										                    <input id="volleyball" type="checkbox" name="Volleyball" value="1"  tabindex="70">
										                    Volleyball
										                </label>
										            </div>
										        </div>
										    </div>
</div>
								
										
										
										<div class="row">
											<div class="col-lg-12">
												<label>
													Music
												</label>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3">
												<div class="checkbox">
													<label for="elektro">
														<input id="elektro" name="Electro" value="1" tabindex="93" type="checkbox">
														Electro
													</label>
												</div>
												<div class="mehrMusikstil hideMe" style="margin-top: -5px; display: block;">
													<div class="checkbox">
														<label for="alternative">
															<input id="alternative" name="Alternative" value="1" tabindex="94" type="checkbox">
															Alternative
														</label>
													</div>
													<div class="checkbox">
														<label for="grunge">
															<input id="grunge" name="Grunge" value="1" tabindex="95" type="checkbox">
															Grunge
														</label>
													</div>
													<div class="checkbox">
														<label for="klassik">
															<input id="klassik" name="Classical" value="1" tabindex="96" type="checkbox">
															Classical
														</label>
													</div>
													<div class="checkbox">
														<label for="rap">
															<input id="rap" name="Rap" value="1" tabindex="97" type="checkbox">
															Rap
														</label>
													</div>
													<div class="checkbox">
														<label for="soul">
															<input id="soul" name="Soul" value="1" tabindex="98" type="checkbox">
															Soul
														</label>
													</div>
												</div>
											</div>
											<div class="col-lg-3">
												<div class="checkbox">
													<label for="rock">
														<input id="rock" name="Rock" value="1" tabindex="99" type="checkbox">
														Rock
													</label>
												</div>
												<div class="mehrMusikstil hideMe" style="margin-top: -5px; display: block;">
													<div class="checkbox">
														<label for="blues">
															<input id="blues" name="Blues" value="1" tabindex="100" type="checkbox">
															Blues
														</label>
													</div>
													<div class="checkbox">
														<label for="hipHop">
															<input id="hipHop" name="HipHop" value="1" tabindex="101" type="checkbox">
															HipHop
														</label>
													</div>
													<div class="checkbox">
														<label for="metal">
															<input id="metal" name="Metal" value="1" tabindex="102" type="checkbox">
															Metal
														</label>
													</div>
													<div class="checkbox">
														<label for="reggae">
															<input id="reggae" name="Reggae" value="1" tabindex="103" type="checkbox">
															Reggae
														</label>
													</div>
													<div class="checkbox">
														<label for="techno">
															<input id="techno" name="Techno" value="1" tabindex="104" type="checkbox">
															Techno
														</label>
													</div>
												</div>
											</div>
											<div class="col-lg-3">
												<div class="checkbox">
													<label for="r_n_b">
														<input id="r_n_b" name="R_n_B" value="1" tabindex="105" type="checkbox">
														R'n'B
													</label>
												</div>
												<div class="mehrMusikstil hideMe" style="margin-top: -5px; display: block;">
													<div class="checkbox">
														<label for="dark_wave">
															<input id="dark_wave" name="Dark_Wave" value="1" tabindex="106" type="checkbox">
															Dark Wave
														</label>
													</div>
													<div class="checkbox">
														<label for="indie">
															<input id="indie" name="Indie" value="1" tabindex="107" type="checkbox">
															Indie
														</label>
													</div>
													<div class="checkbox">
														<label for="pop">
															<input id="pop" name="Pop" value="1" tabindex="108" type="checkbox">
															Pop
														</label>
													</div>
													<div class="checkbox">
														<label for="rock_n_roll">
															<input id="rock_n_roll" name="Rock_n_Roll" value="1" tabindex="109" type="checkbox">
															Rock'n'Roll
														</label>
													</div>
													<div class="checkbox">
														<label for="trance">
															<input id="trance" name="Trance" type="checkbox">
															Trance
														</label>
													</div>
												</div>
											</div>
											<div class="col-lg-3">
												<div class="checkbox">
													<label for="house">
														<input id="house" name="House" value="1" tabindex="111" type="checkbox">
														House
													</label>
												</div>
												<div class="mehrMusikstil hideMe" style="margin-top: -5px; display: block;">
													<div class="checkbox">
														<label for="funk">
															<input id="funk" name="Funk" value="1" tabindex="112" type="checkbox">
															Funk
														</label>
													</div>
													<div class="checkbox">
														<label for="jazz">
															<input id="jazz" name="Jazz" value="1" tabindex="113" type="checkbox">
															Jazz
														</label>
													</div>
													<div class="checkbox">
														<label for="punkrock">
															<input id="punkrock" name="Punkrock" value="1" tabindex="114" type="checkbox">
															Punkrock
														</label>
													</div>
													<div class="checkbox">
														<label for="schlager">
															<input id="schlager" name="Schlager" value="1" tabindex="115" type="checkbox">
															Schlager
														</label>
													</div>
												</div>
											</div>
										</div>

										
										<div class="row">
											<div class="col-lg-12">
												<label>
													Free time
												</label>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3">
												<div class="checkbox">
													<label for="reisen">
														<input id="reisen" name="Travelling" value="1" tabindex="117" type="checkbox">
														Travelling
													</label>
												</div>
												<div class="mehrFreizeit hideMe" style="margin-top: -5px; display: block;">
													<div class="checkbox">
														<label for="kneipe">
															<input id="kneipe" name="Bars" value="1" tabindex="118" type="checkbox">
															Bars/Pubs
														</label>
													</div>
													<div class="checkbox">
														<label for="fotografieren">
															<input id="fotografieren" name="Photography" value="1" tabindex="119" type="checkbox">
															Photography
														</label>
													</div>
													<div class="checkbox">
														<label for="kunst">
															<input id="kunst" name="Art" value="1" tabindex="120" type="checkbox">
															Art
														</label>
													</div>
													<div class="checkbox">
														<label for="pokern">
															<input id="pokern" name="Poker" value="1" tabindex="121" type="checkbox">
															Poker
														</label>
													</div>
													<div class="checkbox">
														<label for="yoga">
															<input id="yoga" name="Yoga" value="1" tabindex="122" type="checkbox">
															Yoga
														</label>
													</div>
												</div>
											</div>
											<div class="col-lg-3">
												<div class="checkbox">
													<label for="konzerte">
														<input id="konzerte" name="Concerts" value="1" tabindex="123" type="checkbox">
														Concerts
													</label>
												</div>
												<div class="mehrFreizeit hideMe" style="margin-top: -5px; display: block;">
													<div class="checkbox">
														<label for="club">
															<input id="club" name="Clubbing" value="1" tabindex="124" type="checkbox">
															Clubbing
														</label>
													</div>
													<div class="checkbox">
														<label for="freunde">
															<input id="freunde" name="Meeting_friends" value="1" tabindex="125" type="checkbox">
															Meeting friends
														</label>
													</div>
													<div class="checkbox">
														<label for="meditieren">
															<input id="meditieren" name="Meditation" value="1" tabindex="126" type="checkbox">
															Meditation
														</label>
													</div>
													<div class="checkbox">
														<label for="shoppen">
															<input id="shoppen" name="Shopping" value="1" tabindex="127" type="checkbox">
															Shopping
														</label>
													</div>
												</div>
											</div>
											<div class="col-lg-3">
												<div class="checkbox">
													<label for="lesen">
														<input id="lesen" name="Reading" value="1" tabindex="128" type="checkbox">
														Reading
													</label>
												</div>
												<div class="mehrFreizeit hideMe" style="margin-top: -5px; display: block;">
													<div class="checkbox">
														<label for="fernsehen">
															<input id="fernsehen" name="TV" value="1" tabindex="129" type="checkbox">
															TV
														</label>
													</div>
													<div class="checkbox">
														<label for="sport_schauen">
															<input id="sport_schauen" name="Watching_sports" value="1" tabindex="130" type="checkbox">
															Watching sports
														</label>
													</div>
													<div class="checkbox">
														<label for="musik_horen">
															<input id="musik_horen" name="Music" value="1" tabindex="131" type="checkbox">
															Music
														</label>
													</div>
													<div class="checkbox">
														<label for="singen">
															<input id="singen" name="Singing" value="1" tabindex="132" type="checkbox">
															Singing
														</label>
													</div>
												</div>
											</div>
											<div class="col-lg-3">
												<div class="checkbox">
													<label for="kino">
														<input id="kino" name="Cinema" value="1" tabindex="133" type="checkbox">
														Cinema
													</label>
												</div>
												<div class="mehrFreizeit hideMe" style="margin-top: -5px; display: block;">
													<div class="checkbox">
														<label for="festivals">
															<input id="festivals" name="Festivals" value="1" tabindex="134" type="checkbox">
															Festivals
														</label>
													</div>
													<div class="checkbox">
														<label for="onlinespiele">
															<input id="onlinespiele" name="Online_games" value="1" tabindex="135" type="checkbox">
															Online games
														</label>
													</div>
													<div class="checkbox">
														<label for="musik_machen">
															<input id="musik_machen" name="Making_music" value="1" tabindex="136" type="checkbox">
															Making music
														</label>
													</div>
													<div class="checkbox">
														<label for="wandern">
															<input id="wandern" name="Hiking" value="1" tabindex="137" type="checkbox">
															Hiking
														</label>
													</div>
												</div>
											</div>
										</div>
				
									</div>
								</div>
							
								<div class="panel panel-form">
									<div class="panel-heading">
										<h4>More information about me</h4>
										<a name="weitere"></a>
									</div>
									<div class="panel-body">
										<div id="sprachenError" class="row">
											<div class="col-lg-12">
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
							
							
											<div class="row">
												<div id="ich_kocheError" class="col-lg-12">
													<div class="form-group">
														<label class="control-label" for="ich_koche">
															I cook
														</label>
														<select id="ich_koche" class="form-control" name="I_cook" tabindex="168">
															<option value="">-= Please select =-</option>
															<option value="Often, and I enjoy it">Often, and I enjoy it</option>
															<option value="Several times a week">Several times a week</option>
															<option value="Rarely, and reluctantly">Rarely, and reluctantly</option>
															<option value="Never">Never</option>
														</select>
													</div>
												</div>
											</div>
							
											<div id="ich_bringeError" class="row">
												<div class="col-lg-12">
													<div class="form-group">
														<label class="control-label" for="bringe">I will bring</label>
														<div>
															<textarea id="bringe" class="form-control" name="I_will_bring" maxlength="255" rows="5" tabindex="169" style="color: black;"></textarea>
														</div>
													</div>
												</div>
											</div>
											<input name="isRubrik0" value="1" type="hidden">
										
											<div id="raucherError" class="row">
												<div class="col-lg-6">
													<div class="form-group">
														<label class="control-label" for="raucher">
															I smoke
														</label>
														<select id="raucher" class="form-control" name="I_smoke" tabindex="170">
															<option value="">-= Please select =-</option>
															<option value="Non-Smoker">Non-Smoker</option>
															<option value="Sometimes in my room">Sometimes in my room</option>
															<option value="Regularly in my room">Regularly in my room</option>
															<option value="Sometimes on the balcony">Sometimes on the balcony</option>
															<option value="Regularly on the balcony">Regularly on the balcony</option>
															<option value="Everywhere">Everywhere</option>
														</select>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="form-group">
														<label class="control-label" for="raucher_und_mich">
															Smoking is okay
														</label>
														<select id="raucher_und_mich" class="form-control" name="Smoking_is_okay" tabindex="171">
															<option value="">-= Please select =-</option>
															<option value="When people smoke anywhere at the property">When people smoke anywhere at the property</option>
															<option value="When people smoke in their room">When people smoke in their room</option>
															<option value="When people smoke on the balcony">When people smoke on the balcony</option>
															<option value="Smoking bothers me greatly">Smoking bothers me greatly</option>
														</select>
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