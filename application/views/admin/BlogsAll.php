<div class="container">
    <div class="row">
        <div class="col-12">
        <table class="table table-striped" id="my_table">
          <thead>
            <tr>
              <th scope="col">Serial</th>
              <th scope="col">Customer Name</th>
              <th scope="col">Blog Title</th>
              <th scope="col">Is Reported?</th>
              <th scope="col">Reported By</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>

          <?php foreach($allBlogs as $key=>$blog) { ?>

            <tr>
              <th scope="row"><?php echo $key+1; ?></th>
              <td><?php echo $blog['user_fullname']; ?></td>
              <td><?php echo $blog['review_title']; ?></td>
              
              <?php if($blog['is_reported']==1) { ?>
                <td style="color:red;">Yes</td>
              <?php } else if($blog['is_reported']==0) { ?>
                <td>No</td>
              <?php } ?>

              <td><?php echo $blog['reported_by']; ?></td>

              <td>
                <a href="<?php echo base_url('blog-details/').$blog['review_id']; ?>" target="_blank">
                  <button type="button" class="btn btn-primary">View</button>
                </a>
                <a href="<?php echo base_url('admin/BlogsController/deleteBlog/').$blog['review_id']; ?>" onclick="return confirm('Are you sure you want to Delete this item?')">
                  <button type="button" class="btn btn-danger">Delete</button>
                </a>
              </td>
            </tr>

          <?php } ?>
            
          </tbody>
        </table>
        </div>
    </div>
</div>
