<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<?php include './view/header.php' ?>
	<div class="container">
		<div class="row">
			<?php include './view/left.php' ?>

			<div class="col-lg-9">
				<!-- TAB NAVIGATION -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="active"><a href="" role="tab" data-toggle="tab">attachment list</a>
					</li>
				</ul>
				<table class="table table-hover">
					<thead>
					<tr>
						<th>id</th>
						<th>img</th>
						<th>imgurl</th>
						<th>create time</th>
						<th>action</th>
					</tr>
					</thead>
					<tbody>
					
					</tbody>
				</table>

			</div>

		</div>

	</div>

	<?php include './view/footer.php' ?>

	</body>
</html>