<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hiển Thị Thông Tin Sinh Viên</title>
    <?php include 'links.php'?>
</head>
<style>
    * {
        margin: 0px;
        box-sizing: border-box;
    }

    .table {
        /* height: auto;
        font-size: 20px; */
        text-align: center;
    }

    .table-container {
        margin-top: 110px;
    }

</style>

<body>
    <?php include 'navbar.php'?>
    <div class="container-fluid table-container ">
        <?php include "../ThongBaoTruot.php";?>
    <table id="pageNext" class="table">
        <thead>
            <tr>
            <th scope="col">Mã Số</th>
            <th scope="col">Họ và Tên</th>
            <th scope="col">Lớp</th>
            <th scope="col">Khoá</th>
            <th scope="col">Khoa</th>
            <th scope="col">Email</th>
            <th scope="col">Quê Quán</th>
            <th scope="col">Ngày Sinh</th>
            <th scope="col" style="color: red ;">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            require "../connect.php";
            $sql = "SELECT * FROM sinh_vien;";
            $result = mysqli_query($conn,$sql);
            if($result){
                while($r = mysqli_fetch_assoc($result)){
                    $idsv=$r['Ms_sinhvien'];?>
                    <tr>
                    <td><?php echo $r['Ms_sinhvien']?></td>
                    <td><?php echo $r['HoTen']?></td>
                    <td><?php echo $r['Lop']?></td>
                    <td><?php echo $r['Khoa']?></td>
                    <td><?php echo $r['Tenkhoa']?></td>
                    <td><?php echo $r['Email']?></td>
                    <td><?php echo $r['Que_quan']?></td>
                    <td><?php echo $r['NgaySinh']?></td>
                    <td>
                        <div class="d-flex">
                    <button name="btn-sua" type="button" class="mr-1 btn btn-outline-info">
                    <a href="update.php?id=<?php echo $idsv?>&giangvien=<?php echo $giangvien?>" style="text-decoration: none;">Sửa</a> 
                    </button>
                    <button onclick="return confirm('Bạn có muốn xoá sinh viên này không');" type="button" class="btn-deleteInshow btn btn-outline-danger">
                    <a href="deleteBE.php?id=<?php echo $idsv?>&giangvien=<?php echo $giangvien?>" style="text-decoration: none;">Xoá</a>
                    </button>
                        </div>
                    </td>
                    </tr>
                <?php }
            }
            ?>
            
        </tbody>
        <tfoot>
            <tr>
            <th scope="col">Mã Số</th>
            <th scope="col">Họ và Tên</th>
            <th scope="col">Lớp</th>
            <th scope="col">Khoá</th>
            <th scope="col">Khoa</th>
            <th scope="col">Email</th>
            <th scope="col">Quê Quán</th>
            <th scope="col">Ngày Sinh</th>
            <th scope="col" style="color: red ;">Thao tác</th>
            </tr>
        </tfoot>
        </table>
    </div>
<script>
    $(document).ready(function () {
    $('#pageNext').DataTable({
        searching: false});
    $('.dataTables_length').addClass('bs-select');});
</script> 
</body>

</html>
