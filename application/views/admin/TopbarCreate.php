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
                            <label for="exampleInputEmail1">Topbar Name</label>
                            <input required type="text" name="Topbar_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Topbar Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Topbar Short Details (Max 30-35 Words)</label>
                            <input type="text" name="Topbar_details" class="form-control" id="exampleInputEmail1" placeholder="Enter a short detail">
                        </div>
                        <div class="form-group">
                            <label>Select Brand</label>
                            <select required class="form-control select2 select2-hidden-accessible" name="Topbar_brand" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <?php foreach($allbrands as $brand){ ?>
                                    <option value="<?php echo $brand['brand_name'] ?>"><? echo $brand['brand_name'] ?></option>
                                <?php } ?>

                            </select>
                        </div>
                        <div class="form-group">
                            <label>Feature Status</label>
                            <select required class="form-control select2 select2-hidden-accessible" name="Topbar_isFeatured" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">

                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Upload Topbar Logo</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input required type="file" name="Topbar_image" class="custom-file-input" id="exampleInputFile">
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
