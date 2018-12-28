<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>


<!DOCTYPE html>
<html>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">   
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
 
  <script src="https://code.jquery.com/jquery-latest.js"></script>
  <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/F10D192C-F638-1A41-AA4D-F3268FD396AD/main.js" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://gc.kis.v2.scr.kaspersky-labs.com/DA693DF8623F-D4AA-14A1-836F-C291D01F/abn/main.css"/><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link rel="stylesheet" href="style.css">
  
<head>
	<title>Repot Surprise</title>
	
	<!--Favicon-->
	<link rel="shortcut icon" href="images/favicon.png" type="img/png">
	<link rel="icon" href="images/favicon.png" type="img/png">
</head>


<body>


<div id="bg">
<div class="w3-top">
  <div class="w3-bar w3-card " id="myNavbar">
    <a href="#" id="logo" class="w3-bar-item w3-button w3-wide">REPOT SURPRISE</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a id="book-now" onclick="document.getElementById('id03').style.display='block';" class="w3-bar-item w3-button"><i class="fa fa-smile-o"></i>&nbsp;&nbsp;  Book Now</a>
      <a id="login" onclick="var temp=document.getElementById('id01').style.display='block';document.getElementById('id02').style.display='none'; return temp;"  class="w3-bar-item w3-button"><i class="fa fa-sign-in"></i>&nbsp;&nbsp;Login</a>
      <a id="register" onclick="var temp=document.getElementById('id02').style.display='block';document.getElementById('id01').style.display='none'; return temp;" class="w3-bar-item w3-button"><i class="fa fa-user"></i>&nbsp;&nbsp;Register</a>	  
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="var temp=document.getElementById('id02').style.display='block';document.getElementById('id01').style.display='none'; return temp;">
      <i style="color: #c0c;font-size: 25px;" class="fa fa-user" ></i>
    </a>
	<a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="var temp=document.getElementById('id01').style.display='block';document.getElementById('id02').style.display='none'; return temp;">
      <i style="color: #c0c;font-size: 25px;" class="fa fa-sign-in" ></i>
    </a>
	
  </div> 
</div>
</div>




<div class="parallax p-img1">
 

  <div class="hero">
    <h2>Surprise them once in</h2>
    <h1>Awhile let them know how</h1>
	<h2>Special they are</h2>
	<button class="button" onclick="document.getElementById('id03').style.display='block';" style="vertical-align:middle;"><span>Repot A Surprise </span></button>
  </div>

</div>

<div id="mySidenav" class="sidenav">
	<a href="#first" id="who">Who?</a>
	<a href="#about" id="how">How?</a>
	<a href="#surprise" id="what">What?</a>
	<a href="#contact" id="where">Where?</a>
</div>

<div class="w3-container w3-light-grey" id="first">
  
  <h3 style="text-align:center;color:#c0c;text-transform:uppercase;padding-bottom:20px;">Who are we?</h3>
	<div class="w3-col mg"style="width:500px;">
	<iframe width="475" height="250" src="https://www.youtube.com/embed/_xBziiJI3DU" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
      
    </div>
    <div class="w3-rest ma" style="padding-left:30px;">
      
      <h3>&nbsp;&nbsp;&nbsp;When reflecting upon it today, that the Pearl Harbor attack should have succeeded in achieving surprise seems a blessing from Heaven. It was clear that a great American fleet had been concentrated in Pearl Harbor, and we supposed that the state of alert would be very high.
	  </h3>
      
    </div>
    
 </div>


<div id="id01" class="modal">
	<?php
        if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){
            include 'user.php';
            $user = new User();
            $conditions['where'] = array(
                'id' => $sessData['userID'],
            );
            $conditions['return_type'] = 'single';
            $userData = $user->getRows($conditions);
    ?>
	
    <h2>Welcome <?php echo $userData['first_name']; ?>!</h2>
    <a href="userAccount.php?logoutSubmit=1" class="logout">Logout</a>
    <div class="regisFrm">
        <p><b>Name: </b><?php echo $userData['first_name'].' '.$userData['last_name']; ?></p>
        <p><b>Email: </b><?php echo $userData['email']; ?></p>
        <p><b>Phone: </b><?php echo $userData['phone']; ?></p>
    </div>
	
    <?php }else{ ?>
    <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
    <div class="regisFrm">
        <form class="modal-content animate" action="userAccount.php" method="post">
		<div class="imgcontainer">
			<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>
		</div>
        <div class="container">
			<label><b>Email</b></label>
			<input type="email" placeholder="Enter Email" name="email" required=""><br/>
		
			<label><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="password" required><br/>
        
			<button class="button" name="loginSubmit" type="submit" ><span>Login </span></button><br/>
			<input type="checkbox" checked="checked" > Remember me
		<div class="container" style="background-color:#f1f1f1">
			<button type="button" onclick="var temp=document.getElementById('id01').style.display='none';document.getElementById('id02').style.display='block'; return temp;" class="signupbtn">Sign Up</button>
			<span class="psw"><a href="#" style="text-decoration:none;">Forgot Password?</a></span>
		</div>
        </form>
    </div>
    <?php } ?>

