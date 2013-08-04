<div class="container">
    <div class="well">

    <h2>Create User</h2>
    <div class="inner_1"><div class="inner_2"><div class="inner_3"><div class="inner_4 clearfix">
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

                   
                        <?php echo form_open_multipart('administrator/users/add'); ?>     

                     
                          
                                <label>Full Name</label>
                                
                                    <div class="input text required">
                                        <?php echo form_input(array('name' => 'full_name', 'value' => set_value('full_name'))); ?>
                                        <div class="error-message"><span style="color:red;"><?php echo form_error('full_name'); ?></span></div>
                                   
                                     </div>
                           
                       
                                <label>Email</label>
                              
                                    <div class="input text required">
                                        <?php echo form_input(array('name' => 'email', 'value' => set_value('email'))); ?>
                                        <div class="error-message"><span style="color:red;"><?php echo form_error('email'); ?></span></div>
                                    </div>
                                

                            
                       <label>Password</label>
                              
                                    <div class="input text required">
                                        <?php echo form_password(array('name' => 'password')); ?>
                                        <div class="error-message"><span style="color:red;"><?php echo form_error('password'); ?></span></div>
                                    </div>
                                
                           <label>Password Confirm</label>
                               
                                    <div class="input text required">
                                        <?php echo form_password(array('name' => 'confirm_password')); ?>
                                        <div class="error-message"><span style="color:red;"><?php echo form_error('confirm_password'); ?></span></div>
                                    </div>
                               
                   
                              <label>Phone</label>
                           
                                    <div class="input text required">
                                        <?php echo form_input(array('name' => 'phone', 'value' => set_value('phone'))); ?>
                                        <div class="error-message"><?php echo form_error('phone'); ?></div>
                                    </div>
                                
                            
                                <label>Address</label>
                          
                                    <div class="input text required">
                                        <?php echo form_input(array('name' => 'address', 'value' => set_value('address'))); ?>
                                        <div class="error-message"><?php echo form_error('address'); ?></div>
                                    </div>
                                
                           
                               <label>Level</label></div>
                            
                                    <div class="input text required">
                                        <?php echo form_dropdown('level', $level); ?>
                                        <div class="error-message"><?php echo form_error('level'); ?></div>
                                    </div>
                               
                           
                                <label >Status</label>
                             
                                    <div class="input text required">
                                        <?php echo form_dropdown('status', $status); ?>
                                        <div class="error-message"><?php echo form_error('status'); ?></div>
                                    </div>
                                


                       
                                <div class="input">
                                   
                                              <button class="btn btn-success" type="submit">Submit</button>

                                </div>
                            </div>
                            <?php echo form_close(); ?>
                        </fieldset>
                    </div>
                    <div id="result"></div>
                </div></div></div>
    </div>
</div>

<!--end #article-->
</div>
</div>