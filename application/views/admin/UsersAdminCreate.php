<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Add New Admin/Seller</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php echo form_open_multipart('admin/RegistrationController/registration', 'role="form"'); ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input required type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input required type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input required type="phone" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone">
                  </div>
                  <div class="form-group">
                  <label for="exampleFormControlSelect1">Select Usertype</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="user_isApproved">
                      <option value="10">Admin</option>
                      <option value="12">Seller</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input required type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Enter Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Uplod Profile Picture</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input required type="file" name="profile_pic" class="custom-file-input" id="exampleInputFile">
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