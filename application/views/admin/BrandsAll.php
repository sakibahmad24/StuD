<div class="container">
    <div class="row">
        <div class="col-12">
        <table class="table table-striped" id="my_table">
          <thead>
            <tr>
              <th scope="col">Serial</th>
              <th scope="col">Brand Name</th>
              <th scope="col">Promo Percantage</th>
              <th scope="col">Status</th>
              <th scope="col">Offer Valid Till</th>
              <th scope="col">Image</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>

          <?php foreach($allBrands as $key=>$brand) { ?>

            <tr>
              <th scope="row"><?php echo $key+1; ?></th>
              <td><?php echo $brand['brand_name']; ?></td>
              <td><?php echo $brand['brand_promo_pct']; ?></td>
              <?php if($brand['brand_active']=='active') { ?>
                <td>Active</td>
              <?php } else if($brand['brand_active']=='inactive') { ?>
                <td>Inactive</td>
              <?php } ?>
              <td><?php echo $brand['brand_valid_till']; ?></td>
              <td><img style="height: 40px;width:80px;" src="<?php echo base_url('assets/common/brands_picture/').$brand['brand_image']; ?>"></td>
              <td>
                <a href="<?php echo base_url('admin/BrandsController/editBrand/').$brand['brand_id']; ?>">
                  <button type="button" class="btn btn-primary">Edit</button>
                </a>
                <a href="<?php echo base_url('admin/BrandsController/deleteBrand/').$brand['brand_id']; ?>" onclick="return confirm('Are you sure you want to Delete this item?')">
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
