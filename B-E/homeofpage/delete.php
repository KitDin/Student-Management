<!DOCTYPE html>
<html>

<head>
    <title>Xoá Sinh Viên</title>
    <?php include 'links.php'?>
</head>
<style>
    * {
        margin: 0px;
        box-sizing: border-box;
    }

    .left-container {
        margin-top: 100px;
        background-image: url(images/d.gif);
        background-repeat: no-repeat;
        height: 700px;
        width: 750px;
        margin-top: 70px;
        margin-left: 0px;
    }

    .right-container {
        height: auto;
        padding: 20px;
        margin-top: 80px;
        margin-left: 0px;
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

    .errorMsg {
        background: transparent;
        color: rgba(255, 0, 0, 0.6);
    }

    .form-items {
        display: flex;
        margin-left: -20px;
        margin-top: 30px;
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

</style>

<body>
    <?php include 'navbar.php'?>
    <div class="container-fluid" style="background: #fff;">
        <div class="row">
            <div class="col-md-6 right-container">
                <form action="deleteBE.php" method="POST">
                    <div class="form-items">
                        <input type="text" name="rnum" id="rnum" placeholder="Enter student ID">
                        <input type="hidden" value="<?php echo $giangvien?>" name="idgv">
                        <button onclick="return confirm('Bạn có muốn xoá sinh viên này không?')"  class="btn fa fa-search" type="submit" value="" name="button" data-toggle="modal" data-target="#removeUser"></button>
                    </div>
                </form>
                <?php include '../ThongBaoTruot.php' ?>
                <?php if(isset($_GET['mess-update'])){
                   echo '<img src="images/delete1.gif" width=400 style="margin-top: 25px;">';
                 }else{
                    echo '<div class="errorMsg">Data Not Found</div>';
                    echo '<img src="images/found1.png" width=330 style="margin-top: 10px;">';
                 } ?>
            </div>
            <div class="col-md-6 left-container">
                <img src="images/edu.gif">
            </div>
        </div>
           
    </div>
    <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            });

            $('#remove-button').click(function() {
        $.post('/API/removeUser', {} );
});
    </script>

</body>

</html>
