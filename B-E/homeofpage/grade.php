<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Xem Điểm</title>
    <?php include 'links.php'?>
    <!-- <link rel="stylesheet" href="css/insert.css"> -->
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
    * {
        margin: 0px;
        box-sizing: border-box;
    }

    .logo {
        background: #f9f9ff;
    }


    .left-container {
        margin-top: 100px;
        background-image: url(images/edu.gif);
        height: 600px;
        width: 700px;
        margin-top: 100px;
        margin-left: -100px;
    }

    .right-container {
        height: auto;
        padding: 20px;
        margin-top: 80px;
        margin-left: 80px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .button:hover {
        background: red;
    }

    .noResult {
        background: blue;
        width: 50px;
    }

    .form-items {
        display: flex;
    }

    .btn {
        padding: 15px 15px;
        margin: 10px 0px;
        width: 50px;
        border-radius: 10x;
        outline: none;
        border: none;
        box-shadow: 0px 5px 20px 0px rgba(69, 67, 96, 0.1);
        transition: 1s;
    }

    .btn:hover {
        background: #259be4;
        color: white;
        cursor: pointer;
        transition: 1s;
        box-shadow: 0px 5px 20px 0px rgba(69, 67, 96, 0.1);
    }

    input[type="text"] {
        padding: 15px 15px;
        margin: 10px 10px;
        width: 370px;
        border-radius: 10px;
        outline: none;
        border: none;
        box-shadow: 0px 5px 20px 0px rgba(69, 67, 96, 0.1);
    }

    h5 {
        margin: 10px 0;
        background: transparent;
    }

    h6 {
        margin: 5px 0;
        text-transform: uppercase;
        background: transparent;
    }

    p {
        font-size: 14px;
        line-height: 21px;
        background: transparent;
    }

    hr {
        background: black;
    }

    .card-container {
        background-color: #c7e5f6;
        border-radius: 25px;
        box-shadow: 0px 5px 20px 0px rgba(69, 67, 96, 0.1);
        color: black;
        padding: 30px 0 0;
        position: relative;
        width: 350px;
        max-width: 100%;
        text-align: center;
        margin: 20px 0;
        overflow: hidden;
    }

    .card-container .pro {
        color: #231E39;
        background-color: #259be4;
        border-radius: 3px;
        font-size: 14px;
        font-weight: bold;
        padding: 3px 7px;
        position: absolute;
        top: 30px;
        left: 30px;
    }

    .card-container img {
        border: 1px solid #259be4;
        border-radius: 50%;
        padding: 7px;
        height: 130px;
        width: 130px;
    }


    .bottom {
        background-color: transparent;
        text-align: left;
        padding: 15px;
        margin-top: -15px;
        font-size: 20px;
        font-weight: bold;
    }

    .errorMsg {
        background: transparent;
        color: rgba(255, 0, 0, 0.6);
    }

    .strong {
        color: #231E39;
        background-color: #259be4;
        width: 70px;
        text-align: center;
        border-radius: 3px;
        font-size: 14px;
        font-weight: bold;
        padding: 3px 7px;
        margin-right: 40px;
        margin-left: 15px;
        display: inline-block;
        top: 30px;
        left: 30px;
    }

    .text {
        display: flex;
    }
    </style>
</head>

<body>
<?php include 'navbar.php'?>
    <div class="">
    <div class="right-container">
                <form action="grade.php?giangvien=<?php echo $giangvien?>" method="POST">
                    <p class="text-center opacity-0">Hiển thị điểm các sinh viên bạn đang dạy</p>
                    <div class="form-items">
                    <select class="shadow-lg p-3 bg-white rounded input mr-2" style="border: 0; width: 750px;" name="hinhthuc">
                        <option value="#" selected="selected">--Chọn Hình Thức</option>
                        <option value="diemso">Điểm Số</option>
                        <option value="diemchu">Điểm Chữ</option>
                        <option value="diemtrungbinh">Điểm Trung Bình</option>
                        <option value="diemkhongquamon">Điểm Không Qua Môn</option>
                    </select>
                    <button class="btn fa fa-search" type="submit" value="submit" name="button"></button>
                    </div>
                </form>
            </div>
        <?php include "../ThongBaoTruot.php";?>
        <?php include '../connect.php';
    if(isset($_POST['button'])){
        if(isset($_POST['hinhthuc'])){
            $hinhthuc =$_POST['hinhthuc'];
            $giangvien=$_GET['giangvien'];
            if($hinhthuc === 'diemso' || $hinhthuc === '#'){
                    $sql="call show_diem('$giangvien')";
                    $result=mysqli_query($conn,$sql);
                    echo '<h5 class="text-center">Điểm Số</h5>';
                    echo '<table id="pageNext" class="table">
                <thead>
                    <tr>
                    <th scope="col">Mã Số Sinh Viên</th>
                    <th scope="col">Họ Tên</th>
                    <th scope="col">Mã Học Phần</th>
                    <th scope="col">Tên Học Phần</th>
                    <th scope="col">Học Kỳ</th>
                    <th scope="col">Năm Học</th>
                    <th scope="col">Điểm</th>
                    </tr>
                </thead>
                <tbody>';
                    while($r=mysqli_fetch_assoc($result)){
                echo '<tr>';
                echo '<td>'.$r['mssinhvien'].'</td>';
                echo '<td>'.$r['hotensinhvien'].'</td>';
                echo '<td>'.$r['hocphan'].'</td>';
                echo '<td>'.$r['tenhocphan'].'</td>';
                echo '<td>'.$r['hocky'].'</td>';
                echo '<td>'.$r['namhoc'].'</td>';
                echo '<td>'.$r['diem'].'</td>';
                echo '</tr>';
                    }
                echo '</tbody>
                    </table>';
            }elseif ($hinhthuc === 'diemchu') {
                $sql_diemchu="select s.ms_sinhvien as mssinhvien, s.hoten as hotensinhvien,h.ma_hocphan as hocphan, tenhocphan,hocky,namhoc,FDiem_chu(diem) as diem
                from sinh_vien s join diem d on s.ms_sinhvien=d.ms_sinhvien
                    join hoc_phan h on d.ma_hocphan=h.ma_hocphan
                    join giang_vien g on ms_giangvien = ms_gvphutrach
                where ms_gvphutrach='$giangvien';";
                $result_diemchu=mysqli_query($conn,$sql_diemchu);
                echo '<h5 class="text-center">Điểm Chữ</h5>';
                echo '<table id="pageNext" class="table">
            <thead>
                <tr>
                <th scope="col">Mã Số Sinh Viên</th>
                <th scope="col">Họ Tên</th>
                <th scope="col">Mã Học Phần</th>
                <th scope="col">Tên Học Phần</th>
                <th scope="col">Học Kỳ</th>
                <th scope="col">Năm Học</th>
                <th scope="col">Điểm</th>
                </tr>
            </thead>
            <tbody>';
                while($r=mysqli_fetch_assoc($result_diemchu)){
            echo '<tr>';
            echo '<td>'.$r['mssinhvien'].'</td>';
            echo '<td>'.$r['hotensinhvien'].'</td>';
            echo '<td>'.$r['hocphan'].'</td>';
            echo '<td>'.$r['tenhocphan'].'</td>';
            echo '<td>'.$r['hocky'].'</td>';
            echo '<td>'.$r['namhoc'].'</td>';
            echo '<td>'.$r['diem'].'</td>';
            echo '</tr>';
                }
            echo '</tbody>
                </table>';
            }elseif ($hinhthuc === 'diemtrungbinh') {
                $sql_diemtrungbinh="call Diem_trung_binh('$giangvien')";
                $result_diemtrungbinh=mysqli_query($conn,$sql_diemtrungbinh);
                echo '<h5 class="text-center">Điểm Trung Bình</h5>';
                echo '<table id="pageNext" class="table">
            <thead>
                <tr>
                <th scope="col">Mã Số Sinh Viên</th>
                <th scope="col">Họ Tên</th>
                <th scope="col">Mã Học Phần</th>
                <th scope="col">Tên Học Phần</th>
                <th scope="col">Học Kỳ</th>
                <th scope="col">Năm Học</th>
                <th scope="col">Điểm</th>
                </tr>
            </thead>
            <tbody>';
                while($r=mysqli_fetch_assoc($result_diemtrungbinh)){
            echo '<tr>';
            echo '<td>'.$r['mssinhvien'].'</td>';
            echo '<td>'.$r['hotensinhvien'].'</td>';
            echo '<td>'.$r['hocphan'].'</td>';
            echo '<td>'.$r['tenhocphan'].'</td>';
            echo '<td>'.$r['hocky'].'</td>';
            echo '<td>'.$r['namhoc'].'</td>';
            echo '<td>'.$r['diem'].'</td>';
            echo '</tr>';
                }
            echo '</tbody>
                </table>';
            }elseif ($hinhthuc === 'diemkhongquamon') {
                $sql_diemkhongquamon="select s.ms_sinhvien as mssinhvien, s.hoten as hotensinhvien,h.ma_hocphan as hocphan, tenhocphan,hocky,namhoc,diemliet(diem) as diem
                from sinh_vien s join diem d on s.ms_sinhvien=d.ms_sinhvien
                    join hoc_phan h on d.ma_hocphan=h.ma_hocphan
                    join giang_vien g on ms_giangvien = ms_gvphutrach
                where ms_gvphutrach='$giangvien';";
                $result_diemkhongquamon=mysqli_query($conn,$sql_diemkhongquamon);
                echo '<h5 class="text-center">Sinh Viên Không Đủ Điểm</h5>';
                echo '<table id="pageNext" class="table">
            <thead>
                <tr>
                <th scope="col">Mã Số Sinh Viên</th>
                <th scope="col">Họ Tên</th>
                <th scope="col">Mã Học Phần</th>
                <th scope="col">Tên Học Phần</th>
                <th scope="col">Học Kỳ</th>
                <th scope="col">Năm Học</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>';
                while($r=mysqli_fetch_assoc($result_diemkhongquamon)){
            echo '<tr>';
            echo '<td>'.$r['mssinhvien'].'</td>';
            echo '<td>'.$r['hotensinhvien'].'</td>';
            echo '<td>'.$r['hocphan'].'</td>';
            echo '<td>'.$r['tenhocphan'].'</td>';
            echo '<td>'.$r['hocky'].'</td>';
            echo '<td>'.$r['namhoc'].'</td>';
            echo '<td>'.$r['diem'].'</td>';
            echo '</tr>';
                }
            echo '</tbody>
                </table>';
            }
        }
    }
        ?>
        
    </div>
<script>
    $(document).ready(function () {
    $('#pageNext').DataTable({
        searching: false});
    $('.dataTables_length').addClass('bs-select');});
</script> 
</body>
</html>