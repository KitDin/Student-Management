
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="" href="/Project_manageStudent/B-E/regiters.php">
    <link rel="stylesheet" href="../F-E/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <section class="vh-100 position-relative">
        <div class="container-fluid">
          
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form action="regiters.php" method="POST">
                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0">SIGN UP</p>
                </div>

                <?php if(isset($_GET['error'])) {?>
                        <p class="error">
                            <?php echo $_GET['error']; ?>
                        </p>
                    <?php }?>
               <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3" class="form-control form-control-lg"
                    name="taikhoang" value="<?php $email?>"
                    placeholder="Nhập địa chỉ email của bạn" />
                  <label class="form-label" for="form3Example3">Địa chỉ email</label>
                </div>
                <!-- Name rInput -->
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example3" class="form-control form-control-lg"
                    name="nameteacher"
                    placeholder="Nhập họ và tên của bạn" />
                  <label class="form-label" for="form3Example3">Họ và tên</label>
                </div>
                <!-- Ms_giangvien input -->
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example3" class="form-control form-control-lg"
                    name="msgiangvien"
                    placeholder="Nhập mã số giãng viên của bạn" />
                  <label class="form-label" for="form3Example3">Mã số giãng viên</label>
                </div>  
                <!-- SDT  -->
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example3" class="form-control form-control-lg"
                    name="sdt"
                    placeholder="Nhập mã số điện thoại" />
                  <label class="form-label" for="form3Example3">Số điện thoại</label>
                </div>
                 <!-- dia chi  -->
                <div class="form-outline mb-3">
                  <input type="text" id="form3Example4" class="form-control form-control-lg"
                    name="diachi"
                    placeholder="Nhập địa chỉ" />
                  <label class="form-label" for="form3Example4">Địa chỉ</label>
                </div> 
               <!-- date  -->
                <div class="form-outline mb-4">
                  <input type="date" id="form3Example3" class="form-control form-control-lg"
                    name="date"
                    placeholder="yyyy-mm-dd"/>
                  <label class="form-label" for="form3Example3">Ngày sinh</label>
                </div> 
                
                <!-- Bo mon -->
                <div class="form-outline mb-3">
                    <select name="bomon" class="form-select form-control form-control-lg" id="form3Example4">
                      <option selected>--Chọn bộ môn</option>
                      <?php
                      include "connect.php";
                      $sql="SELECT * FROM bo_mon;";
                      $result = mysqli_query($conn,$sql);
                      if(mysqli_num_rows($result)){
                        while($row = mysqli_fetch_assoc($result)){?>
                      <option value="<?php echo $row['TenBoMon'] ?>"> <?php echo $row['TenBoMon'] ?> </option>
                      <?php  }}
                      ?>
                    </select>
                  <label class="form-label" for="form3Example4">Bộ môn</label>
                </div>
                <!-- password -->
                <div class="form-outline mb-3">
                  <input type="password" id="form3Example4" class="form-control form-control-lg"
                    name="matkhau"
                    placeholder="Nhập mật khẩu" />
                  <label class="form-label" for="form3Example4">Mật khẩu</label>
                </div>
                <!-- Nhập lại pass -->
                <div class="form-outline mb-3">
                  <input type="password" id="form3Example4" class="form-control form-control-lg"
                    name="nhaplaimatkhau"
                    placeholder="Nhập lại mật khẩu" />
                  <label class="form-label" for="form3Example4">Xác nhận lại mật khẩu</label>
                </div>
                <!-- Part regiter button -->
                <div class="text-center text-lg-start mt-4 pt-2 mb-5">
                  <button type="submit" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;" name="btp-input">Sign up</button>
                  <p class="small fw-bold mt-2 pt-1 mb-0">Đã có tài khoản <a href="index.php"
                      class="link-danger">Đăng Nhập</a></p>
                </div>
              </form>
            </div>
          </div>
          <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
          <!-- Copyright -->
          <div class="text-white mb-3 mb-md-0 copyright">
            Dinh Tuan Kiet B2014991 @
          </div>
          <!-- Copyright -->
      
          <!-- Right -->
          <div>
          <a href="#!" class="text-decoration-none text-white me-4">
              <i class="fab ti-facebook"></i>
            </a>
            <a href="#!" class="text-decoration-none text-white me-4">
              <i class="fab ti-twitter"></i>
            </a>
            <a href="#!" class="text-decoration-none text-white me-4">
              <i class="fab ti-google"></i>
            </a>
            <a href="#!" class="text-decoration-none text-white">
              <i class="fab ti-linkedin"></i>
            </a>
          </div>
          <!-- Right -->
        </div>
        </div>
      </div>
      </section>
    </form>
</body>
</html>