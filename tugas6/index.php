<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Said Site</title>

	<meta name="description" content="Source code generated using layoutit.com">
	<meta name="author" content="LayoutIt!">

	<script src="https://kit.fontawesome.com/1ad10804c0.js" crossorigin="anonymous"></script>

	<link href="./css/bootstrap.min.css" rel="stylesheet">
	<link href="./css/style.css" rel="stylesheet">

</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 ps-0 pe-0">
				<div class="header">
					<h1>Said Al Khairi</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 ps-0 pe-0">
				<?php include_once 'navbar.php'; ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<br>
				<?php include_once 'sosmed.php'; ?>
			</div>
			<div class="col-md-9">
				<br>
				<main id="main">
					<?php error_reporting(0);
					//tangkap request halaman di url
					$hal = $_REQUEST['hal'];
					if (!empty($hal)) {
						include_once $hal . '.php';
					} else {
						include_once 'home.php';
					}
					?>
				</main><!-- End #main -->
			</div>
		</div>
		<?php include_once 'footer.php'; ?>
	</div>

	<script src="./js/jquery.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/scripts.js"></script>
</body>

</html>