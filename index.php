<!doctype html>
<html lang="en">

    <head>

		<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>Logistics | Pectratech</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/media-queries.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/img/pp.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

    </head>

    <body style="background-image: url('assets/img/bg42.jpg');" onLoad="self.focus();document.form.sendername.focus()">
        
        <?php

$sub = $_REQUEST['submit'];
$tn = $_REQUEST['trk'];

$trk = $_REQUEST['tn'];

if ($sub == "sub"){
    echo '<script> function sub (){ swal("Order Submitted!", "Your Tracking Number is: '.$tn.'.  A representative will contact you shortly."); }sub();</script>';
}

if ($trk == "nf"){
    echo '<script> function sub (){ swal("Not Found!", "Kindly check if you entered the correct Tracking number."); }sub();</script>';
}

if ($tn == "nsy"){
    echo '<script> function sub (){ swal("No Tracking Record!", "But do not panic. Just check back later."); }sub();</script>';
}
?>

		<!-- Top menu -->
		<nav class="navbar navbar-light fixed-top navbar-expand-md navbar-no-bg">
			<div class="container">

				

				<!--<a style="background: url(assets/img/logo4.png) left center no-repeat;" class="navbar-brand" href="index.php"></a>-->
				<img src="assets/img/logo4.png" class="navbar-brand" alt="img1">
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			        <span style="color:black" class="navbar-toggler-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse" id="navbarNav">
			        <ul class="navbar-nav ml-auto">
			            <li class="nav-item">
			                <a id="a1" class="nav-link " href="index.php"><p style="color:rgb(216, 14, 14); font-family: Verdana, Geneva, Tahoma, sans-serif; font-weight: bold;" >Home</p></a>
			            </li>
			            
			            <li class="nav-item">
			                <a class="nav-link " href="#track"><p style="color:rgb(216, 14, 14); font-family: Verdana, Geneva, Tahoma, sans-serif; font-weight: bold;" >Track Package</p></a>
						</li>
						<li class="nav-item">
			                <a class="nav-link " href="#" data-toggle="modal" data-target="#exampleModal"><p style="color:rgb(216, 14, 14); font-family: Verdana, Geneva, Tahoma, sans-serif;  font-weight: bold;" >How It Works</p></a>
						</li>
			            <li class="nav-item">
			                <a class="nav-link " href="#book"><p style="color:rgb(216, 14, 14); font-family: Verdana, Geneva, Tahoma, sans-serif;  font-weight: bold;" >Booking</p></a>
			            </li>
			            
						<li class="nav-item">
			                <a class="nav-link " href="#about"><p style="color:rgb(216, 14, 14); font-family: Verdana, Geneva, Tahoma, sans-serif;  font-weight: bold;" >About</p></a>
			            </li>
			        </ul>
			    </div>
			    
		    </div>
		</nav>


<br><br><br>
		<div class="row">

			<div class="col-md-8 col-sm-12 ">
<!-- Top content -->
<div class="top-content" >
	<div class="row no-gutters">
		<div class="col">
			<div id="carousel-example" class="carousel slide carousel-fade" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-example" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example" data-slide-to="1"></li>
					<li data-target="#carousel-example" data-slide-to="2"></li>
				</ol>
				<div class="">
					<div class="carousel-item active">
						<img src="assets/img/43.png" class="d-block w-100 img-bg img-responsive" alt="img1" >
					 
					</div>
					<div class="carousel-item">
						<img src="assets/img/52.png" class="d-block w-100" alt="img2">
						
					</div>
					<div class="carousel-item">
						<img src="assets/img/62.png" class="d-block w-100" alt="img3">
						
					</div>
				</div>
			 
			</div>
		</div>
	</div>
	<br><br>
</div>

