<div class="row">
    <div class="col-12">
        <h2 class="text-white">Coming Soon</h2>
    </div>
    <hr>
    
        <div class="row">
        <?php foreach ($movie as $row) {?>
            <div class="col-2">
                <hr>
                <a href="<?php echo base_url('detail/'.$row['_id'] ) ?>"><img src="<?php echo $row['Path image'] ?>" class="" alt="" width="160" height="214" /></a>
                <h4 class=" bg-danger text-center  text-white"><?php echo $row['movieName'] ?><br><?php echo $row['movieYear'] ?></h4>
            </div>
        <?php } ?>
        </div>
        <div class="row">
        <?php foreach ($movie as $row) {?>
            <div class="col-6">
                <hr>
                <iframe width="540" height="400" src="<?php echo $row['Path video'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3 class="bg-danger text-center  text-white "> <?php echo $row['movieName'] ?> </h3>
            </div>
        <?php } ?>
        </div>
    
    <hr>




</div>
</div>