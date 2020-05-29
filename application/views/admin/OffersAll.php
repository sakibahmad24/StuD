<div class="container">
    <div class="row">
        <div class="col-12">
        <table class="table table-striped" id="my_table">
          <thead>
            <tr>
              <th scope="col">Serial</th>
              <th scope="col">Offer Name</th>
              <th scope="col">Offer Details</th>
              <th scope="col">Feature Status</th>
              <th scope="col">Image</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>

          <?php foreach($allOffer as $key=>$offer) { ?>

            <tr>
              <th scope="row"><?php echo $key+1; ?></th>
              <td><?php echo word_limiter($offer['offer_name'], 5);$offer['offer_name']; ?></td>
              <td><?php echo word_limiter($offer['offer_details'], 10); ?></td>
              <?php if($offer['offer_isFeatured']==1) { ?>
                <td>Active</td>
              <?php } else if($offer['offer_isFeatured']==0) { ?>
                <td>Inactive</td>
              <?php } ?>
              <td><img style="height: 40px;width:80px;" src="<?php echo base_url('assets/common/offers_picture/').$offer['offer_image']; ?>"></td>
              <td>
                <a href="<?php echo base_url('admin/OfferController/editOffer/').$offer['offer_id']; ?>">
                  <button type="button" class="btn btn-primary">Edit</button>
                </a>
                <a href="<?php echo base_url('admin/OfferController/deleteOffer/').$offer['offer_id']; ?>" onclick="return confirm('Are you sure you want to Delete this item?')">
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