<div class="row three ">
	<div class="col-4">
		<img src="assets/img/aa13.png" />
		<!-- <h6 style="color:white" >h</h6> -->
		<div id="sender_info">
			<h3 style="color:rgb(216, 14, 14)">Always Available</h3>
		</div>
		<!-- <h5 style="color:rgb(216, 14, 14); font-family: Impact; " >Always Available</h5> -->
		<h6 style="color:white" >h</h6>
	</div><br>
	<div class="col-4">
		<img src="assets/img/sdd13.png" />
		<!-- <h6 style="color:white" >h</h6> -->
		<div id="sender_info">
			<h3 style="color:rgb(216, 14, 14)">Same Day Delivery</h3>
		</div>
		<!-- <h5 style="color:rgb(216, 14, 14); font-family: Impact; " >Same Day Delivery</h5> -->
		<h6 style="color:white" >h</h6>
	</div>
	<div class="col-4">
		<img src="assets/img/qr123.png" />
		<!-- <h6 style="color:white" >h</h6> -->
		<div id="sender_info">
			<h3 style="color:rgb(216, 14, 14)">Quick Response</h3>
		</div>
		<!-- <h5 style="color:rgb(216, 14, 14); font-family: Impact; " >Quick Response</h5> -->
		<h6 style="color:white" >h</h6>
	</div>
</div>


			</div>
			<!-- <div class="col-md-1 gap">
				
