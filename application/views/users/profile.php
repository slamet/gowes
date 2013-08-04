
     
    <div class="span8">
        <h1>Edit Profile</h1>
    
    <form class="form-horizontal" method="post" action="<?php echo site_url('users/profile'); ?>">
        <fieldset>

            <div class="control-group">
                <label for="focusedInput" class="control-label">Full name:</label>
                <div class="controls">
                    <input type="text"  name="full_name" value="<?php echo set_value('full_name', isset($user['full_name']) ? $user['full_name'] : ''); ?>"/>
                </div>
            </div>  

            <div class="control-group">
                <label for="focusedInput" class="control-label">Email:</label>
                <div class="controls">
                    <input type="text"  name="email" value="<?php echo set_value('email', isset($user['email']) ? $user['email'] : ''); ?>" />
                </div>
            </div>
            <div class="control-group">
                <label for="focusedInput" class="control-label">Password:</label>
                <div class="controls">
                    <input type="password"  name="password" value="" />
                </div>
            </div>
            <div class="control-group">
                <label for="focusedInput" class="control-label">Confirm Password:</label>
                <div class="controls">
                    <input type="password"  name="confirm_password" value="" />
                </div>
            </div>
            <div class="control-group">
                <label for="focusedInput" class="control-label">Phone:</label>
                <div class="controls">
                    <input type="text"  name="phone" value="<?php echo set_value('phone', isset($user['phone']) ? $user['phone'] : ''); ?>" />
                </div>
            </div>
            <div class="control-group">
                <label for="focusedInput" class="control-label">Zip:</label>
                <div class="controls">
                    <input type="text" name="zip" value="<?php echo set_value('zip', isset($user['zip']) ? $user['zip'] : ''); ?>" />
                </div>
            </div>
            <div class="control-group">
                <label for="focusedInput" class="control-label">Address:</label>
                <div class="controls">
                    <textarea  name="address"><?php echo set_value('address', isset($user['address']) ? $user['address'] : ''); ?></textarea>
                </div>
            </div>
             <div class="span8">
                <button class="btn btn-success"  type="submit">Save</button>
            </div>  
        </fieldset>
        <?php echo form_close(); ?>
</div>