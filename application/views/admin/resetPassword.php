<div class="content-wrapper">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Reset Password</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php echo form_open_multipart('admin/RegistrationController/updatePassword', 'role="form"'); ?>
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input required type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Enter Password">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Confirm Password</label>
                    <input required type="password" name="confirm_password" class="form-control" id="exampleInputEmail1" placeholder="Enter Password">
                  </div>

                  <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('user_id'); ?>"></input>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" onclick="return confirm('Are you sure you want to reset your password?');" class="btn btn-primary">Reset</button>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
</div>