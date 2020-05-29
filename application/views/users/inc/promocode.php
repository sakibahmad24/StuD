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
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo $last_sale_details['sale_brand_name'] ?></h6>
                            </div>
                            </div>
                        
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Your Last Purchase Time</h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?php $date_time = $last_sale_details['sale_time'];
                                $date_time = date("d-m-Y h:i:sa", strtotime($date_time));
                                $deadline = date( "M j, Y H:i:s", strtotime("+24 hour", strtotime($last_sale_details['sale_time'])));
//                                $sale_time_24fmt = date("d-m-Y h:i:s", strtotime($date_time));
                                    echo $date_time;?></h6>
                            </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Time left to use promocode at <?php echo $last_sale_details['sale_brand_name'] ?></h5>
                                    <p id="demo"></p>
                                    <script>
                                        var deadline_new = "<?php echo $deadline ?>";
                                        //var d = new Date(deadline_new);
                                        //console.log(d);

                                        // var deadline_new = "05-17-2020 02:16:00";
                                        var d = new Date(deadline_new);
                                        console.log(d);

                                        var deadline = new Date(deadline_new).getTime();
                                        var x = setInterval(function() {
                                            var now = new Date().getTime();
                                            var t = deadline - now;
                                            var days = Math.floor(t / (1000 * 60 * 60 * 24));
                                            var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60));
                                            var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
                                            var seconds = Math.floor((t % (1000 * 60)) / 1000);
                                            document.getElementById("demo").innerHTML = days + "d "
                                                + hours + "h " + minutes + "m " + seconds + "s ";
                                            if (t < 0) {
                                                clearInterval(x);
                                                document.getElementById("demo").innerHTML = "EXPIRED";
                                            }
                                        }, 1000);

                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>