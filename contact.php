<?php
include("connection.php");
if(isset($_POST['btnn']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
    $address=$_POST['address'];
	$course=$_POST['course'];
	$gender=$_POST['gender'];

	$sql="INSERT INTO `contact`(`name`,`email`,`phone`,`address`,`course`,`gender`) VALUES('$name','$email','$phone','$address','$course','$gender')";
    
    $result=$conn->query($sql);
    if($result)
    {
    	header("location:contact.php");
    }
    else
    {
      echo"error";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">  
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>
<title> Contact </title>
<style type="text/css">
*
{
margin:0px;
padding:0px;
}
.one
{
	height:40px;
	width:100%;
	background-color:#f7f7f7;
}
.a
{
	height:40px;
	width:50%;
	background-color:#f7f7f7;
	float:left;
}
.aa
{
	height:40px;
	width:50%;
	background-color:#f7f7f7;
	float:left;
}
.a button
{
	background-color:#f7f7f7;
	border:none;
	font-size:14px;
	margin-top:10px;
	margin-left:30px;
}
.aa button
{
height:38px;
background-color:#f7f7f7;
border:none; 
font-size:14px;
}
.aa button:hover
{
	background-color:black;
	color:white;
}
.two
{
	height:100px;
	width:100%;
	background-color:white;
}
.b
{
height:100px;
width:30%;
background-color:white;
float:left;
}
.bb
{
height:100px;
width:70%;
background-color:white;
float:left;
}
body
{
font-family:airal,helvetica,sans-serif;
}
.navbar
{
overflow:hidden;
background-color:white;
}
.navbar a
{
color:black;
text-decoration:none;
padding:14px;
font-size:16px;
float:left;

}
.btn
{
color:black;
background-color:white;
font-size:16px;
border:none;
padding:14px;
margin-left:15px;
}
.dropdown
{
overflow:hidden;
float:left;
}
.dropdown-content
{
box-shadow:0px 8px 16px 0px;
width:330px;
position:absolute;
background-color:#f9f9f9;
display:none;
z-index:2;
}
.dropdown-content a
{
color:black;
text-align:left;
display:block;
float:none;
text-decoration:none;
margin-left:0px;
}
.dropdown:hover .dropdown-content
{
display:block;
margin-top:64px;
z-index:2;
}
.dropdown-content a:hover
{
color:white;
background-color:#013669;
}
.btn:hover
{
	background-color:white;
	color:black;
	box-shadow:2px 2px 2px 2px grey;
	border-top:5px solid #009FBD;
}	
.three
{
	height:570px;
	width:100%;
	background-image:url('g.webp');
	background-size:cover;
}
.five
{
	height:600px;
	width:100%;
	background-color:black;
}
.fa
{

	height:600px;
	width:50%;
	background-color:grey;
	float:left;
}
.fb
{

	height:600px;
	width:50%;
	background-color:#013767;
	float:left;
}
.fc
{
	height:550px;
	width:60%;
	background-color:white;
	margin-top:30px;
	margin-left:135px;
}
.butn
{
height:40px;width:40%;margin-top:25px;color:white;background-color:#013767;font-size:18px;border-radius:4px;border:2px solid white;
}
.butn:hover
{
	background-color:white;
	color:black;
	border:3px solid #013767;
}
</style>
</head>
<body>
<div class="one">
<div class="a">
	<a href="#"><button style="margin-left:200px;"><b> Newsroom </b></button></a>
	<a href="#"><button><b> Events </b></button></a>
	<a href="#"><button><b> Research </b></button></a>
	<a href="#"><button><b> Library </b></button></a>
</div>
<div class="aa">
<a href="#"><button style="margin-left:90px; width:25%;"><i class="fa-solid fa-universal-access" style="font-size:17px;float:left; margin-left:10px; margin-right:-10px;
"></i> Accessibility Notices </button></a>
<a href="login.html"><button style=" width:15%;"> <i class="fa-solid fa-user" style="margin-right:7px;"></i> Login </button></a>
<a href="#"><button style=" width:18%;"> <i class="fa-solid fa-arrow-right" style="margin-right:7px;"></i> Information for</button></a>
</div>
</div>


<div class="two">
<div class="b">
<a href="index.html"><img src="logo.svg" style="float:right; margin-top:20px; margin-right:40px; height:55px;"></a>
</div>
<div class="bb">
<div class="navbar">
<div class="dropdown">
<a href="program.html"><button class="btn" style="margin-left:60px;"><b> Programs</b></button></a>
<div class="dropdown-content">
<a href="#"><b>All programs</b></a>
<hr>
<a href="#"><b>Undergraduate programs </b></a>
<hr>
<a href="#"><b>Graduate programs</b> </a>
<hr>
<a href="#"><b>Continuing & Professional Studies</b></a>
<hr>
<a href="#"><b>Micro-credentials</b></a>
</div>
</div>
<div class="dropdown">
<a href="admission.html"><button class="btn"><b>Admissions</b></button></a>
<div class="dropdown-content">
<a href="#"><b>Visit Sheridan</b></a>
<hr>
<a href="#"><b>How to Apply </b></a>
<hr>
<a href="#"><b>Future Students</b></a>
<hr>
<a href="#"><b>Why Sheridan </b></a>
<hr>
<a href="#"><b>Assessment Centre</b></a>
<hr>
<a href="#"><b>Academic Calendar</b></a>
<hr>
<a href="#"><b>Career Advising Services for Future Students</b></a>
<hr>
<a href="#"><b>Fees and Finances</b></a>
<hr>
<a href="#"><b>Financial Aid & Awards</b></a>
<hr>
<a href="#"><b>Pathways and Transfer Students</b></a>
</div>
</div>

<div class="dropdown">
<a href="student.html"><button class="btn"><b> Student Life</b></button></a>
<div class="dropdown-content">
<a href="#"><b>About Tronto & GTA</b></a>
<hr>
<a href="#"><b>Campus Services</b></a>
<hr>
<a href="#"><b>Student Services</b></a>
<hr>
<a href="#"><b>The Well Series</b></a>
<hr>
<a href="#"><b>Experiential Learning</b></a>
<hr>
<a href="#"><b>Athletic & Recreation</b></a>
<hr>
<a href="#"><b>Sheridan Student Union</b></a>
</div>
</div>

<div class="dropdown">
<a href="international.html"><button class="btn"><b> International</b></button></a>
</div>

<div class="dropdown">
<a href="about.html"><button class="btn"><b> About Sheridan</b></button></a>
<div class="dropdown-content">
<a href="#"><b>Sheridan at a Glance </b></a>
<hr>
<a href="#"><b>Campus Location  </b></a>
<hr>
<a href="#"><b>Faculties </b></a>
<hr>
<a href="#"><b>Administration & Governance  </b></a>
<hr>
<a href="#"><b>Research & Innovation  </b></a>
<hr>
<a href="#"><b>Newsroom  </b></a>
<hr>
<a href="#"><b>Theatre Sheridan  </b></a>
<hr>
<a href="#"><b>Careers at Sheridan  </b></a>
<hr>
<a href="#"><b>Faculty & Staff Profiles  </b></a>
<hr>
<a href="#"><b>Media Resources  </b></a>
</div>
</div>

<div class="dropdown">
	<a href="#"><button class="btn"><b><i class="fa-solid fa-magnifying-glass"></i></b></button></a>
</div>
</div>
</div>
</div>
<div class="three"></div>
<div class="five">
	<div class="fa">
	<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2886.5908174030255!2d-79.7416153241209!3d43.656680902206084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1ssheridan%20college%20brampton!5e0!3m2!1sen!2sin!4v1699430023869!5m2!1sen!2sin" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>	
	</div>
	<div class="fb">
	<div class="fc">
		<br>
		<center>
	<h2 style="margin-top:10px;font-size:30px;">REGISTER</h2>
	</center>
	<br>
	<form method="POST">
	<input type="text" name="name" placeholder="Enter Name" style="margin-top:20px;margin-left: 40px;height:30px;width:80%;">

	<input type="email" name="email" placeholder="Enter Email" style="margin-top:20px;margin-left: 40px;height:30px;width:80%;">

	<input type="text" name="phone" placeholder="Enter Phone no." style="margin-top:20px;margin-left: 40px;height:30px;width:80%;">

	<input type="text" name="address" placeholder="Enter address" style="margin-top:20px;margin-left: 40px;height:30px;width:80%;">
<select style="margin-top:20px;margin-left: 40px;height:30px;width:80%;" name="course">
<option> Select Course</option>
<option> Web Development</option>
<option> Digital Marketing</option>
<option> Automation</option>
<option> Robotics</option>
</select>

<br><br>
	<label name="gender" style="margin-left:40px;margin-top:30px;" ><b>Gender </b></label>
	<label style="margin-left:40px;"> Male </label>
	<input type="radio" name="gender" value="male">
	<label style="margin-left:40px;"> Female </label>
    <input type="radio" name="gender" value="female">
    <br><br>
    <center>
    	<button class="butn" type="submit" name="btnn"><b> Submit </b></button>
    </form>
</center>
	</div>	
	</div>
</div>


</body>
</html>