<?php
session_start();
if (isset($_SESSION['admin_username'])) {
    header("location:index2.php");
}
include("inc_koneksi.php");
$username = "";
$password = "";
$err = "";

if (isset($_POST['login'])) { 
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == '' or $password == '') {
        $err .= "<li>Silahkan masukan username dan password</li>";
    }

    if (empty($err)) {
        $sql1 = "select * from admin where username = '$username'";
        $q1 = mysqli_query($koneksi, $sql1);
        $r1 = mysqli_fetch_array($q1);

    
        if ($r1['username'] == 'lailanrazz' && $r1['password'] == md5('lela')) {
            $_SESSION['admin_username'] = $username;
            header("location:web2.php");
            exit();
        } else {
            $err .= "<li>Akun tidak ditemukan</li>";
        }
    }
}
?>
<!doctype html>
<html class="no-js" lang="">

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="webthemez">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Akun</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/font-icon.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" type="text/css" href="css/style4.css" />
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">
<link rel="icon" href="http://luk.staff.ugm.ac.id/logo/UGM/Resmi/Warna.gif" type="image/x-icon">
</head>

<body>
  <section class="banner" role="banner" id="home">
    <header id="header" class="fix-hed"> 
    <div class="header-content clearfix"> <a href="#contact"><img src="Database/Nonspatial/Icon/sipenca.png" width="160px" height="40px" alt="Logo"></a>
        <nav class="navigation" role="navigation">
          <ul class="primary-nav">
       <li><a href="index.html">Beranda</a></li>
          </ul>
        </nav>
        <a href="#" class="nav-toggle">Menu<span></span></a> </div>
    </header>
    <!-- banner text --> 

<section id="detailsPage">
  <div class="container"> 
  
    <div class="row">  
	<div class="section-header">
                <h2 class="wow fadeInDown animated">Login Administrator</h2>
            </div>
              
</div> 
</div>
</section>

<div class="container">
<div class="login">
<div class="row">
<div>      
  <form method="post" name="formlogin" action="">
    <!-- <table border="0" cellspacing="0" width="400" cellpadding="5" align="center"> -->
      <?php
      if($err){
        echo "<ul>$err</ul>";
      }
      ?>
    
      <label for="">Email</label>
      <input type="text" value="<?php echo $username ?>" 
      name = "username" size="30" class="textlogin" placeholder="Isikan Username..."/>
      <label for="">Password</label>
      <input type="password" 
      name="password" size="30" class="textlogin" placeholder="Isikan Password..."/>
      <input id="submit-btn" type="submit" name="login"
          value="Login" class="morebtn"/>
      <p>
        Mode Tamu? Klik <a href="index.html">Beranda</a>
      </p>

      <!-- <tr>
        <td class="caption">Username : </td>
        <td><input type="text" value="<?php echo $username ?>" name = "username" size="30" class="textlogin" placeholder="Isikan Username..."/></td>
      </tr>
        <td class="caption">Password : </td>
        <td><input type="password" name="password" size="30" class="textlogin" placeholder="Isikan Password..."/></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="login"
          value="Login"/></td>
      </tr> -->
    </table>
</div>
</div>  
</div> 
</div>        

<!-- footer --> 
<footer id="contact">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="widget">
					<h5 class="widgetheading"><a href="index.html"><img src="Database/Nonspatial/Icon/sipenca.png" width="200px" height="100px" alt="logo"></a></h5>
					<address><br>
					<strong>Pusat Informasi Pelestarian dan Eksplorasi Cagar Budaya Slemanr Berbasis WebGIS</strong><br>
				</address>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="widget">
				</div>
			</div>
      <div class="col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">Tentang Kami</h5>
          <ul class="link-list"><br>
          <li><p>  <strong>Laila Nur Azizah (22/500377/SV/UGM)</strong></p></li>
          <li><p>  <strong>D4 Sistem Informasi Geografis UGM</strong></p></li>
          <li><p> Alamat: Gedung SV UGM, Sekip Unit 1, Jl. Persatuan, Blimbing Sari, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</p></li>
          <li><p> Telp: (027)4541020</p></li>
        </ul>
				</div>
			</div>
	</div>
  <div class="footer_bottom"><span></span> 
  </div>
	</footer>
<!-- JS FILES --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flexslider-min.js"></script> 
<script src="js/jquery.fancybox.pack.js"></script> 
<script src="js/retina.min.js"></script> 
<script src="js/modernizr.js"></script> 
<script src="js/main.js"></script> 
<script type="text/javascript" src="js/jquery.contact.js"></script> 
</body>
</html>
