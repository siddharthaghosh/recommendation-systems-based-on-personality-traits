<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Shop Around</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<!--<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--[if lte IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
<?php

$this->load->helper('HTML');

echo link_tag('css/style.css');
echo link_tag('css/ie6.css');
echo link_tag('js/jquery-1.4.1.min.js');
echo link_tag('js/jquery.jcarousel.pack.js');
echo link_tag('js/jquery-func.js');

?>
<script src="<?php echo base_url()?>js/jquery-1.4.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>js/jquery-func.js" type="text/javascript"></script>
</head>
<body>
<!-- Shell -->
<div class="shell">
  <!-- Header -->
  <div id="header">
    <h1 id="logo"><a href="#">Toko Jersey</a></h1>
    <!-- Cart -->
    <div id="cart"> <a href="#" class="cart-link">Your Shopping Cart</a>
      <div class="cl">&nbsp;</div>
      <span>Item(s): <strong>4</strong></span> &nbsp;&nbsp; <span>Total Harga: <strong>$250.99</strong></span> </div>
    <!-- End Cart -->
    <!-- Navigation -->
    <div id="navigation">
      <ul>
        <li><a href="http://localhost/Rekhas/index.php/cPemesanan/tampilHome" >Home</a></li>
        <li><a href="http://localhost/Rekhas/index.php/cPemesanan/konfPembayaran">Konfirmasi Pembayaran</a></li>
        <li><a href="http://localhost/Rekhas/index.php/cPemesanan/tampilCaraPemesanan">Cara Pemesanan</a></li>
        <li><a href="http://localhost/Rekhas/index.php/cPemesanan/tampilSemuaJersey">Lihat Semua Jersey</a></li>
        <li><a href="http://localhost/Rekhas/index.php/cPemesanan/tampilisicart">Lihat Shopping Cart</a></li>
      </ul>
    </div>
    <!-- End Navigation -->
  </div>
  <!-- End Header -->
  <!-- Main -->
  <div id="main">
    <div class="cl">&nbsp;</div>
    <!-- Content -->
    <div id="content">
      <!-- Content Slider -->
      <div id="slider" class="box">
        <div id="slider-holder">
          <ul>
            <li><a href="#"><img src="<?php echo base_url()?>css/images/slide3.jpg" alt="" /></a></li>
            <li><a href="#"><img src="<?php echo base_url()?>css/images/slide3.jpg" alt="" /></a></li>
            <li><a href="#"><img src="<?php echo base_url()?>css/images/slide3.jpg" alt="" /></a></li>
            <li><a href="#"><img src="<?php echo base_url()?>css/images/slide3.jpg" alt="" /></a></li>
          </ul>
        </div>
        <div id="slider-nav"> <a href="#" class="active">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> </div>
      </div>
      <!-- End Content Slider -->
      <!-- Products -->
	 <?php $this->load->view($isi); ?>
      <!-- End Products -->
    </div>
    <!-- End Content -->
    <!-- Sidebar -->
    <div id="sidebar">
      <!-- Search -->
      <div class="box search">
        <h2>Search by Name <span></span></h2>
        <div class="box-content">
          <form action="#" method="post">
            <label>Nama Tim</label>
            <input type="text" class="field" />
            <label>Kategori</label>
            <select class="field">
              <option value="">-- Pilih Kategori--</option>
              <option value="League">League</option>
              <option value="Nation">Nation</option>
            </select>
            
            <input type="submit" class="search-submit" value="Cari" />
            
          </form>
        </div>
      </div>
      <!-- End Search -->
      <!-- Categories -->
      <div class="box categories">
        <h2>Kategori <span></span></h2>
        <div class="box-content">
          <ul>
            
            <li><a href="http://localhost/Rekhas/index.php/cPemesanan/detailJersey/00002">Barcelona</a></li>
            <li><a href="http://localhost/Rekhas/index.php/cPemesanan/detailJersey/00004">Manchester United</a></li>
            <li><a href="http://localhost/Rekhas/index.php/cPemesanan/detailJersey/00005">Manchester City</a></li>
            <li><a href="http://localhost/Rekhas/index.php/cPemesanan/detailJersey/00006">Chelsea</a></li>
            <li><a href="http://localhost/Rekhas/index.php/cPemesanan/detailJersey/00001">Arsenal</a></li>
            <li><a href="http://localhost/Rekhas/index.php/cPemesanan/detailJersey/00020">Argentina</a></li>
            <li><a href="http://localhost/Rekhas/index.php/cPemesanan/detailJersey/00015">Inter Milan</a></li>
            <li><a href="http://localhost/Rekhas/index.php/cPemesanan/detailJersey/00007">Aston Villa</a></li>
            <li><a href="http://localhost/Rekhas/index.php/cPemesanan/detailJersey/00012">Ajax Amsterdam</a></li>
            <li><a href="http://localhost/Rekhas/index.php/cPemesanan/detailJersey/00013">Napoli</a></li>
            <li><a href="http://localhost/Rekhas/index.php/cPemesanan/detailJersey/00021">England</a></li>
            <li><a href="http://localhost/Rekhas/index.php/cPemesanan/detailJersey/00017">Spain</a></li>
            <li class="last"><a href="http://localhost/Rekhas/index.php/cPemesanan/detailJersey/00008">Tottenham</a></li>
          </ul>
        </div>
      </div>
      <!-- End Categories -->
    </div>
    <!-- End Sidebar -->
    <div class="cl">&nbsp;</div>
  </div>
  <!-- End Main -->
  <!-- Side Full -->
  <div class="side-full">
    <!-- More Products -->
    <div class="more-products">
      <div class="more-products-holder">
        <ul>
          <li><a href="#"><img src="<?php echo base_url()?>css/images/chelseasmall.jpg" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url()?>css/images/liverpoolsmall.jpg" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url()?>css/images/realmadridsmall.jpg" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url()?>css/images/italysmall.jpg" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url()?>css/images/musmall.jpg" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url()?>css/images/mancitysmall.jpg" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url()?>css/images/germanysmall.jpg" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url()?>css/images/arsenalsmall.jpg" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url()?>css/images/juventussmall.jpg" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url()?>css/images/AC milansmall.jpg" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url()?>css/images/juventussmall.jpg" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url()?>css/images/spainsmall.jpg" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url()?>css/images/spainsmall.jpg" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url()?>css/images/AC milansmall.jpg" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url()?>css/images/germanysmall.jpg" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url()?>css/images/juventussmall.jpg" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url()?>css/images/mancitysmall.jpg" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url()?>css/images/germanysmall.jpg" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url()?>css/images/musmall.jpg" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url()?>css/images/chelseasmall.jpg" alt="" /></a></li>
          <li class="last"><a href="#"><img src="<?php echo base_url()?>css/images/AC milansmall.jpg" alt="" /></a></li>
        </ul>
      </div>
      <div class="more-nav"> <a href="#" class="prev">previous</a> <a href="#" class="next">next</a> </div>
    </div>
    <!-- End More Products -->
    <!-- Text Cols -->
    
      <div class="cl">&nbsp;</div>
    </div>
    <!-- End Text Cols -->
  </div>
  <!-- End Side Full -->
  <!-- Footer -->
  <div id="footer">
    <p class="center"> &copy; 2012 Shop Around. Design by <a href="http://chocotemplates.com">Chocotemplates.com</a> </p>
  </div>
  <!-- End Footer -->
</div>
<!-- End Shell -->
</body>
</html>
