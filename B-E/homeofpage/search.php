<!DOCTYPE html>
<html>

<head>
    <title>Tìm Kiếm</title>
    <?php include 'links.php'?>
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script> 
   <script type="text/javascript"> 
      $("#butt1").live("click", show_box1);
      $("#butt2").live("click", show_box2);
      $("#butt3").live("click", show_box3);
      function show_box1(event) {
          $("#links").css("display", "none");
          $(".box1").css("display", "block");            
      }
      function show_box2(event) {
          $("#links").css("display", "none");
          $(".box2").css("display", "inline");            
      }     
       function show_box3(event) {
          $("#links").css("display", "none");
          $(".box3").css("display", "block");            
      }
  </script> 
</head>
<style>
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

    h3 {
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

<body>
    <?php include 'navbar.php'?>
    <div class="container-fluid" style="background: rgb(253,253,254);height:100vh;">
        <div class="row">
            <div class="col-md-6 left-container">
                <!--<img src="images/edu.gif">-->
            </div>
            
            <div class="col-md-6 right-container">
                <form action="search.php?giangvien=<?php echo $giangvien;?>" method="POST">
                    <div id="links">
                            <div class="form-check" >
                            <input id="butt1" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                            Tìm Kiếm Người Đứng Nhất.
                            </label>
                        </div>

                        <div class="form-check">
                            <input id="butt2" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                            Tìm Kiếm Sinh Viên.
                            </label>
                        </div>
                   </div>
                    
                    <h4 class="box1" style="display: none ;">Tìm kiếm sinh viên có điểm cao và thấp nhất</h4>
                    <div class="box1 form-check ml-15" style="display: none ;">
                                <input class="form-check-input" type="radio" value="1" name="sinhvienxeploai" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                Sinh Viên Điểm Cao Nhất
                                </label>
                    </div>

                    <div class="box1 form-check mr-15" style="display: none ;">
                        <input class="form-check-input" type="radio" value="2" name="sinhvienxeploai" id="flexRadioDefault1">                                
                                <label class="form-check-label" for="flexRadioDefault1">
                                Sinh Viên Điểm Thấp Nhất
                        </label>
                    </div>

                        <div class="input-group box2"  style="display: none ;">
                            <span class="input-group-text">Mã số sinh viên</span>
                            <input type="text" name="mssinhvien" aria-label="" class="">
                            <span class="input-group-text">Học Kỳ</span>
                            <select class="w-100 form-select" name="hocky">
                                <option value="all">ALL</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                            <span class="input-group-text">Năm Học</span>
                            <select class="w-100 form-select" name="namhoc">
                                <option value="all">ALL</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                            </select>
                        </div>

                    <div class="text-center">
                        <button class="box1 btn fa fa-search" style="display: none ;" type="submit" value="submit" name="button1"></button>
                    </div>    

                    <div class="text-center">
                        <button class="box2 btn fa fa-search" style="display: none ;" type="submit" value="submit" name="button2"></button>
                    </div>
                </form>
                <?php include '../ThongBaoTruot.php'; ?>
                <?php
include '../connect.php';
if(isset($_POST['button1'])){
    if(isset($_POST['sinhvienxeploai'])){
    $xeploai=$_POST['sinhvienxeploai'];
    $sql="call sv_diemcao($xeploai);";
    $result=mysqli_query($conn,$sql);
        if($result){
            $r=mysqli_fetch_assoc($result);
            if($xeploai==='1'){
                echo'<div class="card-container">
                <span class="pro"></span>
                <h3>'.$r['sinhvienCao'].'</h3>
                <h6>'.$r['ms'].'</h6>
                <p>Sinh viên điểm cao nhất <br/>
                </p><hr> 
                <div class="text-left mb-3">
                    <div class="strong mb-1">Email</div>
                    '.$r['Email'].'<br>
                    <div class="strong mb-1">Quê</div>
                    '.$r['Que_quan'].'<br>
                    <div class="strong mb-1">Điểm</div>
                    '.$r['diem'].'
                <div>
                </div>';
            }else{
                echo'<div class="card-container">
                <span class="pro"></span>
                <h3>'.$r['sinhvienCao'].'</h3>
                <h6>'.$r['ms'].'</h6>
                <p>Sinh viên điểm thấp nhất<br/>
                </p><hr> 
                <div class="text-left mb-3">
                    <div class="strong mb-1">Email</div>
                    '.$r['Email'].'<br>
                    <div class="strong mb-1">Quê</div>
                    '.$r['Que_quan'].'<br>
                    <div class="strong mb-1">Điểm</div>
                    '.$r['diem'].'
                <div>
                </div>';
            }
        }
    }
}elseif (isset($_POST['button2'])) {
    $ms_sv=$_POST['mssinhvien'];
    $hocky=$_POST['hocky'];
    $namhoc=$_POST['namhoc'];
    $result_seach=mysqli_query($conn,"call doidiem('$giangvien', '$ms_sv', '$hocky', '$namhoc');");
    if($result_seach){
    echo '<table id="pageNext" class="table">
        <thead>
            <tr>
            <th scope="col">Họ Tên</th>
            <th scope="col">Mã Số Sinh Viên</th>
            <th scope="col">Học Kỳ</th>
            <th scope="col">Năm Học</th>
            <th scope="col">Học Phần</th>
            <th scope="col">Điểm</th>
            </tr>
        </thead>
        <tbody>';
        while($r=mysqli_fetch_assoc($result_seach)){
            if($r['mssinhvien']!='false'){
        echo '<tr>';
        echo '<td>'.$r['hoten'].'</td>';
        echo '<td>'.$r['mssinhvien'].'</td>';
        echo '<td>'.$r['HocKy'].'</td>';
        echo '<td>'.$r['Namhoc'].'</td>';
        echo '<td>'.$r['hocphan'].'</td>';
        echo '<td>'.$r['diemchu'].'</td>';
        echo '</tr>';
                }else{
                    echo '<div class="errorMsg">Data Not Found</div>';
                    echo '<img src="images/found1.png" width=330 style="margin-top: 10px;">';
        }
    }
         echo '</tbody>
            </table>';
    }else{
        echo "Không Tìm thấy";
    }
}
       

?>
            </div>
        </div>
    </div>
</body>
</html>
