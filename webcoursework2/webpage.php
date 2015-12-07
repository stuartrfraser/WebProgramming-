<!DOCTYPE HTML PUBLIC "-//W3C//DTD
<?php
$db = new PDO('mysql:dbname=srf32;host=mysql-server-1;charset=utf8', 'srf32','abcsrf32354') or die("bye");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$id = rand(1,6);

$getNames = $db->prepare("SELECT name FROM twitteraccounts WHERE id=:id");

$nameArray = array();

for($id = 0; $id < 6; $id++) {
  
  $getNames->execute(array(':id'=>$id));
  $nameResult = $getNames->fetch();
  $name = $nameResult['name'];
  array_push($nameArray, $name);
}

$getLogo = $db->prepare("SELECT logo FROM twitteraccounts WHERE id=:id");

$logoArray = array();

for($id = 0; $id < 6; $id++) {
  
  $getLogo->execute(array(':id'=>$id));
  $logoResult = $getLogo->fetch();
  $logo = $logoResult['logo'];
  array_push($logoArray, $logo);
}

$getUser = $db->prepare("SELECT username FROM twitteraccounts WHERE id=:id");

$userArray = array();

for($id = 0; $id < 6; $id++) {
  
  $getUser->execute(array(':id'=>$id));
  $userResult = $getUser->fetch();
  $user = $userResult['username'];
  array_push($userArray, $user);
}

$getDesc = $db->prepare("SELECT description FROM twitteraccounts WHERE id=:id");

$descArray = array();

for($id = 0; $id < 6; $id++) {
  
  $getDesc->execute(array(':id'=>$id));
  $descResult = $getDesc->fetch();
  $desc = $descResult['description'];
  array_push($descArray, $desc);
}


?>

<html lang="en">


  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Web Progrming</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="stylesheet.css"

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
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
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
  </ol> 
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active" style="height: 30%;">
      <center><img src="<?php echo $logoArray[0]; ?>" alt="..."></center>
      <div class="carousel-caption">
          <h3><?php echo $nameArray[0]; ?></h3>
      </div>
    </div>
    <div class="item "style="height: 30%;">
      <center><img src="<?php echo $logoArray[1]; ?>" alt="..."></center>
      <div class="carousel-caption">
          <h3><?php echo $nameArray[1]; ?></h3>
      </div>
    </div>
    <div class="item " style="height: 30%;">
      <center><img src="<?php echo $logoArray[2]; ?>" alt="..."></center>
      <div class="carousel-caption">
          <h3><?php echo $nameArray[2]; ?></h3>
      </div>
    </div>
    <div class="item" style="height: 30%;">
      <center><img src="<?php echo $logoArray[3]; ?>" alt="..."></center>
      <div class="carousel-caption">
          <h3><?php echo $nameArray[3]; ?></h3>
      </div>
    </div>
    <div class="item" style="height: 30%;">
      <center><img src="<?php echo $logoArray[4]; ?>" alt="..."></center>
      <div class="carousel-caption">
          <h3><?php echo $nameArray[4]; ?></h3>
      </div>
    </div>
    <div class="item" style="height: 30%;">
      <center><img src="<?php echo $logoArray[5]; ?>" alt="..."></center>
      <div class="carousel-caption">
          <h3><?php echo $nameArray[5]; ?></h3>
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
  	<li > <a href="#tab1" data-toggle="tab"> <p><?php echo $nameArray[0]; ?></p></a> </li>
  	<li ><a href="#tab2" data-toggle="tab"><p><?php echo $nameArray[1]; ?></p></a></li>
  	<li ><a href="#tab3" data-toggle="tab"><p><?php echo $nameArray[2]; ?></p></a></li>
	<li ><a href="#tab4"data-toggle="tab"><p><?php echo $nameArray[3]; ?></p></a></li>
	<li ><a href="#tab5" data-toggle="tab"> <p><?php echo $nameArray[4]; ?></p></a></li>
	<li ><a href="#tab6" data-toggle="tab"> <p><?php echo $nameArray[5]; ?></p> </a></li>
   </ul>
</div>


<!-- twitter api under "twitter div", this will change when tabs are pressed -->
<center>
<div class="tab-content">

	<div class="tab-pane " id="tab1">
    <p>
        <h3><?php echo $userArray[0]; ?></h3>
        <container>
        <p><?php echo $descArray[0]; ?></p>
      </container>
    </p>  

  	<a class="twitter-timeline" href="https://twitter.com/BBCNews" data-widget-id="668378590451511296">Tweets 		by @BBCNews</a> 
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test	(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>

	<div class="tab-pane" id="tab2">
      <p>
        <h3><?php echo $userArray[1]; ?></h3>
        <container>
        <p><?php echo $descArray[1]; ?></p>
      </container>
    </p> 

  	<a class="twitter-timeline" href="https://twitter.com/SkyNews" data-widget-id="669854133369839620">Tweets 		by @SkyNews</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>

	<div class="tab-pane" id="tab3">
      <p>
        <h3><?php echo $userArray[2]; ?></h3>
        <container>
        <p><?php echo $descArray[2]; ?></p>
      </container>
    </p> 

	<a class="twitter-timeline" href="https://twitter.com/mashable" data-widget-id="669858405960581120">Tweets 		by @mashable</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>

	<div class="tab-pane" id="tab4">
      <p>
        <h3><?php echo $userArray[3]; ?></h3>
        <container>
        <p><?php echo $descArray[3]; ?></p>
      </container>
    </p> 

	<a class="twitter-timeline" href="https://twitter.com/verge" data-widget-id="669859580927717376">Tweets by 		@verge</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>

	<div class="tab-pane" id="tab5">
      <p>
        <h3><?php echo $userArray[4]; ?></h3>
        <container>
        <p><?php echo $descArray[4]; ?></p>
      </container>
    </p> 

	<a class="twitter-timeline" href="https://twitter.com/BBCSport" data-widget-id="669860381695807490">Tweets 		by @BBCSport</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>

	<div  class="tab-pane" id="tab6">
      <p>
        <h3><?php echo $userArray[5]; ?></h3>
        <container>
        <p><?php echo $descArray[5]; ?></p>
      </container>
    </p> 

	<a class="twitter-timeline" href="https://twitter.com/SkySports" data-widget-id="669860739922923520">Tweets 		by @SkySports</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>

</div>
</center>

 
  </body>
</html>
