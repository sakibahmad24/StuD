<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Simulate a sale</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <?php echo form_open_multipart('admin/BrandsController/sell_entry', 'role="form"'); ?>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12" data-select2-id="45">
                <div class="form-group">
                <select required class="form-control select2 select2-hidden-accessible" name="brand_name" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                      <?php foreach($allbrands as $brand){ ?>
                      <option value="<?php echo $brand['brand_name'] ?>"><? echo $brand['brand_name'] ?></option>
                      <?php } ?>

                    </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control" placeholder="Enter phone number">
                </div>
                <!-- /.form-group -->
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Promocode</label>
                    <input type="text" name="promocode" class="form-control" placeholder="Enter promocode here">
                </div>
                <!-- /.form-group -->
              </div>
            </div>
            <!-- /.row -->
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