<?php
    include "../connect.php";
    if(isset($_POST['button-submit-update'])){
        $giangvien=$_POST['idgv'];
        if(isset($_POST['ID']) && isset($_POST['ten']) && isset($_POST['lop']) && isset($_POST['sodienthoai']) && isset($_POST['email'])
        && isset($_POST['sochungminh']) && isset($_POST['quequan']) && isset($_POST['khoa']) && isset($_POST['tenkhoa']) && isset($_POST['date'])){
            $ID=$_POST['ID'];
            $Ten=$_POST['ten'];
            $Lop=$_POST['lop'];
            $Sodienthoai=$_POST['sodienthoai'];
            $email=$_POST['email'];
            $Chungminhthu=$_POST['sochungminh'];
            $Quequan=$_POST['quequan'];
            $Khoa=$_POST['khoa'];
            $Tenkhoa=$_POST['tenkhoa'];
            $Date=$_POST['date'];   
            if(!empty($ID) &&!empty($Ten) &&!empty($Lop) &&!empty($Sodienthoai) &&!empty($email) &&!empty($Chungminhthu)
            &&!empty($Quequan) &&!empty($Khoa) &&!empty($Tenkhoa) &&!empty($Date)){
                $check="SELECT Ms_sinhvien FROM sinh_vien where Ms_sinhvien = '$ID' and Email='$email'";
                $resultCheck=mysqli_query($conn,$check);
                if($r=mysqli_fetch_row($resultCheck)){
                    if($r['0'] === $ID){
                            $sql="call update_sinhvien('$ID', '$Lop', '$Tenkhoa', '$Ten','$Sodienthoai', '$Quequan', '$Khoa', '$Date');";
                            $result=mysqli_query($conn,$sql);
                            if($result){
                                header("Location: show.php?mess-update=Đã cập nhật thành công&giangvien=$giangvien");
                                exit();
                            }else{
                                header("Location: update.php?messerror=Cập nhật thất bại!&giangvien=$giangvien");
                                exit(); 
                            }
                        }
                }else{
                    header("Location: update.php?messerror=Cập nhật thất bại!&giangvien=$giangvien");
                                exit(); 
                }
            }else{
                header("Location: update.php?error=Nhập đầy đủ thông tin.&giangvien=$giangvien");
                exit();
            }
        }else{
            header("Location: update.php?error=Lỗi hệ thống&giangvien=$giangvien");
            exit();
        }
    }else{
        header("Location: update.php?error=Lỗi hệ thông.&giangvien=$giangvien");
        exit();
    }
?>


