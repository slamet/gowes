<div class="well">
<h2>Create Product</h2>
<?php if(validation_errors()) { ?>
    <script src="js/etc/bootstrap.alert.js"></script>

<script>$(".alert").alert('close')</script>
<a class="close" data-dismiss="alert" href="#">&times;</a>
<div class="alert alert-block">
 <?php echo validation_errors(); ?>
</div>

<?php } ?> 

<?php echo form_open_multipart('administrator/products/add') ?>

<label class="control-label">Code</label>    
<?php echo form_input(array('name' => 'code', 'value' => set_value('code'), 'class' => 'field size1')); ?>
<div class="error-message"><span style="color:red;"><?php echo form_error('code'); ?></span></div>
    
  <label class="control-label">Name</label>                              
     <?php echo form_input(array('name' => 'name', 'value' => set_value('name'), 'class' => 'field size1')); ?>
             <div class="error-message"><span style="color:red;"><?php echo form_error('name'); ?></span></div>
                                    
    <label class="control-label">Price</label>                                                        
    <?php echo form_input(array('name' => 'price', 'value' => set_value('price'), 'class' => 'field size1')); ?>
                <div class="error-message"><span style="color:red;"><?php echo form_error('price'); ?><span style="color:red;"></div>
                                
     <label class="control-label">Discount</label>                                          
        <?php echo form_input(array('name' => 'discount_percent', 'value' => set_value('discount_percent'), 'class' => 'field size1')); ?>
                <div class="error-message"><span style="color:red;"><?php echo form_error('discount_percent'); ?><span style="color:red;"></div>
                                   
      <label class="control-label">Stock</label>                          
    <?php echo form_input(array('name' => 'stock', 'value' => set_value('stock'), 'class' => 'field size1')); ?>
            <div class="error-message"><span style="color:red;"><?php echo form_error('stock'); ?><span style="color:red;"></div>
                                    
      <label class="control-label">Description</label>                      		                        
     <?php echo form_textarea(array('name' => 'description', 'value' => set_value('description'), 'cols' => 50, 'class' => 'field size1')); ?>
                 <div class="error-message"><span style="color:red;"><?php echo form_error('description'); ?><span style="color:red;"></div>
            
             <div class="alert alert-info" width="300;">  
                    <a class="close" data-dismiss="alert">x</a>  
                    <strong>Info! </strong><br/>
                    Gambar optimal pada resolusi 800x400 px<br/>
                    Ukuran Maksimum file 1 MB, (disarankan ukuran dibawah 100kb)<br/>
                    File yang diizinkan untuk upload .jpg, .jpeg, .png, .gif
                  </div>                      
       <label class="control-label">Image</label>                        
    <?php echo form_upload('image'); ?>
        <div class="error-message"><?php echo form_error('image'); ?></div>
     
<label class="control-label">Category</label>
    <?php echo form_dropdown('category_id', $categories); ?>
            <div class="error-message"><span style="color:red;"><?php echo form_error('category_id'); ?><span style="color:red;"></div>
                     
<label class="control-label">status</label>
            <?php echo form_dropdown('status', $status); ?>
        <div class="error-message"><span style="color:red;"><?php echo form_error('status'); ?><span style="color:red;"></div>
                                    


                            
                                <div class="input">
                                     <button class="btn btn-success" type="submit">Submit</button>

                                </div>
                            
             
                        <?php echo form_close(); ?>

                    </div>
                    <div id="result"></div>
                </div>
</div>
