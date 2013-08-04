
<div class="container">
    <div class="well">
    <h2 class="page_title">Edit Category</h2>
    <div class="inner_1"><div class="inner_2"><div class="inner_3"><div class="inner_4 clearfix">
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

                   
                        <?php echo form_open_multipart('administrator/categories/edit'); ?>     
                        <?php echo form_hidden('id', $category['id']) ?>
                        
                            <label>Name</label>
                                <div class="input full">
                                    <div class="input text required">
                                        <?php echo form_input(array('name' => 'name', 'value' => set_value('name', isset($category['name']) ? $category['name'] : ''))); ?>
                                        <div class="error-message"><?php echo form_error('name'); ?></div>
                                    </div>
                                
                         <label for="post_ttl">Description</label></div>
                                <div class="input full">
                                    <div class="input textarea required">
                                        <?php echo form_textarea(array('name' => 'description', 'value' => set_value('description', isset($category['description']) ? $category['description'] : ''))); ?>
                                        <div class="error-message"><?php echo form_error('description'); ?></div>
                                    </div>
                              

                           
                                <div class="input">
                                    <button class="btn btn-success">Save</button>

                                </div>
                           
                            <?php echo form_close(); ?>
                        
                    </div>
                    <div id="result"></div>
                </div></div></div>
    </div>
</div>
</div>

<!--end #article-->
</div>