<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<title>LOGIN</title>

	<link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
	<link rel="stylesheet" href="css/bootstrap-login-form.min.css" />
	<link rel="stylesheet" href="css/style.css" />

</head>

<body>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "<script>alert('Login gagal! username dan password salah!')</script>";
		}else if($_GET['pesan'] == "logout"){
			echo "<script>alert('Anda telah berhasil logout')</script>";
		}else if($_GET['pesan'] == "belum_login"){
			echo "<script>alert('Anda harus login untuk mengakses halaman admin')</script>";
		}
	}
	?>

	<section class="vh-100 custom">
		<div class="container py-5 h-100">
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col col-xl-10">
					<div class="card" style="border-radius: 1rem;">
						<div class="row g-0">
							<div class="col-md-6 col-lg-5 d-none d-md-block">
								<img src="images/bg-logn.png" alt="login form" class="img-fluid"
									style="border-radius: 1rem 0 0 1rem;" />
							</div>
							<div class="col-md-6 col-lg-7 d-flex align-items-center">
								<div class="card-body p-4 p-lg-5 text-black">
									<form method="POST" action="cek_login.php">

										<div class="d-flex align-items-center mb-3 pb-1">
											<i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
											<span class="h1 fw-bold mb-0">Login</span>
										</div>

										<h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your
											account</h5>

										<div class="form-outline mb-4">
											<input type="text" class="form-control form-control-lg" name="username" />
											<label class="form-label">Username</label>
										</div>

										<div class="form-outline mb-4">
											<input type="password" class="form-control form-control-lg"
												name="password" />
											<label class="form-label">Password</label>
										</div>

										<div class="pt-1 mb-4">
											<input class="btn btn-dark btn-lg btn-block" type="submit"
												value="LOGIN"></input>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript" src="js/mdb.min.js"></script>
	<script type="text/javascript"></script>
</body>

</html>