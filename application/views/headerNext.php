<!DOCTYPE html>
<html>
<head>
	<title>IMPULSE</title>
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-4.2.1.css')?>"/>
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>"/>
	<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
	<script src="<?= base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
	<style type="text/css">
	#block{
      background-color: white;
      color: #676767;
      padding: 14px 25px;
      margin-bottom: 25px;
      text-decoration: none;
      display: inline-block;
      font-family: Roboto;
      font-style: normal;
      font-weight: 400;
      font-size: 18px;
      line-height: 20px;
      background: #FFFFFF;
	  box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.2);
	  border-radius: 8px;
    }
    #block:hover{
    	color:white;
    	background: linear-gradient(127.86deg, #192E79 -24.7%, #2265C9 33.63%);
		box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.2);
		border-radius: 8px;
    }
    #aktip{
    	color:white;
    	background: linear-gradient(127.86deg, #192E79 -24.7%, #2265C9 33.63%);
		box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.2);
		border-radius: 8px;
    }
    .atas{
    	box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.10);
  	}
  	#btnDownloadSoal{
  		background: #FFD600;
		border-radius: 8px;
		color: #1A3481;
		border: none;
		font-family: Arial Rounded MT Bold;
		font-weight: 500;
		font-size: 24px;
		line-height: 146%;
  	}
  	#btnDownloadSoal:hover{
  		background: #1A3481;
		border-radius: 8px;
		color: #FFD600;
		border: none;
		box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.25);
  	}
    .btnEditProfil{
      width: 100%;
      height: 50px;
      background: #30E04C;
      border-radius: 5px;
      margin-left: 10px;
      text-decoration: none;
      border: none;
      color:white;
      margin-bottom: 50px;
      font-family: Arial Rounded MT Bold;
      font-weight: 500;
      font-size: 18px;
      background: linear-gradient(127.86deg, #192E79 -24.7%, #2265C9 33.63%);
    }
    .btnEditProfil:hover{
      box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.4);
    }
	</style>
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
	<nav class="navbar navbar-expand-sm navbar-light fixed-top atas" style="background-color: #ffffff">
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