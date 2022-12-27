<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Henexopay : Success</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<style>
	#header {
		transition: all 0.5s;
		z-index: 997;
		padding: 20px 0;
	}
	.fixed-top {
		position: fixed;
		top: 0;
		right: 0;
		left: 0;
		z-index: 1030;
	}
	#xpay {
		width: 100%;
		height: 100vh;
		background: url(<?=base_url("assets/image/payment.png")?>) top center;
		background-size: cover;
		position: relative;
	}
	section {
		padding: 60px 0;
		overflow: hidden;
	}
	#xpay {
		background-attachment: fixed;
	}
	#xpay .xpay-container {
		position: absolute;
		bottom: 0;
		top: 0;
		left: 0;
		right: 0;
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;
		text-align: center;
		padding: 0 15px;
	}
	#xpay h3 {

		font-size: 26px;
		padding: 10px 30px;
		margin-bottom: 30px;
		border-radius: 50px;
	}
	#xpay:before {
		content: "";
		background: rgba(0, 0, 0, 0.6);
		position: absolute;
		bottom: 0;
		top: 0;
		left: 0;
		right: 0;
	}
	.card {
		border-radius: 8px !important;
	}
</style>
<body>

<header id="header" class="fixed-top">
	<div class="container d-flex align-items-center justify-content-between">
		<h1 class="logo">
			<img alt="Henexopay" src="<?=base_url("assets/image/logo.png")?>" width="214">
		</h1>
	</div>
</header>
<section id="xpay">
	<div class="xpay-container">
		<div class="card">
			<div class="card-body">
				<h3 class="mb-0 pb-2">Payment transaction completed successfully.</h3>
			</div>
		</div>
	</div>
</section>
</body>

</html>



