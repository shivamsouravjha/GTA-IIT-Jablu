<?php
$marks=0;
 $right=0;
 $wrong=0;
$unattempted=0;
 for($i=1;$i<=5;$i++)
{ 
  if(empty($_POST[$i]))
{ $unattempted=$unattempted+1;
   continue;
}
if($_POST[$i]=="right")
{$marks=$marks+4;
$right=$right+1;
}
else
{$marks=$marks-1;
 $wrong=$wrong+1;
}
}

echo "<center><u><b><Font color=blue face=algerian size=7>You score ".$marks." out of 20 marks</font></u><font color=green size=6 face=harrington><br><br>Number of correctly answered questions = ".$right."<br><font color=red>Number of incorrectly answered questions = ".$wrong."<br></font><font color=orange>Number of unattempted questions = ".$unattempted."</font></font></b></center>";
 
?>
<html>
<head>
<title>
Result
</title>
<LINK REL="stylesheet" type="text/css" href="style.css">
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

</body>
</html>

