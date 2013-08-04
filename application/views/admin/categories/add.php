<div class="well">

    <h4>Kategori baru</h4>
    <?php if(validation_errors()) { ?>
    <script src="js/etc/bootstrap.alert.js"></script>

<script>$(".alert").alert('close')</script>
<a class="close" data-dismiss="alert" href="#">&times;</a>
<div class="alert alert-block">
 <?php echo validation_errors(); ?>
</div>
<?php } ?>


    <div class="inner_1"><div class="inner_2"><div class="inner_3"><div class="inner_4 clearfix">


                    <div class="control-group">
                        <?php echo form_open_multipart('administrator/categories/add'); ?>     

                     
                           
                                <label>Name</label></div>
                                <div class="input full">
                                    <div class="input text required">
                                        <?php echo form_input(array('name' => 'name', 'value' => set_value('name'))); ?>
                                        <div class="error-message"><?php echo form_error('name'); ?></div>
                                    </div>
                                </div>
                            </div>
                            
                                <label>Description</label></div>
                                <div class="input full">
                                    <div class="input textarea required">
                                        <?php echo form_textarea(array('name' => 'description', 'value' => set_value('description'))); ?>
                                        <div class="error-message"><?php echo form_error('description'); ?></div>
                                    </div>
                                </div>
                            </div>

                         
                                
                                <div class="input">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    
                                </div>
                            </div>
                            <?php echo form_close(); ?>
                        
                    </div>
                    <div id="result"></div>
                </div></div></div>
    </div>
</div>