<?php if ($this->session->flashdata('success')): ?>
    <div class="success_msg">
        <span><?php echo $this->session->flashdata('success'); ?></span>
    </div>
<?php endif; ?>

<div class="well">
    <div class="span5 pull-right">
           <form method="get" action="<?php echo site_url('admin/categories/index'); ?>" accept-charset="utf-8">
                <div class="input text"><input name="q" type="text" value="<?php echo $this->input->get('q'); ?>" id="ArticleQ" />           
               <button class="btn btn-primary">Search</button></div> </form>
                    
        </div>
</div>

        <div class="well">
  <div class="navbar navbar-inverse">
    <div class="navbar-inner">
    <div class="container">
      <a class="brand" href="#"></a>
      <div class="nav-collapse">
      <ul class="nav">
      
        <li><a href="<?php echo base_url(); ?>administrator/categories/add" class="small-box"><i class="icon-plus-sign icon-white"></i> Tambah Kategori</a></li>
      
      </ul>
      </div>
   
    </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->
 <div class="container">
      

    </div>
    <div class="well">
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th class="actions">Actions</th>
        </tr>
        <?php if ($categories): ?>
            <?php foreach ($categories as $category): ?>
                <tr class="altrow">
                    <td><?php echo $category['name']; ?></td>
                    <td><?php echo $category['description']; ?></td>
                    <td class="actions">
                        <div class="btn-group">
                         <a class="btn btn-warning" href="<?php echo site_url('administrator/categories/edit/' . $category['id']) ?>"><i class="icon-pencil icon-white"></i> Edit</a>
                     
                        <a class="btn btn-danger" href="<?php echo site_url('admin/categories/delete/' . $category['id']) ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash icon-white"></i> Hapus Data</a>
                     </div>
                         </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
</div>
    <div class="paging">
        <?php //echo $pagination ?>    
    </div>
</div>                    
</div>