</div>
</div>

<div id="id02" class="modal">
<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<div class="container">
    <h2>Create a New Account</h2>
    <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
    <div class="regisFrm">
        <form class="modal-content animate" action="userAccount.php" method="post">
		
		    <div class="imgcontainer">
			<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close">&times;</span>
			</div>
			
			<div class="container">
            <label><b>First name</b></label>
			<input type="text" name="first_name" placeholder="FIRST NAME" required="">
            
			<label><b>Last name</b></label>
			<input type="text" name="last_name" placeholder="LAST NAME" required="">
            
			<label><b>Email</b></label>
			<input type="email" name="email" placeholder="EMAIL" required="">
            
			<label><b>Phone Number</b></label>
			<input type="text" name="phone" placeholder="PHONE NUMBER" required="">
            
			<label><b>Password</b></label>
			<input type="password" name="password" placeholder="PASSWORD" required="">
            
			<label><b>Confirm Password</b></label>
			<input type="password" name="confirm_password" placeholder="CONFIRM PASSWORD" required="">
            
            <button class="button" name="signupSubmit" type="submit" ><span>Sign Up </span></button><br/>
            </div>
			
			<div class="container" style="background-color:#f1f1f1">  
			<p>Already have an account?&nbsp;&nbsp;&nbsp;&nbsp;
			<button type="button" onclick="document.getElementById('id02').style.display='none'" class="loginbtn">Login</button>
			</p>
			</div>
        </form>
    </div>
</div>
</div>

<div id="id03" class="modal">
  <form id="regForm" class="modal-content animate" action="/action_page.php">
  <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close">&times;</span>
    </div>
  <h1 style="color:#c0c;">Register</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">Name:
    <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
    <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
  </div>
  <div class="tab">Contact Info:
    <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
    <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
  </div>
  <div class="tab">Birthday:
    <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
    <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
    <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
  </div>
  <div class="tab">Login Info:
    <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
    <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>
</div>



<div class="parallax p-img2">
<div class="w3-container" style="padding:50px 16px 0 16px; color:white;" id="about">
  <h3 class="w3-center" >HOW WE DO?</h3><br>
  <p class="w3-center w3-large">Process Involved</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-gift w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Choose a Surprise</p>
      <p>We provide lot of surprsie option<br><br><a href="#surprise" style="text-decoration:none;">Find Out >></a></p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-venus-mars w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">The One</p>
      <p>Give details about your loved ones...</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-calendar-plus-o w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Occasion Date</p>
      <p>Mention the date</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Surprise</p>
      <p>Don't you worry dear, We will take care...</p>
    </div>
  </div>
</div>
</div>


