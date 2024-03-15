<?php if(isset($_GET['mess'])) {?>
          <div class="alert alert-success" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="800"  role="alert">
          Bạn đã tìm được mật khẩu bạn có muốn đặt mật khẩu lại không? Nếu có hãy <a href="dat-lai-mat-khauUI.php" class="alert-link" >ấn vào đây</a>.
          </div>
        <?php }elseif(isset($_GET['NotSur'])) {?>
          <div class="alert alert-warning" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="800"  role="alert">
          Tài khoảng của bạn không tồn tại, bạn có muốn 
          <a href="regitersUI.php" class="alert-link">tạo tài khoản</a> 
          hay 
          <a href="" id="forget-password" class="alert-link" data-bs-toggle="modal" data-bs-target="#myModal">thử lại</a>
           lần nữa không?.
          </div>
        <?php }elseif(isset($_GET['anou'])) {?>
          <div class="alert alert-success" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="800"  role="alert">
          Bạn không nhớ mật khẩu củ hãy <a href="dat-lai-mat-khauUI.php" class="alert-link" id="forget-password" class="md-getpassword text-body" data-bs-toggle="modal" data-bs-target="#myModal">ấn vào đây</a>.
          </div>
        <?php }elseif(isset($_GET['success'])) {?>
          <div class="alert alert-success" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="800"  role="alert">
          Bạn đặt lại mật khẩu thành công.
          </div>
        <?php }elseif(isset($_GET['su-success'])) {?>
          <div class="alert alert-success" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="800"  role="alert">
          Bạn đã đăng ký thành công.
          </div>
        <?php }elseif(isset($_GET['mess-insert'])) {?>
          <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </symbol>
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </symbol>
          </svg>
          <div class="animation-close alert alert-success d-flex align-items-center" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="800" role="alert">
          <svg class="bi flex-shrink-0 me-2 mr-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          <div>
               Bạn đã thêm sinh viên thành công.
          </div>
          </div>
        <?php }elseif(isset($_GET['mess-update'])) {?>
          <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </symbol>
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </symbol>
          </svg>
          <div class="animation-close alert alert-success d-flex align-items-center" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="800" role="alert">
          <svg class="bi flex-shrink-0 me-2 mr-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          <div>
               <?php echo $_GET['mess-update'];?>
          </div>
          </div>
        <?php }elseif(isset($_GET['messerror'])) {?>
          <div class="alert alert-warning text-center" style="z-index: 9999999999 ;" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="800"  role="alert">
          Bạn không thể thay đổi mã số sinh viên, email, chứng minh thư của sinh viên.Hãy liên hệ với phòng đào tạo nếu có vấn đề!
          </div><?php }
          elseif(isset($_GET['mess-nw'])) {?>
          <div class="alert alert-warning text-center" style="z-index: 9999999999 ;" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="800"  role="alert">
          <?php echo $_GET['mess-nw'];?>          
          </div><?php }?>
          