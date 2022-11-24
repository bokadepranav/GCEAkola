<!DOCTYPE html>
<html>
<head>
<title>Gallary - Govt College Of Education</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Andada+Pro:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Hind&display=swap" rel="stylesheet">






<style type="text/css">

/* ============ only desktop view ============ */
@media all and (min-width: 992px) {
	.navbar .dropdown-menu-end{ right:0; left: auto;  }
	.navbar .nav-item .dropdown-menu{  display:block; opacity: 0;  visibility: hidden; transition:.3s; margin-top:0;  }
	.navbar .nav-item:hover .nav-link{ color: #fff;  }
	.navbar .dropdown-menu.fade-down{ top:80%; transform: rotateX(-75deg); transform-origin: 0% 0%; }
	.navbar .dropdown-menu.fade-up{ top:180%;  }
	.navbar .nav-item:hover .dropdown-menu{ transition: .3s; opacity:1; visibility:visible; top:100%; transform: rotateX(0deg); }
}	
/* ============ desktop view .end// ============ */
body{
	background-image: url("image/img10.jpg");
	background-position-x: center;
    background-position-y: center;
    background-size: cover;
    background-repeat-x: no-repeat;
    background-repeat-y: no-repeat;
    background-attachment: fixed;
}
.menubr{
	background-color: white;
	height: 150px;
}
.primenu{
	background-color: rgb(94, 12, 12);
	float: right;
	padding-right: 20%;
	padding-left: 4%;
	border-radius: 1px 1px 1px 20px;
	height: 40px;
}
.secmenu{
	float: right;
	margin-top: 2%;
	padding-right: 19%;
}
.logo{
	float: left;
	color: rgb(94, 12, 12);
	font-family: 'Andada Pro', serif;
}
.hdline{
	background-color: rgb(94, 12, 12);
	padding: 5%;
	text-align: center;
	color: white;
	margin-top: 7%;
}
.hdlinetxt{
	font-size: 30px;
	font-family: 'Secular One', sans-serif;
}
.autohide{
		position: fixed;
	    top: 0;
	    right: 0;
	    left: 0;
	    width: 100%;
	    z-index: 1030;
}
.scrolled-down{
		transform:translateY(-100%); transition: all 0.3s ease-in-out;
}
.scrolled-up{
		transform:translateY(0); transition: all 0.3s ease-in-out;
}
.lightbg{
	height: 75px; 
	background-color: rgb(245, 229, 211);
	padding: 20px 0 0 130px;
}
a{
	text-decoration: none;
}
.cntcimg{
	height: 30px;
	width: 30px;
	margin-right: 3.5%;
	margin-top: 2%;
}
.copyrgt{
	height: 80px;
	background-color: rgba(94, 12, 12, 0.6);
}
.copyrgtbd{
	background-color: rgb(94, 12, 12);
	padding: 5%;
	color: white;
}
.logoimg{
	height: 70px; 
	width: 70px;
	border: solid 4px white;
	border-radius: 70px;
	float: left;
}
.lctimg{
	height: 20px;
	width: 20px;
}
.cprbtm{
	background-color: rgb(94, 12, 12);
	color: white;
	text-align: center;
	padding-bottom: 1%;
}
.fltcntc{
	height: 70px;
	width: 70px;
	position: fixed;
	bottom: 50px;
	right: 50px;
	border-radius: 50px;
}
.menuhd{
	float: left;
	padding-left: 20px;
	padding-top: 30px;
}
#primenutxt{
	color: white;
	font-family: 'Roboto', sans-serif;
}
#primenutxt:hover{
	color: rgb(252, 160, 30);
}
.drpdown{
	background-color: rgb(245, 229, 211);
}
#secmenutxt{
	color: rgb(101, 101, 101);
	font-family: 'Roboto', sans-serif;
}
#secmenutxt:hover{
	color: rgb(94, 12, 12);
}
.drktxt{
	color: rgb(94, 12, 12);
}
.cardtxt{
	font-size: 25px;
	font-family: 'Merriweather', serif;
}
.copycol{
	padding:0px 5% 0px 5%;
}
.implink{
	color: white;
}
.implink:hover{
	color: rgb(252, 160, 30);
}
.imptxt{
	font-family: 'Hind', sans-serif;
}
.leftdiv{
	background-color: rgb(252, 245, 237);
	padding: 5%;
	margin: 7% 2% 7% 2%;
	text-align: justify;
}
.rightdiv{
	padding-top: 65px;
}
.qwkimg{
	height: 20px;
	width: 20px;
	padding-bottom: 3px;
}
.qwklink{
	margin-right: 15px;
	margin-left: 15px;
	color: rgb(94, 12, 12);
	font-family: 'Roboto', sans-serif;
}
.qwklink:hover{
	text-decoration: underline;
	color: rgb(94, 12, 12);
}
.rightbtn{
	margin:0 25px 10px 25px;
	padding:15px;
	background-color: rgb(94, 12, 12);
	color: white;
	text-align: center;
	font-family: 'Roboto', sans-serif;
}
.rightbtn:hover{
	color: rgb(252, 160, 30);
}
.bodyhdtxt{
	color: rgb(94, 12, 12);
	font-size: 30px;
}
#bodytxt{
	color: black;
}
#bodytxt:hover{
	color: rgb(94, 12, 12);
	text-decoration: underline;
}
.glimg{
	height: 200px;
	width: 180px;
}

