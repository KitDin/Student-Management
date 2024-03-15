<?php 
    include "connect.php";
    if(isset($_POST['btp-input'])){
        $email=$_POST['taikhoang'];
        $name=$_POST['nameteacher'];
        $msgiangvien=$_POST['msgiangvien'];
        $sdt=$_POST['sdt'];
        $date=$_POST['date'];
        $diachi=$_POST['diachi'];
        $bomon=$_POST['bomon'];
        $matkhau=$_POST['matkhau'];
        $matkhaunhaplai=$_POST['nhaplaimatkhau'];
        if(isset($email) && isset($name) && isset($msgiangvien)
        && isset($sdt) && isset($date) && isset($bomon) && isset($matkhau) && isset($matkhaunhaplai)){
            if(empty($email) || empty($name) || empty($msgiangvien) || empty($date) 
                || empty($sdt) || empty($bomon) || empty($matkhau) || empty($matkhaunhaplai)){
                    header("Location: regitersUI.php?error=Nhập đầy đủ thông tin");
                    exit();
            }else{
                if($matkhau != $matkhaunhaplai){
                    header("Location: regitersUI.php?error=Mật khẩu không khớp nhau");
                    exit(); 
                }else{
                $check = "SELECT Ms_GiangVien,Email FROM giang_vien";
                $resultCheck = mysqli_query($conn,$check);
                    if(mysqli_num_rows($resultCheck)){
                        while($row = mysqli_fetch_assoc($resultCheck)){
                            if($row['Ms_GiangVien'] != $msgiangvien && $row['Email'] != $email){
                                $sql = "call signup('$msgiangvien','$name', $sdt,'$email','$diachi','$matkhau','$date','$bomon');";
                                $result = mysqli_query($conn,$sql);
                                if($result){
                                    header("Locationuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu0: index.php?su-success=Thành công");
                                    exit();
                                }
                            }else{
                                header("Location: regitersUI.php?error=Đã tồn tại hoặc mã giãng viên tài khoảng");
                                exit();
                                }
                        }
                    }else{
                    header("Location: regitersUI.php?error");
                    exit();
                    }
                }
            }
        } else {
            header("Location: regitersUI.php?error");
            exit();
        }
    } else {
        header("Location: regitersUI.php?error");
        exit();
    }

?>