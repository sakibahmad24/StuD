<div class="container">
    <div class="row">
        <div class="col-12">
        <table class="table table-striped" id="my_table">
          <thead>
            <tr>
              <th scope="col">Serial</th>
              <th scope="col">Brand Name</th>
              <th scope="col">Brand Category</th>
              <th scope="col">Customer Phone</th>
              <th scope="col">Sale Date & Time</th>
              <!-- <th scope="col">Action</th> -->
            </tr>
          </thead>
          <tbody>

          <?php foreach($allSales as $key=>$sale) { ?>

            <tr>
              <th scope="row"><?php echo $key+1; ?></th>
              <td><?php echo $sale['sale_brand_name']; ?></td>
              <td><?php echo $sale['sale_brand_category']; ?></td>
              <td><?php echo $sale['sale_phone_number']; ?></td>
              <td><?php $date_time = $sale['sale_time']; 
                        $date_time = date("d-m-Y h:i:sa", strtotime($date_time));
                        echo $date_time;
              ?></td>
            </tr>

          <?php } ?>
            
          </tbody>
        </table>
        </div>
    </div>
</div>
