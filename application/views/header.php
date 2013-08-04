

<div class="navbar navbar-default navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="">AYAMGOWES</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="<?php echo base_url() ?>"><i class="icon-home icon-default"></i> Beranda</a></li>
              <li><a href="<?php echo base_url() ?>"> Sepeda</a></li>
                <li><a href="<?php echo base_url() ?>"> Hobi</a></li>
              <li><a href="<?php echo base_url() ?>"> Buku</a></li>
               <li><a href="<?php echo base_url() ?>"> Hijab</a></li>
                <li><a href="<?php echo base_url() ?>"> Kuliner</a></li>

      
      
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-comment icon-default"></i> Panduan <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#"><i class="icon-fire"></i> Cara </a></li>
                  <li><a href="#"><i class="icon-asterisk"></i> Operator</a></li>
                  <li><a href="#"><i class="icon-leaf"></i> Executive</a></li>
                </ul>
              </li>
            </ul>
            <div class="btn-group">
   
  </div>
 

  
  <?php if($this->session->userdata('is_login') == TRUE): ?>
           
                  <a href="<?php echo site_url('users/logout'); ?>" class="btn btn-danger pull-right"><i class="icon-share icon-white"></i>Logout</a>
    <?php else: ?> 
  <div class="btn-group">
    <a href="<?php echo site_url('users/register'); ?>" class="btn btn-inverse "><i class="icon-share icon-white"></i>Register</a>
                 
        <a href="<?php echo site_url('users/login'); ?>" class="btn btn-danger pull-right"><i class="icon-share icon-white"></i>Login</a>
   </div>              
            <?php endif; ?>
                    
                  
</div>

  <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

     <script src="js/etc/bootstrap.alert.js"></script>


          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>


    
</br>
</br>
