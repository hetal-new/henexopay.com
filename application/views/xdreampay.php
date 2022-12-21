<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>xDreamPay</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

<div class="container mt-3">
	<h2 class="text-center">xDreamPay</h2>
	<form action="<?= base_url('/pay') ?>" method="post" class="">
		<div class="form-row  justify-content-center">
			<div class="form-group col-md-3 mb-2">
				<div class="input-group pr-3">
					<label for="email" class="pr-1 align-self-end ">Amount:</label>
					<input type="text" class="form-control" id="amount" placeholder="Enter amount" name="amount" value="<?php if(isset($amount)){ echo $amount;}?>">

				</div>
			</div>
		</div>


		<div class="col text-center">
			<span asp-validation-for="Code" class="text-danger "><?php 
			    echo validation_errors();
			if(isset($exception_error)){
			     echo "<p>". $exception_error."</p>";
			}
			 ?></span>
	        <button type="submit" class="btn btn-primary">Submit</button>
		</div>

	</form>

</div>

</body>
</html>
