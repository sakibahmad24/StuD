<div class="content-wrapper">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <table class="table table-striped" id="my_table">
          <thead>
            <tr>
              <th scope="col">Serial</th>
              <th scope="col">Brand Name</th>
              <th scope="col">Title</th>
              <th scope="col">Status</th>
              <th scope="col">Image</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>

          <?php foreach($allSlider as $key=>$slider) { ?>

            <tr>
              <th scope="row"><?php echo $key+1; ?></th>
              <td><?php echo $slider['slider_name']; ?></td>
              <td><?php echo $slider['slider_title']; ?></td>
              <?php if($slider['slider_isActive']==1) { ?>
                <td>Active</td>
              <?php } else if($slider['slider_isActive']==0) { ?>
                <td>Inactive</td>
              <?php } ?>
              <td><img style="height: 40px;width:80px;" src="<?php echo base_url('assets/common/sliders_picture/').$slider['slider_image']; ?>"></td>
              <td>
                <a href="<?php echo base_url('admin/SlidersController/editSlider/').$slider['slider_id']; ?>">
                  <button type="button" class="btn btn-primary">Edit</button>
                </a>
                <a href="<?php echo base_url('admin/SlidersController/deleteSlider/').$slider['slider_id']; ?>" onclick="return confirm('Are you sure you want to Delete this item?')">
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
</div>
