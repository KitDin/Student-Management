<?php
  include "./connect.php";
  if (isset($_POST['btn-forgetpassword'])) {
    if(isset($_POST['email-forgetpassword'])){
      $email_f = $_POST['email-forgetpassword'];
      if(!empty($email_f)){
        $sql = "call Lay_lai_matkhau('$email_f');";
        $result= mysqli_query($conn,$sql);  
        if(mysqli_num_rows($result)){
          $row = mysqli_fetch_assoc($result);
          $getpass = $row['matkhau'];
          header("Location: index.php?mess= Mật khẩu của bạn là $getpass");
          exit();
        }else{
          header("Location: index.php?NotSur=Email của bạn không tồn tại");
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

