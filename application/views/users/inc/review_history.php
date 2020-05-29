<div class="container-fluid" style="margin-top:35px;">
<div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    <div class="jumbotron jumbotron_profile" style="background-color: #ffffff; padding-bottom:0px;">
                        <h3 class="display-3">Review History</h3>
                        <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p> -->
                    </div>
                </div>
                <div class="col-md-12">
                    <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Review Title</th>
                                    <th scope="col">Brand Name</th>
                                    <th scope="col">Rating</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($review_history as $key => $value){ ?>
                                <tr>
                                    <th scope="row"><?php echo $key+1 ?></th>
                                    <td><?php echo $value->review_title ?></td>
                                    <td><?php echo $value->sale_brand_name ?></td>
                                    <td><?php echo $value->review_rating ?></td>
                                    <td>
                                        <a href="<?php echo base_url('user/profile/review/').$value->review_id ?>">    
                                            <button type="button" class="btn btn-dark">See Review</button>
                                        </a>
                                    </td>
                                    <?php } ?>
                                </tr>
                            <?php //} ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="height: 50px; width: 100%">

</div>