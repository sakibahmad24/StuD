<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Edit Brand</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php echo form_open_multipart('admin/BrandsController/updateBrand', 'role="form"'); ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Brand Name</label>
                    <input type="text" value="<?php  echo $editBrand['brand_name']; ?>" name="brand_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Brand Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Promotion Percentage</label>
                    <input type="text" value="<?php  echo $editBrand['brand_promo_pct']; ?>" name="brand_promo_pct" class="form-control" id="exampleInputEmail1" placeholder="Enter Promotion Percentage">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sub Heading</label>
                    <input type="text" value="<?php  echo $editBrand['brand_sub_heading']; ?>" name="brand_sub_heading" class="form-control" id="exampleInputEmail1" placeholder="Enter Sub Heading" name="brand_sub_heading">
                  </div>
                  <div class="form-group">
                  <label>Valid Till:</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="date" value="<?php  echo $editBrand['brand_valid_till']; ?>" name="brand_valid_till" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false">
                  </div>
                  <!-- /.input group -->
                </div>
                  <div class="form-group">
                  <label>Status</label>
                  <select class="form-control select2 select2-hidden-accessible" name="brand_active" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                    <option value="active" <?php if ($editBrand['brand_active']=='active') { echo ' selected="selected"'; } ?>>Active</option>
                    <option value="inactive" <?php if ($editBrand['brand_active']=='inactive') { echo ' selected="selected"'; } ?>>Inactive</option>
                  </select>
                </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Upload Featured Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" value="<?php  echo $editBrand['brand_image']; ?>"  name="brand_image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <input type="hidden" name="brand_id" value="<?php echo $editBrand['brand_id']; ?>">
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>