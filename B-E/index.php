
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../F-E/themify-icons/themify-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="" href="/Project_manageStudent/B-E/DangNhap.php">
    <link rel="stylesheet" href="../B-E/forgetpassword.php">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <section class="vh-100">
      <?php include "ThongBaoTruot.php";?>
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
          <!-- form quên mật khẩu -->
          <?php include "ThongBaoAlert.php"?>
          <div class="modal" id="myModal" >
          <div class="modal-dialog modal-dialog-centered" >
            <div class="modal-content" data-aos="zoom-in">

              <!-- Modal Header -->
              <div class="modal-header">
              <h5 class="modal-title">Quên mật khẩu?</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">   
                      <div>
                        <div>
                          <form action="forgetpassword.php" method="POST">
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
          
          <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="../F-E/draw2.jpg"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form action="DangNhap.php" method="POST">
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                  <p class="lead fw-normal mb-0 me-3">Đăng nhập với</p>
                  <button type="button" class="shadow-lg btn btn-primary btn-floating mx-1">
                    <i class="fa-brands ti-facebook"></i>
                  </button>
      
                  <button type="button" class="shadow-lg btn btn-primary btn-floating mx-1">
                    <i class="fab ti-twitter"></i>
                  </button>
      
                  <button type="button" class="shadow-lg btn btn-primary btn-floating mx-1">
                    <i class="fab ti-linkedin"></i>
                  </button>
                </div>
      
                <div class="divider d-flex align-items-center my-4">
                  <p class="shadow-lg text-center fw-bold mx-3 mb-0">Or</p>
                </div>

                <!-- Email -->
                <?php if(isset($_GET['error'])) {?>
                        <p class="error">
                            <?php echo $_GET['error']; ?>
                        </p>
                    <?php }?>
                <div class="form-outline mb-4">
                  <input type="Email" id="form3Example3" class="form-control form-control-lg"
                    name="Email"
                    placeholder="Nhập địa chỉ Email" />
                  <label class="form-label" for="form3Example3">Email</label>
                </div>
      
                <!-- Mật khẩu -->
                <div class="form-outline mb-3">
                  <input type="password" id="form3Example4" class="form-control form-control-lg"
                    name="Matkhau"
                    placeholder="Nhập mật khẩu" />
                  <label class="form-label" for="form3Example4">Mật khẩu</label>
                </div>
      
                <div class="d-flex justify-content-between align-items-center">
                  <!-- Nhớ tui -->
                  <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                    <label class="form-check-label" for="form2Example3">
                      Nhớ tôi
                    </label>
                  </div>
                  <a href="#!" data-bs-toggle="modal" data-bs-target="#myModal" class="text-body">Quên mật khẩu?</a>
                </div>
      
                <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="submit" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;" name="btp-input">Đăng nhập</button>
                  <p class="small fw-bold mt-2 pt-1 mb-0">Không có tài khoản? <a href="regitersUI.php"
                      class="link-danger">Đăng ký</a></p>
                </div>
      
              </form>
            </div>
          </div>
        </div>
        <div
          class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
          <!-- Copyright -->
          <div class="text-white mb-3 mb-md-0 copyright">
            Dinh Tuan Kiet @B2014991
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
      </section>
      </form>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="javascript.js"></script>
</body>
</html>