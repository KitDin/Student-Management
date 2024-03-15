
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt lại mật khẩu</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="" href="/Project_manageStudent/B-E/dat-lai-mat-khau.php">
    <link rel="" href="/Project_manageStudent/B-E/forgetpassword.php">
    <link rel="" href="javascript.js">
    <link rel="stylesheet" href="../F-E/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    .anou{
    background: rgba(238, 26, 26,.3);
    color: red;
    width: 80%;
    text-align: center;
    border-radius: 7px;
    margin: auto;
    margin-bottom: 20px;
  }
    </style>
</head>
<body>
    <section class="vh-100 position-relative">
        <div class="container-fluid">
        <?php include "ThongBaoTruot.php"?>
          <div class="row d-flex justify-content-center align-items-center h-100">
          <!-- form fgpw -->
          <?php include "ThongBaoAlert.php" ?>
          <div class="modal" id="myModal">
          <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
              <h5 class="modal-title">Quên mật khẩu?</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">   
                      <div>
                        <div>
                          <form action="dat-lai-mat-khau.php" method="POST">
                            <div class="mb-3">
                              <label for="email" class="form-label">Email</label>
                              <input type="email" id="email" class="form-control" name="email-forgetpassword" placeholder="Nhập email"
                                required="">
                            </div>
                            <div class="mb-3 d-grid">
                              <button type="submit" name="btn-forgetpassword" class="btn btn-primary">
                                Lấy mật khẩu
                              </button>
                            </div>
                          </form>
                  </div>
              </div>

              <!-- Modal footer -->
              <div class="modal-header border-bottom-0">
              <div class="ml-5">
              <span>Không muốn đổi mật khẩu? <a href="index.php">Đăng nhập</a></span>
              </div>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Đóng</button>
              </div>
            </div>
          </div>
        </div>
          </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form action="dat-lai-mat-khau.php" method="POST">
                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0">Đặt lại mật khẩu</p>
                </div>
                    <?php if(isset($_GET['error'])) {?>
                             <p class="error">
                             <?php echo $_GET['error']; ?>
                             </p>
                             <?php } ?>
                    <?php if(isset($_GET['anou'])) {?>
                        <p class="anou">
                          <?php echo $_GET['anou'];?>
                        </p>
                      <?php } ?>
               <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3" class="form-control form-control-lg"
                    name="taikhoang" value=""
                    placeholder="Nhập địa chỉ email của bạn" />
                  <label class="form-label" for="form3Example3">Địa chỉ email</label>
                </div>
                <!-- Ms_giangvien input -->
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example3" class="form-control form-control-lg"
                    name="msgiangvien"
                    placeholder="Nhập mã số giãng viên của bạn" />
                  <label class="form-label" for="form3Example3">Mã số giãng viên</label>
                </div>  
                <!-- password old -->
                <div class="form-outline mb-3">
                  <input type="password" id="form3Example4" class="form-control form-control-lg"
                    name="matkhau-cu"
                    placeholder="Nhập mật khẩu cũ" />
                  <label class="form-label" for="form3Example4">Mật khẩu</label>
                </div>
                <!-- password new -->
                <div class="form-outline mb-3">
                  <input type="password" id="form3Example4" class="form-control form-control-lg"
                    name="matkhau-moi"
                    placeholder="Nhập mật khẩu mới" />
                  <label class="form-label" for="form3Example4">Mật khẩu mới</label>
                </div>
                <!-- nhập lại password new -->
                <div class="form-outline mb-3">
                  <input type="password" id="form3Example4" class="form-control form-control-lg"
                    name="nhaplaimatkhau-moi"
                    placeholder="Nhập lại mật khẩu mới" />
                  <label class="form-label" for="form3Example4">Nhập lại mật khẩu</label>
                </div>
                <!-- Part regiter button -->
                <div class="text-center text-lg-start mt-4 pt-2 mb-5">
                  <button type="submit" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;" name="btp-input">Đặt lại mật khẩu</button>
                  <p class="small fw-bold mt-2 pt-1 mb-0">Tôi không muốn đặt lại! <a href="index.php"
                      class="link-danger">Đăng nhập</a></p>
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="javascript.js"></script>
</body>
</html>