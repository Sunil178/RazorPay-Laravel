<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Lato|Roboto&display=swap" rel="stylesheet">
  	<style type="text/css">
  		
	  .footer {
			    padding: 1.5%;
			    text-align: center;
			    background-color: #FFFFFF;
			    position: absolute;
			    width: 100%;
			    bottom: 0;
	  }

  	.footer_list li a {
		    color: #5C5C5C;
		    text-decoration: none;
    }
 
 .footer_list li a:hover {
	    	color: #2e2e2e;
  }
/*  .list-inline {
    padding-left: 0;list-style: none;margin-left: -5px;
}

	ul {
	    margin-top: 0; margin-bottom: 10px;		
	}
*/  	</style>

</head>
<body style="font-family: 'Lato', sans-serif;">



<div class="container">
	<div class="row">
		<!-- <h1 style="color: #F47D47;">Thank You!</h1> -->
		<!-- <span style="color: #F47D47; font-size: 30px;">Thank You!</span> -->
		<br>
		<span>Hi&nbsp;{{$message_data["name"]}},</span>

		<!-- <p>Thank you for donating though Benefactory!</p> -->
		
		
		<p>Thank you for donating to the Coronavirus Relief campaign! Your donation of Rs. {{$message_data["amount"]}} through Benefactory was successful.</p>


		<p>Your donation will help diminish the spread of COVID-19 especially among those who are on the front lines of this pandemic. It will sponsor 3-ply disposable surgical masks (ISO/CE Certified) to government hospitals in Mumbai.</p>
		<p>
		We have partnered with Anjeze Charitable Trust to help with the procurement and disbursement of surgical masks in these hospitals.

		</p>

		<p>We will keep you posted on the progress of this campaign and we will follow up with your 80G certificate within 3 weeks.</p>
		<p>Once again, thank you for your support!</p>

		Cheers,<br>
		Team Benefactory
		<br><br>
		<!-- <button style="background-color: #F47D47; " type="button" class="btn btn-success">SHARE WITH YOUR FRIENDS</button> -->
		<a href="https://www.benefactory.live/" style="background-color: #F47D47;    display: inline-block;
					   margin-bottom: 0;
					   font-weight: 400;
					   text-align: center;
					   white-space: nowrap;
					   vertical-align: middle;
					   -ms-touch-action: manipulation;
					   touch-action: manipulation;
					   cursor: pointer;
					   background-image: none;
					   border: 1px solid transparent;
					   padding: 6px 12px;
					   font-size: 14px;
					   line-height: 1.42857143;
					   border-radius: 4px;
					   -webkit-user-select: none;
					   -moz-user-select: none;
					   -ms-user-select: none;
					   user-select: none;
					   border-radius: 25px;
					   color: #fff;
					   text-decoration: none;
   		" type="button" >VISIT BENEFACTORY.LIVE</a>
		
	</div>

	 
</div>



<center>
	    <div class="container-fluid footer">
<!-- 	        <ul class="list-inline footer_list" style="padding-left: 0; list-style: none; margin-left: -5px;display:block; padding-left: 0;list-style: none;margin-left: -5px;margin-top: 0; margin-bottom: 10px;">
	     <li>
	       <a href="https://www.benefactory.live/privacy-policy">Privacy Policy</a>
	     </li>
	     <li>
	       |
	     </li>
	     <li>
	       <a href="https://www.benefactory.live/terms-conditions">Terms & Conditions</a>
	     </li>
	       </ul>
 -->	       <p>
	       	<span><a href="https://www.benefactory.live/privacy-policy">Privacy Policy</a></span>&nbsp;
	       	<span><a href="https://www.benefactory.live/terms-conditions">Terms & Conditions</a></span>
	       	<span>&copy;&nbsp;Benefactory 2019</span>
	       </p>
	       <!-- <span>&copy;&nbsp;Benefactory 2019</span> -->
	    </div>
</center>


</body>
</html> 