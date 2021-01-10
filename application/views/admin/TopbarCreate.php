<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Add New Topbar</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <?php echo form_open_multipart('admin/TopbarController/store', 'role="form"'); ?>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Topbar Short Content (Max 30-35 Words)</label>
                            <input type="text" name="topbar_content" class="form-control" id="exampleInputEmail1" placeholder="Enter a short detail">
                        </div>
                        <div class="form-group">
                            <label>Select Brand</label>
                            <select required class="form-control select2 select2-hidden-accessible" name="topbar_brand" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <?php foreach($allbrands as $brand){ ?>
                                    <option value="<?php echo $brand['brand_name'] ?>"><? echo $brand['brand_name'] ?></option>
                                <?php } ?>

                            </select>
                        </div>
                        <div class="form-group">
                            <label>Topbar Status</label>
                            <select required class="form-control select2 select2-hidden-accessible" name="topbar_status" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">

                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>

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
