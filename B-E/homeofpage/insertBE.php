<?php
    include "../connect.php";
    if(isset($_POST['button-submit-insert'])){
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
            $giangvien=$_POST['idgv']; 
            if(!empty($ID) &&!empty($Ten) &&!empty($Lop) &&!empty($Sodienthoai) &&!empty($email) &&!empty($Chungminhthu)
            &&!empty($Quequan) &&!empty($Khoa) &&!empty($Tenkhoa) &&!empty($Date)){
                $check = "SELECT * FROM sinh_vien";
                $resultCheck = mysqli_query($conn,$check);
                if(mysqli_num_rows($resultCheck)){
                    // $sql = "insert into sinh_vien values ('$ID','$Lop','$Tenkhoa','$Ten',$Sodienthoai,'$email','$Quequan',$Chungminhthu,'$Khoa','$Date');";
                    // $result = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($resultCheck)){
                        if($row['Ms_sinhvien']===$ID){
                            header("Location: insert.php?error=Mã số sinh viên đã tồn tại.&giangvien=$giangvien");
                            exit();  
                        }else{
                            if($row['Email']===$email){
                                header("Location: insert.php?error=Email đã tồn tại.&giangvien=$giangvien");
                                exit();
                            }else{ 
                                if($row['So_chung_minh_thu']===$Chungminhthu){
                                header("Location: insert.php?error=Chứng minh thư đã tồn tại.&giangvien=$giangvien");
                                exit();
                                }else{
                                    $sql = "insert into sinh_vien values ('$ID','$Lop','$Tenkhoa','$Ten',$Sodienthoai,'$email','$Quequan',$Chungminhthu,'$Khoa','$Date');";
                                    $result = mysqli_query($conn,$sql);
                                    if($result){
                                        header("Location: insert.php?mess-insert=Đã thêm sinh viên thành công.&giangvien=$giangvien");
                                        exit();
                                    }else{
                                        header("Location: insert.php?error=Không thể thêm sinh viên.&giangvien=$giangvien");
                                        exit();
                                    }
                                }
                            }
                        }
                    }
                }else{
                    header("Location: insert.php?error=Loi.&giangvien=$giangvien");
                    exit();
                }
            }else{
                header("Location: insert.php?error=Nhập đầy đủ thông tin.&giangvien=$giangvien");
                exit();
            }
        }else{
            header("Location: insert.php?error=Lỗi hệ thống.&giangvien=$giangvien");
            exit();
        }
    }else{
        header('Location: insert.php?error=Lỗi hệ thông.&giangvien=$giangvien');
        exit();
    }
?>


