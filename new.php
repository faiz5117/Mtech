<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Mtech Laptop Clinic</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Mtech Laptop Clinic</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Features</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container">


		<form action="new.php" id="customer-form">
			<h3 class="display-4 text-center">New Customer</h3>
			<div class="row">
				<div class="col">
					<input type="text" class="form-control mb-2" placeholder="Name" name="name">
				</div>
				<div class="col">
					<input type="text" class="form-control mb-2" placeholder="Address" name="addr">
				</div>
			</div>

			<div class="row">
				<div class="col">
					<input type="number" class="form-control" placeholder="Phone Number" name="phone">
				</div>
				<div class="col">
					<input type="text" class="form-control" placeholder="Place" name="place">
				</div>
			</div>
			<input type="submit" id="customer-submit" class="btn btn-primary btn-block mt-2" value="Submit">
		</form>    

		<form id="product-form" class="mt-3" style="display: none;">
			<h3 class="display-4 text-center">Add Product</h3>
			<div class="row">
				<div class="col">
					<input type="text" class="form-control mb-2" placeholder="Product Name" name="prod">
				</div>
				<div class="col">
					<input type="text" class="form-control mb-2" placeholder="Model Number" name="model">
				</div>
			</div>

			<div class="row">
				<div class="col">
					<input type="text" class="form-control" placeholder="Complaint" name="phone">
				</div>
				<div class="col mt-1 ml-2">
					<span>Components Included: </span>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" id="check1" value="battery">
						<label class="form-check-label" for="check1">Battery</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" id="check2" value="charger">
						<label class="form-check-label" for="check2">Charger</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" id="check3" value="bag">
						<label class="form-check-label" for="check3">Bag</label>
					</div>
				</div>
			</div>
			<input class="btn btn-primary btn-block mt-2" type="submit" value="Submit">
		</form>    
	</div>














	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script type="text/javascript">
		const productForm = document.getElementById('product-form');
		const customerForm = document.getElementById('customer-form');
		const customerSubmit = document.getElementById('customer-submit');

		customerForm.addEventListener('submit', displayProductForm);

		function displayProductForm(event) {
			event.preventDefault();
			customerSubmit.style.display = 'none';
			productForm.style.display = 'block';
		}
	</script>
</body>
</html>