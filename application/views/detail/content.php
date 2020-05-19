<div class="row">
    <div class="col">
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo $detail[0]['Path image'] ?>" class="img-fluid w-50 mx-auto d-block" />
                <h5 class="text-center bg-danger text-white"><?php echo $detail[0]['nameDetail'] ?></h5>
                <h2 class="text-white"><?php echo $detail[0]['nameDetail'] ?></h2>
                <hr>

                <div class="row">
                    <div class="col-md-4">
                        <h4 class="text-white">ความยาวหนัง : </h4>
                    </div>
                    <div class="col-md-3">
                        <h4 class="text-white"><?php echo $detail[0]['movieTime'] ?></h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <h4 class="text-white">หมวดหมู่ : </h4>
                    </div>
                    <div class="col-md-3">
                        <h4 class="text-white"><?php echo $detail[0]['genName'] ?></h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <h4 class="text-white">ผู้กำกับ :</h4>
                    </div>
                    <div class="col-md-4">
                        <h4 class="text-white"><?php echo $detail[0]['nameDirec'] ?></h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <h4 class="text-white">ปีที่ออกฉาย :</h4>
                    </div>
                    <div class="col-md-3">
                        <h4 class="text-white"><?php echo $detail[0]['movieYear'] ?></h4>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-outline-success btn-block" data-toggle="modal" data-target=".bd-vedio-modal-lg"> Watch movie</button>
                    </div>
                    <div class="col-md-6">
                        <a href="http://localhost/mymedia/main"><button type="button" class="btn btn-outline-success btn-block ">Back</button></a>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade bd-vedio-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog ">
                            <div class="modal-content">
                            <iframe width="800" height="500" src="<?php echo $detail[0]['Path video'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <iframe width="720" height="400" src="<?php echo $detail[0]['Path detail video'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h2 class="bg-danger text-white"> เรื่องย่อ </h2>
                <h4 class="text-white"><?php echo $detail[0]['abstract'] ?></h4>
            </div>
        </div>
    </div>
</div>
</div>