<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="title" content=" ">
        <meta name="description" content=" ">
        <meta name="keywords" content=" ">
        <title>Search</title>
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
	<section class="search-page">
		<div class="field">
			<div class="container">
				<div class="row">
					<div class="search-page">
				   <form action="<?php echo $this->config->base_url();?>egar/search_request2" method="post" enctype="multipart/form-data" id="search_request">
							<div class="col-sm-12">
								<div class="well">
									<div class="form-group col-sm-3">
										<label class="control-label">Category</label>
										<select class="form-control" name="category" required>
											<option value="Flatshares" <?php if($this->session->userdata('search_request1')){ if($this->session->userdata['search_request1']['category']=="Flatshares")  {echo 'selected="selected"';}}?> >Flatshares</option>
											<option value="RoomFlats"  <?php if($this->session->userdata('search_request1')){ if($this->session->userdata['search_request1']['category']=="RoomFlats")   {echo 'selected="selected"';}}?>>1 Room Flats</option>
											<option value="Flats"      <?php if($this->session->userdata('search_request1')){ if($this->session->userdata['search_request1']['category']=="Flats")  {echo 'selected="selected"';}}?>>Flats</option>
											<option value="Houses"     <?php if($this->session->userdata('search_request1')){ if($this->session->userdata['search_request1']['category']=="Houses")  {echo 'selected="selected"';}}?>>Houses</option>
										</select>
									</div>
									<div class="form-group col-sm-3">
										<label class="control-label">City</label>
   <select class="form-control" name="city" >
			            <?php
                            foreach ($city as $value) { 
                            echo '<option value="'.$value->id.'"';
                            if($this->session->userdata('search_request1')){ if($this->session->userdata['search_request1']['city']=="$value->id")  
                            	{echo 'selected="selected"';}}

                            echo ">".$value->name.'</option>';                 

}
                        ?>
							</select>									</div>
									<div class="form-group col-sm-2">
										<label class="control-label">Rent type</label>
										<select class="form-control" id="RentTypeSelect">
											<option value="Any" selected="">Any</option>
											<option value="LongTerm">Long Term</option>
											<option value="ShortTerm">Short Term</option>
											<option value="RentbyDay">Rent by Day</option>
										</select>
									</div>
									<div class="form-group col-sm-2">
										<label class="control-label">Min. size</label>
										<div class="input-group">
											<input class="form-control" name="total_flat_size" size="5" maxlength="3"  placeholder="Max. size" type="text">
											<div class="input-group-addon">m²</div>
										</div>
									</div>
									<div class="form-group col-sm-2">
										<label class="control-label">Max. rent</label>
										<div class="input-group">
											<input class="form-control" name="maX_rent" size="5" maxlength="3"  placeholder="Min. rent" type="text">
											<div class="input-group-addon">$</div>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="col-sm-12">
								<div class="see-more">
									
									<div class="clearfix"></div>
									<div class="collapse" id="collapseExample">
										<div class="well">
											<div class="col-xs-12">
												<h4 class="title">Details</h4>
											</div>
											<div class="col-sm-3 Any LongTerm ShortTerm RentbyDay">
												<label class="control-label show-hide-more Any LongTerm ShortTerm">Earliest move in date</label>
												<label class="control-label hide-more RentbyDay">Check-In</label>
												<div class="form-group">
													<i class="fa fa-calendar" aria-hidden="true"></i>
													<input placeholder="Earliest move in date" name="e_move_in" class="form-control input-md datepicker-here" data-position="bottom right" data-language='en' data-date-format="yyyy-mm-dd"  type="text">
												</div>
											</div>
									<!-- 		<div class="col-sm-3 hide-more ShortTerm">
												<label class="control-label">Deviation</label>
												<div class="form-group">
													<select class="form-control" name="e_deviation">
														<option value="" selected="">Any</option>
														<option value="1">+/- 0 Days</option>
														<option value="2">+/- 1 Day</option>
														<option value="3">+/- 1 Week</option>
														<option value="4">+/- 1 Month</option>
													</select>
												</div>
											</div> -->
											<div class="col-sm-3 Any LongTerm ShortTerm RentbyDay">
												<label class="control-label show-hide-more Any LongTerm ShortTerm">Latest move in date</label>
												<label class="control-label hide-more RentbyDay">Check-Out</label>
												<div class="form-group">
													<i class="fa fa-calendar" aria-hidden="true"></i>
													<input placeholder="Latest move in date" name="l_move_in" class="form-control input-md datepicker-here" data-position="bottom right" data-language='en' data-date-format="yyyy-mm-dd"  type="text">
												</div>
											</div>
										<!-- 	<div class="col-sm-3 hide-more ShortTerm">
												<label class="control-label">Deviation</label>
												<div class="form-group">
													<select class="form-control" name="l_deviation">
														<option value="" selected="">Any</option>
														<option value="1">+/- 0 Days</option>
														<option value="2">+/- 1 Day</option>
														<option value="3">+/- 1 Week</option>
														<option value="4">+/- 1 Month</option>
													</select>
												</div>
											</div> -->
											<div class="clearfix"></div>
											<div class="col-sm-12">
												<hr>
											</div>
											<div class="form-group col-sm-3 Flatshares RoomFlats Flats Houses">
												<label class="control-label">Searched</label>
												<select class="form-control" name="gender">
													<option value="Any" selected="">Any</option>
													<option value="Male/s">Male/s</option>
													<option value="Female/s">Female/s</option>
												</select>
											</div>
											<div class="form-group col-sm-3 Flatshares RoomFlats Flats Houses">
												<label class="control-label">Smoker</label>
												<select class="form-control" name="smoke">
													<option value="Any" selected="">Any</option>
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<div class="form-group col-sm-3 Flatshares RoomFlats Flats Houses">
												<label class="control-label">Age</label>
												<div class=" form-inline">
													<input class="form-control" name="age_from" value="" maxlength="2" size="3" type="text">
													to
													<input class="form-control" name="age_to" value="" maxlength="2" size="3" type="text">
												</div>
											</div>
											<div class="form-group col-sm-3 hide-more-category Flats Houses">
												<label class="control-label">Rooms</label>
												<div class=" form-inline">
													<select class="form-control" name="room_from">
														<option value="any" selected="">Any</option>
														<option value="2" >2</option>
														<option value="3" >3</option>
														<option value="4" >4</option>
														<option value="5" >5</option>
														<option value="6" >6</option>
														<option value="7" >7</option>
														<option value="8" >8</option>
													</select>
													<!-- to
													<select class="form-control" name="room_to">
														<option value="" selected="">Any</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
														<option>6</option>
														<option>7</option>
														<option>8</option>
													</select> -->
												</div>
											</div>
											<div class="clearfix"></div>
											<div class="col-sm-12">
												<hr>
											</div>
										<!-- 	<div class="col-sm-12 Flatshares RoomFlats Flats Houses">
												<div class="form-group">
													<div class="checkbox">
														<label>
															<input type="checkbox"> Only ads with pictures
														</label>
													</div>
												</div>
											</div> -->
										</div>
									</div>
									<div class="clearfix"></div>
									<div class="filters-search">
										<a class="more-filters pull-right" data-toggle="collapse" href="<?php echo $this->config->base_url();?>_/#collapseExample" aria-expanded="false" aria-controls="collapseExample">
											<span class=" glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span> More filters
										</a>
										<div class="text-center">
										<!-- 	<a class="btn btn-primary" id="search">
												Search
											</a> -->
									 <button type="submit" id="search"  class="btn btn-primary">Search</button>
										</div>
