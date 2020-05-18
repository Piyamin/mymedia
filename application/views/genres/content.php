<div class="row">
        <h2 class="text-white"><?php echo getNamegenrs($movie_id) ?></h2>
    <hr>
    <div class="row ">
    <?php foreach ($movie as $row) { ?>
        <div class="col-2">
        <a href="<?php echo base_url('detail') ?>"><img src="<?php echo base_url('public/images/movie27.jpg'); ?>" class="" alt="" width="160" height="214" /></a>
        <h4 class=" bg-danger text-center  text-white"> <?php echo getMovie($movie_id) ?><br> (2019)</h4>
    </div>
    <?php } ?>

    </div>
</div>
</div>