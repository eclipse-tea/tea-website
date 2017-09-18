<?php

function niceId($image) {
	return pathinfo($image, PATHINFO_FILENAME);
}

function modalImageDialog($image, $title) {
	$name = niceId($image);
	$html = <<<HTML
		<div id="$name" class="modal fade" style="display: none;" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
      						<h3 class="modal-title">$title</h3>
					</div>
					<div class="modal-body">
						<img class="img-responsive" src="$image"/>
					</div>
				</div>
			</div>
		</div>
HTML;
	echo "$html";
}

function imageThumb($image, $title) {
	$name = niceId($image);
	$html = <<<HTML
		<a class="thumbnail" style="max-width: 250px;" href="#" data-toggle='modal' data-target='#$name'><img src="$image" alt="$title"/></a>
HTML;
	echo "$html";
}

?>