<div style="background-color:#ff0066;">
<div class="w3-container w3-light-grey" style="padding:50px 16px 50px 16px" id="surprise">
  <h3 class="w3-center" style="color:#c0c;">Our Surprises</h3>
  <p class="w3-center w3-large">Make your loved ones happy</p>
	<div class="w3-row-padding w3-grayscale" style="margin-top:64px;">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/dummy.jpg" alt="John" style="width:100%">
        <div class="w3-container">
          <h3>Something</h3>
          <p class="w3-opacity">Rs.2,999 Only</p>
          <p>Its one hell of a Surprise</p>
          <p><button class="w3-button w3-block" style="background-color:#c0c!important;color:white!important;"><i class="fa fa-smile-o"></i>  Book Now</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/dummy.jpg" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>Something</h3>
          <p class="w3-opacity">Rs.2,999 Only</p>
          <p>Its one hell of a Surprise</p>
          <p><button class="w3-button w3-light-grey w3-block" style="background-color:#c0c!important;color:white!important;"><i class="fa fa-smile-o"></i>  Book Now</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/dummy.jpg" alt="Mike" style="width:100%">
        <div class="w3-container">
          <h3>Something</h3>
          <p class="w3-opacity">Rs.2,999 Only</p>
          <p>Its one hell of a Surprise</p>
          <p><button class="w3-button w3-light-grey w3-block"style="background-color:#c0c!important;color:white!important;"><i class="fa fa-smile-o"></i>  Book Now</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/dummy.jpg" alt="Dan" style="width:100%">
        <div class="w3-container">
          <h3>Something</h3>
          <p class="w3-opacity">Rs.2,999 Only</p>
          <p>Its one hell of a Surprise</p>
          <p><button class="w3-button w3-light-grey w3-block"style="background-color:#c0c!important;color:white!important;"><i class="fa fa-smile-o"></i>  Book Now</button></p>
        </div>
      </div>
    </div>
  </div>
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px;">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/dummy.jpg" alt="John" style="width:100%">
        <div class="w3-container">
          <h3>Something</h3>
          <p class="w3-opacity">Rs.2,999 Only</p>
          <p>Its one hell of a Surprise</p>
          <p><button class="w3-button w3-light-grey w3-block"style="background-color:#c0c!important;color:white!important;"><i class="fa fa-smile-o"></i>  Book Now</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/dummy.jpg" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>Something</h3>
          <p class="w3-opacity">Rs.2,999 Only</p>
          <p>Its one hell of a Surprise</p>
          <p><button class="w3-button w3-light-grey w3-block"style="background-color:#c0c!important;color:white!important;"><i class="fa fa-smile-o"></i>  Book Now</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/dummy.jpg" alt="Mike" style="width:100%">
        <div class="w3-container">
          <h3>Something</h3>
          <p class="w3-opacity">Rs.2,999 Only</p>
          <p>Its one hell of a Surprise</p>
          <p><button class="w3-button w3-light-grey w3-block"style="background-color:#c0c!important;color:white!important;"><i class="fa fa-smile-o"></i>  Book Now</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/dummy.jpg" alt="Dan" style="width:100%">
        <div class="w3-container">
          <h3>Something</h3>
          <p class="w3-opacity">Rs.2,999 Only</p>
          <p>Its one hell of a Surprise</p>
          <p><button class="w3-button w3-light-grey w3-block"style="background-color:#c0c!important;color:white!important;"><i class="fa fa-smile-o"></i>  Book Now</button></p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


<div class="parallax p-img3"></div>


<div style="background-color:#0ff;">
	<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
		<h3 class="w3-center"style="color:#c0c;">CONTACT</h3>
		<p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
		<div class="w3-row-padding" style="margin-top:64px">
			<div class="w3-half">
				<form action="/action_page.php" target="_blank">
					<p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
					<p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
					<p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
					<p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
					<p>
						<button class="w3-button"style="color:white;background-color:#c0c" type="submit">
						<i class="fa fa-paper-plane"></i> SEND MESSAGE
						</button>
					</p>
				</form>
			</div>
			<div class="w3-half" style="padding-left:100px;">
				<p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right" style="color:#c0c;"></i> Somewhere, B.K.Pudur, Coimbatore</p>
				<p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"style="color:#c0c;"></i> Phone: +91 9874563210</p>
				<p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"style="color:#c0c;"> </i> Email: imaghost@gmail.com</p>
			</div>
		</div>
		
	</div>   
</div> 


<!-- Add Google Maps -->
<div id="map" class="w3-greyscale-max" style="width:100%;height:400px;"></div>
    
  


<footer class="w3-center w3-padding-64 w3-light-grey" style="color:#c0c!important;">
	<p><a class="w3-text w3-jumbo">Repot Surprise</a><br>All Rights Reserved</p>
  
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
	<i class="fa fa-youtube w3-hover-opacity"></i>
  </div>
  <a class="w3-button w3-light-grey" style="color:#c0c!important;"onclick="topFunction()"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  
</footer>








<script>
// When the user scrolls down 20px from the top of the document, slide down the navbar
window.onscroll = function() {scrollFunction()};
var h = window.innerHeight;
var n=h-200;
function scrollFunction() {
    if (document.body.scrollTop > n|| document.documentElement.scrollTop > n) {	
		
		document.getElementById("mySidenav").style.display = "none";		
		document.getElementById("book-now").style.display = "inline-block";
    } else {
		document.getElementById("mySidenav").style.display = "inline";
		
		document.getElementById("book-now").style.display = "none";
    }
	if (document.body.scrollTop > 20|| document.documentElement.scrollTop > 20) {			
			document.getElementById("bg").style.top = "0";
		}
	else {
			document.getElementById("bg").style.top = "-59px";
		}
		
}

function myMap()
{
  myCenter=new google.maps.LatLng(10.943432, 76.952740);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("map"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}

function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}





var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLu9iXYKdgYwybMaLdpQUq8VQIf2WSbnc&callback=myMap"></script>

</body>


</html>