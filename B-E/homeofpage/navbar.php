<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <style>
        .navbar {
            background-color: #f9f9ff;
            box-shadow: 0px 5px 20px 0px rgba(69, 67, 96, 0.1);
        }

    </style>
</head>

<body>
    <navbar id="home"></navbar>
    <nav class="navbar navbar-expand-lg id=" style="position: fixed;">
        <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="logo"><a href="../index.php">Hello! <?php
            include '../connect.php';
            if(isset($_GET['giangvien'])){
                $giangvien=$_GET['giangvien'];
                $sql="select * from giang_vien where Ms_GiangVien='$giangvien';";
                $result=mysqli_query($conn,$sql);
                $r=mysqli_fetch_assoc($result);
                echo $r['HoTen'];    
            }?></a></div>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="home.php?giangvien=<?php $giangvien=$_GET['giangvien']; echo $giangvien?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="insert.php?giangvien=<?php $giangvien=$_GET['giangvien']; echo $giangvien?>">Nhập,Thêm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="show.php?giangvien=<?php $giangvien=$_GET['giangvien']; echo $giangvien?>">Hiển Thị</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="grade.php?giangvien=<?php $giangvien=$_GET['giangvien']; echo $giangvien?>">Xem Điểm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="delete.php?giangvien=<?php $giangvien=$_GET['giangvien']; echo $giangvien?>">Khai Trừ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="search.php?giangvien=<?php $giangvien=$_GET['giangvien']; echo $giangvien?>">Tìm Kiếm</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>
