<div class="container-fluid" style="margin-top:35px;">
<div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    <div class="jumbotron jumbotron_profile" style="background-color: #ffffff; padding-bottom:0px;">
                        <h3 class="display-3">Purchase History</h3>
                        <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p> -->
                    </div>
                </div>
                <div class="col-md-12">
                    <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Brand Name</th>
                                    <th scope="col">Promo Code</th>
                                    <th scope="col">Date-time</th>
                                    <th scope="col">Review</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($purchase_history as $key => $value){ ?>
                                <tr>
                                    <th scope="row"><?php echo $key+1 ?></th>
                                    <td><?php echo $value->brand_name ?></td>
                                    <td><?php echo $value->sale_promocode ?></td>
                                    <td><?php echo $value->sale_time ?></td>
                                    <?php if($value->sale_review != '1') {?>
                                    <td><a href="<?php echo base_url('user/profile/write_review/').$value->sale_id ?>"><button type="button" class="btn btn-dark">Write Review</button></a></td>
                                    <?php }else{?>
                                    <td>Aleady Reviewed</td>
                                    <?php } ?>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="height: 50px; width: 100%">

</div>