<h6 style="color:white" >.</h6>
			</div> -->
			<div id="book" class="col-md-4 col-sm-12 book">
				<div class="row">
					<div class="col-md-1 hide">
						<h6 style="color:white" >.</h6>
					</div>
					<div class="col-md-11 col-sm-12 sp">
						<div class="btn-sub card">
							<div class="container1">
								<h6 style="color:white" >h</h6>
								<div style="background-color:rgb(255, 0, 0); padding:10px"><p style="font-style: italic; font-weight: bold; color:white; font-family: Montserrat,Trebuchet MS,Arial,sans-serif; padding-top: 10px; font-size:40px">BOOKING</p></div>
								
								<br>
								<form method="post" action="code.php" name="form" onsubmit="return(fcn());">
									
									<div id="sender_info_">
										<h3>Sender's Information</h3>
										<h6 style="color:white" >h</h6>
								  <div class="form-group">
									
									<input name="sendername" placeholder="Enter Sender Name" type="text" class="form-control" id="sendername" >
								  </div>
								  
								  <div class="form-group">
									
									<input name="senderphonenumber" placeholder="Enter Sender Phone Number" type="text" class="form-control" id="senderphonenumber">
								  </div>
								  <div class="form-group">
									
									<input placeholder="Enter Sender Email (optional)" type="text" class="form-control" id="senderemail" name="senderemail">
								  </div>
								  <div class="form-group">
									<div class="time-icon">
									<input placeholder="Enter Pickup Time (optional)" type="text" class="form-control " id="pickuptime" name="pickuptime">
									</div>
								  </div>
								  <div class="form-group">
								      <hr width="75%">
								      <label>Sender Address Details</label>
			<!--<textarea style="height: 100px;" placeholder="Enter Pickup Address" name="pickupaddress" class="form-control"></textarea>-->
								  </div>
								  <div class="row">
								      <div class="col-md-4">
                                    <div class="form-group">
										
										<input placeholder="Street No" id="pickup-no-apt" name="pickup-no-apt" class="form-control" type="text"  >
									</div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        
										
										<input placeholder="Address" id="pickup-address" name="pickup-address" class="form-control" type="text"  >
									</div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
										<!--<label></label>-->
										<input placeholder="City" id="pickup-city" name="pickup-city" class="form-control" type="text"  >
									</div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
										<!--<label></label>-->
										<input placeholder="State" id="pickup-state" name="pickup-state" class="form-control" type="text"  >
									</div>
                                </div>
								  </div>
								  <p id="fe" style="color:red; font-weight:bold"></p>
			<br>
			<!-- <input onclick="next1()" type="button" class="btn-sub next btn btn-danger" style="background-color:linear-gradient(#ffcccb , #8b0000); width: 120px; font-weight: bold;" value="Next" /> -->
								  <button onclick="next1()" type="button" class="btn-sub next btn " style=" width: 120px;"> Next <i class="fa fa-angle-double-right"></i></button>
								  <h6 style="color:white" >.</h6>
								  <img src="assets/img/1-bar.png" class="d-block w-100" alt="img3">
								</div>
			
			
								<div style="display: none" id="receiver_info">
									<h3>Receiver's Information</h3>
									<h6 style="color:white" >h</h6>
									<div class="form-group">
									  
									  <input name="receivername" placeholder="Enter Receiver Name" type="text" class="form-control" id="receivername">
									</div>
									<div class="form-group">
									  
									  <input name="receiverphonenumber" placeholder="Enter Receiver Phone Number" type="text" class="form-control" id="receiverphonenumber">
									</div>
									<div class="form-group">
									  
									  <input name="receiveremail" placeholder="Enter Receiver Email (optional)" type="text" class="form-control" id="usr">
									</div>
									<div class="form-group">
									<div class="time-icon">
									<input placeholder="Enter Delivery Time (optional)" type="text" class="form-control " id="" name="deliverytime">
									</div>
								  </div>
									<div class="form-group">
									    <hr width="75%">
								      <label>Receiver Address Details</label>
			  <!--<textarea style="height: 100px;" name="deliveryaddress" placeholder="Enter Delivery Address" class="form-control"></textarea>-->
									</div>
									<div class="row">
								      <div class="col-md-4">
                                    <div class="form-group">
										
										<input placeholder="Street No" id="delivery-no-apt" name="delivery-no-apt" class="form-control" type="text"  >
									</div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        
										
										<input placeholder="Address" id="delivery-address" name="delivery-address" class="form-control" type="text"  >
									</div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
										<!--<label></label>-->
										<input placeholder="City" id="delivery-city" name="delivery-city" class="form-control" type="text"  >
									</div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
										<!--<label></label>-->
										<input placeholder="State" id="delivery-state" name="delivery-state" class="form-control" type="text"  >
									</div>
                                </div>
								  </div>
								  <p id="se" style="color:red; font-weight:bold"></p>
			  <br>
			  <button onclick="back1()" type="button" class="btn-sub next btn " style=" width: 120px;"><i class="fa fa-angle-double-left"></i> Back </button>
									<button onclick="next2()" type="button" class="btn-sub next btn " style=" width: 120px;">Next <i class="fa fa-angle-double-right"></i></button>
									<h6 style="color:white" >.</h6>
									<img src="assets/img/2-bar.png" class="d-block w-100" alt="img3">
								  </div>
			
			
								  <div style="display: none" id="package_info">
									<h3>Package Information</h3>
									<div class="form-group">
									  
									  <input placeholder="Enter Number of Items" type="text" class="form-control" id="no-of-item">
									</div>
									<div class="form-group">
										<h6 style="color:white" >h</h6>
									  
			  <textarea id="description" name="description" style="height: 100px;" placeholder="Enter Package Description" class="form-control"></textarea>
									</div>
									<p id="te" style="color:red; font-weight:bold"></p>
			  <br>
			  <!--<h6 style="color:white" >h</h6>-->
					<!--				<h6 style="color:white" >h</h6>-->
					<!--				<h6 style="color:white" >h</h6>-->
					<!--				<h6 style="color:white" >h</h6>-->
			  <button onclick="back2()" type="button" class="btn-sub next btn " style=" width: 120px;"><i class="fa fa-angle-double-left"></i> Back </button>
									<button name="booking" type="submit" class="btn-sub next btn " style=" width: 120px;">Submit <i class="fa fa-paper-plane "></i></button>
									<h6 style="color:white" >h</h6>
									<img src="assets/img/3-bar.png" class="d-block w-100" alt="img3">
								  </div>
								  <!-- <h6 style="color:white" >.</h6> -->
								</form>
								<br>
								</div>
							</div>
					</div>
				</div>
			
				<br><br>

				<!-- <h6 style="color:white" >h</h6>
				<h6 style="color:white" >h</h6>
				<h6 style="color:white" >h</h6>
				<h6 style="color:white" >h</h6> -->
			</div>

		</div>
		
		</div>

		<!-- <img src="assets/img/r1.png" /> -->

		<div style="background-image: url('assets/img/fffff.jpg');">
			<br>
			<h3 style="color: white; font-weight: bold;">Videos</h3>
			<br>
		<div class="row">
			<div class="col-md-4 col-sm-12 zoom">
				<iframe class="btn-sub next" allowFullScreen='allowFullScreen' width="400" height="236" src="https://www.youtube.com/embed/hiw8FYbn6TI?controls=1">
				</iframe>
				<br><br>
				
			</div><br>
			<div class="col-md-4 col-sm-12">
			
				<iframe class="btn-sub next" allowFullScreen='allowFullScreen' width="400" height="236" src="https://www.youtube.com/embed/hIxDqLVRJgs?controls=1">