</style>
<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(){
		
		el_autohide = document.querySelector('.autohide');
		
		// add padding-top to bady (if necessary)
		navbar_height = document.querySelector('.navbar').offsetHeight;
		document.body.style.paddingTop = navbar_height + 'px';

		if(el_autohide){
			
			var last_scroll_top = 0;
			window.addEventListener('scroll', function() {
	       		let scroll_top = window.scrollY;
		       if(scroll_top < last_scroll_top) {
		            el_autohide.classList.remove('scrolled-down');
		            el_autohide.classList.add('scrolled-up');
		        }
		        else {
		            el_autohide.classList.remove('scrolled-up');
		            el_autohide.classList.add('scrolled-down');
		        }
		        last_scroll_top = scroll_top;

			}); 
			// window.addEventListener

		}
		// if
		
	}); 
	// DOMContentLoaded  end


</script>

</head>
<body>

<!-- floating contact start -->
<a href="contact.php">
	<img src="image/contact.jpg" class="fltcntc">
</a>
<!-- floating contact end -->	

<!-- menubar start -->
<div class="autohide menubr">

	<div class="menuhd">
		<a href="home_page.php">
			<img src="image/logo.jpg" class="logoimg">
			<h3 class="logo">Government College<br> Of Education, Akola</h3>
		</a>
	</div>

	<!-- primary menu start -->

	<nav class="navbar navbar-expand-lg navbar-light primenu">
	 <div class="container-fluid">
	  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	  <div class="collapse navbar-collapse" id="main_nav">
		<ul class="navbar-nav ms-auto">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="primenutxt"> ABOUT </a>
			    <ul class="dropdown-menu dropdown-menu-end fade-down drpdown">
				  <li><a class="dropdown-item" href="institution_page.php">Institution</a></li>
				  <li><a class="dropdown-item" href="principal.php">Principal's Message</a></li>
				  <li><a class="dropdown-item" href="#">Activities & Workshops</a></li>
				  <li><a class="dropdown-item" href="achievement_college.php">Achievements</a></li>
			    </ul>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="primenutxt"> GALLARY </a>
			    <ul class="dropdown-menu dropdown-menu-end fade-down drpdown">
				  <li><a class="dropdown-item" href="gallary_page.php">Photo Gallary</a></li>
				  <li><a class="dropdown-item" href="gallary_videos.php">Video Gallary</a></li>
				  <li><a class="dropdown-item" href="gallary_page.php">Events</a></li>
			    </ul>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="primenutxt"> INFRASTRUCTURE </a>
			    <ul class="dropdown-menu dropdown-menu-end fade-down drpdown">
				  <li><a class="dropdown-item" href="library.php">Library</a></li>
				  <li><a class="dropdown-item" href="computer_lab.php">Computer Lab</a></li>
				  <li><a class="dropdown-item" href="psycho_lab.php">Psycho Lab</a></li>
				  <li><a class="dropdown-item" href="science_lab.php">Science Lab</a></li>
				  <li><a class="dropdown-item" href="et_lab.php">Et Lab</a></li>
				  <li><a class="dropdown-item" href="sports.php">Sports</a></li>
				  <li><a class="dropdown-item" href="hostel.php">Hostel</a></li>
				  <li><a class="dropdown-item" href="#">Land Utilization Certificate</a></li>
				  <li><a class="dropdown-item" href="#">Non Cumberance Certificate</a></li>
				  <li><a class="dropdown-item" href="#">Malmatta Patrak</a></li>
				  <li><a class="dropdown-item" href="#">Transfer Certificate</a></li>
				  <li><a class="dropdown-item" href="#">Infrastructural Facilities</a></li>
				  <li><a class="dropdown-item" href="#">Building Completion Certificate</a></li>
			    </ul>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="primenutxt"> IQAC </a>
			    <ul class="dropdown-menu dropdown-menu-end fade-down drpdown">
				  <li><a class="dropdown-item" href="aqar.php">AQAR</a></li>
				  <li><a class="dropdown-item" href="#">SSR</a></li>
				  <li><a class="dropdown-item" href="#">Action Plan</a></li>
				  <li><a class="dropdown-item" href="#">Quality Circles</a></li>
				  <li><a class="dropdown-item" href="#">Acredetation Certificate</a></li>
			    </ul>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="primenutxt"> ALUMNI </a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="primenutxt"> COMPILANCE </a>
			    <ul class="dropdown-menu dropdown-menu-end fade-down drpdown">
				  <li><a class="dropdown-item" href="#">Reply to final show cause</a></li>
				  <li><a class="dropdown-item" href="#">Compilance</a></li>
			    </ul>
			</li>
		</ul>
	  </div> <!-- navbar-collapse.// -->
	 </div> <!-- container-fluid.// -->
	</nav>

	<!-- primary menu end -->

	<!-- secondary menu start -->

	<nav class="navbar navbar-expand-lg navbar-light secmenu">
	 <div class="container-fluid">
	  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	  <div class="collapse navbar-collapse" id="main_nav">
		<ul class="navbar-nav ms-auto">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="secmenutxt"> COURSES </a>
			    <ul class="dropdown-menu dropdown-menu-end fade-down drpdown">
				  <li><a class="dropdown-item" href="bed.php">B.Ed</a></li>
				  <li><a class="dropdown-item" href="">Ph.D Course</a></li>
				  <li><a class="dropdown-item" href="#">Ph.D Admission 2021</a></li>
			    </ul>
			</li>
			<div class="vr"></div>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="secmenutxt"> ADMISSION </a>
			    <ul class="dropdown-menu dropdown-menu-end fade-down drpdown">
				  <li><a class="dropdown-item" href="admission.php">Admission Details</a></li>
				  <li><a class="dropdown-item" href="#">Admitted Students</a></li>
				  <li><a class="dropdown-item" href="#">Admission 2021</a></li>
				  <li><a class="dropdown-item" href="#">Institutional Level Round 2020-2021</a></li>
				  <li><a class="dropdown-item" href="#">Vacant Seat For Institutional Round IV 2020-2021</a></li>
			    </ul>
			</li>
			<div class="vr"></div>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="secmenutxt"> ATTENDANCE & RESULT </a>
			    <ul class="dropdown-menu dropdown-menu-end fade-down drpdown">
				  <li><a class="dropdown-item" href="#">Result</a></li>
				  <li><a class="dropdown-item" href="#">Attendance</a></li>
			    </ul>
			</li>
			<div class="vr"></div>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="secmenutxt"> ADMINISTRATION </a>
			    <ul class="dropdown-menu dropdown-menu-end fade-down drpdown">
				  <li><a class="dropdown-item" href="faculty.php">Teaching</a></li>
				  <li><a class="dropdown-item" href="#">Non-teaching Staff</a></li>
				  <li><a class="dropdown-item" href="financial_management.php">Financial Management</a></li>
				  <li><a class="dropdown-item" href="#">CDC</a></li>
				  <li><a class="dropdown-item" href="#">N.C.T.E(PAR)Report</a></li>
				  <li><a class="dropdown-item" href="document_page.php">Documents</a></li>
				  <li><a class="dropdown-item" href="#">Commitees</a></li>
				  <li><a class="dropdown-item" href="#">Departments</a></li>
			    </ul>
			</li>
			<div class="vr"></div>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="secmenutxt"> DOWNLOADS </a>
			    <ul class="dropdown-menu dropdown-menu-end fade-down drpdown">
				  <li><a class="dropdown-item" href="research_paper.php">Research Paper</a></li>
				  <li><a class="dropdown-item" href="rti_page.php">RTI</a></li>
				  <li><a class="dropdown-item" href="#">Nagrikanchi Sanad</a></li>
				  <li><a class="dropdown-item" href="#">17 Manuals</a></li>
				  <li><a class="dropdown-item" href="research_project.php">Research Projects</a></li>
				  <li><a class="dropdown-item" href="#">Syllabus</a></li>
				  <li><a class="dropdown-item" href="#">Lab Schools</a></li>
				  <li><a class="dropdown-item" href="#">Academic Calendar</a></li>
			    </ul>
			</li>
		</ul>
	  </div> <!-- navbar-collapse.// -->
	 </div> <!-- container-fluid.// -->
	</nav>

	<!-- secondary menu end -->
	

