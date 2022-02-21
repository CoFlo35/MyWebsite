<?php
	session_start();
	if(!isset($_SESSION["PageState"])){
		$_SESSION["PageState"] = 0;
	}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>colinfloodinfo.com</title> 

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/homepage.css" rel="stylesheet">
	<link href="css/resume.css" rel="stylesheet">
	<link href="css/bio.css" rel="stylesheet">
	<link href="css/contact.css" rel ="stylesheet">
	<link rel="icon" type="image/x-icon" href = "img/favicon.ico">

		<!-- Favicons -->
	
	<meta name="theme-color" content="#081E35">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
</head>
<body>

<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand">Colin Flood</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="php/home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="php/resume.php">Resume</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="php/bio.php">Bio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="php/contact.php">Contact</a>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>
</header>

<main>



	<!-- Carousel Elements at the top of the screen -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
		<div class="carousel-inner">
<?php
	if($_SESSION["PageState"] == 0){
?>
		
			<div class="carousel-item active">
				<img class="bd-placeholder-img" width="100%" height="100%" src="img/banner-binary.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>	

				<div class="container">
					<div class="carousel-caption text">
						<h1 class="carousel-header">Resume</h1>
						<p><a class="btn btn-lg btn-light" href="php/resume.php">Click Here</a></p>
				
					</div>
				</div>
			</div>
<?php
	}if($_SESSION["PageState"] != 0){
?>
		<div class="carousel-item active">
				<img class="bd-placeholder-img" width="100%" height="100%" src="img/home.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>	

				<div class="container">
					<div class="carousel-caption text">
						<h1 class="carousel-header">Home</h1>
						<p><a class="btn btn-lg btn-light" href="php/home.php">Click Here</a></p>
				
					</div>
				</div>
			</div>

<?php
	}if($_SESSION["PageState"] == 3){
?>
			<div class="carousel-item">
				<img class="bd-placeholder-img" width="100%" height="100%" src="img/banner-binary.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

				<div class="container">
					<div class="carousel-caption text">
						<h1 class="carousel-header">Resume</h1>
						<p><a class="btn btn-lg btn-light" href="php/resume.php">Click Here</a></p>
					</div>
				</div>
			</div>
<?php
	}if($_SESSION["PageState"] != 3){
?>
			<div class="carousel-item">
				<img class="bd-placeholder-img" width="100%" height="100%" src="img/personal-info.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

				<div class="container">
					<div class="carousel-caption text">
						<h1 class="carousel-header">Bio/Personal Information</h1>
						<p><a class="btn btn-lg btn-light" href="php/bio.php">Click Here</a></p>
					</div>
				</div>
			</div>
			
			
			<!-- NEED TO FIX THE CAROUSEL FOR CONTACT PAGE-->
			
<?php
	}if($_SESSION["PageState"] == 5){ 
?>
			<div class="carousel-item">
				<img class="bd-placeholder-img" width="100%" height="100%" src="img/personal-info.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

				<div class="container">
					<div class="carousel-caption text">
						<h1 class="carousel-header">Bio/Personal Information</h1>
						<p><a class="btn btn-lg btn-light" href="php/bio.php">Click Here</a></p>
					</div>
				</div>
			</div>
<?php
	}if($_SESSION["PageState"] != 5){
?>
		<div class="carousel-item">
			<img class="bd-placeholder-img" width="100%" height="100%" src="img/contact.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

			<div class="container">
				<div class="carousel-caption text">
					<h1 class="carousel-header">Contact</h1>
					<p><a class="btn btn-lg btn-light" href="php/contact.php">Click Here</a></p>
				</div>
			</div>
		</div>
<?php
	}
?>
			
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
		<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
	</div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
