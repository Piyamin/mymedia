<div class="row">
    <div class="col-12">
        <h2 class="text-white">History</h2>
    </div>
    <hr>
    <hr>
    
    <?php foreach ($history as $i => $row) { ?>
    <div class="col-2">
        <hr>
            <a href="<?php echo base_url('detail/'.$history[$i]['movie']['$oid'] ) ?>"><img src="<?php echo $history[$i]['historymovie'][$i]['Path image'] ?>"  width="160" height="214" /></a>
            <h4 class=" bg-danger text-center  text-white"><?php echo  $history[$i]['historymovie'][$i]['movieName'] ?> <br><?php echo  $history[$i]['historymovie'][$i]['movieYear'] ?>   </h4>
    </div>
    <?php } ?>
</div>
</div>