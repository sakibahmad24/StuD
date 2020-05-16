<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Add New Slider</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php echo form_open_multipart('admin/SlidersController/store', 'role="form"'); ?>
                <div class="card-body">
                <div class="form-group">
                    <label>Select Brand Name</label>
                    <select required class="form-control select2 select2-hidden-accessible" name="slider_name" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                      <?php foreach($allbrands as $brand){ ?>
                      <option value="<?php echo $brand['brand_name'] ?>"><? echo $brand['brand_name'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="slider_title" class="form-control" id="exampleInputEmail1" placeholder="Enter Slider Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sub Title</label>
                    <input type="text" name="slider_subtitle" class="form-control" id="exampleInputEmail1" placeholder="Enter Slider Sub Title">
                  </div>
                  <div class="form-group">
                  <label>Status</label>
                  <select required class="form-control select2 select2-hidden-accessible" name="slider_isActive" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                    
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                  </select>
                </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Uplod Feaured Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input required type="file" name="slider_image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>