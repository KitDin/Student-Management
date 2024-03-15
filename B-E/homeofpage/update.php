<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cập Nhật Sinh Viên</title>
    <?php include 'links.php'?>
    <link rel="stylesheet" href="css/insert.css">
    <style>
        .f-container:before {
            content: "";
            position: absolute;
            height: 2000px;
            width: 2000px;
            top: -10%;
            left: 48%;
            transform: translateY(-50%);
            background-image: linear-gradient(-45deg, #4481eb 0%, #04befe 100%);
            transition: 1.8s ease-in-out;
            border-radius: 50%;
            z-index: 6;
        }

        .signin-signup {
            position: absolute;
            top: 13%;
            height: 20px;
            transform: translate(-50%, -50%);
            left: 26%;
            width: 50%;
            padding: 20px;
            transition: 1s 0.7s ease-in-out;
            z-index: 5;
        }

        .panel p {
            font-size: 15px;
            padding: 0.5rem 0;
            margin-right: 100px;
        }

        .panel h3 {
            font-size: 20px;
            margin-right: 100px;
            margin-top: 15px;
        }

        .btn.transparent {
            margin-right: 100px;
            cursor: pointer;
        }

    </style>
</head>

<body>

    <?php include 'navbar.php'?>

    <div class="f-container">
        <div class="forms-container" style="margin-top:20px;">
            <div class="signin-signup">
            <form action="updateBE.php" method="POST">
                <?php include "../ThongBaoTruot.php"; ?>
                <?php
                    include '../connect.php';
                    if(isset($_GET['id'])){
                    $idsv=$_GET['id'];
                    $showsvbyid="SELECT * FROM sinh_vien WHERE Ms_sinhvien = '$idsv';";
                    $resultshowbyid=mysqli_query($conn,$showsvbyid);
                    if(mysqli_num_rows($resultshowbyid)){
                        $rowid=mysqli_fetch_assoc($resultshowbyid);
                        echo  '<div class="form-row">
                            <!-- Name -->
                            <div class="row">'?>
                                <input aria-label="Mã số sinh viên" type="text" name="ID" id="rnum" value="<?php echo $idsv?>" placeholder="Nhập Mã Số Sinh Viên" required>
                        <?php echo '</div>
                            <div class="row">';?>
                                <input type="text" name="ten" id="name" value="<?php echo $rowid['HoTen']?>" placeholder="Nhập Tên" required>
                        <?php echo '</div>
                            </div>
                            <div class="form-row">
                                <div class="row">';?>
                                <input type="text" name="lop" id="class" value="<?php echo $rowid['Lop']?>" placeholder="Nhập Lớp" required>
                        <?php echo '</div>
                                 <div class="row">';?>
                                <input type="text" name="sodienthoai" id="number" value="<?php echo $rowid['STD']?>"  placeholder="Nhập số điện thoại" required >
                        <?php echo '</div>
                            </div>
                            <div class="form-row">
                                <div class="row">';?>
                                <input type="text" name="email" id="email" value="<?php echo $rowid['Email']?>" placeholder="Nhập email" required>
                        <?php echo '</div>
                            <div class="row">';?>
                                <input type="text" name="sochungminh" id="adhaar" value="<?php echo $rowid['So_chung_minh_thu']?>" placeholder="Nhập chứng minh thư"  >
                        <?php echo '</div>
                            </div>

                            <div class="form-row">
                                <div class="row">';?>
                                <input type="text" name="quequan" id="adhaar" value="<?php echo $rowid['Que_quan']?>" placeholder="Nhập quê quán"  >
                        <?php echo '</div>
                            <div class="row">';?>
                                <input type="text" name="khoa" id="email" value="<?php echo $rowid['Khoa']?>" placeholder="Nhập khoá" >
                        <?php echo '</div>
                        </div>
                        <div class="form-row mx-3">
                        <div class="row my-3">';?>
                            <select id="city" class="city" name="tenkhoa">
                                <option value="<?php echo $rowid['Tenkhoa']?>" selected="selected"><?php echo '<p>'.$rowid["Tenkhoa"].'</p>'?></option>';
                                <?php
                                $sql = "SELECT * FROM khoa;";
                                $result = mysqli_query($conn,$sql);
                                while($row = mysqli_fetch_assoc($result)) { ?>
                                <option value="<?php echo $row['TenKhoa']?>"><?php echo $row['TenKhoa']?></option>
                                <?php } ?>
                                </select>
                        <?php echo '</div>
                        <div class="row">'?>
                            <input type="date" name="date" id="dob" value="<?php echo $rowid['NgaySinh']?>">
                        <?php echo '</div>
                        </div>';
                                } 
                            }
            ?>
                    <input type="hidden" value="<?php echo $_GET['giangvien']?>" name=idgv>
                    <?php if(isset($_GET['messerror'])) {?>
                    <a class="button" href="show.php?giangvien=<?php echo $giangvien?>">Quay về trang hiển thị</a>  
                    <?php } else { ?>
                    <button class="button" type="submit" value="submit" name="button-submit-update">Submit</button>   
                    <?php } ?>
            </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel right-panel">
                <img src="images/—Pngtree—system update software on mobile_6198777.png" class="image" alt="" />
            </div>
        </div>
    </div>

    <script type="text/javascript">
        setTimeout(function() {
            $('#alert').alert('close');
        }, 3500);
    </script>
</body>
</html>