</div>
<!-- menubar end -->

<!-- page heading start -->
<div>
	<div class="hdline"><h5 class="hdlinetxt">Gallary</h5></div>
</div>
<!-- page heading end -->

<!-- quick link div start -->

	<div class="lightbg">
		<a href="home_page.php"><img src="image/home.jpg" class="qwkimg qwklink"></a>|
		<a href="" class="qwklink">Gallary</a>|
		<a href="" class="qwklink">Images</a>
	</div>

<!-- quick link div end -->


<!-- =============== page body start =============== -->


	<div class="container">
		<div class="row">

			<!-- left div start -->
			<div class="col-sm-9 col-md-9 col-lg-9">
				<div class="leftdiv">
					<div class="container">
					  <div class="row">
					    <div class="col-sm">
					      <img src="image/img12.jpg" alt="image-here" class="glimg">
					    </div>
					    <div class="col-sm">
					      <img src="image/img8.jpg" alt="image-here" class="glimg">
					    </div>
					    <div class="col-sm">
					      <img src="image/img10.jpg" alt="image-here" class="glimg">
					    </div>
					  </div>
					</div>
					<hr>
					<div class="container">
					  <div class="row">
					    <div class="col-sm">
					      <img src="image/img12.jpg" alt="image-here" class="glimg">
					    </div>
					    <div class="col-sm">
					      <img src="image/img8.jpg" alt="image-here" class="glimg">
					    </div>
					    <div class="col-sm">
					      <img src="image/img10.jpg" alt="image-here" class="glimg">
					    </div>
					  </div>
					</div>
					<hr>
					<div class="container">
					  <div class="row">
					    <div class="col-sm">
					      <img src="image/img12.jpg" alt="image-here" class="glimg">
					    </div>
					    <div class="col-sm">
					      <img src="image/img8.jpg" alt="image-here" class="glimg">
					    </div>
					    <div class="col-sm">
					      <img src="image/img10.jpg" alt="image-here" class="glimg">
					    </div>
					  </div>
					</div>
				</div>
			</div>
			<!-- left div end -->

			<!-- right div start -->
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div class="rightdiv">
					<a href="#"><div class="rightbtn">Photo Gallary</div></a>
					<a href="gallary_videos.php"><div class="rightbtn">Video Gallary</div></a>
				</div>
			</div>
			<!-- right div end -->

		</div>
	</div>


