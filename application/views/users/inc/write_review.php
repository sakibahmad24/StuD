<div class="container" style="margin-top:120px;">
<div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12">
        <div class="container">
                <h3 style="font-size:30px; text-align:center;">Write a review</h3>
                <div class="row">
                <div class="col-md-8 offset-md-2">
                <?php echo form_open_multipart('ProfileController/save_review'); ?>
                
                    <!-- <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div> -->
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Select rating *</label>
                        <select class="form-control" name="rating" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Put a Title *</label>
                        <input class="form-control" name="title" type="text">
                    </div>
                    <!--  <div class="form-group">
                        <label for="exampleFormControlTextarea1">Put a sub-heading of your review</label>
                        <input class="form-control" name="subheading" type="text">
                    </div> -->
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Write a description (Max 500 words) *</label>
                        <textarea required class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="form-group" name="image" id="validatedCustomFile" required>
                        <label class="custom-file-label" for="validatedCustomFile">Choose file... *</label>
                    </div>
                    <p>* Fields are required</p>
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