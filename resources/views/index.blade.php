<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tentazione</title>
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
   <link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../node_modules/sweetalert/dist/sweetalert.css">
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px|Montserrat|Roboto|Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
   
<script src="https://www.gstatic.com/firebasejs/3.7.1/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyBLp4mFNS-LcVNM9xH8kzI0KU8QqTv7ZgI",
    authDomain: "tentazione-96f1b.firebaseapp.com",
    databaseURL: "https://tentazione-96f1b.firebaseio.com",
    storageBucket: "tentazione-96f1b.appspot.com",
    messagingSenderId: "293441129913"
  };
  firebase.initializeApp(config);
</script>
</head>
<body>

	
	<!-- HEADER NAV -->
	<nav class="navbar navbar-default">
		<div class="container">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
    		<span class="sr-only">Toggle navigation</span>
    		<span class="icon-bar"></span>
    		<span class="icon-bar"></span>
    		<span class="icon-bar"></span>
      </button>
      <div class="row">
  			<div class="col-xs-4 col-md-4">
  				<a  href="#"><img class="logo img-responsive" src=""></a>
  			</div>
      	<div class="col-xs-12 col-md-8">
					<div class="collapse navbar-collapse navbar-rt" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-left">
							<li class="active"><a href="#">HOME <span class="sr-only">(current)</span></a></li>
							<li><a href="#">BLOG <span class="sr-only">(current)</span></a></li>
							<li><a href="#">TEAM <span class="sr-only">(current)</span></a></li>
						</ul> 
					</div>
				</div>
			</div>	
		</div>
	</nav>
	<!-- /HEADER NAV -->

    <!--CAROUSEL -->
    <section id="miSlide" class="carousel slide">
    	<ol class="carousel-indicators">
	    	<li data-target="#miSlide" data-slide-to="0" class="active"></li>
	    	<li data-target="#miSlide" data-slide-to="1"></li>
	    	<li data-target="#miSlide" data-slide-to="2"></li>
    	</ol>
    	<div class="carousel-inner">
    		<div class="item active">
          <img src="imgs/cita22.jpg" alt="" class="adaptar">
          <div class="carousel-caption d-none d-md-block title-page">
            <h3>LOREM IPSUM IN</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisciCCng elit. Nam tempor et felis sed molestie.</p>
            <div class="arrow-down"><a class="arrow-wrap" href="#loginIn"><img class="adaptar" src="imgs/download.png"></a></div>
          </div>
        </div>
    	</div>

    	<a class="left carousel-control" href="#miSlide" role="button" data-slide="prev">
        <span class="icon-prev" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#miSlide" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>


      <div class="login" id="loginIn">
        <form>
{{csrf_field()}}
          <div class="form-group">
            <label class="style-lab" for="exampleInputEmail1"><i class="fa fa-user" aria-hidden="true"></i> PHONE NUMBER OR EMAIL</label>
            <input type="email" class="style-in form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <div class="form-group">
            <label for="example-password-input" class="style-lab "><i class="fa fa-unlock-alt" aria-hidden="true"></i> PASSWORD</label>
            <input class="style-in form-control" type="password" value="" id="example-password-input">

          </div>
          <div class="password-st">
            <a href="" class="style-a">Forgot your password?</a>
          </div>
          <button class="btn btn-primary style-bt" type="button" id="btnlogin">LOGIN</button>
          <div class="create-st">
            <a href="#modal1" data-toggle="modal">Create Account</a>
          </div>
      </div>

    </section>
