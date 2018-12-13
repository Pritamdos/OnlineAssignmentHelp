<!DOCTYPE html>
<html>
<head>
    <title>Global Essay, Dissertation and Assignment Help </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta title="Looking for online essay, thesis or dissertation help? OnlineAssignmenthelp.com is your destination. We offer global assignment help service for all subjects at unbelievably cheap price.">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/custom.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/font.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/animated.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/scrollanimations.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://npmcdn.com/flickity@1.2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php include './header.php'?>
    <div class="onl-banner-sections">
		<div class="onl-inrs-banner-sections-login-signups">
				<div class="order-details-sc">
					<div class="order-stepper-ir-sec">
							<div class="od-iner">
								<!-- Header of Split Order form -->
								<div class="s-stepper">
									<div data-target="#stage1" id="stage-1-step" class="s-step active">
										<span class="s-step-counter"></span>
										<small>Fill basic details of your assignment</small>
									</div>
									<div data-target="#stage2" id="stage-2-step" class="s-step">
										<span class="s-step-counter"></span>
										<small>Fill the requirement & place your order</small>
									</div>
								</div>
								
								<div class="s-stepper-content">
									
								 	<form class="form-sections-only" name="orderForm" action="connection.php" method="post" enctype="multipart/form-data">
										
										<!-- Stage 1 Page of Form -->
										   <div id="stage1" class="s-stepper-stage active">
												<div class="stepper-form-inner-sec">
													<div class="header-sectins">
														<span class="st-headers">
														GUARANTEED HIGHER GRADE OR GET YOUR MONEY BACK!
														</span>
														<span class="st-helps">
															GET HELP INSTANTLY
														</span>
													</div>
														<div class="stp-otr">
															<div class="stp-left">
																<div class="each-rows-inputs">
																	<input type="text" name="ord_user" id="ord_user" placeholder="Enter your name" />
																	<span class="users-pp">
																		<i class="fa fa-envelope" aria-hidden="true"></i>

																	</span>
																</div>
																<div class="each-rows-inputs">
																	<span class="sb-tt"> Choose your assignment deadline</span>
																	<div class="et-s">
																		<span class="users-pp">
																			<i class="fa fa-calendar" aria-hidden="true"></i>
																		</span>
																		<input type="date" name="datepicker" id="datepicker" onchange="checkDate()" required class="datepicker-input" required="true" />
																		<label style="color:red;" id="error_msg" ></label>
																	</div>
																</div>
																
																<div class="each-rows-inputs">
																	<input type="text" name="pageNo" id="pageNo" placeholder="Enter number of pages" required="true"/>
																	<span class="users-pp">
																		<i class="fa fa-file" aria-hidden="true"></i>
																	</span>
																	<span class="counter-outrs">
																		<span class="top-counters">
																			<a onclick="add()">
																				<i class="fa fa-plus counter-icns" aria-hidden="true"></i>
																			</a>
																		</span>
																		<span class="bottom-counter">
																			<a onclick="sub()">
																				<i class="fa fa-minus counter-icns" aria-hidden="true"></i>
																			</a>
																		</span>
																	</span>
																</div>
																					
																<label id="page_msg1" >1</label> page / <label value="250" id="page_msg2" >250</label> Words												
															</div>
															
															<div class="stp-right">
																
																<div class="each-rows-inputs">
																   <div class="left-s-get">
																		<select class="selects-drop">
																		   <option>IN (+91)</option>
																		   <option>PAK(+93)</option>
																		   <option>AUS(+91)</option>
																		</select>
																   </div>
																   <div class="right-s-get">
																			<input type="text" name="ord_phone" id="ord_phone" placeholder="Enter Phone Number" required="true" />
																   </div>
           												   </div>
														   
															   <div class="lg-fr ">
																	<span class="deadline-text--educations">
																		Education Level
																	</span>
																	<div class="selected-timezone">
																		<select name="ord_education" class="setected-time-zone">
																			<option value="Ph.D">Ph.D</option>
																			<option value="Post Graduate">Post Graduate</option>
																			<option value="Under Graduate">Under Graduate</option>
																			<option value="Secondary School">Secondary School</option>
																			<option value="High School">High School</option>
																		</select>
																		<span class="users-pp">
																			<i class="fa fa-university" aria-hidden="true"></i>
																		</span>
																	</div>
																</div>
																
															</div>
														</div>	
														<label style="color:red;" id="error_fill" ></label>
												</div>
												
												<div class="submit-button-sections-stepper">
													<button type="button" onclick="stage1validate()" class="done-btn-sections">CONTINUE<i class="fa fa-arrow-circle-right rg" aria-hidden="true"></i></button>
												</div>
											</div>
										
										<!-- Stage 2 Page of Form -->	
										   <div id="stage2" class="s-stepper-stage">
											<div class="stepper-form-inner-sec">
													<div class="stp-otr">
														<div class="stp-left">
															<div class="each-rows-inputs">
																<input type="email" name="ord_email" id="ord_email" placeholder="Enter your Email Id" required />
																<span class="users-pp">
																	<i class="fa fa-user" aria-hidden="true"></i>
																</span>
															</div>
														</div>
														
														<div class="stp-right">
															<div class="lg-fr ">
																<div class="selected-timezone">
																	<select name="ord_style" class="setected-time-zone" required>
																		<option value="Style1">Style1</option>
																		<option value="Style2">Style1</option>
																		<option value="Style3">Style3</option>
																		<option value="Style4">Style4</option>
																		<option value="Style5">Style5</option>
																	</select>
																	<span class="users-pp">
																		<i class="fa fa-university" aria-hidden="true"></i>
																	</span>
																</div>
															</div>
														</div>	
													</div>
													
													<div class="get-each-sec">
														<span class="reason-for-callback">
														   Description
														</span>
														<div class="text-reason">
															<textarea placeholder="Please describe..." name="ord_reason" id="ord_reason" class="textareas" required="true" ></textarea>
														</div>
												   </div>
												   
												   <div class="get-each-sec">
														<input type="file" name="file"><br><br>
												   </div>
												   	
											</div>
											<div class="submit-button-sections-stepper">
											   <button type="button" onclick="back()" class="done-btn-sections" style='margin-right:16px'>BACK<i class="fa fa-arrow-circle-left lg" aria-hidden="true"></i></button>
												<button type="submit" class="done-btn-sections done" style='margin-right:16px' name="ordersubmit" >Done</button>
											</div>
										</div>
                            </form>
								</div>
							</div>
					</div>  
				</div>
			<?php include './notification.php'?>
		</div>
    </div>   
    <?php include './footer.php'?>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="./assets/js/scrollanimations.js"></script>
