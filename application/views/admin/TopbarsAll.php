<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped" id="my_table">
                    <thead>
                    <tr>
                        <th scope="col">Serial</th>
                        <th scope="col">Topbar Brand Name</th>
                        <th scope="col">Topbar Content</th>
                        <th scope="col">Topbar Status</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach($alltopbar as $key=>$topbar) { ?>

                        <tr>
                            <th scope="row"><?php echo $key+1; ?></th>
                            <td><?php echo $topbar['topbar_brand_name'] ?></td>
                            <?php if($topbar['topbar_status']==1) { ?>
                                <td>Active</td>
                            <?php } else if($topbar['topbar_status']==0) { ?>
                                <td>Inactive</td>
                            <?php } ?>
                            <td><?php echo $topbar['topbar_content']?></td>
                            <td>
                                <a href="<?php echo base_url('admin/topbarController/edittopbar/').$topbar['topbar_id']; ?>">
                                    <button type="button" class="btn btn-primary">Edit</button>
                                </a>
                                <a href="<?php echo base_url('admin/topbarController/deletetopbar/').$topbar['topbar_id']; ?>" onclick="return confirm('Are you sure you want to Delete this item?')">
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
</div>
