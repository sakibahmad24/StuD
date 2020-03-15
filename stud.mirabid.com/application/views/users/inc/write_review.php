<div class="container-fluid" style="margin-top:100px;">
<div class="clearfix"></div>
    <div class="row">
        <div class="col-md-2 no-padding">
            <?php $this->load->view('users/inc/user_panel') ?>
        </div>
        <div class="col-md-10 no-padding">
            <div class="container">
                <div class="row">
                    <div class="jumbotron jumbotron_profile" style="background-color: #ffffff;">
                        <h3 class="display-3">Write a review</h3>
                        <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p> -->
                    </div>
                </div>
                <div class="col-md-8 col-md-push-2">
                <?php echo form_open_multipart('ProfileController/save_review'); ?>
                
                    <!-- <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div> -->
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Select rating</label>
                        <select class="form-control" name="rating" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Put a Title</label>
                        <input class="form-control" name="title" type="text">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Put a sub-heading of your review</label>
                        <input class="form-control" name="subheading" type="text">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Write a description (Max 500 words)</label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="form-group" name="image" id="validatedCustomFile" required>
                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                    </div><br><br>
                    <input type="hidden" name="sale_id" value="<?php echo $sale_id ?>">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="height: 50px; width: 100%">

</div>