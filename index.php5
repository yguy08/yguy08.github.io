<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../img/icon_clymon-20130917-favicon.ico" >

    <title>CLYMON</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="../css/clymon_lp.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
  </head>
  
  <!-- Google analytics -->
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44522371-1', 'clymon.com');
  ga('send', 'pageview');

</script>

<!-- Google analytics -->

  <body>

   <!-- Full Page Image Header Area -->
    <div class="header">
      <div class="vert-text">
        <a class="brand" href="../index.html"> <img style="max-width:100%;padding-left:10px;padding-right:10px;"src="img/clymon.jpg"  alt="logo" /> </a>
		
	
		<div class="col-md-6 col-md-offset-3 text-center">
            </br>
			</br>
            
            <a href="#intro" style="background-color:white;border-color:black;color:black;font-family:'truecrime';font-size:25px;font-weight:500;" class="btn btn-lg btn-primary">Inquire</a>
          
		  </div>
      </div>
    </div>
    <!-- /Full Page Image Header Area -->
	
	 <!-- Full Page Image Header Area -->
    <div id="intro" class="headerclouds">
      <div class="vert-text">
        <h1>Engage the Summit</h1>
		<h3>Enter name, contact info, and interest in joining.</h3>
		<h3>Information will be sent to you shortly.</h3>
		
		<div class="container-signup">
		<div class="row">
		<div class=".col-md-4 .col-md-offset-4">
		
		<form role="form" style="padding:20px;" method="post" action="contactengine.php">
  <div class="form-group">
   <label for="name">Name</label>
    <input required type="name" name="Name" class="form-control" id="Name" placeholder="Name">
    
  </div>
  
  <div class="form-group">
  <label for="exampleInputEmail1">Email address</label>
    <input required type="email" name="Email" class="form-control" id="Email" placeholder="Enter email">
   </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Interest</label>
    <input required type="name" name="Message" class="form-control" id="Message" placeholder="Interest">
  </div>
  
<button type="submit" class="btn btn-default btn-lg" style="font-family:'truecrime';font-size:25px;font-weight:500;">Submit</button>
</form>
		
		
		
		
		</div>
		</div>
		</div>
		
</div>
		
		
		
		
		
		
      </div>
    
    <!-- /Full Page Image Header Area -->
  
    

  <!-- Bootstrap core JavaScript -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>

  <!-- Custom JavaScript for the Side Menu - Put in a custom JS file if you want to clean this up -->
  <script>
      $("#menu-close").click(function(e) {
          e.preventDefault();
          $("#sidebar-wrapper").toggleClass("active");
      });
  </script>
  <script>
      $("#menu-toggle").click(function(e) {
          e.preventDefault();
          $("#sidebar-wrapper").toggleClass("active");
      });
  </script>

  </body>

</html>