<div class="row">
   <div class="col-md-12">
      <div class="well well-sm">
         <form class="form-horizontal" method="post" action="<?php echo base_url('addmovie/save') ?>">
            <fieldset>
               <?php if ($this->session->flashdata('success-msg')) { ?>
                  <div class="alert alert-warning" role="alert">
                     Save success
                  </div>
               <?php } ?>
               <legend class="text-center header">Add Movie</legend>
               <form>
                  <div class="form-group">
                     <div class="col-md-1 col-md-offset-2  Bullet">ชื่อเรื่อง</div>
                     <div class="col-md-8">
                        <input id="name" name="name" type="text" placeholder="First Name" class="form-control" require>
                     </div>
                  </div>


                  <div class="form-group">
                     <div class="col-md-1 col-md-offset-2  Bullet">ประเภทหนัง </div>
                     <div class="col-md-8">
                        <select class="form-control" name="genres" require>
                           <option>เลือกประเภทหนัง</option>
                           <?php foreach ($genres as $row) { ?>
                              <option value="<?php echo $row['_id'] ?>"><?php echo $row['genName'] ?></option>
                           <?php } ?>
                        </select>
                     </div>
                  </div>


                  <div class="form-group">
                     <div class="col-md-1 col-md-offset-2  Bullet">ผู้กำกับ</div>
                     <div class="col-md-8">
                        <input id="director_fname" name="director_fname" type="text" placeholder="First Name" class="form-control" require>
                        <br>
                        <input id="director__last" name="director__last" type="text" placeholder="Last Name" class="form-control" require>

                     </div>
                  </div>

                  <div class="form-group">
                     <div class="col-md-1 col-md-offset-2 text-cente Bullet">ปีที่เข้าฉาย</div>
                     <div class="col-md-8">
                        <input id="release_year" name="release_year" type="text" placeholder="ปีที่เข้าฉาย (ระบุ ค.ศ. โดยใส่แค่ตัวเลข)" class="form-control" require>
                     </div>
                  </div>


                  <div class="form-group">
                     <div class="col-md-1 col-md-offset-2  Bullet">ความยาวของหนัง</div>
                     <div class="col-md-8">
                        <input id="length" name="length" type="text" placeholder="ความยาวของหนังใส่เป็นวินาที (เช่น 1:30:00 เป็น 3690  )" class="form-control" require>
                     </div>
                  </div>

                  <div class="form-group">
                     <div class="col-md-1 col-md-offset-2  Bullet">Path movie</div>
                     <div class="col-md-8">
                        <input id="path_movie" name="path_movie" type="text" placeholder="เช่น https://www.youtube.com/embed/19UjyhKY7eA?list=RDMMC4t1_9qMwFI" class="form-control">
                     </div>
                  </div>

                  <div class="form-group">
                     <div class="col-md-1 col-md-offset-2  Bullet">Path tariler movie</div>
                     <div class="col-md-8">
                        <input id="path_tariler" name="path_tariler" type="text" placeholder="เช่น https://www.youtube.com/embed/19UjyhKY7eA?list=RDMMC4t1_9qMwFI" class="form-control" require>
                     </div>
                  </div>


                  <div class="form-group">
                     <div class="col-md-1 col-md-offset-2  Bullet">Path poster movie</div>
                     <div class="col-md-8">
                        <input id="path_poster" name="path_poster" type="text" placeholder="Path poster movie" class="form-control" require>
                     </div>
                  </div>

                  <div class="form-group">
                     <div class="col-md-1 col-md-offset-2  Bullet">Detail</div>
                     <div class="col-md-8">
                        <input id="detail" name="detail" type="text" placeholder="detail" class="form-control" require>
                     </div>
                  </div>
                  <center>
                     <button type="submit" class="btn btn-dark">Save</button>
                     <a href="<?php echo base_url('main') ?>"><button type="button" class="btn btn-dark">Back</button></a>
                  </center>
               </form>
            </fieldset>
         </form>
      </div>
   </div>
</div>
<style>
   .header {
      color: #f50f0f;
      font-size: 4rem;
      /* padding: 10px; */
   }

   .Bullet {
      color: #F5F5F5;
      font-size: 1.5rem;

   }

   .bigicon {
      font-size: 3rem;
      color: #a30b0b;
   }

   .well {
      min-height: 20px;
      padding: 19px;
      margin-bottom: 20px;
      background-color: #151515;
      border: 1px solid #e3e3e3;
      border-radius: 4px;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
   }

   .form-horizontal .form-group {
      margin-right: -1rem;
      margin-left: -10rem;
      margin-top: 2rem;
   }

   .btn {
      display: inline-block;
      font-weight: 400;
      color: #ffffff;
      text-align: center;
      vertical-align: middle;
      cursor: pointer;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      border-color: red;
      background-color: #6d0606;
      border: 1px solid #ff2b2b;
      padding: .375rem .75rem;
      font-size: 1.6rem;
      line-height: 1.5;
      border-radius: .25rem;
      transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;

   }

   .btn.btnsend {
      margin-left: 20rem;
   }

   .btn:hover {
      color: #fff;
      background-color: #f03820;
      border-color: #5c0202;
   }
</style>
</div>