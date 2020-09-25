<div class="content-wrapper">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Update Offer</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php echo form_open_multipart('admin/OfferController/updateOffer', 'role="form"'); ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Offer Name</label>
                    <input type="text" name="offer_name" class="form-control" id="exampleInputEmail1" placeholder="Enter offer name" value="<?php echo $editOffer['offer_name']; ?>">
                    <input type="hidden" name="offer_id" value="<?php echo $editOffer['offer_id']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Offer Short Details (Max 30-35 Words)</label>
                    <input type="text" name="offer_details" class="form-control" id="exampleInputEmail1" placeholder="Enter offer details" value="<?php echo $editOffer['offer_details']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Select Brand</label>
                    <select required class="form-control select2 select2-hidden-accessible" name="offer_brand" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                      <?php foreach($allbrands as $brand){ ?>
                        <option value="<?php echo $brand['brand_name']; ?>" <?php if($editOffer['offer_brand'] == $brand['brand_name']){echo ' selected';} ?>><?php echo $brand['brand_name']; ?></option>
                      <?php } ?>

                    </select>
                  </div>
                  <div class="form-group">
                  <label>Feature Status</label>
                  <select class="form-control select2 select2-hidden-accessible" name="offer_isFeatured" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                    
                    <option value="1" <?php if ($editOffer['offer_isFeatured']==1) { echo ' selected="selected"'; } ?>>Active</option>
                    <option value="0" <?php if ($editOffer['offer_isFeatured']==0) { echo ' selected="selected"'; } ?>>Inactive</option>
                  </select>
                </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Upload Offer Logo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="offer_image" class="custom-file-input" id="exampleInputFile">
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
</div>