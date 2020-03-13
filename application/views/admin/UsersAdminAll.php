<div class="container">
    <div class="row">
        <div class="col-12">
        <table class="table table-striped" id="my_table">
          <thead>
            <tr>
              <th scope="col">Serial</th>
              <th scope="col">Username</th>
              <th scope="col">Email</th>
              <th scope="col">Requested On</th>
              <th scope="col">Profile Picture</th>
              <th scope="col">SID Picture</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>

          <?php foreach($allAdmins as $key=>$admin) { ?>

            <tr>
              <th scope="row"><?php echo $key+1; ?></th>
              <td><?php echo $admin['user_fullname']; ?></td>
              <td><?php echo $admin['user_email']; ?></td>
              <td><?php echo $admin['user_created_at']; ?></td>
              <td><img style="height: 40px;width:80px;" src="<?php echo base_url('assets/assets_user/profile_pic/').$admin['user_profile_pic']; ?>"></td>
              <td><img style="height: 40px;width:80px;" src="<?php echo base_url('assets/assets_user/sid_pic/').$admin['user_sid_pic']; ?>"></td>
              <td>
                <a href="<?php echo base_url('admin/ManageUserController/editUser/').$admin['user_id']; ?>">
                  <button type="button" class="btn btn-primary">Edit</button>
                </a>
                <a href="<?php echo base_url('admin/ManageUserController/deleteUser/').$admin['user_id']; ?>" onclick="return confirm('Are you sure you want to Delete this User?')">
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