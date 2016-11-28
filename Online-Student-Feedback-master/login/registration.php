<!DOCTYPE html>
<html>
<head>
	<title>Registraton</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>

	<div class="container" style="margin: 0 auto; width: 70%">

		<div class="row" style="padding: 20px 20px 20px 20px">
			
			<div class="col-md-7 col-sm-7 col-md-offset-2 col-sm-offset-2">
				
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="alert <?php echo $_GET['class'] ?>">
							<?php 
								if (isset($_GET['message'])) {
									echo $_GET['message'];
								}
							?>
						</div>
					</div>
				</div>
				<form method="POST" action="register.php">
					<center>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<span class="pull-right" style="font-size: 15px">
								<a href="login.php">Back</a>
							</span>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<h3>User Registration</h3>
						</div>
					</div>
					
						<div id=register>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="form-group">
								<label>ID</label>
								<input type="text" name="Roll_No" placeholder="ID" readonly="Roll_No" class="form-control">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="Name" placeholder="Username" class="form-control">
							</div>
						</div>
					</div>					

					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="form-group">
								<label>First Name</label>
								<input type="text" name="first_name" placeholder="First Name" class="form-control">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="form-group">
								<label>Last Name</label>
								<input type="text" name="last_name" placeholder="Last Name" class="form-control">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="form-group">
								<label>Email Address</label>
								<input type="text" name="email_address" placeholder="Email Address" class="form-control">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="Pass" placeholder="*********" class="form-control">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="form-group">
								<label>Confirm Password</label>
								<input type="password" name="confirm_password" placeholder="Confirm Password" class="form-control">
							</div>
						</div>
					</div>

 					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="form-group">
								<label>Birthday</label>
								<input type="text" name="birthday" placeholder="Birthday" class="form-control datepicker">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="form-group">
								<label>Gender</label>
								<select name="gender" class="form-control">
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="form-group">
								<label>Civil Status</label>
								<select name="civil_status" class="form-control">
									<option value="Single" name="Single">Single</option>
									<option value="Married" name="Married">Married</option>
									<option value="Widowed" name="Widowed">Widowed</option>
								</select>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="form-group">
								<label>Contact No.</label>
								<input type="text" name="contact_no" placeholder="Contact No" class="form-control">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="form-group">
								<label>Address</label>
								<input type="text" name="address" placeholder="Address" class="form-control">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 col-sm-12">

							<button type="submit" class="btn btn-primary pull-right" href="login.php">Register</button>
						</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				</center>
				</form>

			</div>

		</div>

	</div>

</body>
</html>