<!---MODAL CREATE ACCOUNT-->
    <div class="modal fade" id="modal1">
       <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-body">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times-circle" aria-hidden="true" id="closeRegister"></i></button>
               <div class="accountCreate" id="signUp">
                 <form>
                   <div class="form-group">
                     <label class="style-lab" for="exampleInputEmail1"><i class="fa fa-user" aria-hidden="true"></i> PHONE NUMBER</label>
                     <input type="number" class="style-in form-control" id="txtPhoneNumber" name="txtPhoneNumber" aria-describedby="emailHelp">
                   </div>

                   <div class="form-group">
                     <label class="style-lab" for="exampleInputEmail1"><i class="fa fa-envelope" aria-hidden="true"></i> EMAIL</label>
                     <input type="email" class="style-in form-control" id="txtEmail" name="txtEmail" aria-describedby="emailHelp">
                   </div>

                   <div class="form-group">
                     <label for="example-password-input" class="style-lab "><i class="fa fa-unlock-alt" aria-hidden="true"></i> PASSWORD</label>
                     <input class="style-in form-control" type="password" value="" id="txtPassword" name="txtPassword">
                   </div>

                   <div class="form-group">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="inputSexo" id="SexoF" value="Femenino" checked>
                          WOMAN
                        </label>
                      </div>
                      <div class="form-check">
                      <label class="form-check-label">
                          <input type="radio" class="form-check-inpu" name="inputSexo" id="SexoM" value="Masculino">
                          MAN
                        </label>
                      </div>
                   </div>
                  <div class="form-check">
                   <label class="form-check-label">
                     <input type="checkbox" class="form-check-input" >
                     Yes, I've read and accept the privacy policy and the terms & conditions.I guarantee that I am at least 18 years old.
                   </label>
                 </div>
                   <button class="btn btn-primary style-bt" type="button" id="btnSend">SIGN UP</button>
               </div>
            </div>
         </div>
       </div>
    </div>
