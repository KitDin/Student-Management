<?php

include "../connect.php";
    if(isset($_GET['id'])){
        $idsv=$_GET['id'];
        $giangvien=$_GET['giangvien'];
        $sql="Call delete_sv('$idsv');";
        $result=mysqli_query($conn,$sql);
        if($result){
            header("Location: show.php?mess-update=Đã xoá sinh viên thành công&giangvien=$giangvien");
            exit();
        }else{
            header("Location: show.php?error=Loi&giangvien=$giangvien");
            exit();
        }
    }else if(isset($_POST['button'])){
        $giangvien=$_POST['idgv'];
        $d_id=$_POST['rnum'];
        if(!empty($d_id)){
            $sql_page="Call delete_sv('$d_id','$giangvien');";
            $result_page=mysqli_query($conn,$sql_page);
            if(mysqli_num_rows($result_page)){
                $r=mysqli_fetch_assoc($result_page);
                if($r['Ms_sinhvien'] === 'true'){
                    header("Location: delete.php?mess-update=Đã xoá sinh viên thành công&giangvien=$giangvien");
                    exit();
                }else{
                    header("Location: delete.php?mess-nw=Không tìm thấy sinh viên!&giangvien=$giangvien");
                    exit();
                }
            }
        }else{
            header("Location: delete.php?mess-nw=Bạn chưa nhập mã sinh viên!&giangvien=$giangvien");
        }
    }else{
        header("Location: delete.php?error=Loi&giangvien=$giangvien");
    }
?>