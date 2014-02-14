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
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th>Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($product_listing as $prod) { ?>
						<tr>
							<td><?php echo $prod->product_name ?></td>
							<td>
								
								<?php button_action("panel/product/update/$prod->product_id","Update") ?>
								<?php button_action("panel/product/delete/$prod->product_id","Delete") ?>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