<!-- 									</div> onclick="SubmitFormsearch('search_request', 'egar', 'search_request2')"
 -->									<div class="clearfix"></div>

								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	
	<section class="search-results">
		<div class="field">
			<div class="container">
				<div class="row">
				
					<!-- table -->









					<div class="clearfix"></div>
					<div class="col-sm-12">
						<div class="table-responsive" id="search_result">
			               <table class="table table-bordered table-hover">
								<tr class="first-tr">
									<td class="info" title="Male or Female">M/F</td>
									<td class="info">Posted</td>
									<td class="info">Max rent</td>
									<td class="info">Min Room Size.m²</td>
									<td class="info">Desired district</td>
									<td class="info">From</td>
									<td class="info">Until</td>
								</tr>
								<?php 
								foreach ($result as $value) {
								
								?>
								<tr>
									<td <?php if($value->deactive==0){echo 'class="active"'; }else{echo 'class="disable"';} ?>   title="Male">
										<a href="<?php echo $this->config->base_url();?>egar/offer_details/<?php echo $value->id;?>">
											<div class="padd-8">
												<?php 
												       if($value->user_gender==0){
												  ?>
												
												<img class="img-about img-responsive center-block" src="<?php echo $this->config->base_url();?>_/images/male.png" alt="">
												<?php }else{ ?>
												<img class="img-about img-responsive center-block" src="<?php echo $this->config->base_url();?>_/images/female.png" alt="">
												<?php }?>
											</div>
										</a>
									</td>
									<td <?php if($value->deactive==0){echo "class='active'";} else{echo "class='disable'";} ?>>
										<a href="<?php echo $this->config->base_url();?>egar/offer_details/<?php echo $value->id;?>">
											<div class="padd-8">
												<?php echo $value->post_date; ?>
											</div>
										</a>
									</td>
									<td <?php if($value->deactive==0){echo 'class="active"';} else{echo 'class="disable"';} ?>>
										<a href="<?php echo $this->config->base_url();?>egar/offer_details/<?php echo $value->id;?>">
											<div class="padd-8">
												<?php echo $value->rent_per_month;?>
											</div>
										</a>
									</td>
									<td <?php if($value->deactive==0){echo 'class="active"';} else{echo 'class="disable"';} ?>>
										<a href="<?php echo $this->config->base_url();?>egar/offer_details/<?php echo $value->id;?>">
											<div class="padd-8">
												<?php echo $value->total_flat_size; ?><span>m²</span>
											</div>
										</a>
									</td>
									<td <?php if($value->deactive==0){echo 'class="active"'; }else{echo 'class="disable"';} ?>>
										<a href="<?php echo $this->config->base_url();?>egar/offer_details/<?php echo $value->id;?>">
											<div class="padd-8">
											<?php echo $value->number_of_rooms;?>
											</div>
										</a>
									</td>
									<td <?php if($value->deactive==0){echo 'class="active"';} else{echo 'class="disable"';} ?>>
										<a href="<?php echo $this->config->base_url();?>egar/offer_details/<?php echo $value->id;?>">
											<div class="padd-8">
												<?php echo $value->available_from_d."-".$value->available_from_m."-".$value->available_from_y?>
											</div>
										</a>
									</td>
									<td <?php if($value->deactive==0){echo 'class="active"';} else{echo 'class="disable"';}?>>
										<a href="<?php echo $this->config->base_url();?>egar/offer_details/<?php echo $value->id;?>">
											<div class="padd-8">
												<?php echo $value->available_to_d."-".$value->available_to_m."-".$value->available_to_y?>
											</div>
										</a>
									</td>
								</tr>

							<?php }?>
							</table>
							<nav aria-label="Page navigation">
							  <ul class="pagination">
								
								<?php
								if($links){
									print_r($links);
									}

								// echo "<li>";
								// echo $links;
								// echo "</li>";
 ?>

							<li><?php //echo "<li>".$links."</li>"; ?></li>
							  </ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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
	<script src="<?php echo $this->config->base_url();?>_/dist/js/datepicker.min.js"></script>
    <script src="<?php echo $this->config->base_url();?>_/dist/js/i18n/datepicker.en.js"></script>
