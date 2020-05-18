<div class="row">
    <div class="col-12">
        <h2 class="text-white">Coming Soon</h2>
    </div>
    <hr>
    
        <div class="row">
        <?php foreach ($comingsoon as $row) {?>
            <div class="col-2">
                <hr>
                <a href=""><img src="<?php echo $row['images'] ?>" class="" alt="" width="160" height="214" /></a>
                <h4 class=" bg-danger text-center  text-white"><?php echo $row['name'] ?><br><?php echo $row['year'] ?></h4>
            </div>
        <?php } ?>
        </div>
        <div class="row">
        <?php foreach ($comingsoon as $row) {?>
            <div class="col-6">
                <hr>
                <iframe width="540" height="400" src="<?php echo $row['trailer_movie'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3 class="bg-danger text-center  text-white "> <?php echo $row['name'] ?> </h3>
            </div>
        <?php } ?>
        </div>
    
    <hr>




</div>
</div>