<?php
	if($_SESSION["PageState"] == 0){
?>
  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
	  <div class="col-lg-4">
	  </div>
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle rounded-border" width="300"height="300"  src="img/headshot.jpg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>

        <h2>About Colin</h2>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        
      </div><!-- /.col-lg-4 -->
	  <div class="col-lg-4">
	  </div>
	  
	<!--
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

		
		
        <h2>Heading</h2>
        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div>
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>Heading</h2>
        <p>And lastly this, the third column of representative placeholder content.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div>
    </div>

	-->

    <!-- START THE FEATURETTES -->
	<!--
	
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>
	
	
	

    <hr class="featurette-divider">


  </div>
  -->
<?php
	}if($_SESSION["PageState"] == 1){
?>
	
	<div class="container marketing" style="margin-top:2rem">

	<div class="d-flex justify-content-center">
		<h2 class="resume-heading">To download, click the button below </h2>
    </div>
	<br>
	<div class="d-flex justify-content-center">
		<a href="img/Colin_Flood_Resume_2022.pdf" download="ColinFloodResume2022">
        <button type="button" class = "btn btn-lg btn-info">Download PDF</button>
		</a>
	</div>
	<br>
	<hr/>
	</div>
	<div class="d-flex justify-content-center"style="margin-top:1.5rem">
		<h2 class="resume-heading">If you would like to simply view, please scroll below </h2>
    </div>
	
    <div class="d-flex justify-content-center">
		<div class ="resume-container">
			<img class="img-fluid" src ="img/Colin_Flood_Resume_2022.jpg">
		</div>
        
	</div>
		
		
	

<?php
	}if($_SESSION["PageState"] == 3){
?>
<div class="bio">
	<div class="row featurette">
      <div class="col-md-7">
	  <!-- ADD THIS DIV AND CLASS TO THE ONES BELOW -->
		 
			<h2 class="featurette-heading">Education </h2>
			<p class="lead">I transfered to temple in the Fall of 2019. Ever since, I could not be more grateful for the opportunities I have been presented. The rigor and determination of my professors has pushed me to succeed and fall in love with all aspects of Information Technology including front end devlopement. Beyond the resources I now had at my disposal, I am closer to my family in New Jersey and get to call the city of Philadelphia my second home.</p>
      </div>
      <div class="col-md-5">
			<img class="bd-placeholder-img rounded-circle rounded-border image-bio" width="300"height="300"  src="img/temple.jpg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Home Life</h2>
        <p class="lead">Away from school, I live in South Jersey with my sister, parents and dog Jameson. He loves to keep us all entertained and active</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="bd-placeholder-img rounded-circle rounded-border image-bio" width="300"height="300"  src="img/jameo.jpg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class="col-md-5">
			<img class="bd-placeholder-img rounded-circle rounded-border image-bio" width="300"height="300"  src="img/headshot.jpg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
      </div>
    </div>
	
	<hr class="featurette-divider">
	
</div>
<?php
	}if($_SESSION["PageState"] ==5){
?>
	<div class="container contact-container" id="custom-cards">
    <h2>Contact Me</h2>
	<hr style="margin:0rem 0;"/>

    <div class="d-flex justify-content-between contact-button-container">
      
        <div class="card card-cover h-100 overflow-hidden bg-dark rounded-5 shadow-lg" id="LinkedIn">
          <img class="card-img-top" src = 'https://akm-img-a-in.tosshub.com/indiatoday/images/story/201904/linkden_0.png?6pJb3jgHq9dvEARTcIf1VAtY6WBIBytG&size=770:433' alt="LinkedIn"title="LinkedIn" ></img>
        </div>
		
		<div class="card card-cover h-100 overflow-hidden bg-dark rounded-5 shadow-lg" id="Email">
          <img class="card-img-top" src = 'https://www.howtogeek.com/wp-content/uploads/2019/03/gmail-1.png?width=1198&trim=1,1&bg-color=000&pad=1,1' alt="Email" title="Email"></img>
        </div>
		
		<div class="card card-cover h-100 overflow-hidden bg-dark rounded-5 shadow-lg" id="Handshake">
          <img class="card-img-top" src = 'https://mtsusidelines.com/wp-content/uploads/2020/04/handshake.png' alt="Handshake" title="Handshake"></img>
        </div>
      
	</div>
	
	
	
	</div>


<?php
	}
?>



  <!-- FOOTER 
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
  -->

  <footer class="fixed-bottom bg-dark" id="footer">
	<p class="footer-text">Designed with BootStrap</p>
  </footer>
  
</main>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/contact.js"></script>
	

      
  </body>

</html>