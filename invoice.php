<!DOCTYPE html>
<html>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Invoice</title>
	</head>
	<body>
		<div class="container  mt-5">
			<div class="tab-pane" id="customer">
				<h5  class="text-center mb-3">Invoice</h5>
				<!-- Search form -->
					<div class="md-form mt-0 mb-3">
					<?php
					require 'connection.php';
					if (isset($_REQUEST['keyword'])) {
					$key=$_REQUEST['keyword'];
					$show="SELECT * FROM saintmartin WHERE TOKEN LIKE '%$key%'";
										
					}else{
						$show="select * from saintmartin order by ID desc limit 3";
						$key="";
					}
					$query=mysqli_query($connect,$show);
					?>
					<form action="" method="post" accept-charset="utf-8">
						<div class="row">
							<div class="col">
								<input class="form-control" type="text" name="keyword" placeholder="Search" value="<?php echo $key; ?>" aria-label="Search">
							</div>
						</div>
						
						
					</form>
				</div>
				<div class="mb-3">
					<div class="table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">SL</th>
									<th scope="col">Name</th>
									<th scope="col">Email</th>
									<th scope="col">Phone</th>
									<th scope="col">Checkin</th>
									<th scope="col">Checkout</th>
									<th scope="col">Room</th>
									<th scope="col">Roomtype</th>
									<th scope="col">Package</th>
									<th scope="col">Person</th>
									<th scope="col">Token</th>
									<th scope="col">Date</th>
									<th scope="col">Bill</th>
								</tr>
							</thead>
							<tbody>
								<?php
								 while ($showlist=mysqli_fetch_array($query)){
								?>
								<tr>
									<td><?php echo $showlist['ID']; ?></td>
									<td><?php echo $showlist['NAME']; ?></td>
									<td><?php echo $showlist['EMAIL']; ?></td>
									<td><?php echo $showlist['PHONE']; ?></td>
									<td><?php echo $showlist['CHECKIN']; ?></td>
									<td><?php echo $showlist['CHECKOUT']; ?></td>
									<td><?php echo $showlist['ROOM']; ?></td>
									<td><?php echo $showlist['ROOMTYPE']; ?></td>
									<td><?php echo $showlist['PACKAGE']; ?></td>
									<td><?php echo $showlist['PERSON']; ?></td>
									<td><?php echo $showlist['TOKEN']; ?></td>
									<td><?php echo $showlist['DATE']; ?></td>
									<td> <a href="printbill.php?token=<?php echo $showlist['TOKEN']; ?>">PRINT</a></td>
								</tr>
								<?php
								} 
								?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="md-form mt-5 mb-3">
					<?php
					require 'connection.php';
					if (isset($_REQUEST['addinvoice'])) {
						$tnumber=mysqli_real_escape_string($connect,$_REQUEST['token']);
						$room=mysqli_real_escape_string($connect,$_REQUEST['roomprice']);
						$food=mysqli_real_escape_string($connect,$_REQUEST['foodprice']);
						$others=mysqli_real_escape_string($connect,$_REQUEST['others']);
						$discount=mysqli_real_escape_string($connect,$_REQUEST['discount']);
						$vat=mysqli_real_escape_string($connect,$_REQUEST['vat']);
						$total=mysqli_real_escape_string($connect,$_REQUEST['total']);
						$pmethod=mysqli_real_escape_string($connect,$_REQUEST['pmethod']);
						$insert="insert into bil(TOKEN,ROOM,FOOD,OTHERS,DISCOUNT,VAT,TOTAL,PMETHOD)values('$tnumber','$room','$food','$others','$discount','$vat','$total','$pmethod')";
						$query=mysqli_query($connect,$insert);
					}
					?>
					<form action="" method="post" accept-charset="utf-8">
						<div class="row mb-3">
							<div class="col">
								<label for="placename" class="form-label text-danger">Token Number</label>
								<input type="text" name="token" class="form-control" placeholder="" aria-label="placename">
							</div>
							<div class="col">
								<label for="Placelink" class="form-label text-danger">Room Price</label>
								<input type="number" name="roomprice" class="form-control" placeholder="" aria-label="Placelink">
							</div>
						</div>
						<div class="row mb-3">
							<div class="col">
								<label for="placename" class="form-label text-danger">Food Price</label>
								<input type="number" name="foodprice" class="form-control" placeholder="" aria-label="placename">
							</div>
							<div class="col">
								<label for="Placelink" class="form-label text-danger">Others</label>
								<input type="number" name="others" class="form-control" placeholder="" aria-label="Placelink">
							</div>
							<div class="col">
								<label for="Placelink" class="form-label text-danger">Discount</label>
								<input type="number" name="discount" class="form-control" placeholder="" aria-label="Placelink">
							</div>
						</div>
						<div class="row mb-3">
							<div class="col">
								<label for="placename" class="form-label text-danger">Govt. Vat</label>
								<input type="number" name="vat" class="form-control" placeholder="" aria-label="placename">
							</div>
							<div class="col">
								<label for="Placelink" class="form-label text-danger">Total </label>
								<input type="number" name="total" class="form-control" placeholder="" aria-label="Placelink">
							</div>
							<div class="col">
								<label for="Placelink" class="form-label text-danger">Payment Method </label>
								<input type="text" name="total" class="form-control" placeholder="" aria-label="Placelink">
							</div>
						</div>
						<div class="mb-3">
							<center>
							<input type="checkbox" name="confirm" class="form-check-input" id="exampleFormControlInput1" required>
							<label for="exampleFormControlInput1" class="form-label text-danger"><b>Confirm Details</b></label>
							</center>
						</div>
						<input type="submit" name="addinvoice" class="btn btn-primary mb-3 mt-2 form-control" value="Insert Ammount">
					</form>
				</div>
			</div>
		</div>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
	</body>
</html>