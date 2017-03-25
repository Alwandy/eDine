<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>eDine - Food you love!</title>

    <!-- Bootstrap -->
	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css" />
	<link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,300" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
 <nav class="navig" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">eDine</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">American/Mexican</a></li>
			<li class="divider"></li>
            <li><a href="#">Asian</a></li>
			<li class="divider"></li>
            <li><a href="#">BBQ</a></li>
			<li class="divider"></li>
            <li><a href="#">Brunch</a></li>
			<li class="divider"></li>
            <li><a href="#">Greek</a></li>
			<li class="divider"></li>
            <li><a href="#">Halal</a></li>
			<li class="divider"></li>
            <li><a href="#">Indian</a></li>
			<li class="divider"></li>
            <li><a href="#">Italian</a></li>
			<li class="divider"></li>
            <li><a href="#">Mexican</a></li>
			<li class="divider"></li>
            <li><a href="#">Vegetarian/Vegan</a></li>
          </ul>
		  <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">More<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="about.html">About Us</a></li>
			<li class="divider"></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </li>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><p class="navbar-text">Do you have an eDine?</p></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
			<ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
							<div class="col-md-12">
								Login via
								<div class="social-buttons">
									<a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
									<a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
								</div>
                                or
								 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
										<div class="form-group">
											 <label class="sr-only" for="exampleInputEmail2">Email address</label>
											 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2">Password</label>
											 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                             <div class="help-block text-right"><a href="">Forget the password ?</a></div>
										</div>
										<div class="form-group">
											 <button type="submit" class="btn btn-primary btn-block">Sign in</button>
										</div>
										<div class="checkbox">
											 <label>
											 <input type="checkbox"> keep me logged-in
											 </label>
										</div>
								 </form>
							</div>
							<div class="bottom text-center">
								New here ? <a href="signup.html"><b>Join Us</b></a>
							</div>
					 </div>
				</li>
			</ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav> 
    <div class="jumbotron" id="header">
	<div class="container">
			<div class="col-md-12 col-xs-12 col-md-offset-2" style="padding-top:120px;">
		<h1>Welcome to eDine </h1>
		<p>Book a table for any restaurant in Dublin! </br>
		Can't decide what to eat or drink, check at other people reviews.</br>
		Did you like your meal, help other people decide by just leaving a comment of your expierence.</p>
        <p><a class="btn btn-primary btn-lg" href="about.html" role="button">More about eDine &raquo;</a></p>
		</div>
		
	</div>
	</div>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div id="imaginary_container"> 
				<h1 class="title-widget-sidebar">// SEARCH FOR RESTAURANTS NEAR YOU</h1>
                <div class="input-group stylish-input-group input-append" >
                    <input type="text" class="form-control"  placeholder="Your location" >
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
                </div>
            </div>
        </div>
	</div>
