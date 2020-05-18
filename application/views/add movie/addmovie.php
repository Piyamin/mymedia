<!DOCTYPE html>
<html lang="en">

   <head>
      <!-- Required meta tags-->
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="Colorlib Templates" />
      <meta name="author" content="Colorlib" />
      <meta name="keywords" content="Colorlib Templates" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      <!-- Title Page-->
      <title>EDIT MOVIE</title>
      <!-- Font special for pages-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet" />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      <!-- Main CSS-->
      <link href="css/main.css" rel="stylesheet" media="all" />
      <style>
         .title {
            color: red;
         }
      </style>
   </head>

   <body>
      <div class="page-wrapper bg-dark p-t-100 p-b-50">
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
      </div>
      </div>
      </div>
      <!-- Jquery JS-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <!-- Main JS-->
      <script src="js/global.js"></script>
   </body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->