</iframe>
				<br><br>
			</div>
			<div class="col-md-4 col-sm-12">
				<iframe class="btn-sub next" allowFullScreen='allowFullScreen' width="400" height="236" src="https://www.youtube.com/embed/b6yuc5DO0fw?controls=1">
				</iframe>
				<br><br>
			</div>
		</div>
		
	</div>
	

	<div id="track" class="row">
		
		<div class="col-2 ">
			
		</div>
		<div class="col-8 sub-email">
			<h6 style="color:white" >.</h6>
			<h6 style="color:white" >.</h6>
			<h5 class="tp" style="color:rgb(216, 14, 14); font-family: Impact; " >Track Package</h5>
			<br>
			<form action="code.php" method="post" name="form">
					
				
			  <div class="form-group">
				
				<input name="track_btn" style="height: 70px;" placeholder="Enter Tracking Number" type="text" class=" form-control email-sub" id="usr">
			  </div>
			  

			  <button name="tracking" type="submit" class="next btn btn-danger " style="width: 120px; height: 50px;">Track <i class="fa fa-map-marker"></i></button>
			</div>
			</form>
		
		<div class="col-2">
	</div>
	<h6 style="color:white" >.</h6>
	
</div>

<div class="section-4-container section-container section-container-image-bg" style="background: rgba(255, 255, 255, 0.1);">
	<div class="container">
		<div class="row">
			<div class="col section-4 section-description wow fadeInLeftBig">
				<!-- <h2>Section 4</h2>
				<p>
					Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut 
					aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud.
				</p> -->
				<img src="assets/img/sdm.png" />
			</div>
		</div>
	</div>
