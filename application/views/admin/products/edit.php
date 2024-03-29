<div class="container">
<div class="well">
    <h2 >Edit Page</h2>
    <div class="inner_1"><div class="inner_2"><div class="inner_3"><div class="inner_4 clearfix">



                        <?php echo form_open_multipart('administrator/products/edit') ?>
                        <?php echo form_hidden('id', $product['id']); ?>

                       
                                <label for="post_ttl">Code</label>


                                    <div class="input select">
                                        <?php echo form_input(array('name' => 'code', 'value' => set_value('code', isset($product['code']) ? $product['code'] : ''), 'class' => 'field size1')) ?>
                                        <div class="error-message"><?php echo form_error('code'); ?></div>
                                    </div>
                                

                              <label for="post_ttl">Name</label>

                              
                                    <div class="input select">
                                        <?php echo form_input(array('name' => 'name', 'value' => set_value('name', isset($product['name']) ? $product['name'] : ''), 'class' => 'field size1')); ?>
                                        <div class="error-message"><?php echo form_error('name'); ?></div>
                                    </div>
                                	
                            
                                <label for="post_ttl">Price</label>

                                <div class="input full">
                                    <div class="input select">
                                        <?php echo form_input(array('name' => 'price', 'value' => set_value('price', isset($product['price']) ? $product['price'] : ''), 'class' => 'field size1')); ?>
                                        <div class="error-message"><?php echo form_error('price'); ?></div>
                                    </div>
                                
                           
                                <label for="post_ttl">Discount Percent</label>

                                <div class="input full">
                                    <div class="input select">
                                        <?php echo form_input(array('name' => 'discount_percent', 'value' => set_value('discount_percent', isset($product['discount_percent']) ? $product['discount_percent'] : ''), 'class' => 'field size1')); ?>
                                        <div class="error-message"><?php echo form_error('discount_percent'); ?></div>
                                    </div>
                                
                           
                               <label for="post_ttl">Stock</label>

                                <div class="input full">
                                    <div class="input select">
                                        <?php echo form_input(array('name' => 'stock', 'value' => set_value('stock', isset($product['stock']) ? $product['stock'] : ''), 'class' => 'field size1')); ?>
                                        <div class="error-message"><?php echo form_error('stock'); ?></div>
                                    </div>
                                		

                      
                                <label for="post_ttl">Description</label>

                                <div class="input full">
                                    <div class="input select">
                                        <?php echo form_textarea(array('name' => 'description', 'value' => set_value('description', isset($product['description']) ? $product['description'] : ''), 'class' => 'field size1')); ?>
                                        <div class="error-message"><?php echo form_error('description'); ?></div>
                                    </div>
                               	

                            
                            <label for="post_ttl">Image</label>

                                <div class="input full">
                                    <div class="input select">
                                        <?php echo form_upload('image'); ?>
                                        <div class="error-message"><?php echo form_error('image'); ?></div>
                                    </div>
                                
                                <label for="post_ttl">Category</label>

                                <div class="input full">
                                    <div class="input select">
                                        <?php echo form_dropdown('category_id', $categories, $product['category_id']); ?>
                                        <div class="error-message"><?php echo form_error('category_id'); ?></div>
                                    </div>
                                </div>
                            </div>
                            
                                <label>Status</label>

                                
                                    <div class="control-group">
                                        <?php echo form_dropdown('status', $status, $product['status']); ?>
                                        <div class="error-message"><?php echo form_error('status'); ?></div>
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

</div>