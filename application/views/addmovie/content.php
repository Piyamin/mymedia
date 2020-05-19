<div class="row">
   <div class="col-md-12">
      <div class="well well-sm">
         <form class="form-horizontal" method="post">
            <fieldset>
               <legend class="text-center header">Add Movie</legend>

               <form method="POST">

                  <div class="form-group">
                     <div class="col-md-1 col-md-offset-2 text-center Bullet">ชื่อเรื่อง</div>
                     <div class="col-md-8">
                        <input id="fname" name="name" type="text" placeholder="First Name" class="form-control">
                     </div>
                  </div>


                  <div class="form-group">
                     <div class="col-md-1 col-md-offset-2 text-center Bullet">ประเภทหนัง </div>
                     <div class="col-md-8">
                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
                           เลือกประเภทหนัง
                        </button>
                        <div class="dropdown-menu">
                           <a class="dropdown-item" href="#">ยอดนิยม</a>
                           <a class="dropdown-item" href="#">โรแมนติกคอมเมดี้</a>
                           <a class="dropdown-item" href="#">ดราม่า</a>
                           <a class="dropdown-item" href="#">สืบสวน/อาชญากรรม</a>
                           <a class="dropdown-item" href="#">สยองขวัญ</a>
                           <a class="dropdown-item" href="#">ไซไฟและแฟนตาซี</a>
                           <a class="dropdown-item" href="#">ซีรี่ย์ต่างประเทศ</a>
                           <a class="dropdown-item" href="#">ซีรี่ย์ไทย</a>
                           <a class="dropdown-item" href="#">ซีรี่ย์เอเชีย</a>
                           <a class="dropdown-item" href="#">ซีรี่ย์อนิเมะ</a>
                           <a class="dropdown-item" href="#">รายการสำหรับเด็ก</a>
                        </div>
                     </div>
                  </div>


                  <div class="form-group">
                     <div class="col-md-1 col-md-offset-2 text-center Bullet">ผู้กำกับ</div>
                     <div class="col-md-8">
                        <input id="director_fname" name="director_fname" type="text" placeholder="First Name" class="form-control">
                        <br>
                        <input id="director__last" name="director__last" type="text" placeholder="Last Name" class="form-control">

                     </div>
                  </div>

                  <div class="form-group">
                     <div class="col-md-1 col-md-offset-2 text-cente Bullet">ปีที่เข้าฉาย</div>
                     <div class="col-md-8">
                        <input id="release_year" name="release_year" type="text" placeholder="ปีที่เข้าฉาย (ระบุ ค.ศ. โดยใส่แค่ตัวเลข)" class="form-control">
                     </div>
                  </div>


                  <div class="form-group">
                     <div class="col-md-1 col-md-offset-2 text-center Bullet">ความยาวของหนัง</div>
                     <div class="col-md-8">
                        <input id="length" name="length" type="text" placeholder="ความยาวของหนัง (เช่น 1:30:00 )" class="form-control">
                     </div>
                  </div>

                  <div class="form-group">
                     <div class="col-md-1 col-md-offset-2 text-center Bullet">Path movie</div>
                     <div class="col-md-8">
                        <input id="path_movie" name="path_movie" type="text" placeholder="เช่น https://www.youtube.com/embed/19UjyhKY7eA?list=RDMMC4t1_9qMwFI" class="form-control">
                     </div>
                  </div>

                  <div class="form-group">
                     <div class="col-md-1 col-md-offset-2 text-center Bullet">Path tariler movie</div>
                     <div class="col-md-8">
                        <input id="path_tariler" name="path_tariler" type="text" placeholder="เช่น https://www.youtube.com/embed/19UjyhKY7eA?list=RDMMC4t1_9qMwFI" class="form-control">
                     </div>
                  </div>


                  <div class="form-group">
                     <div class="col-md-1 col-md-offset-2 text-center Bullet">Path poster movie</div>
                     <div class="col-md-8">
                        <input id="path_poster" name="path_poster" type="text" placeholder="Path poster movie" class="form-control">
                     </div>
                  </div>

                  <div class="form-group">
                     <div class="col-md-1 col-md-offset-2 text-center Bullet">Detail</div>
                     <div class="col-md-8">
                        <input id="detail" name="detail" type="text" placeholder="First Name" class="form-control">
                     </div>
                  </div>


                  <center>
                     <button type="button" class="btn btn-dark">Save</button>
                     <button type="button" class="btn btn-dark">Back</button>
                  </center>

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
      /* padding: 10px; */
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
      margin-left: -20rem;
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