</div>

	<!-- <div class = "size ">
		<h6 style="color:white" >.</h6>
		<img src="assets/img/sdm.png" />
	</div> -->
		
        <br><br>

		<div class="row" style="background-color: white;">
			<div class="col-md-6 col-sm-12 gallery">

				<div class="top-content" >
					<div class="row no-gutters">
						<div class="col">
							<div id="carousel-example" class="carousel slide " data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carousel-example" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example" data-slide-to="1"></li>
									<li data-target="#carousel-example" data-slide-to="2"></li>
									
									
								</ol>
								<div class="carousel-inner2">
									<div class="carousel-item active">
										<img src="assets/img/d4.jpg" class="d-block w-100" alt="img1">
									 
									</div>
									<div class="carousel-item">
										<img src="assets/img/d1.jpg" class="d-block w-100" alt="img2">
										
									</div>
									<div class="carousel-item">
										<img src="assets/img/d5.jpg" class="d-block w-100" alt="img3">
										
									
										
									</div>
								</div>
							 
							</div>
						</div>
					</div>
				</div>

				<!-- <img src="assets/img/rr2.png" /> -->
				<br><br>
			</div>
			<div id="about" class="col-md-6 col-sm-12 about " style="background-color: white;"> 
				<img src="assets/img/int.png" />
			</div>
		</div><br><br>




		<div class="section-1-container section-container">
	        <div class="container">
	            <!-- <div class="row">
	                <div class="col section-1 section-description wow fadeIn">
	                    <h2>Section 1</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                </div>
	            </div> -->
	            <div class="row">
                	<div class="col-md-4 section-1-box wow fadeInUp">
                		<div class="row">
                			<div class="col-md-4">
			                	<div class="section-1-box-icon">
			                		<i class="fas fa-user"></i>
			                	</div>
		                	</div>
	                		<div class="col-md-8">
	                    		<h3 style="font-weight: bold;">Personalized</h3>
	                    		<p>We offer personalized services that are tailored to your requirements and ultimately your satisfaction.</p>
	                    	</div>
	                    </div>
                    </div>
                    <div class="col-md-4 section-1-box wow fadeInDown">
	                	<div class="row">
                			<div class="col-md-4">
			                	<div class="section-1-box-icon">
			                		<i class="fas fa-cog"></i>
			                	</div>
		                	</div>
	                		<div class="col-md-8">
	                    		<h3 style="font-weight: bold;">Innovative</h3>
	                    		<p>Innovation is deeply rooted in our culture, and we see that as a driving force in our growth. </p>
	                    	</div>
	                    </div>
                    </div>
                    <div class="col-md-4 section-1-box wow fadeInUp">
	                	<div class="row">
                			<div class="col-md-4">
			                	<div class="section-1-box-icon">
			                		<i class="fas fa-clock"></i>
			                	</div>
		                	</div>
	                		<div class="col-md-8">
	                    		<h3 style="font-weight: bold;">Timely</h3>
	                    		<p>At Petratech, our goal is to provide the best of service on time with our tech powered facilities. </p>
	                    	</div>
	                    </div>
                    </div>
	            </div>
	        </div>
        </div>






		<div class="row">
			<div class="col-md-6 col-sm-12 about">
				<img src="assets/img/logo32.png" />
				<br><br>
			</div>
			<div class="col-md-5 col-sm-12 sub-email about">
				<br>
				<form name="form">
						
					
				  <div class="form-group">
					
					<input style="height: 50px;" placeholder="Enter your Email Address to join our Mailing List" type="text" class=" form-control email-sub" id="usr">
				  </div>
				  

				  <button type="button" class="btn-sub next btn" style="  float: right; width: 120px;">Submit <i class="fa fa-paper-plane"></i></button>
				</div>
				</form>
			
			<div class="col-md-1 gap">
				
				<h6 style="color:white" >.</h6>
							</div>
							<h6 style="color:white" >.</h6><br>
							
		</div>

		<h6 style="color:white" >.</h6>
		<div class="row">
			
			<div class="col-md-6 col-sm-12 ">
				
				<h5 style=" font-family: Impact; " >Follow Us on:</h5> <a href="https://web.facebook.com/Pectratech"><button  type="button" class="next btn btn-danger btn-sub" > <i class="fa fa-facebook"></i></button></a> 
				<a href="https://twitter.com/pectratech"><button  type="button" class="btn-sub next btn" > <i class="fa fa-twitter"></i></button></a>
				<a href="https://www.instagram.com/pectratech/?hl=en"><button  type="button" class="btn-sub next btn" > <i class="fa fa-instagram"></i></button></a>
				<br><br>
			</div>
			<div class="col-md-6 col-sm-12 ">
				<h5 style=" font-family: Impact; " >&copy; Pectratech 2020. All rights reserved.</h5>
				<h5 style=" font-family: Impact; " >Contact Us: 09062547388</h5>
			</div>
		</div>

