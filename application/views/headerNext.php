<!DOCTYPE html>
<html>
<head>
	<title>IMPULSE</title>
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-4.2.1.css')?>"/>
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>"/>
	<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
	<script src="<?= base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
</head>
<script>
$(document).ready(function(){
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
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
<body>
	<nav class="navbar navbar-expand-sm navbar-light fixed-top" style="background-color: #ffffff">
	<!-- Links -->
	  <ul class="navbar-nav ml-auto">
	    <li class="nav-item">
	      <a class="nav-link" href="<?= base_url('index.php/praktikanController/index')?>">Beranda</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="<?= base_url('index.php/praktikanController/halamanProfile')?>">Akun</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">Logout</a>
	    </li>
	  </ul>
	</nav>