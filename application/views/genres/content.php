<div class="row">
<div class="col-12">
        <h2 class="text-white"><?php echo getNamegenrs($movie_id) ?></h2>
    <hr>

    <div class="row ">
    <?php foreach ($detail as $row) { ?>
        <div class="col-2">
        <a href="<?php echo base_url('detail/'.$row['movie']['$oid']) ?>"><img src="<?php echo $row['Path image']; ?>" class="" alt="" width="160" height="214" /></a>
        <h4 class=" bg-danger text-center  text-white"> <?php echo $row['nameDetail'] ?><br><?php echo $row['movieYear'] ?></h4>
        <br>
    </div>
    <?php } ?>
    </div>
</div>
</div>
</div>
