<!DOCTYPE html>
<html>

  <head>
	<meta charset="UTF-8">
	<title>Eclipse TEA</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description"
		content="The website of Eclipse TEA, an open-source framework for development of IDE extensions that can be run from everywhere">
	<meta name="author" content="Markus Duft">
	
	<link rel="shortcut icon" href="/tea/images/favicon.png">
	
	<link href="/tea/css/bootstrap.css" rel="stylesheet" type='text/css'>
	<link href="/tea/css/bootstrap-responsive.css" rel="stylesheet" type='text/css'>
	<link href="/tea/css/shield-responsive.css" rel="stylesheet" type='text/css'>
	<link href='/tea/css/fonts.css' rel='stylesheet' type='text/css'>
	<link href="/tea/css/prettyPhoto.css" rel="stylesheet" media="screen" type='text/css'>
	<link href="/tea/css/prettify.css" type="text/css" rel="stylesheet"/>
	<link href="/tea/css/style.css" rel="stylesheet" type='text/css'>
	<link href="/tea/css/coverflow.css" rel="stylesheet" type='text/css'>
</head>


  <body>
<?php include '/tea/header.php'; ?>

<img style="position: fixed; top: 0; right: 0; margin-top: 65px; z-index:1000; border: 0; " src="/tea/images/incubation.png"/>

<div id="page">
	<div class="container">
		<div class="row">
			<div class="span12">
				<h2>Documentation</h2>
				<p>
					Currently the TEA documentation is still under construction. For the brave, there is a lot of JavaDoc on the public interfaces.
				</p>
			</div>
		</div>
		<div id="tea-arch" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
        				<h3 class="modal-title">TEA Architecture Overview</h3>
					</div>
					<div class="modal-body">
						<img class="img-responsive" src="images/tea-arch.png"/>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span8">
				<p>
					Until then, only this architecture overview is available:<br>
				</p>
			</div>
			<div class="span4">
				<a class="thumbnail" href="#" data-toggle='modal' data-target='#tea-arch'><img src="images/tea-arch.png" alt="TEA Architecture Overview"/></a>
			</div>
		</div>
	</div>
</div>

    <footer class="site-footer">
  <div id="extra">
    <div class="inner">
      <div class="container">
        <div class="row">
          <div class="span12">
            <h3 class="footer-links-header">Quick Links</h3>
            <ul class="footer-links clearfix">
              <li><a href="http://www.eclipse.org/legal/privacy.php">Privacy Policy</a></li>
              <li><a href="http://www.eclipse.org/legal/termsofuse.php">Terms of Use</a></li>
              <li><a href="http://www.eclipse.org/legal/copyright.php">Copyright Agent</a></li>
              <li><a href="http://www.eclipse.org/legal/">Legal</a></li>
            </ul>
            <ul class="footer-links clearfix">
              <li><a href="http://www.eclipse.org">Eclipse Home</a></li>
              <li><a href="http://marketplace.eclipse.org/">Market Place</a></li>
              <li><a href="http://live.eclipse.org/">Eclipse Live</a></li>
              <li><a href="http://www.planeteclipse.org/">Eclipse Planet</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script src="/tea/js/jquery-1.11.3.min.js"></script>
  <script src="/tea/js/bootstrap.min.js"></script>
  <script src="/tea/js/jquery.easing.1.3.js" type="text/javascript"></script>
  <script src="/tea/js/jquery.prettyPhoto.js" type="text/javascript"></script>
  <script src="/tea/js/twitter.js" type="text/javascript"></script>
  <script src="/tea/js/prettify.js" type="text/javascript"></script>
  <script src="/tea/js/lang-xtend.js" type="text/javascript"></script>
  <script src="/tea/js/lang-common.js" type="text/javascript"></script>
  <script src="/tea/js/custom.js" type="text/javascript"></script>
  <script src="/tea/js/coverflow.min.js" type="text/javascript"></script>
</footer>

  </body>

</html>