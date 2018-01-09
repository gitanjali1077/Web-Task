<?php
session_start();
if(!isset($_SESSION['check']))
$_SESSION['check']=0;
if(isset($_SESSION['data']) )
   {


$json_data=$_SESSION['data'];
}



?>


<!DOCTYPE html>
<html lang="en-us">
<head>
	<!--  App Title  -->
	<title>Movie | Web App</title>
	<!--  App Description  -->
		<meta charset="utf-8">
	<meta name="author" content="Movie Web App">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
<meta name="Keywords" content="HTML,CSS,JavaScript,SQL,PHP,jQuery,XML,DOM,Bootstrap,Web development,W3C,tutorials,programming,training,learning,movies data,json,retrieve information">
<meta name="Description" content="Web Application to extract data from OMDB api and display in presentable way(Infomation of Movies).It is a Web Application responsive to get most out about your favourite movies.">

<link rel="icon" href="favicon.ico" type="image/x-icon">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/owl.transitions.css"/>
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css"/>
	<link rel="stylesheet" type="text/css" href="css/animate.css"/>
	<link rel="stylesheet" type="text/css" href="css/main.css"/>

	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/ajaxchimp.js"></script>
	<script type="text/javascript" src="js/scrollTo.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/wow.js"></script>
	<script type="text/javascript" src="js/parallax.js"></script>
	<script type="text/javascript" src="js/nicescroll.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<style>
.header{
background-color:white;
border-radius:8px;
color: #7c795d; font-family: 'Trocchi', serif; font-size: 45px; font-weight: normal; line-height: 48px; margin: 0;

    padding:2%;
}
h1{
color: #7c795d; font-family: 'Trocchi', serif; font-size: 45px; font-weight: normal; line-height: 48px; margin: 0;
text-align:center;
color:white;
}


//   form styling  

.form-style-7{
    max-width:400px;
    margin:50px auto;
    background:#fff;
    border-radius:2px;
    padding:20px;
    font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-7 ul{
    list-style:none;
    padding:0;
    margin:0;   
}
.form-style-7 li{
    display: block;
    padding: 9px;
    border:1px solid #DDDDDD;
    margin-bottom: 30px;
    border-radius: 3px;
}
.form-style-7 li:last-child{
    border:none;
    margin-bottom: 0px;
    text-align: center;
}
.form-style-7 li > label{
    display: block;
    float: left;
    margin-top: -19px;
    background: #FFFFFF;
    height: 14px;
    padding: 2px 5px 2px 5px;
    color: #B9B9B9;
    font-size: 14px;
    overflow: hidden;
    font-family: Arial, Helvetica, sans-serif;
}
.form-style-7 li > span{
    background: #F3F3F3;
    display: block;
    padding: 3px;
    margin: 0 -9px -9px -9px;
    text-align: center;
    color: #C0C0C0;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 11px;
}

.form-style-7 input[type="submit"],
.form-style-7 input[type="button"]{
    background: #2471FF;
    border: none;
    padding: 10px 20px 10px 20px;
    border-bottom: 3px solid #5994FF;
    border-radius: 3px;
    color: #D2E2FF;
}
.form-style-7 input[type="submit"]:hover,
.form-style-7 input[type="button"]:hover{
    background: #6B9FFF;
    color:#fff;
}

.form_{
background: white;
margin:3%;
padding:3%;
border-radius:12px;
}

#decorate{
color:#CECFCE;
opacity:0;
font-size:180%;
font-weight: bold;
}

// View More CSS part

.read-more-state {
  display: none;
}

.read-more-target {
  display:none;
  max-height: 0;
  font-size: 0;
  transition: .25s ease;
}

.read-more-state:checked ~ .read-more-wrap .read-more-target {
display:block;
  font-size: inherit;
  max-height: 999em;
 max-height: 0;
    transition: height 0.15s ease-out;
  

}

.read-more-state ~ .read-more-trigger:before {
  content: 'Show more';
}

.read-more-state:checked ~ .read-more-trigger:before {
  content: 'Show less';
}

.read-more-state:checked ~ .read-more-target {
  cursor: pointer;
  display: block;
  padding: 0 .5em;
  color: #666;
  font-size: .9em;
  line-height: 2;
  border: 1px solid #ddd;
  border-radius: .25em;
 max-height: 0;
    transition: height 0.15s ease-out;
  
}

#grow {
  -moz-transition: height .5s;
  -ms-transition: height .5s;
  -o-transition: height .5s;
  -webkit-transition: height .5s;
  transition: height .5s;
  height: 0;
  overflow: hidden;
}
.error{
color:red;
text-align:center;
font-weight:bold;
font-size:170%;

}
span{
font-size:130%;
font-weight:120;
padding:0;
font-family:cursive;
}
h1{
background-color:inherit;
font-size:250%;
}
</style>
<script>
function growDiv() {
  var growDiv = document.getElementById('grow');
  if (growDiv.clientHeight) {
    growDiv.style.height = 0;
  } else {
    var wrapper = document.querySelector('.measure');
    growDiv.style.height = wrapper.clientHeight + "px";
  }
}
function change(){


}
</script>

