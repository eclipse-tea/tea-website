<!DOCTYPE html>
<html>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/tea/head.php'; ?>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/tea/nav.php'; ?>

<div id="page">
	<div class="container">
		<div class="row">
			<div class="span12">
				<h2>Download Options</h2>
				<p>
		You can choose to download from either nightly builds (bleeding edge) or release update sites.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<h2>Eclipse Updatesites</h2>
				<p>These sites can be used to install the TEA features into a running Eclipse. Currently no site is available (yet).</p>
				<p><a href="http://download.eclipse.org/tea/nightly" class="has-popover btn btn-secondary btn-medium">Nightly Builds (right click &amp; copy)</a></p>
				<p>
					<a href="http://download.eclipse.org/tea/1.0.0-rc1" class="has-popover btn btn-medium">v1.0.0-rc1</a>
					<a href="http://download.eclipse.org/tea/1.0.0" class="has-popover btn btn-primary btn-medium">v1.0.0</a>
				</p>
                <p>
					<a href="http://download.eclipse.org/tea/1.2.0" class="has-popover btn btn-primary btn-medium">v1.2.0</a>
                </p>
				<h3>Installation Instructions</h3>
				<ul>
					<li>Choose <e>Help -&gt; Install New Software...</e> from the menu bar and <e>Add...</e>.</li>
					<li>Insert one of the update site URLs above. This site does not contain any optional third party components. <a href="#third-party">See below</a> for a list of third party download links.</li>
					<li>Select the TEA features you want to install (at least <e>TEA Core</e>) and complete the wizard by clicking the <e>Next</e> button until you can click <e>Finish</e>.</li>
					<li>After a quick download and a restart of Eclipse, TEA is ready to use.</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<h2>Third party dependencies (optional)</h2>
				<p>TEA provides integration into several external components. These integration libraries require the external components to be present to be able to install them.</p>
				<p><a href="https://www.eclipse.org/ease/download/" target="_blank" class="has-popover btn btn-primary btn-medium">Eclipse EASE (for scripting support)</a></p>
				<p><a href="https://mduft.github.io/lcdsl-latest" target="_blank" class="has-popover btn btn-primary btn-medium">LcDsl (for launching support)</a></p>
			</div>
		</div>
	</div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/tea/footer.php'; ?>
</body>

</html>