<!---/MODAL CREATE ACCOUNT-->

    <!-- /CAROUSEL -->

    <div class="separator"></div>

    <section class="stepsUse destokSteps">
      <div class="container">
        <div class="titleSteps">
          <h2>HOW IT ACTUALLY WORKS</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        </div> 
      </div>

      <div class="contentSteps">
        <div class="container">
          <!--STEP1-->
          <div class="row">
            <div class="col-s-12 col-md-5">
              <div class="general">
                <div class="step1">
                  <img src="imgs/step1.png" alt="step 1" class="adaptar img-responsive">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit  Nam hendrerit purus quis.</p>
                </div>
              </div>
            </div>
             <div class="col-s-12 col-md-2">
              <div class="general">
                  <div class="stepArrow">
                    <img src="imgs/left.png" alt="arrow" class="adaptar img-responsive">
                  </div>
                </div>
             </div>
              <div class="col-s-12 col-md-5">
                <div class="general">
                  <div class="stepPhone">
                    <img src="imgs/1.png" class="adaptar img-responsive" alt="">
                  </div>
                </div>
              </div>
          </div>
          <!--/STEP1-->
          <!--STEP2-->
          <div class="row">
            <div class="col-s-12 col-md-5">
              <div class="general">
                <div class="stepPhone">
                  <img src="imgs/2.png" class="adaptar img-responsive" alt="">
                </div>
              </div>
            </div>
             <div class="col-s-12 col-md-2">
              <div class="general">
                  <div class="stepArrow">
                    <img src="imgs/right.png" alt="arrow" class="adaptar img-responsive">
                  </div>
                </div>
             </div>
              <div class="col-s-12 col-md-5">
                <div class="general">
                  <div class="step1">
                    <img src="imgs/step2.png" alt="step 1" class="adaptar img-responsive">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit  Nam hendrerit purus quis.</p>
                </div>
                </div>
              </div>
          </div>
          <!--/STEP2-->
          <!--STEP3-->
          <div class="row">
            <div class="col-s-12 col-md-5">
              <div class="general">
                <div class="step1">
                  <img src="imgs/step3.png" alt="step 1" class="adaptar img-responsive">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit  Nam hendrerit purus quis.</p>
                </div>
              </div>
            </div>
             <div class="col-s-12 col-md-2">
              <div class="general">
                  <div class="stepArrow">
                    <img src="imgs/left.png" alt="arrow" class="adaptar img-responsive">
                  </div>
                </div>
             </div>
              <div class="col-s-12 col-md-5">
                <div class="general">
                  <div class="stepPhone">
                    <img src="imgs/3.png" class="adaptar img-responsive" alt="">
                  </div>
                </div>
              </div>
          </div>
          <!--/STEP3-->
          <!--STEP4-->
          <div class="row">
            <div class="col-s-12 col-md-5">
              <div class="general">
                <div class="stepPhone">
                  <img src="imgs/4.png" class="adaptar img-responsive" alt="">
                </div>
              </div>
            </div>
             <div class="col-s-12 col-md-2">
              <div class="general">
                  <div class="stepArrow">
                    <img src="imgs/right.png" alt="arrow" class="adaptar img-responsive">
                  </div>
                </div>
             </div>
              <div class="col-s-12 col-md-5">
                <div class="general">
                  <div class="step1">
                    <img src="imgs/step4.png" alt="step 1" class="adaptar img-responsive">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit  Nam hendrerit purus quis.</p>
                </div>
                </div>
              </div>
          </div>
          <!--/STEP4-->
        </div>
      </div>
    </section>


    <!--RESPONSIVE-->
    <section class="stepsUse responsiveSteps">
      <div class="container">
        <div class="titleSteps">
          <h2>HOW IT ACTUALLY WORKS</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        </div> 
      </div>
      <div class="contentSteps">
        <div class="container">
          <!--STEP1-->
          <div class="contentInfo">
              <div class="general">
                <div class="stepPhone">
                  <img src="imgs/1.png" class="adaptar img-responsive" alt="">
                </div>
              </div>
              <div class="general">
                <div class="stepArrow">
                  <img src="imgs/download.png" alt="arrow" class="adaptar img-responsive">
                </div>
              </div>
              <div class="general">
                <div class="step1">
                  <img src="imgs/step1.png" alt="step 1" class="adaptar img-responsive">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit  Nam hendrerit purus quis.</p>
                </div>
              </div>
          </div>
          <!--/STEP1-->
          <!--STEP2-->
          <div class="contentInfo">
            <div class="general">
              <div class="stepPhone">
                <img src="imgs/2.png" class="adaptar img-responsive" alt="">
              </div>
            </div>
            <div class="general">
              <div class="stepArrow">
                <img src="imgs/download.png" alt="arrow" class="adaptar img-responsive">
              </div>
            </div>
            <div class="general">
              <div class="step1">
                <img src="imgs/step2.png" alt="step 1" class="adaptar img-responsive">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit  Nam hendrerit purus quis.</p>
              </div>
            </div>
          </div>
          <!--/STEP2-->
          <!--STEP3-->
          <div class="contentInfo">
              <div class="general">
                <div class="stepPhone">
                  <img src="imgs/3.png" class="adaptar img-responsive img-responsive" alt="">
                </div>
              </div>
              <div class="general">
                <div class="stepArrow">
                  <img src="imgs/download.png" alt="arrow" class="adaptar img-responsive">
                </div>
              </div>
              <div class="general">
                <div class="step1">
                  <img src="imgs/step3.png" alt="step 1" class="adaptar img-responsive">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit  Nam hendrerit purus quis.</p>
                </div>
              </div>
          </div>
          <!--/STEP3-->
          <!--STEP4-->
          <div class="contentInfo">
              <div class="general">
                <div class="stepPhone">
                  <img src="imgs/4.png" class="adaptar img-responsive" alt="">
                </div>
              </div>
              <div class="general">
                <div class="stepArrow">
                  <img src="imgs/download.png" alt="arrow" class="adaptar img-responsive">
                </div>
              </div>
              <div class="general">
                <div class="step1">
                  <img src="imgs/step4.png" alt="step 1" class="adaptar img-responsive">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit  Nam hendrerit purus quis.</p>
                </div>
              </div>
          </div>
          <!--/STEP4-->
        </div>
      </div>
    </section>
    <!--/RESPONSIVE-->

    <!--AS SEEN ON-->
    <section class="asSeenOn asSeenOnDestok">
      <div class="container">
        <div class="titleAs">
          <h2>AS SEEN ON</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        </div>

          <div id="Carousel1" class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#Carousel1" data-slide-to="0" class="active"></li>
                <li data-target="#Carousel1" data-slide-to="1"></li>
                <li data-target="#Carousel1" data-slide-to="2"></li>
            </ol>
             
            <!-- Carousel items -->
            <div class="carousel-inner">
                
            <div class="item active">
              <div class="row">
                <div class="col-md-3"><a href="#" class="thumbnail itemsStyle"><img src="imgs/brobible.png" alt="Image"></a></div>
                <div class="col-md-3"><a href="#" class="thumbnail itemsStyle"><img src="imgs/business_insider.png" alt="Image"></a></div>
                <div class="col-md-3"><a href="#" class="thumbnail itemsStyle"><img src="imgs/grunder.gif" alt="Image"></a></div>
                <div class="col-md-3"><a href="#" class="thumbnail itemsStyle"><img src="imgs/techcrunch_transparent.png" alt="Image"></a></div>
              </div><!--.row-->
            </div>


            <div class="item ">
              <div class="row">
                <div class="col-md-3"><a href="#" class="thumbnail itemsStyle"><img src="imgs/brobible.png" alt="Image"></a></div>
                <div class="col-md-3"><a href="#" class="thumbnail itemsStyle"><img src="imgs/business_insider.png" alt="Image"></a></div>
                <div class="col-md-3"><a href="#" class="thumbnail itemsStyle"><img src="imgs/grunder.gif" alt="Image"></a></div>
                <div class="col-md-3"><a href="#" class="thumbnail itemsStyle"><img src="imgs/techcrunch_transparent.png" alt="Image"></a></div>
              </div><!--.row-->
            </div>
            <!--.item-->
             
            </div><!--.carousel-inner-->
              <a data-slide="prev" href="#Carousel1" class="left carousel-control" style="width: 20px; background: transparent;"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
              <a data-slide="next" href="#Carousel1" class="right carousel-control" style="width: 20px; background: transparent;"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        </div><!--.Carousel-->
      </div>
    </section>
    <!--/AS SEEN ON-->
    <!--AS SEEN ON RESPONSIVE-->
    <section class="asSeenOn asSeenOnResponsive">
      <div class="container">
        <div class="titleAs">
          <h2>AS SEEN ON</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        </div>

          <div id="Carousel3" class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#Carousel3" data-slide-to="0" class="active"></li>
                <li data-target="#Carousel3" data-slide-to="1"></li>
                <li data-target="#Carousel3" data-slide-to="2"></li>
            </ol>
             
            <!-- Carousel items -->
            <div class="carousel-inner">
                
            <div class="item active">
              <div class="row">
                <div class="col-xs-12"><a href="#" class="thumbnail itemsStyle"><img src="imgs/brobible.png" alt="Image"></a></div>
              </div><!--.row-->
            </div>


            <div class="item ">
              <div class="row">
                <div class="col-xs-12"><a href="#" class="thumbnail itemsStyle"><img src="imgs/techcrunch_transparent.png" alt="Image"></a></div>
              </div><!--.row-->
            </div>
            <!--.item-->
             
            </div><!--.carousel-inner-->
              <a data-slide="prev" href="#Carousel3" class="left carousel-control" style="width: 20px; background: transparent;"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
              <a data-slide="next" href="#Carousel3" class="right carousel-control" style="width: 20px; background: transparent;"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        </div><!--.Carousel-->
      </div>
    </section>
    <!--/AS SEEN ON RESPONSIVE-->
    <!--FOLLOW YOUR CURIOSSITY-->
    <section class="followCuriosity">
      <div class="container">
        <div class="titleFollow">
          <h2>FOLLOW YOUR CURIOSSITY</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        </div>

        <div class="itemCuriosity">
          <div class="row">
            <div class="col-s-12 col-md-6">
              <div class="itemFollow">
                <figure>
                  <img src="imgs/smartphone-screen.png" class="adaptar img-responsive" alt="img">
                </figure>
                <h3>MOBILE</h3>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</P>
              </div>
            </div>

            <div class="col-s-12 col-md-6">
              <div class="itemFollow">
                <figure>
                  <img src="imgs/list.png" class="adaptar img-responsive" alt="img">
                </figure>
                <h3>EFFICIENCY</h3>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</P>
              </div>
            </div>

            <div class="col-s-12 col-md-6">
              <div class="itemFollow">
                <figure>
                  <img src="imgs/finding-love-concept.png" class="adaptar img-responsive" alt="img">
                </figure>
                <h3>NO DISCOVERY</h3>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</P>
              </div>
            </div>

            <div class="col-s-12 col-md-6">
              <div class="itemFollow">
                <figure>
                  <img src="imgs/share-symbol.png" class="adaptar img-responsive" alt="img">
                </figure>
                <h3>CLARITY</h3>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</P>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!--/FOLLOW YOUR CURIOSSITY-->

    <!--FIND YOURSELVES IN THESE CITIES-->
    <section class="citiesFind citiesFindDestok">
      <div class="container">
        <div class="titleFind">
          <h2>FIND YOURSELVES IN THESE CITIES</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        </div>


        <div class="locationCity">
          <div id="Carousel2" class="carousel slide">
                 
            <ol class="carousel-indicators">
                <li data-target="#Carousel2" data-slide-to="0" class="active"></li>
                <li data-target="#Carousel2" data-slide-to="1"></li>
                <li data-target="#Carousel2" data-slide-to="2"></li>
            </ol>
             
            <!-- Carousel items -->
            <div class="carousel-inner">
                
            <div class="item active">
              <div class="row">
                <div class="col-xs-12 col-md-3">
                  <a href="#" class="thumbnail itemsStyle"><img src="imgs/location-maps.png" alt="Image"></a>
                  <h3>LOREM IPSUM</h3>
                </div>
                <div class="col-xs-12 col-md-3">
                  <a href="#" class="thumbnail itemsStyle"><img src="imgs/location-maps.png" alt="Image"></a>
                  <h3>LOREM IPSUM</h3>
                </div>
                <div class="col-xs-12 col-md-3">
                  <a href="#" class="thumbnail itemsStyle"><img src="imgs/location-maps.png" alt="Image"></a>
                  <h3>LOREM IPSUM</h3>
                </div>
                <div class="col-xs-12 col-md-3">
                  <a href="#" class="thumbnail itemsStyle"><img src="imgs/location-maps.png" alt="Image"></a>
                  <h3>LOREM IPSUM</h3>
                </div>
              </div><!--.row-->
            </div>

            <div class="item">
              <div class="row">
                <div class="col-xs-12 col-md-3">
                  <a href="#" class="thumbnail itemsStyle"><img src="imgs/location-maps.png" alt="Image"></a>
                  <h3>LOREM IPSUM</h3>
                </div>
                <div class="col-xs-12 col-md-3">
                  <a href="#" class="thumbnail itemsStyle"><img src="imgs/location-maps.png" alt="Image"></a>
                  <h3>LOREM IPSUM</h3>
                </div>
                <div class="col-xs-12 col-md-3">
                  <a href="#" class="thumbnail itemsStyle"><img src="imgs/location-maps.png" alt="Image"></a>
                  <h3>LOREM IPSUM</h3>
                </div>
                <div class="col-xs-12 col-md-3">
                  <a href="#" class="thumbnail itemsStyle"><img src="imgs/location-maps.png" alt="Image"></a>
                  <h3>LOREM IPSUM</h3>
                </div>
              </div><!--.row-->
            </div>
            <!--.item-->
             
            </div><!--.carousel-inner-->
              <a data-slide="prev" href="#Carousel2" class="left carousel-control" style="width: 20px; background: transparent;"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
              <a data-slide="next" href="#Carousel2" class="right carousel-control" style="width: 20px; background: transparent;"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        </div>
        </div>
      </div>
    </section>
    <!--/FIND YOURSELVES IN THESE CITIES-->


     <!--FIND YOURSELVES IN THESE CITIES RESPONSIVE-->
    <section class="citiesFind citiesFindResponsive">
      <div class="container">
        <div class="titleFind">
          <h2>FIND YOURSELVES IN THESE CITIES</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        </div>


        <div class="locationCity">
          <div id="Carousel4" class="carousel slide">
                 
            <ol class="carousel-indicators">
                <li data-target="#Carousel4" data-slide-to="0" class="active"></li>
                <li data-target="#Carousel4" data-slide-to="1"></li>
                <li data-target="#Carousel4" data-slide-to="2"></li>
            </ol>
             
            <!-- Carousel items -->
            <div class="carousel-inner">
                
            <div class="item active">
              <div class="row">
                <div class="col-xs-12">
                  <a href="#" class="thumbnail itemsStyle"><img src="imgs/location-maps.png" alt="Image"></a>
                  <h3>LOREM IPSUM</h3>
                </div>
              </div><!--.row-->
            </div>

            <div class="item">
              <div class="row">
                <div class="col-xs-12">
                  <a href="#" class="thumbnail itemsStyle"><img src="imgs/location-maps.png" alt="Image"></a>
                  <h3>LOREM IPSUM</h3>
                </div>
              </div><!--.row-->
            </div>
            <!--.item-->
             
            </div><!--.carousel-inner-->
              <a data-slide="prev" href="#Carousel4" class="left carousel-control" style="width: 20px; background: transparent;"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
              <a data-slide="next" href="#Carousel4" class="right carousel-control" style="width: 20px; background: transparent;"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        </div>
        </div>
      </div>
    </section>
    <!--/FIND YOURSELVES IN THESE CITIES RESPONSIVE-->

    <!--FOOTER-->
    <footer class="footer-in">
      <div class="container">
        <div class="menu-footer">
          <ul>
            <li><a href="">IMPRINT</a></li>
            <li><a href="">TERMS & CONDITIONES</a></li>
            <li><a href="">PRIVACY</a></li>
            <li><a href="">CONTACT</a></li>
          </ul>
        </div> 
        <div class="menu-icons-footer">
          <ul>
            <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          </ul>
        </div>

        <div class="reserved">
          <p class="reserved-text">© 2017 Lorem Ipsum - All Rights Reserved</p>
        </div>
      </div>
    </footer>
    <!--/FOOTER-->

   <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/app.js"></script>
     <script src="../node_modules/sweetalert/dist/sweetalert.min.js"></script>