</body>
</html>
<script type="text/javascript">
function SubmitFormsearch(FormID, Controller, FunctionName) {
            // alert("sd");
               $("#"+FormID).unbind('submit').submit(function (event) {
                   
                   var formData = $( this ).serialize();
                   $.ajax({
                            type: 'POST', 
                            url: "<?php echo $this->config->base_url(); ?>" + Controller + "/"+ FunctionName,
                            data: formData
                        })
                        .done(function (data) {
                        	//alert("Ff");
                           $("#search_result").html(data);
                        // $('<div class="success-order"> لقد تم طلب المنتج بنجاح . سنقوم بالاتصال بك ف اقرب وقت </div>').insertBefore('#btnSubmit').delay(10000).fadeOut();
                        });
                        event.preventDefault();
                        
                        $("#"+FormID)[0].reset();
                        // $("#x").modal('toggle');
                    });
                
            }
// function SubmitForm(FormID, Controller, FunctionName) {
//             // alert("sd");
//                $("#"+FormID).unbind('submit').submit(function (event) {
                   
//                    var formData = $( this ).serialize();
//                    $.ajax({
//                             type: 'POST', 
//                             url: "<?php echo $this->config->base_url(); ?>" + Controller + "/"+ FunctionName,
//                             data: formData
//                         })
//                         .done(function (data) {
//                             // $("#result").html(data);
//                             if(data=="error"){
//                         $('<div class="success-order">invalid email or password </div>').insertBefore('#submitbtn').delay(10000).fadeOut();
//                        // $("#result").html("invalid email or password ");
//                        // alert(data);
//                        } else
//                        {
//                        	$('<div class="success-order">success </div>').insertBefore('#submitbtn').delay(10000).fadeOut();
//                         $("#login_modal").modal('toggle');
//                         location.reload();
//                        }  
//                    });

