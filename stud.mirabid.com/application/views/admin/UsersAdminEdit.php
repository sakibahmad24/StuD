<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Edit Admin</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php echo form_open_multipart('admin/RegistrationController/updateAdmin', 'role="form"'); ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" value="<?php echo $editUser['user_fullname'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" value="<?php echo $editUser['user_email'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="phone" name="phone" value="<?php echo $editUser['user_phone'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone">
                  </div>
                  <div class="form-group">
                  <label>Status</label>
                  <select  class="form-control select2 select2-hidden-accessible" name="status"  style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                    <option value="1" <?php if ($editUser['user_status']==1) { echo ' selected="selected"'; } ?>>Active</option>
                    <option value="0" <?php if ($editUser['user_status']==0) { echo ' selected="selected"'; } ?>>Inactive</option>
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Uplod Profile Picture</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="profile_pic" value="<?php echo $editUser['user_profile_pic'] ?>" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <input type="hidden" name="id" value="<?php echo $editUser['user_id'] ?>">
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>