<!DOCTYPE html>
<html>
<head>
<title>Home - Govt College Of Education</title>


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
	padding: 3%;
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
.imgsldr{
	height: 550px;
}
.crdgrp{
	margin: 5% 18%;
}
.snglcard{
	padding: 7.5% 7.5% 3.5% 7.5%;
	background-color: rgb(242, 234, 225);
	text-align: justify;
}
.lftcard{
	margin-right: 7%;
}
.rgtcard{
	margin-left: 7%;
}
.lightbg{
	height: 80px; 
	background-color: rgb(245, 229, 211);
}
.cardhr{
	background-color: rgb(94, 12, 12);
}
.cardbtn{
	border: solid 1px rgb(94, 12, 12);
	border-radius: 5px;
	margin: 0 35% 0 35%;
	text-align: center;
	padding: 5px;
}
a{
	text-decoration: none;
}
.lwrdiv{
	background-color: rgb(245, 229, 211);
	padding: 5% 9% 3% 9%;
}
.ntcboard{

}
.cntc{
	display: inline;
}
.cntcimg{
	height: 30px;
	width: 30px;
	margin-right: 3.5%;
	margin-top: 2%;
}
.lwrhd{
	text-align: center;
}
.evntcard{
	background-color: black;
	border-radius: 30px;
	color: white;
	text-align: center;
}
.evntimg{
	margin: 5% auto 0 auto; 
	height: 120px;
	width: 120px;
}
.evntgrp{
	padding: 5%;
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
#cardbtntxt{
	color: rgb(94, 12, 12);
}
.ntchd{
	color: rgb(94, 12, 12);
	font-size: 40px;
	font-family: 'Andada Pro', serif;
}
.ntctxt{
	color: rgb(94, 12, 12);
	font-size: 30px;
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
<div class="hdline"><h5 class="hdlinetxt">Education Redefined</h5></div>



<!--  image slider start -->

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/sldr1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/sldr2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/sldr4.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!--  image slider end -->

<div class="lightbg"></div>

<!-- card group start -->
<div class="crdgrp">
	
	<!-- card start -->

		<div class="row row-cols-1 row-cols-md-2 g-4">
		  <div class="col">
		    <div class="card snglcard lftcard">
		      <img src="image/img12.jpg" class="card-img-top" alt="..." style="">
		      <div class="card-body">
		        <center>
		        	<h5 class="card-title drktxt cardtxt">About Us</h5>
		        	<hr class="cardhr" size="9" width="30%">
		        </center>
		        <p class="card-text">Established in the year 1956 is the only college in Vidarbha region which has Now reached the Zenith of Success. "Sa Vidhya Yo Vimuktaye" is the motto of institution.</p>
		        <div>
		        	<div class="cardbtn">
		        		<a href="" id="cardbtntxt">MORE</a>
		        	</div>
		        </div>
		      </div>
		    </div>
		  </div>
		  <div class="col">
		    <div class="card snglcard rgtcard">
		      <img src="image/img11.jpg" class="card-img-top" alt="...">
		      <div class="card-body">
		        <center>
		        	<h5 class="card-title drktxt cardtxt">Principal's Message</h5>
		        	<hr class="cardhr" size="9" width="50%" align="center">
		        </center>
		        <p class="card-text">Dr. Vasudha V. Deo, Principal, Government College of Education, Akola. I am extremely delighted to present this website of the institute, which forms the foundation on the order of development i.e. "Tamaso Maa jyotir Gamaya".</p>
		        <div>
		        	<div class="cardbtn">
		        		<a href="" id="cardbtntxt">MORE</a>
		        	</div>
		        </div>
		        <br>
		        <br>
		      </div>
		    </div>
		  </div>
		</div>

	<!-- card end-->

</div>
<!-- card group end -->

<!-- lower div start -->

	<div class="lwrdiv">

		<div class="lwrhd">
			<h5 class="ntchd">NEWS & EVENTS</h5>
			<hr>
		</div>

		<!-- notice board start -->

		<div class="shadow-lg p-3 mb-5 bg-body rounded">
			<div class="row ntcboard">
			<!-- left div start -->
				<div class="col-sm-3 col-md-3 col-lg-3">
					<h3 class="ntctxt">Government College Of Education, Akola</h3>
					<br>
					<h5>Contact Us</h5>
					<div>
						<form>
							<input type="email" name="em" placeholder="Email">
							<input type="submit" name="go" value="Go">
						</form>
						<div class="cntc">
							<a href=""><img src="image/fb.jpg" class="cntcimg"></a>
							<a href=""><img src="image/yt.jpg" class="cntcimg"></a>
						</div>
					</div>
					
				</div>
			<!-- left div end -->
				<div class="col-sm-1 col-md-1 col-lg-1">
					<div class="d-flex" style="height: 200px; float: right;">
  						<div class="vr"></div>
					</div>
				</div>
			
			<!-- right div start -->
				<div class="col-sm-8 col-md-8 col-lg-8">
					<h3 class="ntctxt" align="center">Notice Board</h3>
				</div>
			<!-- right div end -->
			</div>
		</div>

		<!-- notice board end -->

		<!-- event card div start -->
		<div class="row">
			<div class="col-sm-3 col-md-3 col-lg-3 evntgrp">
				<a href="latest_event.php">
					<div class="card evntcard">
				      <img src="image/card1.png" class="card-img-top evntimg" alt="...">
				      <br>
				      <div class="card-body">
				        <h5 class="card-title">Latest Event</h5>
				      </div>
				    </div>
				</a>
			</div>
			<div class="col-sm-3 col-md-3 col-lg-3 evntgrp">
				<a href="">
					<div class="card evntcard">
				      <img src="image/card2.png" class="card-img-top evntimg" alt="...">
				      <div class="card-body">
				        <h5 class="card-title">Chinmayananda Study Centre</h5>
				      </div>
				    </div>
			    </a>
			</div>
			<div class="col-sm-3 col-md-3 col-lg-3 evntgrp">
				<a href="e_monitoring.php">
					<div class="card evntcard">
				      <img src="image/card3.png" class="card-img-top evntimg" alt="...">
				      <br>
				      <div class="card-body">
				        <h5 class="card-title">E-Monitoring</h5>
				      </div>
				    </div>
			    </a>
			</div>
			<div class="col-sm-3 col-md-3 col-lg-3 evntgrp">
				<a href="">
					<div class="card evntcard">
				      <img src="image/card4.png" class="card-img-top evntimg" alt="...">
				      <div class="card-body">
				        <h5 class="card-title">Instructional Facilities</h5>
				      </div>
				    </div>
			    </a>
			</div>
		</div>
		<!-- event card div end -->
		
	</div>

<!-- lower div end -->

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