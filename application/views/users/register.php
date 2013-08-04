
<div class="span7">
    
    <div class="navbar navbar-inverse">
    <div class="navbar-inner">
    <div class="container">
      <a class="brand" href="#"></a>
      <div class="nav-collapse">
      <ul class="nav">
        <li><a href="<?php echo base_url(); ?>users/register" class="small-box"><i class="icon-plus-sign icon-white"></i>Daftar Akun Baru</a></li>
      </ul>
      </div>
    <div class="span5 pull-right">
   
    </div>
    </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->


    <?php echo form_open('users/register') ?>
    <fieldset>
        
 <script src="js/etc/bootstrap.alert.js"></script>

<script>$(".alert").alert('close')</script>
<a class="close" data-dismiss="alert" href="#">&times;</a>
<div class="alert alert-warning">
  Semua field harus diisi !
</div>

        <?php if ($this->session->flashdata('message')): ?>
            <?php echo $this->session->flashdata('message'); ?>
        <?php endif ?>
        <?php if(validation_errors()) { ?>
    <div class="alert alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button>
        <h4>Terjadi Kesalahan!</h4>
      <?php echo validation_errors(); ?>
  </div>
  <?php } ?>
        <div class="control-group">
            <label for="focusedInput" class="control-label">Full name:<span style="color:red;">*</span></label>
            <div class="controls">
                <input type="text"  name="full_name" value="<?php echo set_value('full_name'); ?>"/>
            </div>
        </div>  

        <div class="control-group">
            <label for="focusedInput" class="control-label">Email:<span style="color:red;">*</span></label>
            <div class="controls">
                <input type="text"  name="email" value="<?php echo set_value('email'); ?>" />
            </div>
        </div>
        <div class="control-group">
            <label for="focusedInput" class="control-label">Password:<span style="color:red;">*</span></label>
            <div class="controls">
                <input type="password"  name="password" />
            </div>
        </div>
        <div class="control-group">
            <label for="focusedInput" class="control-label">Confirm Password:<span style="color:red;">*</span></label>
            <div class="controls">
                <input type="password"  name="confirm_password" />
            </div>
        </div>
        <div class="control-group">
            <label for="focusedInput" class="control-label">Phone:<span style="color:red;">*</span></label>
            <div class="controls">
                <input type="text"  name="phone" value="<?php echo set_value('phone'); ?>" />
            </div>
        </div>
        <div class="control-group">
            <label for="focusedInput" class="control-label">Zip:<span style="color:red;">*</span></label>
            <div class="controls">
                <input type="text"  name="zip" value="<?php echo set_value('zip'); ?>" />
            </div>
        </div>
        <div class="control-group">
            <label for="focusedInput" class="control-label">Address:<span style="color:red;">*</span></label>
            <div class="controls">
                <textarea  name="address"><?php echo set_value('address'); ?></textarea>
            </div>
        </div>
        <div class="span2">
            <button class="btn btn-success pull-right"  type="submit">Register</button>
        </div>      
    </fieldset>
    <?php echo form_close(); ?>
</div>