<script type="text/javascript">
  
    $(document).ready(function()
    {
      // swal("Hola");

      $("#btnSend").click(function()
      {
              $.ajax({
                  url: 'register', //indicamos la ruta donde se genera la hora
                  dataType: 'json',//indicamos que es de tipo texto plano
                  type: "POST",
                  async: false,   //ponemos el parámetro asyn a falso
                  data: {
                    _token:$('input[name=_token]').val(),
                    email:$("#txtEmail").val(),
                    celular:$("#txtPhoneNumber").val(),
                    password:$("#txtPassword").val(),
                    sexo: $('input:radio[name=inputSexo]:checked').val()
                 },
               success: function(data) {
                
                $("#closeRegister").click();
                swal("Registro creado correctamente.", "Exitoso");
                console.log(data);
                
               },
               error: function (data) {
                swal("Registro creado correctamente.", "Exitoso");

                $("#closeRegister").click();
                console.log(data);          
            }
            }).responseText;
      }); 

      $("#btnlogin").click(function()
      {


              $.ajax({
                  url: 'login', //indicamos la ruta donde se genera la hora
                  dataType: 'json',//indicamos que es de tipo texto plano
                  type: "POST",
                  async: false,   //ponemos el parámetro asyn a falso
                  data: {
                    email:$("#exampleInputEmail1").val(),
                    password:$("#example-password-input").val()
                 },
               success: function(data) {
                
               
                console.log(data);
                
               },
               error: function (data) {

                console.log(data);          
            }
            }).responseText;
      });
    }); 

</script>
</body>
</html>