<?php
   if($_SERVER['REQUEST_METHOD']=="POST")
   {
        if(!empty($_POST['firstname'])&&!empty(['subject']))
              {
                  echo "<script type='text/javascript'>	
	          alert('Your Suggestion has been successfully sent.')
	          </script>";
              }
        else 
        {echo "<script type='text/javascript'>	
	alert('Name and subject required ')
	</script>";
        }
    }
?>
<html>
<head>
<title>
Contact us
</title>
<LINK REL="Stylesheet" type="text/css" href="style.css">
<style>
.bgimg-1, .bgimg-2, .bgimg-3 , .bgimg-4 {
  position: relative;
  opacity: 1;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.bgimg-1 {
  background-image: url("laypx6.jpg");
  min-height: 50%;
}

.bgimg-2 {
  background-image: url("laypx7.jpg");
  min-height: 100%;
}

.bgimg-3 {
  background-image: url("laypx8.jpg");
  min-height: 100%;
}

.bgimg-4 {
  background-image: url("laypx9.jpg");
  min-height: 100%;
}
.row {
    margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
    padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
}

/* Clear floats after rows */ 
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Content */
.content {
    background-color: white;
    padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media (max-width: 900px) {
    .column {
        width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .column {
        width: 100%;
    }
}




input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color:  #00ccff;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #ffff00;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}



.pic:hover {
    opacity: 0.7;
}
</style>
</head>
<body>
<center>
<img src="LOGO.png" height="300px">
</center>
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href=" home.html">Home</a>
    <a href="sample_paper.html#a">Sample Papers</a>
    <a href="testnew.php#a">Tests</a>
    <a href="contact.php#a">Contact</a>
  </div>
</div>
<center>
<button class="button">
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
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
<div class="bgimg-2">
  <div class="caption1">
    <span class="border">CONTACT US</span>
    </div>
</div>
<a name="a">
<br>
<img src="goog.png" height="80px" class="pic">
<img src="twi.png" height="80px" class="pic">
<img src="fb.png" height="80px" class="pic">
<img src="pint.png" height="80px" class="pic">
<br>
<center>
    <img src="contactavatar.png" height="300px">
	</center>
<h3>Contact Form</h3>
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


    <form method=post action="<?php echo $_SERVER['PHP_SELF'];?>">
  <div class="container">
  
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
	  <option value="australia">India</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    <center>
    <input type="submit" value="Submit" >
    </center>
    </form>
</div>
	 
</body>
</html>
