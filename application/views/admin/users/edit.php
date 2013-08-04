<?php //echo initialize_tinymce()              ?>
<div class="container">
 <div class="well">   

    <h2 class="page_title">Update User</h2>
    <?php if ($this->session->flashdata('success')): ?>
        <div class="success_msg">
            <span><?php echo $this->session->flashdata('success'); ?></span>
        </div>
    <?php endif; ?>
    <?php if ($this->session->flashdata('error')): ?>
        <div class="error_msg">
            <span><?php echo $this->session->flashdata('error'); ?></span>
        </div>
    <?php endif; ?>
    <div class="inner_1"><div class="inner_2"><div class="inner_3"><div class="inner_4 clearfix">


                   
                        <?php echo form_open_multipart('administrator/users/edit'); ?>     
                        <?php echo form_hidden('id', $user['id']); ?>
                      
                            
                                <label>Full Name</label>
                                <div class="input full">
                                    <div class="input text required">
                                        <?php echo form_input(array('name' => 'full_name', 'value' => set_value('full_name', isset($user['full_name']) ? $user['full_name'] : ''))); ?>
                                        <div class="error-message"><?php echo form_error('full_name'); ?></div>
                                    </div>
                                </div>
                            
                            
                                <label>Email</label>
                                <div class="input full">
                                    <div class="input text required">
                                        <?php echo form_input(array('name' => 'email', 'value' => set_value('email', isset($user['email']) ? $user['email'] : ''))); ?>
                                        <div class="error-message"><?php echo form_error('email'); ?></div>
                                    </div>
                                </div>
                            
                                <label>Password</label>
                                <div class="input full">
                                    <div class="input text required">
                                        <?php echo form_password(array('name' => 'password')); ?><br/>Left this blank if you wouldn't to change password
                                        <div class="error-message"><?php echo form_error('password'); ?></div>
                                    </div>
                                
                                <label>Password Confirm</label>
                                <div class="input full">
                                    <div class="input text required">
                                        <?php echo form_password(array('name' => 'confirm_password')); ?>
                                        <div class="error-message"><?php echo form_error('confirm_password'); ?></div>
                                    </div>
                               
                            <label>Phone</label>
                                <div class="input full">
                                    <div class="input text required">
                                        <?php echo form_input(array('name' => 'phone', 'value' => set_value('phone', isset($user['phone']) ? $user['phone'] : ''))); ?>
                                        <div class="error-message"><?php echo form_error('phone'); ?></div>
                                    </div>
                               
                            <label>Address</label>
                                <div class="input full">
                                    <div class="input textarea required">
                                        <?php echo form_textarea(array('name' => 'address', 'value' => set_value('address', isset($user['address']) ? $user['address'] : ''))); ?>
                                        <div class="error-message"><?php echo form_error('address'); ?></div>
                                    </div>
                                
                           <label >Level</label>
                                <div class="input full">
                                    <div class="input text required">
                                        <?php echo form_dropdown('level', $level, $user['level']); ?>
                                        <div class="error-message"><?php echo form_error('level'); ?></div>
                                    </div>
                               
                          <label>Status</label>
                                <div class="input full">
                                    <div class="input text required">
                                        <?php echo form_dropdown('status', $status, $user['status']); ?>
                                        <div class="error-message"><?php echo form_error('status'); ?></div>
                                
                                <div class="input">
                                    <input type="submit" class="btn btn-success" value="Save"/>

                                </div>
                            
                            <?php echo form_close(); ?>
                    
                    </div>
                    <div id="result"></div>
                </div></div></div>
    </div>


<!--end #article-->
</div>
</div>