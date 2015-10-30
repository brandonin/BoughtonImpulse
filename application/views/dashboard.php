<html>
<head>
	<meta charset="utf-8" />
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.5.7/slick.css"/>
	<link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.5.8/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="/user_guide/_static/css/login.css" />
	<script type="text/javascript">
	</script>
	<style type="text/css">
	.carousel {
		width:500px;
		display:inline-block;
		margin-left:100px;
	}
	.auth-plain {
	  padding-right: 0px;
	  padding-left: 0px;
	  padding-top: 0px;
	}

	.left-solid {
	margin-top: 0px;
	margin-bottom: 0px;
	}

	.signup-panel {
	  border-radius: 5px;
	  padding: 15px;
	  margin-top: 30px;
	  margin-bottom: 30px;
	  background: #fff;
	}

	.signup-panel a{
	  color: #fff;
	}

	.signup-panel i {
	  font-size: 30px;
	  line-height: 50px;
	  color: #999;
	}
	.signup-panel form input, .signup-panel form span {
	  height: 50px;
	}
	.signup-panel .welcome {
	  font-size: 26px;
	  text-align: center;
	  margin-left: 0;
	}
	.signup-panel p {
	  font-size: 13px;
	  font-weight: 200;
	  text-align: center;
	}
	.signup-panel .button {
	  margin-left: 35%;
	}

	.newusers {
	  background: #fff;
	}
	.carousel_picture{
		height:500px;
		width:500px;
	}
	div#status_infinite{
		position:fixed; 
		font-size:24px;
	}
	div#wrap_infinite{
		width:1200px; 
		margin:20px 20px 20px 80px;
	}
	div.newData{
/*		height:1000px; 
		background:#09F;*/
		margin:20px;
	}
	#status{
		margin-left:80%;
	}
	.email_subscription{
		margin-left: 25%;
		padding:10px;
		margin-top:50%;
		width:280px;
		display:inline-block;
		height:80px;
		background-color: orange;
		position: fixed;
	}
	.products{
		padding:20px;
	}
	.close{
		opacity:100;
		height:25px;
		width:25px;
	}
	.closed{

	}
	.affiliates_image{
		margin:10px;
		height:300px;
		width: 300px;
	}
	.affiliates{
		display:inline-block;
	}
	.affiliates_label{
		width: 300px;
		text-align: center;
		display:block;
		font-size: 1.5em;
	}
</style>	
</head>
<body>
	<div id="fb-root"></div>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<nav class="navbar navbar-default navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Login dropdown</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Register</b> <span class="caret"></span></a>
			<ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
							<div class="col-md-12">
								<h3>Register</h3>
								<?php 
								if($this->session->userdata('regis_errors')){
									echo($this->session->flashdata('regis_errors'));
								}
								?>
					<!-- 			<div class="social-buttons">
									<div class='fb-login-button' data-max-rows='1' data-size='large' data-show-faces='false' data-auto-logout-link='false'></div>  
									<a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
								</div>
                                or -->
								 <form class="form" action="main/create" method ="post"> 
								 	<div class="form-group">
								 		<input type = 'text' name='first_name' placeholder="First Name" required>
								 	</div>
								 	<div class="form-group">
								 		<input type = 'text' name='last_name' placeholder="Last Name" required>
								 	</div>
								 	<div class="form-group">
								 		<input type = 'text' name='email' placeholder="Email" required>
									</div>
									<div class="form-group">
								 		<input type = 'password' name='password' placeholder="Password" required>
								 	</div>
								 	<div class="form-group">
								 		<input type = 'password' name='pw_confirmation' placeholder="Password" required>
								 	</div>
								 		<input type='submit' class="btn btn-primary" value='Register'>

								 		<!-- <div class="form-group">
											 <label class="sr-only">First Name</label>
											 <input type="first_name" class="form-control" id="exampleInputEmail2" placeholder="First Name" required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputEmail2">Last Name</label>
											 <input type="last_name" class="form-control" id="exampleInputEmail2" placeholder="Last Name" required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputEmail2">Email address</label>
											 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2">Password</label>
											 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                             
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2">pw_confirmation</label>
											 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirm Password" required>
										</div>
										<div class="form-group">
											 <button type="submit" class="btn btn-primary btn-block">Register</button>
										</div> -->
										<!-- <div class="checkbox">
											 <label>
											 <input type="checkbox"> keep me logged-in
											 </label>
										</div> -->
								 </form>
							</div>
							<!-- <div class="bottom text-center">
								New here ? <a href="#"><b>Join Us</b></a>
							</div> -->
					 </div>
				</li>
			</ul>
        </li>
       <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
			<ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
							<div class="col-md-9">
								Login via
								<div class="social-buttons">
									<fb:login-button autologoutlink="true" data-size="large" onlogin="checkLoginState();"></fb:login-button>
								</div>
                                or
                                	<form class="form" action="main/login" method ="post"> 
