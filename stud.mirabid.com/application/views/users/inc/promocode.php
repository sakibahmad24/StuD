<div class="container-fluid" style="margin-top:120px;">
<div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-deck">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Your Promocode</h5>
                                <h6 class="card-subtitle mb-2 text-muted"><kbd><?php echo $this->session->userdata('promocode') ?></kbd></h6>
                            </div>
                            </div>
                        
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Your Last Purchased Brand</h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo $last_promo_details['sale_brand_name'] ?></h6>
                            </div>
                            </div>
                        
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Your Last Purchase Time</h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?php $date_time = $last_promo_details['sale_time']; 
                                $date_time = date("d-m-Y h:i:sa", strtotime($date_time));
                                echo $date_time;?></h6>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>