<!doctype html>
<html lang="en">

    <head>

		<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>Track | Pectratech</title>

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
		
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    </head>

    <body style="background-image: url('assets/img/bg4.png');" onLoad="self.focus();document.form.sendername.focus()">
        
        <?php

include('db.php');

$trk = $_REQUEST['tn'];

$result = mysqli_query($connection,"SELECT * FROM `orders` WHERE tracking_no = '$trk'");
$row = mysqli_fetch_array($result);

?>

		<!-- Top menu -->
		<nav class="navbar navbar-light fixed-top navbar-expand-md navbar-no-bg">
			<div class="container">

				

				<!--<a class="navbar-brand" href="index.php"></a>-->
				<img src="assets/img/logo4.png" class="navbar-brand" alt="img1">
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			        <span style="color:black" class="navbar-toggler-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse" id="navbarNav">
			        <ul class="navbar-nav ml-auto">
			            <li class="nav-item">
			                <a id="a1" class="nav-link " href="#index.php"><p style="color:rgb(216, 14, 14); font-family: Verdana, Geneva, Tahoma, sans-serif; font-weight: bold;" >Home</p></a>
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

<?php
            
            $trk1 = 'PT-'.$trk.'';
    
    $result1 = mysqli_query($connection,"SELECT * FROM `reports` WHERE shipmentcode = '$trk1'");
$row1 = mysqli_fetch_array($result1);

if(mysqli_num_rows($result1)<1){ 
    
    echo '<script> window.location="http://pectratech.com/home/pickup-and-delivery/index.php?trk=nsy"; </script>';
}
    
    ?>


<div class="row">
		
    <div class="col-2 ">
        
    </div>
    <div class="col-8 sub-email">
        <h6 style="color:white" >.</h6>
        <h6 style="color:white" >.</h6>
        <h5 class="tp" style="color:rgb(216, 14, 14); font-family: Impact; " >Shipment Details</h5>
        <br>
    </div>
    
    <div class="col-2">
</div>
<h6 style="color:white" >.</h6>

</div>

<div>
    <h5 style="font-family: Impact; font-size: x-large;" >1. Shipment Status: <?php echo $row1['shipment_status'] ?></h5>
    <h5 style="font-family: Impact; font-size: x-large;" >2. Updated by: <?php echo $row1['coordinator'] ?></h5>
    <h5 style="font-family: Impact; font-size: x-large;" >3. Date: <?php echo $row1['date'] ?></h5>
    <h5 style="font-family: Impact; font-size: x-large;" >4. Time: <?php echo $row1['time_created'] ?></h5>
</div>
<h6 style="color:white" >.</h6>
        <h6 style="color:white" >.</h6>


<div  style="border: 3px solid rgb(216, 14, 14); background:rgb(216, 14, 14);"></div>




<div class="row">
		
    <div class="col-2 ">
        
    </div>
    <div class="col-8 sub-email">
        <h6 style="color:white" >.</h6>
        <h6 style="color:white" >.</h6>
        <h5 class="tp" style="color:rgb(216, 14, 14); font-family: Impact; " >Package Details</h5>
        <br>
    </div>
    
    <div class="col-2">
</div>
<h6 style="color:white" >.</h6>

</div>

<div>
    <h5 style="font-family: Impact; font-size: x-large;" >1. Sender's Name: <?php echo $row1['sendername'] ?></h5>
    <h5 style="font-family: Impact; font-size: x-large;" >2. Sender's Phone Number: <?php echo $row1['sendersphonenumber'] ?></h5>
    <h5 style="font-family: Impact; font-size: x-large;" >3. Pick Up Address: <?php echo $row1['pickupaddress'] ?></h5>
    <h5 style="font-family: Impact; font-size: x-large;" >4. Sender's Email: <?php echo $row1['senderemail'] ?> </h5>
    <h5 style="font-family: Impact; font-size: x-large;" >5. Receiver's Name: <?php echo $row1['reciepentsname'] ?></h5>
    <h5 style="font-family: Impact; font-size: x-large;" >6. Receiver's Phone Number: <?php echo $row1['reciepentsnumber'] ?></h5>
    <h5 style="font-family: Impact; font-size: x-large;" >7. Delivery Address: <?php echo $row1['deliveryaddress'] ?></h5>
    <h5 style="font-family: Impact; font-size: x-large;" >8. Receiver's Email: <?php echo $row1['recipientemail'] ?></h5>
    <h5 style="font-family: Impact; font-size: x-large;" >9. Description: <?php echo $row['description'] ?></h5>
    <h5 style="font-family: Impact; font-size: x-large;" >10. Tracking Number: PT-<?php echo $trk ?></h5>
</div>

<h6 style="color:white" >.</h6>
<h6 style="color:white" >.</h6>

		<h6 style="color:white" >.</h6>
		
		<div  style="border: 3px solid rgb(216, 14, 14); background:rgb(216, 14, 14);"></div>
		<h6 style="color:white" >.</h6>
<h6 style="color:white" >.</h6>
		
		<div class="row">
			
			<div class="col-md-6 col-sm-12 ">
				
				<h5 style=" font-family: Impact; " >Follow Us on:</h5> <a href="#"><button  type="button" class="next btn btn-danger btn-sub" > <i class="fa fa-facebook"></i></button></a> 
				<a href="#"><button  type="button" class="btn-sub next btn" > <i class="fa fa-twitter"></i></button></a>
				<a href="#"><button  type="button" class="btn-sub next btn" > <i class="fa fa-instagram"></i></button></a>
				<br><br>
			</div>
			<div class="col-md-6 col-sm-12 ">
				<h5 style=" font-family: Impact; " >&copy; Pectratech 2020. All rights reserved.</h5>
				<h5 style=" font-family: Impact; " >Contact Us: 09062547388</h5>
			</div>
		</div>


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
				document.getElementById("sender_info_").style.display = "none";
				document.getElementById("receiver_info").style.display = "inline";
			}

			function next2 (){
				document.getElementById("package_info").style.display = "inline";
				document.getElementById("receiver_info").style.display = "none";
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

        <!-- Javascript -->
		<script src="assets/js/jquery-3.3.1.min.js"></script>
		<script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
		<script src="assets/js/scripts.js"></script>
		
		<script> function sub (){
		Swal.fire({
  title: "We would love to hear from you",
  text: "Would you like to give your feedback or log a complaint concerning our services on your package?",
  icon: 'info',
  confirmButtonText: 'Yes',
  cancelButtonText: 'No',
  showCancelButton: true,
  showCloseButton: true
}).then((result) => {
  if (result.isConfirmed) {
    window.location="http://pectratech.com/feedback";
  } 
});
		}
		sub();
		</script>
    </body>
	
</html>