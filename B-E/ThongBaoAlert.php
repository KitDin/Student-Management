<?php if(isset($_GET['mess'])) {?>
                    <?php echo '<script type ="text/JavaScript"> 
                          alert("';
                          echo $_GET['mess'];
                          echo '") 
                          </script>';?>
        <?php }elseif(isset($_GET['NotSur'])) {?>
        <?php echo '<script type ="text/JavaScript"> 
                alert("';
                echo $_GET['NotSur'];
                echo '") 
                </script>';?>
        <?php }elseif(isset($_GET['success'])) {?>
        <?php echo '<script type ="text/JavaScript"> 
                alert("';
                echo $_GET['success'];
                echo '") 
                </script>';?>
       <?php }else if(isset($_GET['mess1'])) {?>
                    <?php echo '<script type ="text/JavaScript"> 
                          alert("';
                          echo $_GET['mess1'];
                          echo '") 
                          </script>';?>
        <?php }else if(isset($_GET['mess-insert'])) {?>
                    <?php echo '<script type ="text/JavaScript"> 
                          alert("';
                          echo $_GET['mess-insert'];
                          echo '") 
                          </script>';?>
        <?php }?>  