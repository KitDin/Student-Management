<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Quản lý sinh viên - Trang chủ</title>
    <?php include 'links.php'?>
    <style>
        .preloader.fade {
            opacity: 0;
        }

        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #fff;
            z-index: 99999;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #loader {
            position: fixed;
            top: 70;
            left: 400px;
            width: 100%;
            height: 100%;
            background: url(images/loading.gif);
            background-repeat: no-repeat;
            background-size: contain;
            z-index: 9999;
            display: block;
            margin: auto;
        }
    </style>
</head>

<body>

    <div class="preloader" id="preloader">
    </div>
    
    <?php include 'navbar.php'?>

    <section id="services" class="container-fluid" style="background: rgb(253, 253, 254);display:flex;justify-content:center;align-items:center;flex-direction:column;height:100vh;">
        <div class="container services mt-3" style="background: rgb(253, 253, 254);display:flex;justify-content:center;align-items:center;">
            <div class="row">
                <div class="container col-12 services-container"style="margin-top:100px;">
                    <div class="col-md-4">
                        <!-- Nhập  -->
                        <div class="service-box text-center color3">
                            <img src="images/insert.png" alt="Insert Data" width=60 />
                            <h3 class="mb-1 mt-0">Nhập,thêm</h3>
                            <p class="mb-0">Nhấn vào đây để nhập thông tin cho sinh viên</p>
                            <a href="insert.php?giangvien=<?php echo $giangvien?>" class="text-decoration-none"><button class="button">Thêm Sinh Viên</button></a>
                            
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- Hiển thị -->
                        <div class="service-box text-center color1">
                            <img src="images/show.png" alt="show Data" width=60 />
                            <h3 class="mb-1 mt-0" style="color: black;">Hiển Thị</h3>
                            <p class="mb-0" style="color: black;">Nhấn vào đây hiển thị thông tin của sinh viên</p>
                            <a href="show.php?giangvien=<?php echo $giangvien?>" class="text-decoration-none"><button class="button">Hiển thị</button></a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- Xem Điểm -->
                        <div class="service-box text-center color2">
                            <img src="images/update.png" alt="update Data" width=60 />
                            <h3 class="mb-1 mt-0">Xem Điểm</h3>
                            <p class="mb-0">Nhấn vào đây để xem điểm của sinh viên</p>
                            <a href="grade.php?giangvien=<?php echo $giangvien?>" class="text-decoration-none"><button class="button">Xem Điểm</button></a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- Khai Trừ -->
                        <div class="service-box text-center color3">
                            <img src="images/delete.png" alt="delete Data" width=60 />
                            <h3 class="mb-1 mt-0">Khai trừ</h3>
                            <p class="mb-0">Nhấn vào đây để tiến hành xoá sinh viên</p>
                            <a href="delete.php?giangvien=<?php echo $giangvien?>" class="text-decoration-none"><button class="button">Khai Trừ</button></a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- Tìm Kiếm -->
                        <div class="service-box text-center color1">
                            <img src="images/search.png" alt="search Data" width=60 />
                            <h3 class="mb-1 mt-0" style="color: black;">Tìm Kiếm</h3>
                            <p class="mb-0" style="color: black;">Nhấn vào đây để tìm kiếm thông tin sinh viên sinh viên</p>
                            <a href="search.php?giangvien=<?php echo $giangvien?>" class="text-decoration-none"><button class="button">Search Data</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
          <div class="text-white mb-3 mb-md-0 copyright">
            Dinh Tuan Kiet@ B2014991 
          </div>
      
          <!-- Right -->
          <div>
            <a href="#!" class="text-white m-2">
              <i class="ti-facebook"></i>
            </a>
            <a href="#!" class="text-white m-2">
              <i class="ti-twitter"></i>
            </a>
            <a href="#!" class="text-white m-2">
              <i class=" ti-google"></i>
            </a>
            <a href="#!" class="text-white m-2">
              <i class=" ti-linkedin"></i>
            </a>
          </div>
    <script>
        window.onload = function() {
            var preloader = document.getElementsByClassName('preloader')[0];
            setTimeout(function() {
                preloader.style.display = 'none';
            }, 500);
        };
    </script>
</body>

</html>