<!-- 								 <form class="form" role="form" method="post" action="main/login" accept-charset="UTF-8" id="login-nav">
 -->								 <div class="form-group">
								 		<input type = 'text' name='email' placeholder="Email" required>
									</div>
									<div class="form-group">
								 		<input type = 'password' name='password' placeholder="Password" required>
								 	</div>
										<!-- div class="form-group">
											 <label class="sr-only" for="exampleInputEmail2">Email address</label>
											 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2">Password</label>
											 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required> -->
									<!-- 	</div> -->
										<div class="form-group">
											 <button type="submit" class="btn btn-primary btn-block">Sign in</button>
										</div>
<!-- 										<div class="checkbox">
											 <label>
											 <input type="checkbox"> keep me logged-in
											 </label>
										</div> -->
								 </form>
							</div>
<!-- 							<div class="bottom text-center">
								New here ? <a href="#"><b>Join Us</b></a>
							</div> -->
					 </div>
				</li>
			</ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button> -->
<div id="status"></div>
	<div class="row carousel">
		<!-- Carousel -->
    	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner carousel_picture">
			    <div class="item active centered">
			    	<img class="carousel_picture" src="/user_guide/_images/beard.jpg">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                            	<span>Welcome to <strong>LOREM IPSUM</strong></span>
                            </h2>
                            <br>
                            <h3>
                            	<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                            </h3>
                            <br>
                            <div class="">
                                <a class="btn btn-theme btn-sm btn-min-block" href="#">Login</a><a class="btn btn-theme btn-sm btn-min-block" href="#">Register</a></div>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			    <div class="item">
			    	<img src="/user_guide/_images/swiss.jpg">
			    	<!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                                <span>Welcome to LOREM IPSUM</span>
                            </h2>
                            <br>
                            <h3>
                            	<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                            </h3>
                            <br>
                            <div class="">
                                <a class="btn btn-theme btn-sm btn-min-block" href="#">Login</a><a class="btn btn-theme btn-sm btn-min-block" href="#">Register</a></div>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			    <div class="item">
			    	<img src="/user_guide/_images/soap.jpg">
			    	<!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                                <span>Welcome to LOREM IPSUM</span>
                            </h2>
                            <br>
                            <h3>
                            	<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                            </h3>
                            <br>
                            <div class="">
                                <a class="btn btn-theme btn-sm btn-min-block" href="#">Login</a><a class="btn btn-theme btn-sm btn-min-block" href="#">Register</a></div>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		    	<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		    	<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div><!-- /carousel -->
	</div>

<div class="email_subscription">
	<form action="#" method="post">
		<label for="email"><span class="spooky">Sign up to our Spooky weekly email list!</span></label>
		<input type="email" name="email" placeholder="email">
		<input type="submit" value="Sign Up!">
		<button class="close"><img class="close" src="http://mdops.com/wp-content/themes/mdops/images/close.png"></button>
	</form>
</div>

 <div id="status_infinite">0 | 0</div>
<div id="wrap_infinite"> 
<?php
 for($i = 0; $i< count($affiliates); $i++)
{ ?>
	<div class="affiliates">
	<label class="affiliates_label"><?= $affiliates[$i]['name']?></label><arel="nofollow" href="<?= $affiliates[$i]['url'] ?>"><img class="affiliates_image" border="0" src="<?= $affiliates[$i]['img']?>"></a><img src="<?= $affiliates[$i]['tracker_id']?>" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
	</div>
<?php
	}
 ?>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/user_guide/_static/js/waypoint.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

		function yHandler(){
	// Watch video for line by line explanation of the code
	// http://www.youtube.com/watch?v=eziREnZPml4
	var wrap = document.getElementById('wrap_infinite');
	var contentHeight = wrap.offsetHeight;
	var yOffset = window.pageYOffset; 
	var y = yOffset + window.innerHeight;
	// var a = 1200;
	// console.log($(document).scrollTop());
	// $(document).scroll(function(){
	// if( y >= contentHeight
	// 	// $(document).scrollTop() == scrollBottom
	// 	){
	// 	// Ajax call to get more dynamic data goes here
	// 	$.get('/main/get_page_content', function(res){ 
	// 		wrap.innerHTML += '<div class="newData">'+res+'</div>';
	// 	});
	// 	// a +=1200;
	// }
	// });
	// if($(document).scrollTop() == a){
	// 	// Ajax call to get more dynamic data goes here
	// 	$.get('/main/get_page_content', function(res){ 
	// 		wrap.innerHTML += '<div class="newData">'+res+'</div>';
	// 	});
	// 	a +=1200;
	// }
	var status = document.getElementById('status_infinite');
	status.innerHTML = contentHeight+" | "+y;
}
window.onscroll = yHandler;

	$(".close").click(function(){
		$(".email_subscription").hide();
		return false;
	});
	});

	
</script>
	<?php $this->load->view("test");
	 ?>


</body>
</html>