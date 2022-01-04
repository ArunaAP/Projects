<?php
    include_once('includes/header.php');
?>
<html lang="en">
	<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Soft Metric Life Insurance</title>
	<link rel="stylesheet" href="styles.css">
<Style>
    .container1 .box{
  position: relative;
  width: 370px;
  height: 270px;
  background: #037272;
  float: left;
  margin: 15px;
  box-sizing: border-box;
  overflow: hidden;
  border-radius: 10px;
  
}
.container1 .box .icon{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background:#1c1f4c;
  transition: 0.5s; 
}
</Style>
  
	</head>
  <body>

  <script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>


<!----------------------------------------------------------Slideshow---------------------------------------------------------------->

<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1508px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 25px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: slide;
  -webkit-animation-duration: 1.5s;
  animation-name: slide;
  animation-duration: 2.5s;
}

@-webkit-keyframes slide {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes slide {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="Images/slideshow1.jpg" style="width:100%">
  <div class="text">Achieve your future goals with Soft Metric Life..</div>
</div>

<div class="mySlides fade">
 
  <img src="Images/slideshow2.jpg" style="width:100%">
  <div class="text">Because tomorrow matters..</div>
</div>

<div class="mySlides fade">
  
  <img src="Images/slideshow3.jpg" style="width:100%">
  <div class="text">Confidence in your future starts here..</div>
</div>

<div class="mySlides fade">
  
  <img src="Images/slideshow4.jpg" style="width:100%">
  <div class="text">More than 80 years of strength and stability by your side </div>
</div>
<div class="mySlides fade">
  
  <img src="Images/slideshow5.jpg" style="width:100%">
  <div class="text">A deep commitment to protecting generations of families 
</div>
</div>
<div class="mySlides fade">
  
  <img src="Images/slideshow6.jpg" style="width:100%">
  <div class="text">A legacy for next generation</div>
</div>
<div class="mySlides fade">
  
  <img src="Images/slideshow7.jpg" style="width:100%">
  <div class="text">Solutions to protect and plan for life from birth to death 
</div>
</div>
<div class="mySlides fade">
  
  <img src="Images/slideshow8.jpg" style="width:100%">
  <div class="text">Help you to reach your goals 
</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>




<!------add policy products------>

<div class="policyheader">
<h2>Our Products</h2>
</div>
<div class="container1">
  <a href="Goldern infinity policy.php">
    <div class="box">
        <div class="icon"><img src="Images/policyicon1.png" alt="picon1" width="150px" length="150PX" class="img"></div>
          <div class="content">
            <h3>Golden Infinity</h3>
          </div>
    </div>
  </a>
  <a href="Silver journey policy.php">
    <div class="box">
        <div class="icon"><img src="Images/policyicon2.png" alt="picon2" width="150px" length="150PX" class="img"></div>
        <div class="content">
            <h3>Silver Journey</h3>
          </div>
    </div>
  </a>
  <a href="Bronze pensioner policy.php">
    <div class="box">
        <div class="icon"><img src="Images/policyicon3.png" alt="picon3" width="150px" length="150PX" class="img"></div>
        <div class="content">
            <h3>Bronze Pensioner</h3>
          </div>
    </div>
  </a>
</div>

</br>

<?php
    include_once('includes/footer.php');
?>


</body>	
</html>
