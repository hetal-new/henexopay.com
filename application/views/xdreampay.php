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

<div class="container">
	<h2>xDreamPay</h2>

	<form action="<?= base_url('/pay') ?>" method="post" class="">
		<div class="input-group pr-3 w-25 mb-1">
			<label for="email" class="pr-1">Amount:</label>
			<input type="text" class="form-control" id="amount" placeholder="Enter amount" name="amount">

		</div>
		<span asp-validation-for="Code" class="text-danger "><?php echo validation_errors(); ?></span>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>

</body>
</html>