</div>

 <section id="blog-section" >
     <div class="container" style="padding:3px;">
	  <h2 class="title-widget-sidebar">// SOME RESTAURANTS NEAR YOU OR YOUR AREA</h2>
       <div class="row">
         <div class="col-lg-8">
           <div class="row">
              <div class="col-lg-6 col-md-6">
             <aside>
                <img src="http://webneel.com/sites/default/files/images/manual/logo-restaurant/best-restaurant-logo-design%20(12).gif" class="img-responsive">
                <div class="content-title">
				<div class="text-center">
				<h3><a href="#">Restaurant name / Short description</a></h3>
				</div>
				</div>
				<div class="content-footer">
				<img class="user-small-img" src="http://webneel.com/sites/default/files/images/manual/logo-restaurant/best-restaurant-logo-design%20(12).gif">
				<span style="font-size: 16px;color: #fff;">Restaurant name</span>
				<span class="pull-right">
				<a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
				<a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>                  
				</span>
				</div>
             </aside>
            </div>
               
                           <div class="col-lg-6 col-md-6">
             <aside>
                <img src="http://webneel.com/sites/default/files/images/manual/logo-restaurant/best-restaurant-logo-design%20(12).gif" class="img-responsive">
                <div class="content-title">
				<div class="text-center">
				<h3><a href="#">Restaurant name / Short description</a></h3>
				</div>
				</div>
				<div class="content-footer">
				<img class="user-small-img" src="http://webneel.com/sites/default/files/images/manual/logo-restaurant/best-restaurant-logo-design%20(12).gif">
				<span style="font-size: 16px;color: #fff;">Restaurant name</span>
				<span class="pull-right">
				<a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
				<a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>                  
				</span>
				</div>
             </aside>
            </div>  
               
                            <div class="col-lg-6 col-md-6">
             <aside>
                <img src="http://webneel.com/sites/default/files/images/manual/logo-restaurant/best-restaurant-logo-design%20(12).gif" class="img-responsive">
                <div class="content-title">
				<div class="text-center">
				<h3><a href="#">Restaurant name / Short description</a></h3>
				</div>
				</div>
				<div class="content-footer">
				<img class="user-small-img" src="http://webneel.com/sites/default/files/images/manual/logo-restaurant/best-restaurant-logo-design%20(12).gif">
				<span style="font-size: 16px;color: #fff;">Restaurant name</span>
				<span class="pull-right">
				<a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
				<a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>                  
				</span>
				</div>
             </aside>
            </div>   
               
                             <div class="col-lg-6 col-md-6">
             <aside>
                <img src="http://webneel.com/sites/default/files/images/manual/logo-restaurant/best-restaurant-logo-design%20(12).gif" class="img-responsive">
                <div class="content-title">
				<div class="text-center">
				<h3><a href="#">Restaurant name / Short description</a></h3>
				</div>
				</div>
				<div class="content-footer">
				<img class="user-small-img" src="http://webneel.com/sites/default/files/images/manual/logo-restaurant/best-restaurant-logo-design%20(12).gif">
				<span style="font-size: 16px;color: #fff;">Restaurant name</span>
				<span class="pull-right">
				<a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
				<a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>                  
				</span>
				</div>
             </aside>
            </div>      
               
                             <div class="col-lg-6 col-md-6">
             <aside>
                <img src="http://webneel.com/sites/default/files/images/manual/logo-restaurant/best-restaurant-logo-design%20(12).gif" class="img-responsive">
                <div class="content-title">
				<div class="text-center">
				<h3><a href="#">Restaurant name / Short description</a></h3>
				</div>
				</div>
				<div class="content-footer">
				<img class="user-small-img" src="http://webneel.com/sites/default/files/images/manual/logo-restaurant/best-restaurant-logo-design%20(12).gif">
				<span style="font-size: 16px;color: #fff;">Restaurant name</span>
				<span class="pull-right">
				<a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
				<a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>                  
				</span>
				</div>
             </aside>
            </div>     
               
                             <div class="col-lg-6 col-md-6">
             <aside>
                <img src="http://webneel.com/sites/default/files/images/manual/logo-restaurant/best-restaurant-logo-design%20(12).gif" class="img-responsive">
                <div class="content-title">
				<div class="text-center">
				<h3><a href="#">Restaurant name / Short description</a></h3>
				</div>
				</div>
				<div class="content-footer">
				<img class="user-small-img" src="http://webneel.com/sites/default/files/images/manual/logo-restaurant/best-restaurant-logo-design%20(12).gif">
				<span style="font-size: 16px;color: #fff;">Restaurant name</span>
				<span class="pull-right">
				<a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
				<a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>                  
				</span>
				</div>
             </aside>
            </div>
               
                            <div class="col-lg-6 col-md-6">
             <aside>
                <img src="http://webneel.com/sites/default/files/images/manual/logo-restaurant/best-restaurant-logo-design%20(12).gif" class="img-responsive">
                <div class="content-title">
				<div class="text-center">
				<h3><a href="#">Restaurant name / Short description</a></h3>
				</div>
				</div>
				<div class="content-footer">
				<img class="user-small-img" src="http://webneel.com/sites/default/files/images/manual/logo-restaurant/best-restaurant-logo-design%20(12).gif">
				<span style="font-size: 16px;color: #fff;">Restaurant name</span>
				<span class="pull-right">
				<a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
				<a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>                  
				</span>
				</div>
             </aside>
            </div>      
               
              <div class="col-lg-6 col-md-6">
             <aside>
                <img src="http://webneel.com/sites/default/files/images/manual/logo-restaurant/best-restaurant-logo-design%20(12).gif" class="img-responsive">
                <div class="content-title">
				<div class="text-center">
				<h3><a href="#">Restaurant name / Short description</a></h3>
				</div>
				</div>
				<div class="content-footer">
				<img class="user-small-img" src="http://webneel.com/sites/default/files/images/manual/logo-restaurant/best-restaurant-logo-design%20(12).gif">
				<span style="font-size: 16px;color: #fff;">Restaurant name</span>
				<span class="pull-right">
				<a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
				<a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>                  
				</span>
				</div>
             </aside>
            </div>
           </div>
          </div>
           
