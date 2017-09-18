<!DOCTYPE html>
<html>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/tea/head.php'; ?>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/tea/nav.php'; ?>

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

<?php include $_SERVER['DOCUMENT_ROOT'] . '/tea/footer.php'; ?>
</body>

</html>