//                         event.preventDefault();
                        
//                         $("#"+FormID)[0].reset();
//                         // $("#x").modal('toggle');
//                     });
                
//             }
//     function SubmitFormregister(FormID, Controller, FunctionName) {
//     	//if($("#password").val()== $("#repassword").val()){
//                $("#"+FormID).unbind('submit').submit(function (event) {
                   
//                    var formData = $( this ).serialize();
//                    $.ajax({
//                             type: 'POST', 
//                             url: "<?php echo $this->config->base_url(); ?>" + Controller + "/"+ FunctionName,
//                             data: formData
//                         })
//                         .done(function (data) {
//                             // $("#result").html(data);
//                        if(data!="you are successfully registered"){
//                        $("#result").html(data);
//                        // alert(data);
//                        } else
//                        {
//                        	   $("#"+FormID)[0].reset();
//                            $("#registermodal").modal('toggle');  
//                            $("#result").val()="";

//                      }  
//                    });
//                         event.preventDefault();
//                         // $("#x").modal('toggle');
//                     });
                
//             }
// $(document).ready(function() {

//     var pageLoaded = 1; //this basically says that we are on page 1 of the results

//       $(window).scroll(function()
//        {

//         if($(window).scrollTop() == $(document).height() - $(window).height())
//         {
//          pageLoaded = pageLoaded+1; //when this condition has met, increase the pageLoaded so that I can tell php to load in data for page 2/3/4/5, etc, etc

// // below I send the data to the controller named Home its function loadData gets a variable named id_load with value = to pageLoaded

//          $.post('egar/search_request1', {'id_load':pageLoaded}, 
//             function(data)
//             {
//                 if (data != "")
//                 {
//                  $('#submissions').append(data);
//                 }
//              }
//          );
//          //alert(pageLoaded);
//         }
//        }
//       );


//     });   
</script>