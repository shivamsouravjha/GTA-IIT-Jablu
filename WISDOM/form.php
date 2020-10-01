<?php
$nameerror=$fnameerror=$mnameerror=$emailerror=$usernameerror=$perror=$cperror="";
if($_SERVER['REQUEST_METHOD']=="POST")
{
if(empty($_POST['name']))
$nameerror="Name is required";
elseif(!preg_match("/^[a-zA-Z]*$/",$_POST['name']))
$nameerror="Only letters and white spaces allowed";
if(empty($_POST['fname']))
$fnameerror="Father's Name is required";
if(empty($_POST['mname']))
$mnameerror="Mother's Name is required";
if(empty($_POST['email']))
$emailerror="Email is required";
elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
{$emailerror="Invalid Email format";}
if(empty($_POST['user']))
$usernameerror="Username is required";
if(empty($_POST['password']))
$perror="Password is required";
elseif(strlen($_POST['password'])<8)
$perror="Password should be atleast 8 characters long";
if(empty($_POST['cpassword']))
$cperror="Please confirm your password";
elseif($_POST['password']!=$_POST['cpassword'])
$cperror="Passwords do not match ";
else
	echo "<script type='text/javascript'>	
	          alert('Thanks for registering for our online tutorials.')
	          </script>";

}
?>
<html>
<head>
<title>
Register for wisdom academy online education services
</title>
<style>
.error{color:red;}
</style>
<LINK REL="Stylesheet" type="text/css" href="style.css">
</head>
<body>
<center>
<img src="LOGO.png" height="300px">
</center>
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="home.html">Home</a>
    <a href="sample_paper.html">Sample Papers</a>
    <a href="testnew.php#a">Tests</a>
    <a href="contact.html">Contact</a>
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
<BR>
<br>
<BR>
<br>
<br>
<br>
<form name="f1" action="<?php echo($_SERVER['PHP_SELF']);?>" METHOD="POST">
<div class="bgimg-1">
	 <div class="caption">
             <span class=border>
             Name<input type="text" name="name" value="" size=40>
        <span class="error">*<?php echo $nameerror;?>
        </span>
        <BR>
        <bR>
         Father's Name<input type="text" name="fname" value="" size=40>
         <span class="error">*<?php echo $fnameerror;?>
        </span>
      <br>
      <br>
Mother's Name<input type="text" name="mname" value="" size=40>
<span class="error">*<?php echo $mnameerror;?>
</span>
      </div> 
        </div>
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
<div class="bgimg-3">
  <div class="caption">
         <span class=border>
         <br>
         Age<input type="text" name="age" value="" size=40>
        <br>
        <br>
 Email<input type="text" name="email" value="" size=40>
<span class="error">*<?php echo $emailerror;?>
</span>
<br>
<br>
 Username   
<input type="text" name="user" value="" size=35>
<span class="error">*<?php echo $usernameerror;?>
</span>
<BR>
<BR>
  Password<input type="password" name="password" value="" size=30 maxlength=12>
<span class="error">*<?php echo $perror;?></span>
<br>
<BR>
Confirm Password<input type="password" name="cpassword" value="" size=30 maxlength=12>
<span class="error">*<?php echo $cperror;?>
</span>
</span>
</div>
<br>
<br>
<br>
<input type=submit value="Submit" class="button">
</div>
</form>
</center>
</body>
</html>