<p id="demo"></p>
<!--<script>-->

<!--  var x = "Total Width: " + window.innerWidth + "px";-->
<!--  document.getElementById("demo").innerHTML = x;-->

<!--</script>-->

		<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">How It Works</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<img src="assets/img/steps.jpg" />
		</div>
		<!-- <div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary">Save changes</button>
		</div> -->
	  </div>
	</div>
  </div>
  
  <h6 style="color:white" >.</h6>
			<h6 style="color:white" >.</h6>

		
        <!-- Footer -->
        <!-- <footer class="footer-container">
        
	        <div class="container">
	        	<div class="row">
	        		
                    <div class="col">
                    	&copy; Bootstrap 4 Carousel Template. Download it for free on <a href="https://azmind.com">AZMIND</a>.
                    </div>
                    
                </div>
	        </div>
                	
		</footer> -->
		

		<script>
			function next1 (){
			    if (document.getElementById("sendername").value == "" || document.getElementById("senderphonenumber").value == "" 
			    || document.getElementById("pickup-no-apt").value == "" || document.getElementById("pickup-address").value == ""
			    || document.getElementById("pickup-city").value == "" || document.getElementById("pickup-state").value == ""
			    ){
			        document.getElementById("fe").innerHTML = "Please fill in all the necessary sender details";
			    }
			    else {
			        document.getElementById("fe").innerHTML = "";
			        document.getElementById("sender_info_").style.display = "none";
				document.getElementById("receiver_info").style.display = "inline";
			    }
				
			}

			function next2 (){
			    if (document.getElementById("receivername").value == "" || document.getElementById("receiverphonenumber").value == "" 
			    || document.getElementById("delivery-no-apt").value == "" || document.getElementById("delivery-address").value == ""
			    || document.getElementById("delivery-city").value == "" || document.getElementById("delivery-state").value == ""
			    ){
			        document.getElementById("se").innerHTML = "Please fill in all the necessary receiver details";
			    }
			    else {
			        document.getElementById("se").innerHTML = "";
			        document.getElementById("package_info").style.display = "inline";
				document.getElementById("receiver_info").style.display = "none";
			    }
			    
				
			}

			function back1 (){
				document.getElementById("sender_info_").style.display = "inline";
				document.getElementById("receiver_info").style.display = "none";
			}

			function back2 (){
				document.getElementById("package_info").style.display = "none";
				document.getElementById("receiver_info").style.display = "inline";
			}
			
			if (screen.width > 992){
			window.onload = function() {
  var input = document.getElementById("sendername").focus();
}
			}
			
			
		</script>
		
		<script>
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'

                });
            });
     </script>
     
     <script type='text/javascript'>
            document.tidioChatCode = "z7ymqpudjpardlmsnhhb8bkwvw2gsh4j";
            (function() {
              function asyncLoad() {
                var tidioScript = document.createElement("script");
                tidioScript.type = "text/javascript";
                tidioScript.async = true;
                tidioScript.src = "//code.tidio.co/z7ymqpudjpardlmsnhhb8bkwvw2gsh4j.js";
                document.body.appendChild(tidioScript);
              }
              if (window.attachEvent) {
                window.attachEvent("onload", asyncLoad);
              } else {
                window.addEventListener("load", asyncLoad, false);
              }
            })();
            </script>
            
            <script>
    function fcn () {
        // return false;
        if (document.getElementById("no-of-item").value == "" || document.getElementById("description").value == "") {
    document.getElementById("te").innerHTML = "Please fill in the necessary package details";
    return false;
  }
  else {
      document.getElementById("te").innerHTML = "";
    }
    }
    </script>
     
     <script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

        <!-- Javascript -->
		<script src="assets/js/jquery-3.3.1.min.js"></script>
		<script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
		<script src="assets/js/scripts.js"></script>
		
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		
    </body>
	
</html>