<body>
	
	<!--  Header Section  -->
	<header>
		<div class="container">
			<div class="logo pull-left animated wow fadeInLeft">
				<img src="img/logo.png" alt="" title="">
<h1> Welcome to Movie Web App</h1>

			</div>

			
			

			<div class="social pull-right">
				<ul class="list-unstyled">
					<li class="animated wow fadeInRight" data-wow-delay=".2s"><a href="#"><img src="img/facebook.png" alt="" title=""></a></li>
					<li class="animated wow fadeInRight" data-wow-delay=".1s"><a href="#"><img src="img/twitter.png" alt="" title=""></a></li>
					<li class="animated wow fadeInRight" data-wow-delay="0s"><a href="#"><img src="img/google.png" alt="" title=""></a></li>
				</ul>
			</div>

					</div>
	</header>
	<!--  End Header Section  -->






	<!--  Hero Section  -->
	<section class="hero" id="hero">
		<div class="container">
			<div class="caption">
				<h1 class="text-uppercase  animated wow fadeInLeft">Take your Chance.</h1>
				<p class="text-lowercase  animated wow fadeInLeft">Get  all your favourite movies facts just at a one click.Come and get the most out of it</p>

				<a href="#"class="app_store_btn text-uppercase animated wow fadeInLeft">
					<i class="iphone_icon"></i>
					<span>Iphone App</span>
				</a>

				<a href="#" class="app_store_btn text-uppercase animated wow fadeInLeft">
					<i class="android_icon"></i>
					<span>Android App</span>
				</a>
			</div>			
		</div>
	</section>
	<!--  End Hero Section  -->






	<!--  Featured On Section  -->
	<section class="featured_on">
		<div class="container">

<div class="form_">

<form action="process.php" method="post" enctype= "multipart/form-data" id="myform" class="form-style-7"   >

<div class="form-group">
  
    <label for="name">Enter the Movie Name - You want to search about:)</label>
    <input type="text" name="movie_name" id="movie_name"  class="form-control" >
</div>

<ul>

<li>
    <input type="submit" value="search" id="submit"  >
</li>
</ul>
</form>

</div>

			<ul class="list-unstyled text-center clearfix">
				<li class="col-xs-6 col-sm-6 col-md-3 animated wow fadeInDown" id="decorate">
					Action
				</li>
				<li class="col-xs-6 col-sm-6 col-md-3 animated wow fadeInDown" data-wow-delay=".2s" id="decorate">
					Romance
				</li>
				<li class="col-xs-6 col-sm-6 col-md-3 animated wow fadeInDown" data-wow-delay=".3s" id="decorate">
					Comedy
				</li>
				<li class="col-xs-6 col-sm-6 col-md-3 animated wow fadeInDown" data-wow-delay=".4s" id="decorate">
					Biopics
				</li>
			</ul>
		</div>
	</section>
	<!--  End Featured On Section  -->


<!---  Data retrieved from form -->

<?php
 
if(isset($json_data['Title']))
   {

?>


	<!--  About Section  -->
	<section class="about" id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-center animated wow fadeInLeft">
					<div class="iphone">
<img src="<?php echo $json_data['Poster'];
?>" />
					</div>
				</div>
				<div class="col-md-6 animated wow fadeInRight">
					<div class="features_list">

<input type="checkbox" class="read-more-state" id="post-1" style="display:none;" />


<div>
 
 
<p class="read-more-wrap">
<h1 class="text-uppercase"><?php
echo $json_data['Title'];
?></h1>
<span>Cast Of the Movie:</span>
<?php
echo $json_data['Actors'];
?><br>
<span>Director:</span>
<?php

echo $json_data['Director'];
?><br>
<span>Writer :</span>
<?php

echo $json_data['Writer'];
?><br>

<span>Genre:</span>
<?php

echo $json_data['Genre'];
?><br>


<span>Awards Won:</span>
<?php
echo $json_data['Awards'];
?><br>

<span>BoxOffice Colection:</span>
<?php
echo $json_data['BoxOffice'];
?><br>
<span>Country:</span>
<?php
echo $json_data['Country'];
?><br>
<div id="grow">

<div class="measure">
<span>DVD:</span>
<?php
echo $json_data['DVD'];
?><br>

<span>Language:</span>
<?php

echo $json_data['Language'];
?><br>
<span>Metascore:</span>
<?php

echo $json_data['Metascore'];
?><br>
<span>Plot:</span>
<?php

echo $json_data['Plot'];
?><br>
<span>Production:</span>
<?php

echo $json_data['Production'];
?><br>
<span>Rated:</span>
<?php

echo $json_data['Rated'];
?><br>
<span>Ratings:</span>


<?php

echo $json_data['Ratings'][0]['Source'];
echo $json_data['Ratings'][0]['Value'];
?>

<?php
echo $json_data['Ratings'][1]['Source'];
echo $json_data['Ratings'][1]['Value'];
?>


<?php
echo $json_data['Ratings'][2]['Source'];
echo $json_data['Ratings'][2]['Value'];
?>
<br>
<span>Release Date:</span>
<?php

echo $json_data['Released'];
?><br>
<span>Response:</span>
<?php

echo $json_data['Response'];
?><br>
<span>Runtime:</span>
<?php

echo $json_data['Runtime'];
?><br>
<span>Website:</span>
<?php

echo $json_data['Website'];
?><br>
<span>Year:</span>
<?php

echo $json_data['Year'];
?><br>
<span>IMDB ID:</span>
<?php

echo $json_data['imdbID'];
?><br>
<span>IMDB Rating:</span>
<?php

echo $json_data['imdbRating'];

session_destroy();




?>
</div>
</div>
</p>

<label for="post-1" class="read-more-trigger" onClick="growDiv()">Show/Hide</label>


</div>
				</div>					
				</div>
			</div>
		</div>

		<div class="about_video show_video">
			<a href="" class="close_video"></a>
		</div>
	</section>
<?php  }
else if(($_SESSION['check']==1))
{
?>

<div class="error">
<?php
echo "Movie  name is either incorrect or not found in the database:(";
session_destroy();

}
  ?></div>

