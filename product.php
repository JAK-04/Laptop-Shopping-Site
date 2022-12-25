<?php

include 'constants.php';

session_start();
$Ind = 1;
if (isset($_GET['id'])) {
	$Ind = $_GET['id'];
}
$sql = "SELECT * FROM category WHERE Pid = $Ind ";
$r = mysqli_query($con, $sql);
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="webcss.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Product</title>
</head>

<body>
	<div class="modal modal-tour position-static d-block py-5" tabindex="-1" role="dialog" id="modalTour" style="background-color: whitesmoke;">
		<div class="modal-dialog" role="document">
			<div class="modal-content rounded-4 shadow">
				<?php
				while ($row = mysqli_fetch_assoc($r)) {
				?>

					<div class="modal-body p-5">
						<h2 class="fw-bold mb-0"><?php echo $row['Pname']; ?></h2>

						<div class="col" style="margin-top: 20px;">
							<div class="h-60">
								<img src="img/<?php echo $row['Pimg']; ?>" class="card-img-top" alt="...">
							</div>
						</div>

						<ul class="d-grid gap-4 my-5 list-unstyled">
							<li class="d-flex gap-4">
								<svg class="bi text-muted flex-shrink-0" width="48" height="48">
									<use xlink:href="#grid-fill" />
								</svg>
								<div>
									<h5 class="mb-0"><?php echo $row['Pcat']; ?></h5>
								</div>
							</li>
							<li class="d-flex gap-4">
								<svg class="bi text-warning flex-shrink-0" width="48" height="48">
									<use xlink:href="#bookmark-star" />
								</svg>
								<div>
									<h5 class="mb-0"><?php echo $row['Pprice']; ?></h5>
								</div>
							</li>
							<li class="d-flex gap-4">
								<svg class="bi text-warning flex-shrink-0" width="48" height="48">
									<use xlink:href="#bookmark-star" />
								</svg>
								<div>
									<h5 class="mb-0"><?php echo $row['Pdesc']; ?></h5>
								</div>
							</li>
						</ul>
					</div>
				<?php
				}
				?>

			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>