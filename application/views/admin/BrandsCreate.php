<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Add New Brand</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php echo form_open_multipart('admin/BrandsController/store', 'role="form"'); ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Brand Name</label>
                    <input required type="text" name="brand_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Brand Name">
                  </div>
                  <div class="form-group">
                  <label>Brand Category</label>
                  <select required class="form-control select2 select2-hidden-accessible" name="brand_category" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                    
                    <option value="food">Food</option>
                    <option value="fashion">Fashion</option>
                    <option value="health">Health</option>
                    <option value="beauty">Beauty</option>
                    
                  </select>
                </div>
                  <!-- <div 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Promotion Percentage</label>
                    <input required type="text" name="brand_promo_pct" class="form-control" id="exampleInputEmail1" placeholder="Enter Promotion Percentage">
                  </div> -->
                  <!-- <div class="form-group">
                    <label for="exampleInputEmail1">Sub Heading</label>
                    <input required type="text" name="brand_sub_heading" class="form-control" id="exampleInputEmail1" placeholder="Enter Sub Heading" name="brand_sub_heading">
                  </div> -->
                  <!-- <div class="form-group">
                  <label>Valid Till:</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input required type="date" name="brand_valid_till" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false">
                  </div>
                  
                </div> -->
                  <div class="form-group">
                  <label>Status</label>
                  <select required class="form-control select2 select2-hidden-accessible" name="brand_active" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                    
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                  </select>
                </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Uplod Brand Logo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input required type="file" name="brand_image" class="custom-file-input" id="exampleInputFile">
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