<!-- Ends here -->



	<!--  About Section  -->
	<section class="about" id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-center animated wow fadeInLeft">
					<div class="iphone">

						<img src="img/iphone.png" alt="" titl="">
					</div>
				</div>
				<div class="col-md-6 animated wow fadeInRight">
					<div class="features_list">
						<h1 class="text-uppercase">Capture Information.</h1>
						<p>Use this web application to get all the information of the movies you love. Get a hands on the application and enjoy it.</p>
						<ul class="list-unstyled">
							<li class="camera_icon">
								<span>Actors.</span>
							</li>
							<li class="video_icon">
								<span>Box Office Collection.</span>
							</li>
							<li class="eye_icon">
								<span>Ratings.</span>
							</li>
							<li class="pic_icon">
								<span>Plot.</span>
							</li>
													</ul>

						<a href="#" class="app_store_btn text-uppercase" id="play_video" data-video="http://www.youtube.com/embed/Bm3NV3gGB2w?autoplay=1&showinfo=0">
							<i class="play_icon"></i>
							<span>About Application</span>
						</a>
						<a href="#hero" class="app_link">Get the app</a>
					</div>					
				</div>
			</div>

		</div>

		<div class="about_video show_video">
			<a href="" class="close_video"></a>
		</div>
	</section>
	<!--  End About Section  -->






	<!--  App Features Section  -->
	<section class="app_features" id="app_features">
		<div class="container">

			<div class="row text-center">
				<div class="col-sm-4 col-md-4 details animated wow fadeInDown" data-wow-delay="0s">
					<img src="img/f_icon1.png" alt="" title="">
					<h1 class="text-uppercase">Get the Actors.</h1>
					<p class="text-lowercase">Get the entire cast and crew of the movie.</p>
				</div>
				<div class="col-sm-4 col-md-4 details animated wow fadeInDown" data-wow-delay=".1s">
					<img src="img/f_icon2.png" alt="" title="">
					<h1 class="text-uppercase">Get the box office Collection.</h1>
					<p class="text-lowercase">Tells how the movie rocks and touches hearts of the viewers.</p>
				</div>
				<div class="col-sm-4 col-md-4 details animated wow fadeInDown" data-wow-delay=".2s">
					<img src="img/f_icon3.png" alt="" title="">
					<h1 class="text-uppercase">Get the Ratings .</h1>
					<p class="text-lowercase">This applications helps how much the work of the team is appreciated by public.</p>
				</div>
			</div>
			
			</div>

		</div>
	</section>
	<!--  And App Features Section  -->






	<!--  Testimonials Section  -->
	<section class="testimonials animated wow fadeIn" id="testimonials" data-wow-duration="2s">
		<div class="container">
			<div class="testimonials_list">

				<ul class="list-unstyled text-center slides clearfix" id="tslider">
					<li>
						<blockquote>
							<p>Movie Web Application.</p>
							<span class="author text-uppercase">Gitanjali Sharma</span>
							<span class="job">Web Deveoper </span>
							
						</blockquote>
					</li>

					<blockquote>
							<p>Movie Web Application.</p>
							<span class="author text-uppercase">Gitanjali Sharma</span>
							<span class="job">Web Deveoper developer</span>
							
						</blockquote>

					</li>
				</ul>
				<div id="slider_nav">
					<div id="prev_arrow"></div>
					<div id="next_arrow"></div>
				</div>
			</div>
		</div>
	</section>
	<!--  End Testimonials Section  -->






	<!--  Email Subscription Section  -->
	<section class="sub_box">
		<p class="cta_text animated wow fadeInDown">Join Our Community and stay updated!</p>
		<form action="#" metohd="post" class="animated wow fadeIn" data-wow-duration="2s" id="submit_form">
			<input type="email" id="mc-email" placeholder="Enter your email"/>
			<button type="submit" id="mc_submit">
				<i class="icon"></i>
			</button>
		</form>
		<div class="message" id="error_msg">Please Enter A Valid Email.</div>
		<div class="message" id="success_msg">Thank You For Your Subscription.</div>
	</section>
	<!--  End Email Subscription Section  -->







</body>
</html>