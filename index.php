<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Multiple</title>
	<link rel="stylesheet" href="/lib/bootstrap/bootstrap-4.1.3-dist/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-dark bg-dark">
		<a href="#" class="navbar-brand">Multiple</a>
	</nav>
	<div class="container">
		<div class="row mt-3">
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">ร้านซ่อนกลิ่น</h4>
						<form action="save.php" method="post">
							<div class="form-group">
							 	<label for="">ชื่อผุ้สั่ง</label>
								 <input type="text" name="cFname" class="form-control">
							</div>
							<div class="form-group">
							 	<label for="">เบอร์มือถือ</label>
								 <input type="text" name="cMobile" class="form-control">
							</div>
							<div class="form-group">
							 	<label for="">เครื่องดื่มที่สั่ง</label>
								<ol>
									<li>
										<div class="d-flex mb-2">
											<input type="text" name="cOrder[]" class="form-control">
										</div>
									</li>
									<li>
										<div class="d-flex mb-2">
											<input type="text" name="cOrder[]" class="form-control">
										</div>
									</li>
								</ol>
								 
							</div>
							<button class="btn btn-success">Save</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="/lib/bootstrap/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
	<script src="/lib/jquery/jquery-3.2.1.min.js"></script>
	<script src="/lib/bootstrap/popper.min.js"></script>
</body>
</html>