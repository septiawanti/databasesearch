    <div class="container">
      <legend>Setting Category</legend>
      <div id="search">
        <?php if(isset($_GET['error']))
              {
                if($_GET['error'] == 'cat1')
                {  
        ?>
        <div class="alert alert-info">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <h4>Warning!</h4>
          Kategory tersebut masih memiliki data
        </div>
        <?php
                }
              }
        ?>
        <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Url</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($category->result() as $row){ ?>
                <tr>
                  <td><?php echo $row->name; ?></td>
                  <td><?php echo $row->description; ?></td>
                  <td><?php echo $row->url; ?></td>
                  <td><?php echo anchor("admin/index/?del=".$row->id_category,"Delete");?></td>
                </tr>
                <?php }?>
              </tbody>
        </table>
        
        <legend>Add Category</legend>
       <form action="<?php echo base_url();?>index.php/admin/index" method="POST">
        <fieldset>
          <input type="text" placeholder="Category..." name="category"><br/>
          <textarea rows="3" name="description" placeholder="Description..." style="width: 1100px;"></textarea>
          <span class="help-block">*add category your databases</span>
          <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
      </form>