<script src="./assets/js/style.js"></script>
<script>
     function hideStage(stage)
     {

        $('#stage'+stage).removeClass('active');
        $('#stage-'+stage+'-step').addClass('done');
     }

    function showStage(stage) 
    {
        $('#stage'+stage).addClass('active');
        $('#stage-'+stage+'-step').addClass('active');
    }

    $(document).ready(function(){
        
    })
</script>

<script>

  function checkDate() {
   var selectedText = document.getElementById('datepicker').value;
   var selectedDate = new Date(selectedText);
   var now = new Date();
   if (selectedDate < now) {
	document.getElementById('datepicker').value = '';
	$('#error_msg').text("Fill future date only !");
   }
   else{
    $('#error_msg').text("");
   }
 }

 function add(){
    var count = document.getElementById('pageNo').value;
    count = count*1 + 1;
	document.getElementById('pageNo').value = count;
	
	$('#page_msg1').text(count);
	
    words = count*250;
	$('#page_msg2').text(words);
 }
 
 function sub(){
    var count = document.getElementById('pageNo').value;
    count = count*1 - 1 ;
	if(count > -1){
	document.getElementById('pageNo').value = count;
    
	$('#page_msg1').text(count);
	
	 words = count*250;
	$('#page_msg2').text(words);
	}
 }
 
 function stage1validate(){
	var v1 = document.forms["orderForm"]["ord_user"].value;
	var v2 = document.forms["orderForm"]["datepicker"].value;
	var v3 = document.forms["orderForm"]["pageNo"].value;
	var v4 = document.forms["orderForm"]["ord_education"].value;
	var v5 = document.forms["orderForm"]["ord_phone"].value;
	if (v1 == "" || v2 =="" || v3 =="" || v4 =="" || v5 =="") {
        $('#error_fill').text("Please fill all the mandatory fields!");
	}
	else
	{
		 $('#error_fill').text("");
		 hideStage(1);
		 showStage(2);
		 
	}
 }
 
 function back(){
	 hideStage(2);
	 showStage(1);
 }
 
</script>

</html>