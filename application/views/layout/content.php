




<div class="row">
    <div class="col">
        <div class="row">
        
        <?php foreach ($movie as  $row) { ?>
            <div class="col-2">
                <a href="<?php echo base_url('detail/'.$row['_id'])?>"><img src="<?php echo $row['Path image'] ?>" class="" alt="" width="160" height="214" /></a>
                <h4 class="bg-danger text-center  text-white"><?php echo $row['movieName'] ?> <br> <?php echo $row['movieYear'] ?> </h4>
                <br>
            </div>
        <?php } ?>
        </div>
        <hr>
        <hr>

    </div>
</div>
</div>