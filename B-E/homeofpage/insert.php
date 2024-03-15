<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Nhập,Thêm Sinh Viên</title>
    <?php include 'links.php'?>
    <link rel="stylesheet" href="css/insert.css">
    <link rel="stylesheet" href="insertBE.php">
    <style>    
    .error {
    background: rgba(238, 26, 26,.3);
    color: red;
    width: 80%;
    text-align: center;
    border-radius: 7px;
    margin: auto;
    margin-bottom: 20px;
    }
    .mess-insert {
    background: rgba(238, 26, 26,.3);
    color: red;
    width: 80%;
    text-align: center;
    border-radius: 7px;
    margin: auto;
    margin-bottom: 20px;
    }</style>
</head>

<body>
    <?php include 'navbar.php'?>
    <div class="f-container">
        <div class="forms-container" style="margin-top:20px;">
            <div class="signin-signup">
                <form action="insertBE.php" method="POST">
                <?php include '../ThongBaoTruot.php' ?>
                <?php if(isset($_GET['error'])) { ?>
                    <p class="error">
                        <?php echo $_GET['error']?>
                    </p>
                <?php } ?>
                    <div class="form-row">
            <!-- Mã số sinh viên -->
                        <div class="row">
                            <input type="text" name="ID" id="rnum" placeholder="Nhập Mã Số Sinh Viên" required>
                        </div>
            <!-- Tên -->
                        <div class="row">
                            <input type="text" name="ten" id="name" placeholder="Nhập Tên" required>
                        </div>
                    </div>
                    <div class="form-row">
            <!-- Lớp -->
                        <div class="row">
                            <input type="text" name="lop" id="class" placeholder="Nhập Lớp" required>
                        </div>
            <!-- Số điện thoại -->
                        <div class="row">
                            <input type="text" name="sodienthoai" id="number" placeholder="Nhập số điện thoại" required >
                        </div>
                    </div>
                    <div class="form-row">
            <!-- email -->
                        <div class="row">
                            <input type="text" name="email" id="email" placeholder="Nhập email" required>
                        </div>
            <!-- Số chứng minh -->
                        <div class="row">
                            <input type="text" name="sochungminh" id="adhaar" placeholder="Nhập chứng minh thư"  >
                        </div>
                    </div>

                    <div class="form-row">
            <!-- Quê Quán -->
                    <div class="row">
                            <input type="text" name="quequan" id="adhaar" placeholder="Nhập quê quán"  >
                        </div>
            <!-- Khoá -->
                        <div class="row">
                            <input type="text" name="khoa" id="email" placeholder="Nhập khoá" >
                        </div>
                    </div>

                    <div class="form-row">
            <!-- Tên Khoa -->
                        <div class="row my-3">
                            <select id="city" class="city" name="tenkhoa">
                                <option value="" selected="selected">--Chọn Khoa</option>
                                <?php 
                                include "../connect.php";
                                $sql = "SELECT * FROM khoa;";
                                $result = mysqli_query($conn,$sql);
                                while($row = mysqli_fetch_assoc($result)) {?>
                                <option value="<?php echo $row['TenKhoa']?>"><?php echo $row['TenKhoa']?></option>
                                <?php }?>
                            </select>
                        </div>
            <!-- Ngày sinh -->
                        <div class="row">
                            <input type="date" name="date" id="dob" >
                        </div>
                    </div>
                    <input type="hidden" value="<?php echo $giangvien?>" name=idgv>
                    <button class="button" type="submit" value="submit" name="button-submit-insert">Submit</button>
                </form>
                <p class="footer text-center pt-4 mt-5">Dinh Tuan Kiet @B2014991</p>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Xem Điểm</h3>
                    <p>Nếu đã thêm sinh viên thành công bạn có muốn xem điểm cho sinh nếu bạn muốn.</p>
                    <a href="grade.php?giangvien=<?php echo $giangvien?>"><button class="btn transparent" id="sign-up-btn">
                            Xem Điểm
                        </button></a>
                </div>
                <img src="images/log.svg" class="image" alt="" />
            </div>
        </div>
    </div>
    <!-- <script type="text/javascript">
        setTimeout(function() {
            // Closing the alert 
            $('#alert').alert('close');
        }, 3500);

    </script> -->
    <script>
        window.onload = function() {
            var preloader = document.getElementsByClassName('animation-close')[0];
            setTimeout(function() { 
                preloader.style.display = 'none';
            }, 5000);
        };
    </script>

</body>

</html>
