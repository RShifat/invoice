<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
		<link rel="stylesheet" href="bootstrap.min.css">
		<link rel="stylesheet" href="">
	</head>
	<body>
		<div class="container mt-5">
			<img src="logo/logo3.png" width="300px" height="100px" style="margin-left: 300px;"  alt="">
			<?php
			require 'connection.php';
			if (isset($_POST['print'])) {
			?>
			<script>
				window.print()
			</script>
			<?php
			}
			?>
			<?php
			require("connection.php");
			$token=$_GET['token'];
			$display="SELECT TOKEN,NAME,EMAIL,PHONE,CHECKIN,CHECKOUT,ROOM,ROOMTYPE,PACKAGE FROM saintmartin WHERE TOKEN='$token'";
			$query=mysqli_query($connect,$display);
			while ($showdata=mysqli_fetch_array($query)) {
			?>
			<form action="" method="post" accept-charset="utf-8" style="margin-left: 250px;">
				<div class="row mb-3 mt-2">
					<div class="col">
						<label for="placename" class="form-label text-dark"><b>Token Number</b></label>
					</div>
					<div class="col">
						<input type="text" name="token" value="<?php echo $showdata['TOKEN'] ?>" style="outline: none; border: none;" class="form-control float-right" placeholder="" aria-label="placename">
					</div>
				</div>
				<div class="row mb-3 mt-2">
					<div class="col">
						<label for="placename" class="form-label text-dark"><b>Name</b></label>
					</div>
					<div class="col">
						<input type="text" name="token" value="<?php echo $showdata['NAME'] ?>" style="outline: none; border: none;" class="form-control float-right" placeholder="" aria-label="placename">
					</div>
				</div>
				<div class="row mb-3 mt-2">
					<div class="col">
						<label for="placename" class="form-label text-dark"><b>Email</b></label>
					</div>
					<div class="col">
						<input type="text" name="token" value="<?php echo $showdata['EMAIL'] ?>" style="outline: none; border: none;" class="form-control float-right" placeholder="" aria-label="placename">
					</div>
				</div>
				<div class="row mb-3 mt-2">
					<div class="col">
						<label for="placename" class="form-label text-dark"><b>Phone</b></label>
					</div>
					<div class="col">
						<input type="text" name="token" value="<?php echo $showdata['PHONE'] ?>" style="outline: none; border: none;" class="form-control" placeholder="" aria-label="placename">
					</div>
				</div>
				<div class="row mb-3 mt-2">
					<div class="col">
						<label for="placename" class="form-label text-dark"><b>Check In</b></label>
					</div>
					<div class="col">
						<input type="text" name="token" value="<?php echo $showdata['CHECKIN'] ?>" style="outline: none; border: none;" class="form-control" placeholder="" aria-label="placename">
					</div>
				</div>
				<div class="row mb-3 mt-2">
					<div class="col">
						<label for="placename" class="form-label text-dark"><b>Check Out</b></label>
					</div>
					<div class="col">
						<input type="text" name="token" value="<?php echo $showdata['CHECKOUT'] ?>" style="outline: none; border: none;" class="form-control" placeholder="" aria-label="placename">
					</div>
				</div>
				<div class="row mb-3 mt-2">
					<div class="col">
						<label for="placename" class="form-label text-dark"><b>Room</b></label>
					</div>
					<div class="col">
						<input type="text" name="token" value="<?php echo $showdata['ROOM'] ?>" style="outline: none; border: none;" class="form-control" placeholder="" aria-label="placename">
					</div>
				</div>
				<div class="row mb-3 mt-2">
					<div class="col">
						<label for="placename" class="form-label text-dark"><b>Room Type</b></label>
					</div>
					<div class="col">
						<input type="text" name="token" value="<?php echo $showdata['ROOMTYPE'] ?>" style="outline: none; border: none;" class="form-control" placeholder="" aria-label="placename">
					</div>
				</div>
				<div class="row mb-3 mt-2">
					<div class="col">
						<label for="placename" class="form-label text-dark"><b>Package</b></label>
					</div>
					<div class="col">
						<input type="text" name="token" value="<?php echo $showdata['PACKAGE'] ?>" style="outline: none; border: none;" class="form-control" placeholder="" aria-label="placename">
					</div>
				</div>
				<?php
				require("connection.php");
				$token=$_GET['token'];
				$display="SELECT ROOM,FOOD,OTHERS,VAT,DISCOUNT,TOTAL,PMETHOD FROM bil WHERE TOKEN='$token'";
				$query=mysqli_query($connect,$display);
				while ($showdata=mysqli_fetch_array($query)) {
				?>
				<div class="row mb-3 mt-2">
					<div class="col">
						<label for="placename" class="form-label text-dark"><b>Room Price</b></label>
					</div>
					<div class="col">
						<input type="text" name="token" value="<?php echo $showdata['ROOM'] ?>" style="outline: none; border: none;" class="form-control" placeholder="" aria-label="placename">
					</div>
				</div>
				<div class="row mb-3 mt-2">
					<div class="col">
						<label for="placename" class="form-label text-dark"><b>Food Price</b></label>
					</div>
					<div class="col">
						<input type="text" name="token" value="<?php echo $showdata['FOOD'] ?>" style="outline: none; border: none;" class="form-control" placeholder="" aria-label="placename">
					</div>
				</div>
				<div class="row mb-3 mt-2">
					<div class="col">
						<label for="placename" class="form-label text-dark"><b>Others</b></label>
					</div>
					<div class="col">
						<input type="number" name="token" value="<?php echo $showdata['OTHERS'] ?>" style="outline: none; border: none;" class="form-control" placeholder="" aria-label="placename">
					</div>
				</div>
				<div class="row mb-3 mt-2">
					<div class="col">
						<label for="placename" class="form-label text-dark"><b>Discount</b></label>
					</div>
					<div class="col">
						<input type="number" name="token" value="<?php echo $showdata['DISCOUNT'] ?>" style="outline: none; border: none;" class="form-control" placeholder="" aria-label="placename">
					</div>
				</div>
				<div class="row mb-3 mt-2">
					<div class="col">
						<label for="placename" class="form-label text-dark"><b>Vat</b></label>
					</div>
					<div class="col">
						<input type="number" name="token" value="<?php echo $showdata['VAT'] ?>" style="outline: none; border: none;" class="form-control" placeholder="" aria-label="placename">
					</div>
				</div>
				<div class="row mb-3 mt-2">
					<div class="col">
						<label for="placename" class="form-label text-dark"><b>Payment Method</b></label>
					</div>
					<div class="col">
						<input type="text" name="token" value="<?php echo $showdata['PMETHOD'] ?>" style="outline: none; border: none;" class="form-control" placeholder="" aria-label="placename">
					</div>
				</div>
				<hr class="mb-4 mt-2 border-dark" style="margin-right: 250px;">
				<div class="row mb-3 mt-2">
					<div class="col">
						<label for="placename" class="form-label text-dark"><b>Total</b></label>
					</div>
					<div class="col">
						<input type="number" name="token" value="<?php echo $showdata['TOTAL'] ?>" style="outline: none; border: none;" class="form-control" placeholder="" aria-label="placename">
					</div>
				</div>
				<?php
				}
				?>
				<input type="submit" name="print" value="PRINT" style="margin-left: 200px;" class="btn btn-outline-info mb-3">
				<?php
				}
				?>
			</div>
			<div class="mt-5 d-flex justify-content-around">
				<div>
					<hr class="w-35 border-dark">
					<b>Authority Signature</b>
				</div>
				<div>
					<hr class="w-35 border-dark">
					<b>Guest Signature</b>
				</div>
			</div>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
		</body>
	</html>