<!--           // RECENT Restaurants===========-->
         <div class="col-lg-4">           
               <div class="widget-sidebar">
                 <h2 class="title-widget-sidebar">// SOME WE RECOMMEND</h2>
                   <div class="content-widget-sidebar">
                    <ul>
                     <li class="recent-post">
                        <div class="post-img">
                         <img src="http://webneel.com/sites/default/files/images/manual/logo-restaurant/best-restaurant-logo-design%20(12).gif" class="img-responsive">
                         </div>
                         <a href="#"><h5>Restaurant name and description</h5></a>
                         <p><small><a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30 Reviews</a></small></p>
                        </li>
                        <hr>
                        
                     <li class="recent-post">
                        <div class="post-img">
                         <img src="http://webneel.com/sites/default/files/images/manual/logo-restaurant/best-restaurant-logo-design%20(12).gif" class="img-responsive">
                         </div>
                         <a href="#"><h5>Restaurant name and description</h5></a>
                         <p><small><a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30 Reviews</a></small></p>
                        </li>
                        <hr>
                        
                     <li class="recent-post">
                        <div class="post-img">
                         <img src="http://webneel.com/sites/default/files/images/manual/logo-restaurant/best-restaurant-logo-design%20(12).gif" class="img-responsive">
                         </div>
                         <a href="#"><h5>Restaurant name and description</h5></a>
                         <p><small><a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30 Reviews</a></small></p>
                        </li>
                        <hr>
                        
                     <li class="recent-post">
                        <div class="post-img">
                         <img src="http://webneel.com/sites/default/files/images/manual/logo-restaurant/best-restaurant-logo-design%20(12).gif" class="img-responsive">
                         </div>
                         <a href="#"><h5>Restaurant name and description</h5></a>
                         <p><small><a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30 Reviews</a></small></p>
                        </li>
                        
                        
                    </ul>
                   </div>
                 </div>
        <!--=====================
               CATEGORIES
          ======================-->
             <div class="widget-sidebar">
              <h2 class="title-widget-sidebar">// CATEGORIES OUR USERS WANT</h2>
                 <button class="categories-btn">Halal</button>
                 <button class="categories-btn">Italian</button>
                 <button class="categories-btn">Chinese</button>
                 <button class="categories-btn">Steakhouse</button>
             </div>  
             
              <!--=====================
                    NEWSLETTER
             ======================-->
<div class="widget-sidebar">
 <h2 class="title-widget-sidebar">// NEWSLETTER</h2>
  <p>Sign up for our latest news and deals!</p>  
<div class="input-group">
      <span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
      <input id="email" type="text" class="form-control" name="email" placeholder="Email">
    </div>
    <button type="button" class="btn btn-warning">Register</button>
             </div>  
                 
                 
             </div>
           </div>
         </div>
     
    </section>	
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 footerleft ">
        <div class="logofooter">EDINE</div>
        <p>Book a table for any restaurant in Dublin! 
Can't decide what to eat or drink, check at other people reviews.
Did you like your meal, help other people decide by just leaving a comment of your expierence.</p>
        <p><i class="fa fa-map-pin"></i> National College of Ireland, Dublin, Ireland</p>
        <p><i class="fa fa-phone"></i> Phone (Ireland) : +353831727097</p>
        <p><i class="fa fa-envelope"></i> E-mail : contactus@edine.com</p>
        
      </div>
      <div class="col-md-2 col-sm-6 paddingtop-bottom">
        <h6 class="heading7">GENERAL LINKS</h6>
        <ul class="footer-ul">
          <li><a href="#"> Career</a></li>
          <li><a href="#"> Privacy Policy</a></li>
          <li><a href="#"> Terms & Conditions</a></li>
          <li><a href="#">Categories</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#"> Frequently Ask Questions</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-6 paddingtop-bottom">
        <h6 class="heading7">LATEST RESTAURANTS</h6>
        <div class="post">
          <p>Halal Kebab Shop <span> Courtstreet 5, Dublin 27, Ireland</span></p>
          <p>Halal Kebab Shop <span> Courtstreet 5, Dublin 27, Ireland</span></p>
          <p>Halal Kebab Shop <span> Courtstreet 5, Dublin 27, Ireland</span></p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 paddingtop-bottom">
        <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <div class="fb-xfbml-parse-ignore">
           <a href="https://www.facebook.com/facebook" style="padding-right:15px;"><i class="fa fa-facebook-official fa-5x" style="color:white;" aria-hidden="true"></i></a>
		   <a href="https://www.twitter.com"><i class="fa fa-twitter fa-5x" style="color:white;" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
	<script>
	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:5,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
	</script>
  </body>
</html>