<!DOCTYPE html>
<html>

<head>
	<title>IMPULSE</title>
	<link href="assets/img/iflab.gif" rel="shortcut icon" />
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-4.2.1.css') ?>" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
	<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
	<script src="<?= base_url('assets/js/jquery-3.3.1.min.js') ?>"></script>
</head>
<script>
	$(document).ready(function() {
		// Add smooth scrolling to all links
		$("a").on('click', function(event) {

			// Make sure this.hash has a value before overriding default behavior
			if (this.hash !== "") {
				// Prevent default anchor click behavior
				event.preventDefault();

				// Store hash
				var hash = this.hash;

				// Using jQuery's animate() method to add smooth page scroll
				// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
				$('html, body').animate({
					scrollTop: $(hash).offset().top
				}, 800, function() {

					// Add hash (#) to URL when done scrolling (default click behavior)
					window.location.hash = hash;
				});
			} // End if
		});
	});
</script>

<body>
<<<<<<< HEAD
	<nav class="navbar navbar-expand-sm navbar-light fixed-top" style="background-color: #ffffff">
		<!-- Links -->
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="#mulai">Mulai Praktikum</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#nilai">Nilai Praktikum</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#upload">Upload Jawaban</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('index.php/praktikanController/halamanProfile') ?>">Akun</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Logout</a>
			</li>
		</ul>
=======
	<nav class="navbar navbar-expand-sm navbar-light fixed-top atas" style="background-color: #ffffff">
	<!-- Links -->
	  <ul class="navbar-nav ml-auto">
	    <li class="nav-item">
	      <a class="nav-link" href="#mulai">Mulai Praktikum</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#nilai">Nilai Praktikum</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#upload">Upload Jawaban</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="<?= base_url('index.php/praktikanController/halamanProfile')?>">Akun</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">Logout</a>
	    </li>
	  </ul>
>>>>>>> 7c1fb93df16077d117287918244588eebfb662da
	</nav>