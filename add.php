<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mockup</title>
	<?php $this->load->view('layout/head') ?>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-3">
				<?php $this->load->view('layout/sidebar') ?>
			</div>
			<div class="col-xs-9">
				<div class="box">
					<form action="" method="POST" role="form">
						<?php alert() ?>
						<legend>Add Product</legend>
						<?php form_text('name') ?>
						<?php form_textarea('description') ?>
						<?php form_button('Add Product') ?>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
