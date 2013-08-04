 		
<?php if($this->session->flashdata('success')) { ?>
              <div class="alert alert-success">  
                  <a class="close" data-dismiss="alert">x</a>  
                  <strong>Info! </strong><?php echo $this->session->flashdata('success'); ?>  
              </div>
            <?php } ?>
        <div class="span4 well ">
            <h2>Login</h2>
            <p>If you have an account with us, please log in.</p>

            <?php echo form_open('users/login'); ?>
            <fieldset>
                <div class="control-group">
                    <label for="focusedInput" class="control-label">Email</label>
                    <div class="controls">
                        <input type="text" name="email" value="<?php echo set_value('email') ?>" placeholder="Enter your email" id="username" class="input-xlarge focused">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Password</label>
                    <div class="controls">
                        <input type="password" name="password" placeholder="Enter your password" id="password" class="input-xlarge">
                    </div>
                </div>

                <button class="btn btn-success pull-right" type="submit">Login</button>
                <?php echo anchor('users/register', 'Register') ?> | 
                <?php echo anchor('users/forgot_password', ' Forgot Password ?'); ?>
            </fieldset>
            <?php echo form_close(); ?>

        </div>
<div class="span3 well">
            <h2>Akun Baru</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
</p><br />
            <a href="<?php echo site_url('users/register'); ?>" class="btn btn-danger pull-right">Create an account</a>
        </div>