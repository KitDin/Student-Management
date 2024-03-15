<?php 
    include "connect.php";
    if(isset($_POST['btp-input'])){
        $email=$_POST['taikhoang'];
        $msgiangvien=$_POST['msgiangvien'];
        $matkhau_cu=$_POST['matkhau-cu'];
        $matkhau_moi=$_POST['matkhau-moi'];
        $matkhau_nhaplai=$_POST['nhaplaimatkhau-moi'];
        if(isset($email) && isset($msgiangvien) && isset($matkhau_cu) && isset($matkhau_moi) && isset($matkhau_nhaplai)){
            if(empty($email) || empty($msgiangvien) || empty($matkhau_cu) || empty($matkhau_moi) || empty($matkhau_nhaplai)){
                    header("Location: dat-lai-mat-khauUI.php?error=Nhập đầy đủ thông tin,pls");
                    exit();
            }else{
                if($matkhau_moi != $matkhau_nhaplai){
                    header("Location: dat-lai-mat-khauUI.php?error=Mật khẩu không khớp nhau, nhập lại pls");
                    exit(); 
                }else{
                $check = "SELECT Ms_GiangVien,Email,Matkhau FROM giang_vien WHERE Ms_GiangVien='$msgiangvien' and Email='$email'";
                $resultCheck = mysqli_query($conn,$check);
                    if(mysqli_num_rows($resultCheck)){
                        $row = mysqli_fetch_assoc($resultCheck);
                        if($row['Ms_GiangVien'] === $msgiangvien && $row['Email'] === $email && $row['Matkhau'] === $matkhau_cu){
                            $sql = "call Dat_lai_matkhau('$email','$msgiangvien','$matkhau_cu','$matkhau_moi','$matkhau_nhaplai');";
                            $result = mysqli_query($conn,$sql);
                            if($result){
                                header("Location: index.php?success=Đã đặt lại mặt khẩu thành công");
                                exit();
                                }
                        }else{
                            header("Location: dat-lai-mat-khauUI.php?anou=Mật khẩu củ của bạn chưa đúng");
                            exit();
                        }
                    }else{
                        header("Location: dat-lai-mat-khauUI.php?error=Tài khoản hoặc mã số giảng viên không tồn tại!");
                        exit();
                    } 
                }
            }
        } else {
            header("Location: dat-lai-mat-khauUI.php?error=Nhập đầy đủ thông tin");
            exit();
        }
    } elseif (isset($_POST['btn-forgetpassword'])) {
        if(isset($_POST['email-forgetpassword'])){
          $email_f = $_POST['email-forgetpassword'];
          if(!empty($email_f)){
            $sql = "call Lay_lai_matkhau('$email_f');";
            $result= mysqli_query($conn,$sql);  
            if(mysqli_num_rows($result)){
              $row = mysqli_fetch_assoc($result);
              $getpass = $row['matkhau'];
              header("Location: dat-lai-mat-khauUI.php?mess1= Mật khẩu của bạn là $getpass");
              exit();
            }else{
              header("Location: dat-lai-mat-khauUI.php?NotSur=Email của bạn không tồn tại");
              exit();
            }
          }else{
            header("Location: index.php?error=Nhập đủ cú pháp!");
            exit();
          }
        }else{
          header("Location: index.php?error");
          exit();
        }
      }else{
        header("Location: index.php?error");
        exit();
      }
?>

