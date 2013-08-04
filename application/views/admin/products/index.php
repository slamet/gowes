


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


  <div class="well">
  <div class="navbar navbar-inverse">
    <div class="navbar-inner">
    <div class="container">
      <a class="brand" href="#"></a>
      <div class="nav-collapse">
      <ul class="nav">
       <li><a href="<?php echo base_url(); ?>administrator/products/add" class="small-box"><i class="icon-plus-sign icon-white"></i>Tambah Product</a></li>
     
            </ul>
      </div>
    <div class="span5 pull-right">
    <form method="get" action="<?php echo site_url('administrator/products/index'); ?>" accept-charset="utf-8">
                <div class="input text"><input name="q" type="text" value="<?php echo $this->input->get('q'); ?>" id="ArticleQ" />            
               <button class="btn btn-success"><i class="icon-search icon-white"></i>Search</button></div>
            </form>
    </div>
    </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->

 <h3>Daftar Products</h3>
<table class="table table-hover table-condensed">
<tr>
            <th>Image</th>
            <th>Name</th>
            <th>Code</th>
            <th>Price</th>
            <th>Discount</th>
            <th>Net Price</th>
            <th>Category</th>
            <th>Stock</th>
            <th>Status</th>
           
            <th>Action</th>
</tr>

<?php if ($products): ?>

            <?php foreach ($products as $product): ?>
                <tr> <?php
                    $media = $this->general->getSingleMedia('product', $product['id']);
                    ?>

      <td> <?php if (!empty($media['path'])): ?>
                        <img src="<?php echo base_url(); ?>timthumb.php?src=<?php echo base_url() . $media['path'] ?>&h=100&w=85"/>
                           
                       <!-- <img src="<?php echo base_url(); ?><?php echo $media['path'] ?>" alt="" width="100" hight="95">    -->      
                   
                        <?php else: ?>
                            <img alt="" src="http://placehold.it/85x100">
                        <?php endif; ?>         
                  </td>  

  <td><?php echo $product['name'] ?></td>
                     <td><?php echo $product['code'] ?></td>
                    <td><?php echo number_format($product['price']) ?></td>
                    <td><?php echo $product['discount_percent'] ?> %</td>
                    <td><?php echo number_format($product['net_price']) ?></td>
                    <td><?php echo $product['categoryName'] ?></td>
                    <td><?php echo $product['stock'] ?></td>
                    <td><?php echo $status[$product['status']] ?></td>
                    <td>

                        <a href="<?php echo base_url() ?>index.php/administrator/products/edit/<?php echo $product['id']; ?>" class="btn btn-warning"><i class="icon-pencil icon-white"></i> Edit</a> &nbsp;
                        <a href="<?php echo base_url() ?>index.php/administrator/products/delete/<?php echo $product['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this?')"><i class="icon-trash icon-white"></i> Delete</a>
                    </td>
</tr>

 
            <?php endforeach; ?>
       <?php else: ?>
            <tr>
                <td colspan="8"><strong>There is no data</strong></td>
            </tr>
        <?php endif; ?>
    </table>
           
    




<div class="paging">
        <?php echo $pagination ?>    
    </div>
 
