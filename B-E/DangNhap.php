<?php
    include "connect.php";
    if(isset($_POST['btp-input'])){
        if(isset($username) && isset($password)){
            $username=$_POST['Email'];
            $password=$_POST['Matkhau'];
            if (empty($username)){
                header("Location: index.php?error=Nhap Tai Khoang cua ban!");
                exit();
            }else if(empty($password)){
                header("Location: index.php?error=Nhap Mat Khau cua ban");
                exit();
            }else {
                $sql= "select * from giang_vien where email = '$username' and matkhau = '$password'";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)){
                    $row = mysqli_fetch_assoc($result);
                    if ($row['Email'] === $username && $row['Matkhau'] === $password) {
                        $giangvien=$row['Ms_GiangVien'];
                        header("Location: homeofpage/home.php?giangvien=$giangvien");
                        exit();
                    }else{
                        header("Location: index.php?error=Bạn có thể đã nhập sai tài khoảng hoặc mật khẩu! Vui lòng nhập lại");
                        exit();
                    }
                }else{
                    header("Location: index.php?error=Bạn có thể đã nhập sai tài khoảng hoặc mật khẩu! Vui lòng nhập lại");
                    exit();
                }
            }
        }
    }else{
        header("Location: index.php?error");
        exit();
    }

    if (isset($_POST['btn-forgetpassword'])){
        header("Location: trangchuUI.php");
    }
?>
