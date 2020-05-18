<div class="row">
    <div class="col">
    <?php foreach ($genres as  $row) { ?>
        <h2 class="text-white"><?php echo $row['genName'] ?></h2>
        <hr>
    
        <div class="row">
        <?php foreach ($movie as  $row) { ?>
            <div class="col-2">
                <a href="http://localhost/mymedia/detail"><img src="<?php echo base_url('public/images/movie1.jpg'); ?>" class="" alt="" width="160" height="214" /></a>
                <h4 class="bg-danger text-center  text-white"><?php echo $row['movieName'] ?></h4>
            </div>
        <?php } ?>
        </div>
    <?php } ?>
        <hr>
        <hr>

    </div>
</div>
</div>