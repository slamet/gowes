
<html>
  <head>
    <title>Dashboard | <?php echo $title;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url() ?>css/bootstrap.css" rel="stylesheet"/>
     <link href="<?php echo base_url() ?>css/bootstrap.css" rel="stylesheet"/>   

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
     <?php $this->load->view('admin/header'); ?>
     
 <div class="container">   
 
 <div class="row">
   <?php if (!empty($content)): ?>

                    <?php $this->load->view($content); ?>
                <?php else: ?>
                    Page not found !
                <?php endif; ?>
  
 </div>                 

<footer class="well">
  {elapsed_time} seconds &copy;  </footer>
</body>

</html>