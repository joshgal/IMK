<html>
<head>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-4.2.1.css')?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>"/>
</head>
<body style="background-color: white;">
    <div class="col-lg-12 body">
        <div class="boundary">
            <img src="<?= base_url('assets/img/login-bg.png')?>" height="100%" width="600px">
        </div>
        <div class="login">
            <form method="post" action="<?= base_url('index.php/praktikanController/')?>">
            
<div class="logo-white">
<center>
<a href="<?= site_url('home/index')?>">
<img src="<?= base_url('assets/img/logo-white.png')?>" width="250px">
</a>
</center>
</div>

                <div class="email" style="color:#2265C9; font-size:18px;">NIM<br>
                <input type="number" name="email" id="email" style="width:100%; padding: 8px 8px;"/>
                </div>
                
                <div class="password" style="color:#2265C9; font-size:18px;">Password<br>
                <input type="password" name="pass" id="pass"/>
                </div>
                <br>
                <input type="submit" name="login" id="login" value="Log In" style="background: linear-gradient(to bottom, #2265C9 0%, #192E79 100%)"/>
            </form>
        </div>
    </div>
</body>
</html>