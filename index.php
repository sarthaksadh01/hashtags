<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>#hashtag</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
<style>
body
{
  background-color: #125487;
  background-repeat: no-repeat;
/* background-image: linear-gradient(#e4e5e6,#076585); */
/* height:800px; */
}
@import url(https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css);
@import url(https://fonts.googleapis.com/css?family=Lato:300,400,700);


a.animated-button:link, a.animated-button:visited {
	position: relative;
	display: block;
	margin: 30px auto 0;
	padding: 14px 15px;
	color: #ffffff;
	font-size:14px;
	font-weight: bold;
	text-align: center;
	text-decoration: none;
	text-transform: uppercase;
	overflow: hidden;
	letter-spacing: .08em;
	border-radius: 0;
	text-shadow: 0 0 1px rgba(0, 0, 0, 0.2), 0 1px 0 rgba(0, 0, 0, 0.2);
	-webkit-transition: all 1s ease;
	-moz-transition: all 1s ease;
	-o-transition: all 1s ease;
	transition: all 1s ease;
}
a.animated-button:link:after, a.animated-button:visited:after {
	content: "";
	position: absolute;
	height: 0%;
	left: 50%;
	top: 50%;
	width: 150%;
	z-index: -1;
	-webkit-transition: all 0.75s ease 0s;
	-moz-transition: all 0.75s ease 0s;
	-o-transition: all 0.75s ease 0s;
	transition: all 0.75s ease 0s;
}
a.animated-button:link:hover, a.animated-button:visited:hover {
	color: #ffffff;
	text-shadow: none;
}
a.animated-button:link:hover:after, a.animated-button:visited:hover:after {
	height: 450%;
}

a.animated-button:link, a.animated-button:visited {
	position: relative;
	display: block;
	margin: 30px auto 0;
	padding: 14px 15px;
	color: #ffffff;
	font-size:14px;
	border-radius: 0;
	font-weight: bold;
	text-align: center;
	text-decoration: none;
	text-transform: uppercase;
	overflow: hidden;
	letter-spacing: .08em;
	text-shadow: 0 0 1px rgba(0, 0, 0, 0.2), 0 1px 0 rgba(0, 0, 0, 0.2);
	-webkit-transition: all 1s ease;
	-moz-transition: all 1s ease;
	-o-transition: all 1s ease;
	transition: all 1s ease;
}

/* Victoria Buttons */


a.animated-button.sandy-three {
	border: 2px solid #ffffff;
	color: #ffffff;
}
a.animated-button.sandy-three:after {
	border: 3px solid #ffffff;
	opacity: 0;
	-moz-transform: translateX(-50%) translateY(-50%) rotate(-25deg);
	-ms-transform: translateX(-50%) translateY(-50%) rotate(-25deg);
	-webkit-transform: translateX(-50%) translateY(-50%) rotate(-25deg);
	transform: translateX(-50%) translateY(-50%) rotate(-25deg);
}
a.animated-button.sandy-three:hover:after {
	height: 400% !important;
	opacity: 1;
	color: #ffffff;
}




/* twitter */


/* @twitter: #1ab7ea; */

.twitter-bird-animation {
  background-image: url("http://www.cloud.elalemanyo.de/tmp/twitter-bird-sprite-e0FhFKaXRI.png");
	background-size: cover;
	display: block;
  position: relative;
	height: 75px;
  width: 75px;
  margin: 50px auto 0 auto;
  animation: 0.3s fly step-end infinite;
}

.loading {
  margin: auto;
	width: 100px;
  /* .clearfix; */
}

.text {
  float: left;
  color:#1AB7EA;
  font-weight: bold;
}

.blob {
	border-radius: 50%;
	background-color: #1AB7EA;
	display: block;
	float: left;
	margin: 5px 2px;
	position: relative;
  top: 6px;
	height: 3px;
	width: 3px;
  animation: loading-blob 1.2s infinite;
  animation-timing-function: ease-in-out;
  transform: translate3d(0, 0, 0);
}

.blob2 {
	animation-delay: 150ms;
}

.blob3 {
	animation-delay: 300ms;
}

@keyframes fly {
  0%  { background-position: 0 0;}
  33% { background-position: -250 0;}
  66% { background-position: -450px 0;}
}

@keyframes loading-blob {
	0% { height: 3px; width: 3px;}
	25% { height: 7px; width: 7px;}
	50% { height: 5px; width: 5px; }
	100% { height: 3px; width: 3px; }
}


</style>
<script>
$( document ).ready(function() {
    $("#bttn").click(function(){
      // alert('ankit');
$(".load").fadeIn();
$(".more").fadeOut();
    });

});
</script>
<script>

</script>
</head>
<body>
  <!--  -->
    <nav class="navbar navbar-expand-md fixed-top " style="background:#125487">
        <a class="navbar-brand" href="#" style="color:#ffffff">#HASHTAG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          </ul>
          <ul class="navbar-nav ">
            <li class="nav-item">

                
                
              <a class="nav-link"   href="#" style="color:#ffffff"><i class="fas fa-map-marker-alt"></i></a>
            </li>            
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search location " aria-label="Search">
            <button class="btn btn-outline my-2 my-sm-0" type="submit" style="color:#125487 ; background:#ffffff">check</button>
          </form>
        </div>
      </nav>
<div id="back" class="container mb-5 pb-5">
<form action="gettweets.php" method="GET" class="form-inline  pt-5 mt-5" >
<input type="text" name="tweet" class="form-control" style="width:600px;" placeholder="search products">
<button type=""class="btn ml-4" id="bttn" >Get status</button>
</form>

<div style="display:none" class="load">
<div class="twitter-bird-animation"  ></div>
<div class="loading">
  <span class="text">Loading</span>
  <span class="blob1 blob"></span>
  <span class="blob2 blob"></span>
  <span class="blob3 blob"></span>
</div>
</div>
<div class="mt-4 more">
<div class="">
    <h4 style="color:#ffffff">Search for more.......</h4><br><br><hr>
<div class=" ml-5 row">
<div class="col-md-3 col-sm-3 col-xs-6 "> <a href="#" class="btn btn-sm animated-button sandy-three" id="abc">Mobiles</a> </div>
<div class="col-md-3 col-sm-3 col-xs-6"> <a href="#" class="btn btn-sm animated-button sandy-three" id="abc">Electronics</a> </div>
<div class="col-md-3 col-sm-3 col-xs-6"> <a href="#" class="btn btn-sm animated-button sandy-three" id="abc">bollywood hungama</a> </div>
<div class="col-md-3 col-sm-3 col-xs-6"> <a href="#" class="btn btn-sm animated-button sandy-three" id="abc">Foods and other</a> </div> 

</div>
<div class=" ml-5 row">
    <div class="col-md-3 col-sm-3 col-xs-6"> <a href="#" class="btn btn-sm animated-button sandy-three" id="abc">Music </a> </div>
    <div class="col-md-3 col-sm-3 col-xs-6"> <a href="#" class="btn btn-sm animated-button sandy-three" id="abc">Places</a> </div> 
    <div class="col-md-3 col-sm-3 col-xs-6"> <a href="#" class="btn btn-sm animated-button sandy-three" id="abc">Monuments</a> </div>
    <div class="col-md-3 col-sm-3 col-xs-6"> <a href="#" class="btn btn-sm animated-button sandy-three" id="abc">Foods and Restaurant</a> </div> 
</div>
<div class="ml-5 row">
  <div class="col-md-3 col-sm-3 col-xs-6"> <a href="#" class="btn btn-sm animated-button sandy-three" id="abc">Beverages</a> </div> 
 <div class="col-md-3 col-sm-3 col-xs-6"> <a href="#" class="btn btn-sm animated-button sandy-three" id="abc">colleges and schools</a> </div>
 <div class="col-md-3 col-sm-3 col-xs-6"> <a href="#" class="btn btn-sm animated-button sandy-three" id="abc">other</a> </div>
 <div class="col-md-3 col-sm-3 col-xs-6"> <a href="#" class="btn btn-sm animated-button sandy-three" id="abc">other</a> </div> 
</div>
<div class="ml-5 row">
    <div class="col-md-3 col-sm-3 col-xs-6"> <a href="#" class="btn btn-sm animated-button sandy-three" id="abc">other</a> </div> 
   <div class="col-md-3 col-sm-3 col-xs-6"> <a href="#" class="btn btn-sm animated-button sandy-three" id="abc">other</a> </div>
   <div class="col-md-3 col-sm-3 col-xs-6"> <a href="#" class="btn btn-sm animated-button sandy-three" id="abc">other</a> </div>
   <div class="col-md-3 col-sm-3 col-xs-6"> <a href="#" class="btn btn-sm animated-button sandy-three" id="abc">other</a> </div> 
  </div>

  <div class="ml-5 row">
      <div class="col-md-3 col-sm-3 col-xs-6"> <a href="#" class="btn btn-sm animated-button sandy-three" id="abc">other</a> </div> 
     <div class="col-md-3 col-sm-3 col-xs-6"> <a href="#" class="btn btn-sm animated-button sandy-three" id="abc">Samsung</a> </div>
     <div class="col-md-3 col-sm-3 col-xs-6"> <a href="#" class="btn btn-sm animated-button sandy-three" id="abc">Other</a> </div>
     <div class="col-md-3 col-sm-3 col-xs-6"> <a href="#" class="btn btn-sm animated-button sandy-three" id="abc">Other</a> </div>
    </div>
  </div>

</div>


</div>
</body>
</html>