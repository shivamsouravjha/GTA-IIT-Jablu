<?php

echo "<script type='text/javascript'>	
	          alert('There are 5 questions.For each correct answer you will get 4 marks and for each incorrect answer 1 mark will be deducted.No marks will be given or deducted if the question is not attempted. Maximum marks are 20')
	          </script>";
?>
<html>
<head>
<title>
Test
</title>
<LINK REL="Stylesheet" type="text/css" href="style.css">
<style>
.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
}

.container:hover input ~ .checkmark {
    background-color: #ccc;
}

.container input:checked ~ .checkmark {
    background-color: #2196F3;
}

.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

.container input:checked ~ .checkmark:after {
    display: block;
}

.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}




</style>


</head>
<body>
<form method=POST action=result.php>
 
<center>
<img src="LOGO.png" height="300px">
</center>


<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="home.html">Home</a>
    <a href="sample_paper.html">Sample Papers</a>
    <a href="testnew.php#a">Tests</a>
    <a href="contact.php#a">Contact</a>
  </div>
</div>

<center>
<button class="button">

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;open</span>
</button>

<script>
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}
</script>
     </center>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 

	 <div class="bgimg-1">
	 <div class="caption">
    
  </div>
  </div>
 
 
 

<br>
<br>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<script>

window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>
<A NAME="a"> 
<h3>What type of bond is present between O<SUB>2</SUB>
</h3>
<label class="container">
  <input type="radio"  name="1" value="wrong">ionic bond
  <span class="checkmark"></span>
</label>
<label class="container">
  <input type="radio" name="1" value="wrong">dative bond
  <span class="checkmark"></span>
</label>
<label class="container">
  <input type="radio" name="1" value="right">double covalent bond
  <span class="checkmark"></span>
</label>
<label class="container">
  <input type="radio" name="1" value="wrong">single covalent bond
  <span class="checkmark"></span>
</label>

<br>
<a HREF="#b">
<center>
<input type=button class=button value="NEXT">
</a>
</center>
<br>
	 <div class="bgimg-2">
	
  </div>
  
<a name=b>
<br>
<br>
<h3>Bond created by overlapping of one modified orbit on another orbit is known as
</h3>
<label class="container">
  <input type="radio"  name="2" value="right" >Sigma bond 
  <span class="checkmark"></span>
</label>
<label class="container">
  <input type="radio" name="2" value="wrong">covalent bond
  <span class="checkmark"></span>
</label>
<label class="container">
  <input type="radio" name="2" value="wrong">Pi bond
  <span class="checkmark"></span>
</label>
<label class="container">
  <input type="radio" name="2" value="wrong">dative bond
  <span class="checkmark"></span>
</label>
<a HREF="#a">
<center>
<input type=button class=button value="PREVIOUS">
</a>

<a HREF="#c">
<input type=button class=button value="NEXT">
</a>
</center>

<br>
  <div class="bgimg-3">
	 
  </div>
<a name=c>
<br>
<br>
<h3>Molecular structure of SF<sub>6</sub> is
</h3>
<label class="container">
  <input type="radio"  name="3" value="wrong">linear
  <span class="checkmark"></span>
</label>
<label class="container"
  <input type="radio" name="3" value="wrong">tetrahedral
  <span class="checkmark"></span>
</label>
<label class="container">
  <input type="radio" name="3" value="wrong">hexagonal
  <span class="checkmark"></span>
</label>
<label class="container">
  <input type="radio" name="3" value="right">octahedral
  <span class="checkmark"></span>
</label>
<a HREF="#b">
<center>
<input type=button class=button value="PREVIOUS">
</a>

<a HREF="#d">
<input type=button class=button value="NEXT">
</a>
</center>


<div class="bgimg-4">
	
  </div>
<a name=d>	 
<h3>In Al<SUB>2</SUB>Cl<SUB>6</SUB>, number of electron pairs donated by each Chloride ion are

</h3>
<label class="container">
  <input type="radio"  name="4" value="wrong">1
  <span class="checkmark"></span>
</label>
<label class="container">
  <input type="radio" name="4" value="right">2
  <span class="checkmark"></span>
</label>
<label class="container">
  <input type="radio" name="4" value="wrong">3
  <span class="checkmark"></span>
</label>
<label class="container">
  <input type="radio" name="4" value="wrong">4
  <span class="checkmark"></span>
</label>
<a HREF="#c">
<center>
<input type=button class=button value="PREVIOUS">
</a>

<a HREF="#e">
<input type=button class=button value="NEXT">
</a>
</center>



 <div class="bgimg-5">
	 
  </div>
<a name=e>
<h3>
 Number of bonding pairs of electrons in water H<SUB>2</SUB>O is
</h3>
<label class="container">1
  <input type="radio"  name="5" value="wrong">
  <span class="checkmark"></span>
</label>
<label class="container">
  <input type="radio" name="5" value="right">2
  <span class="checkmark"></span>
</label>
<label class="container">
  <input type="radio" name="5" value="wrong">3
  <span class="checkmark"></span>
</label>
<label class="container">
  <input type="radio" name="5" value="wrong">4
  <span class="checkmark"></span>
</label>
 <br>
 <p>
 
 </p>
 <br><br><br>
<a HREF="#d">
<center>
<input type=button class=button value="PREVIOUS">
</a>

<input type=Submit value=submit class=button>
</center>
	 <br><br>
	 <br><br>
	 
 </form>
</body>
</html>
