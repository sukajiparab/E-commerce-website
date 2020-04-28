<!DOCTYPE html>
<html lang="en">
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact | Life Style Store</title>
        <style type="text/css">
        	.p1{
        		text-align: justify;
        	}
        </style>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
include 'includes/header.php';
?>
<div class="container" id="content">
	<div class="row">
	<div class="col-lg">
		<img src="img/contact.png" style="float: right;">
		<h1>Live support</h1>
		<p id="p1">The Contact Us page is one of the most visited pages on any website. That seems like a compelling enough reason to redesign your Contacts section to better meet your users' needs and grab their attention. While working on this post, I came across hundreds of beautifully made websites, yet their Contact Us Pages were, for the most part, disappointing. Most Contact pages are made for show, with just an email address,phone, location, and some short boring text on a plain background.reason to redesign your Contacts section to better meet your users' needs and grab their attention. While working on this post, I came across hundreds</p>
	</div><br><br>
	<div class="col-lg">
		<div style="float: right;">
			<h1>COMPANY INFORMATION</h1><br>
			<p id="p1">Gurgoan, India - 122018</p><br>
			<p id="p1">phone : +91 8448444853</p><br>
			<p id="p1">email : training@internshala.com</p>
		</div>
		<h1>CONTACT US</h1>
		<div style="float: left;">
		<form>
			<div class="form-group">
				<input type="text" name="name" placeholder="Name" class="form-control" required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
			</div>
			<div class="form-group">
				<input type="email" name="email" placeholder="Email" class="form-control"
				pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required = "true">
			</div>
			<div class="form-group">
				<textarea rows="5" cols="60" placeholder="Address"></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
	</div>
	</div>
</div>
</div>
<?php
include 'includes/footer.php';
?>
</body>
</html>