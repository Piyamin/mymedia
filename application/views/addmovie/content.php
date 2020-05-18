         <div class="wrapper wrapper--w900">

            <div class="card card-5">
               <div class="card-heading">
               </div>
               <div class="card-body">
                  <div class="container "> 
                     <div class="row-12">
                        <div class="col-md-4">
                           <h1 class="title">Edit Movie</h1>
                        </div>
                        <hr>
                        <div class="col-md-4">
                           <br>
                           <button type="button" class="btn btn-dark">Add</button>
                           <button type="button" class="btn btn-dark">Delete </button>
                        </div>
                        <br>
                        <hr>
                        <br>
                     </div>
                  </div>
                  <form method="POST">
                     <div class="form-row">
                        <div class="name">ชื่อเรื่อง : </div>
                        <div class="value">
                           <input class="input--style-6" type="text" name="Movie Name" placeholder="ชื่อเรื่อง" />
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="name">ประเภทหนัง : </div>
                        <div class="dropdown">
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
                     <div class="form-row">
                        <div class="name">ผู้กำกับ : </div>
                        <div class="value">
                           <input class="input--style-6" type="text" name="Movie Name" placeholder="First Name" />

                           <input class="input--style-6" type="text" name="Movie Name" placeholder="Last Name" />
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="name">ปีที่เข้าฉาย :</div>
                        <div class="value">
                           <div class="input-group">
                              <input class="input--style-6" type="text" name="Director " placeholder="ปีที่เข้าฉาย (ระบุปี ค.ศ. โดยใส่แค่ตัวเลข)" />
                           </div>
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="name">ความยาวหนัง :</div>
                        <div class="value">
                           <div class="input-group">
                              <input class="input--style-6" type="text" name="Director " placeholder="ความยาวหนัง (ตัวอย่างเช่น 2:30:00)" />
                           </div>
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="name">Path movie :</div>
                        <div class="value">
                           <div class="input-group">
                              <input class="input--style-6" type="text" name="Director " placeholder="(เช่น  https://www.youtube.com/watch?v=7SwuQWj-Xjw)" />
                           </div>
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="name">Path tariler movie :</div>
                        <div class="value">
                           <div class="input-group">
                              <input class="input--style-6" type="text" name="Director " placeholder="(เช่น  https://www.youtube.com/watch?v=7SwuQWj-Xjw)" />
                           </div>
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="name">Path poster movie :</div>
                        <div class="value">
                           <div class="input-group">
                              <input class="input--style-6" type="text" name="Director " placeholder="(เช่น https://www.bloggang.com/data/onceupon/picture/1178453270.jpg)" />
                           </div>
                        </div>
                     </div>

                     <div class="form-row">
                        <div class="name">Detail : </div>
                        <div class="value">
                           <div class="input-group">
                              <textarea class="textarea--style-6" name="message" placeholder="Detail movie"></textarea>
                           </div>
                        </div>
                     </div>

                     <br>
                     <div class="col-md-6">

                     </div>
                     <div class="col-md-12">
                        <button type="button" class="btn btn-dark">Save</button>
                        <button type="button" class="btn btn-dark">Back</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>