<!-- =============== page body start =============== -->

<!-- copyright div start -->
	
	<div>
		<div class="copyrgt"></div>
			<div class="copyrgtbd">
				<div class="row">
					<div class="col-sm-4 col-md-4 col-lg-4 copycol">
						<img src="image/logo.jpg" class="logoimg" style="margin-right: 10px">
						<h5>Government College Of Education, Akola</h5>
						<br>
						<br>
						<div>
							<a href=""><img src="image/fb1.jpg" class="cntcimg"></a>
							<a href="" class="implink">facebook</a>
							<br>
							<a href=""><img src="image/yt1.jpg" class="cntcimg"></a>
							<a href="" class="implink">youtube</a>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4 copycol">
						<h5>Contact Us</h5><br>
						<div>
							<img src="image/location.jpg" class="lctimg">
							Near Akola Netra Hospital, Ramdaspeth, Akola, Dist.: Akola. (Maharashtra)
						</div>
						<div>
							<img src="image/phone.jpg" class="lctimg">
							0724 - 2433765
						</div>
						<div>
							<img src="image/mail.jpg" class="lctimg">
							principalakola80@gmail.com
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<h5>Important Links</h5><br>
						<div>
							<a href="" class="implink imptxt">महाराष्ट्र शासन</a><br>
							<a href="" class="implink">शिक्षण संचनालय पुणे</a><br>
							<a href="" class="implink">विद्यापीठ अनुदान आयोग</a><br>
							<a href="" class="implink">एन सी टी ई N.C.T.E</a><br>
							<a href="" class="implink">More</a>
						</div>
					</div>
				</div>
		</div>
	</div>

	<div>
		<div class="cprbtm">
			<img src="image/copy.jpg" class="lctimg">
			2021 | Government College Of Education, Akola | All Rights Reserved 
		</div>
	</div>

	

<!-- copyright div end -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script type="text/javascript" language="javascript">
	// Unneccesary stagger animation of the section elements
TweenMax.staggerFrom("section", .65, {top: "+=60px", opacity: 0, ease:Strong.easeOut}, 0.1);

</script>

</body>
</html>