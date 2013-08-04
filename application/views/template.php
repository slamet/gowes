<html>
  <head>
    <title>Fusionmatics | <?php echo $title;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    
<link href="<?php echo base_url() ?>css/bootstrap.css" rel="stylesheet"/>
        <link href="<?php echo base_url() ?>css/main.css" rel="stylesheet"/>
        <link href="<?php echo base_url() ?>public/front/css/jquery.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>public/front/css/datepicker.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>/css/all.css">
  </head>
  <body>
<div class="hero-unit">
  <h1>Heading</h1>
  <p>Tagline</p>
  <p>
    <a class="btn btn-primary btn-large">
      Learn more
    </a>
  </p>
</div>
  	 <?php $this->load->view('header'); ?>
  	 
 <div class="container"> 	 
	<div class="well"> 
 <div class="row">
   <?php if (!empty($content)): ?>

                    <?php $this->load->view($content); ?>
                <?php else: ?>
                    Page not found !
                <?php endif; ?>
 <div class="span3">
      <h5>BRAND Participate</h5>
      <ul class="nav nav-list">
  <li class="nav-header">Brand</li>
  <li class="active"><a href="#">Polygon</a></li>
  <li><a href="#">United</a></li>
   <li><a href="#">Eiger</a></li>
    <li><a href="#">Tracker</a></li>
  ...
</ul>  

    </div> 
 </div>                 
</div>
<div class="row-fluid">
<div class="span3">
<h5>Kontak</h5>
<p>  
<address>
<p><strong> Copyright &copy; 2013 ayamgowes.com</strong><br>
Jl. Bangka 2 gg V <br>
RT 001 RW 002, Pela Mampang Kodepos: 12720</br></p>
<p class="text-error"><strong>Jakarta- Indonesia</strong><br></p>
<a href="#" class="btn btn-danger "><i class="icon-play icon-white"></i> +6221- 888 000 888</a>

</address>
<address>
<strong>Custumer Services</strong><br>
<a class="btn btn-default" href="mailto:#"> <i class="icon-envelope"></i> cs@ayamgowes.com</a>
</address> 
  </p>
</div>
<div class="span3">
<h5>Panduan</h5>
 <ul class="nav nav-list">
  <li class="nav-header "></li>
  <li><a href="#">Cara Belanja</a></li>
  <li><a href="#">Pembayaran</a></li>
   <li><a href="#">Ketentuan dan Penggunaan</a></li>
    <li><a href="#">Bergabung dengan kami</a></li>
  ...
</ul> </div>

<div class="span6">
  <div class="well">
  <h5>Page#home</h5>
  <p>Find me in app/views/page/home.html.erb
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed uat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
</div>

</div></div>
<footer class="well">
 <div class="row-fluid">
 <div class="span3">
      <p class="text-right">{elapsed_time} seconds &copy;   </p>  
  </div>
  <div class="span3">
      <p class="text-right">{elapsed_time} seconds &copy;  </p>
  </div>
  <div class="span3">
      <p class="text-right">{elapsed_time} seconds &copy;  </p>
       </div> 
  <div class="span3">
      <p class="text-right"> <a href="#"><img src="<?php echo base_url() ?>img/fb.png" class="img-rounded"></a><a href="#"><img src="<?php echo base_url() ?>img/tw.png" class="img-rounded"></a><a href="#"><img src="<?php echo base_url() ?>img/you.png" href="#" class="img-rounded"></a></p>   </footer>
  </div>
</div>
</footer>
</body>

</html>