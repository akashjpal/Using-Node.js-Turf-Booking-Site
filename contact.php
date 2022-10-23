<!DOCTYPE html>
<html>
<head>
	<title>contact</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="dist/pickmeup.min.js"></script>
    <script type="text/javascript" src="dist/handleCounter.js"></script>
    <link rel="stylesheet" type="text/css" href="css/pickmeup.css">
    <link rel="stylesheet" type="text/css" href="css/handle-counter.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script type="text/javascript" src="dist/jquery.scrollUp.js"></script>
    <script type="text/javascript" src="dist/demo.js"></script>
    <style type="text/css">
    	
    	#booking{
    		text-align: center;
    		color: green;
    		padding-top: 30px;
    		padding-bottom: 30px;
    		font-size: 30px;
    		background: #353535;
    		position: relative;
    	}
    </style>
</head>
<body>
 <header class="tm-header">
       <!--  <img class="tm-logo" src="images/logo.png" alt="Trickshot"> -->
       <video class="tm-logo" width="400" height="300" autoplay loop>
           <source src="images/logo.mp4" type="video/mp4">
       </video>
        <nav class="tm-nav">
       <div>
            <ul>
                <li class="tm-list"><a href="index.html">Home</a></li>
                <li class="tm-list"><a href="explore.html">Explore</a></li>
                <!-- <li class="tm-list"><a href="rooms.html">Rooms</a></li> -->
                <li class="tm-list"><a href="bb.html">Booking</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>    
            </div>
        </nav>
    </header>

    <section class="tm-main">
           <p>Contact</p>
    </section>
 <section id="booking">
<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "trickshotdb"; 

// Create connection 
$conn = mysqli_connect($servername, $username, $password, $dbname); 

if (!$conn) {  
   die("Connection failed: " .mysqli_connect_error()); 
} 
//post data
if(isset($_POST['submit'])) 
{  
 	$name=$_POST['name']; 
 	$email=$_POST['email'];
 	$message=$_POST['message'];
 
 //insertion of data 
 $sql = "INSERT INTO CONTACT (name,email,message)  	VALUES ('$name','$email','$message')";   	
 if($conn->query($sql) === TRUE) {   echo " Message Sent !!!"; }

else {   echo "Error: " . $sql . "<br>" . $conn->error; } 
} 



$conn->close(); 

?>
</section>
<footer class="tm-footer">
        <div class="tm-us">
        <p class="bold">About Us</p>
        <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAt TrickShot, product quality and customer satisfaction are the most important virtues to us. Each TrickShot location is carefully vetted, analyzed and monitored to ensure optimum player experience. From the parking facility to the service provided by the staff, we ensure our customers leave, only to come back. We use European artificial turf, handcrafted by the finest European Turf manufactures in the world and laid out by the most experienced turf installers in the country. All our turf comes from FIFA Recommended vendors only. </p>    
        </div>
       
        <div class="tm-address">
        <p class="bold">Address</p>
        <p>Surve Estates</p>
        <p>Tonge lane</p>
        <p>Thane(W)</p>
        <p>Phone : (+91)123456789</p>
        <p>Email : trickshot@info.com</p>    
        </div>
        <br/>
    <div class="tm-media">
        <a href="http://www.facebook.com" target="_blank"> <img src="images/fb.png"></a>
        <a href="http://www.linkedin.com" target="_blank"> <img src="images/linkedin.png"> </a>
        <a href="http://www.twitter.com" target="_blank"> <img src="images/twittr.png"> </a>
        <a href="http://www.instagram.com" target="_blank">  <img src="images/insta.png"> </a>
        
        </div>
       
<!--    <a  href="#top">  <img class="tm-up" src="images/up.png"> </a>-->
        
      
    </footer>
</body>
</html>