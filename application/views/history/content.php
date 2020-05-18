<div class="row">
    <div class="col-12">
        <h2 class="text-white">History</h2>
    </div>
    <hr>
    <hr>
    <?php foreach ($historyMovie as $row) { ?>
    <div class="col-2">
        <hr>
        
            <a href="<?php echo base_url('watch') ?>"><img src="<?php echo $row['Path image'] ?>"  width="160" height="214" /></a>
            <h4 class=" bg-danger text-center  text-white"><?php echo $row['movieName'] ?> <br> <?php echo $row['movieYear'] ?>   </h4>
    </div>
    <?php } ?>
</div>
</div>