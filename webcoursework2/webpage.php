<!DOCTYPE HTML PUBLIC "-//W3C//DTD
<?php
$db = new PDO('mysql:dbname=srf32;host=mysql-server-1;charset=utf8', 'srf32','abcsrf32354') or die("bye");
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$id = rand(1,6);

$SQL ="SELECT name FROM twitteraccounts";
$result = $db->query($SQL);



//$ins = $db->query("INSERT INTO `f28wp`.`amigos` (`id`, `name`, `photo`) VALUES ('0', 'scott', 'djdjd.gif')");
//print_r($result);
?>

<html lang="en">


  <head>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
    
       <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="apache.htaccess"></script>
  </head>



  <body>

<!-- jumbatrom with login details and picture -->

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol> 
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="http://placehold.it/1200x315" alt="......">
      <div class="carousel-caption">
          <h3>BBC News</h3>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/1200x315" alt="......">
      <div class="carousel-caption">
          <h3>Sky News</h3>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/1200x315" alt="......">
      <div class="carousel-caption">
          <h3>Mashable</h3>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/1200x315" alt="......">
      <div class="carousel-caption">
          <h3>The Verge</h3>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/1200x315" alt="......">
      <div class="carousel-caption">
          <h3>BBC Sport</h3>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/1200x315" alt="......">
      <div class="carousel-caption">
          <h3>Sky Sports</h3>
      </div>
    </div>
  </div>
 
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div> <!-- Carousel -->

<!-- tabs for selecting different twitter news accounts -->
<div class="container">
  <ul class="nav nav-tabs nav-justified ">
	

	<!-- dropdown menu for flitering different news -->
	<li>
	<div class="dropdown">
  	<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" 	aria-haspopup="true" aria-expanded="true">
    	Filter
    	<span class="caret"></span>
 	</button>
  	<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">

    		<li><a href="#">All</a></li>
    		<li role="separator" class="divider"></li>
    		<li><a href="#">News</a></li>
    		<li role="separator" class="divider"></li>
    		<li><a href="#">Technology</a></li>
    		<li role="separator" class="divider"></li>
    		<li><a href="#">Sports</a></li>
 	</ul>
	</div>
	</li>

	<!-- six differnet tabs for displaying different twitter acounts --> 
  	<li > <a href="#tab1" data-toggle="tab"> </a></li>
  	<li ><a href="#tab2" data-toggle="tab">Sky   News</a></li>
  	<li ><a href="#tab3" data-toggle="tab">Mashable</a></li>
	<li ><a href="#tab4"data-toggle="tab">The   Verge</a></li>
	<li ><a href="#tab5" data-toggle="tab">BBC   Sport</a></li>
	<li ><a href="#tab6" data-toggle="tab">Sky   Sports </a></li>
   </ul>
</div>


<!-- twitter api under "twitter div", this will change when tabs are pressed -->
<center>
<div class="tab-content">

	<div class="tab-pane " id="tab1">
  	<a class="twitter-timeline" href="https://twitter.com/BBCNews" data-widget-id="668378590451511296">Tweets 		by @BBCNews</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test	(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>

	<div class="tab-pane" id="tab2">
  	<a class="twitter-timeline" href="https://twitter.com/SkyNews" data-widget-id="669854133369839620">Tweets 		by @SkyNews</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>

	<div class="tab-pane" id="tab3">
	<a class="twitter-timeline" href="https://twitter.com/mashable" data-widget-id="669858405960581120">Tweets 		by @mashable</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>

	<div class="tab-pane" id="tab4">
	<a class="twitter-timeline" href="https://twitter.com/verge" data-widget-id="669859580927717376">Tweets by 		@verge</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>

	<div class="tab-pane" id="tab5">
	<a class="twitter-timeline" href="https://twitter.com/BBCSport" data-widget-id="669860381695807490">Tweets 		by @BBCSport</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>

	<div  class="tab-pane" id="tab6">
	<a class="twitter-timeline" href="https://twitter.com/SkySports" data-widget-id="669860739922923520">Tweets 		by @SkySports</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>

</div>
</center>

 
  </body>
</html>
