<?php
session_start()
?>
<?php
    if(isset($_GET['code']) and isset($_GET['email'])){
        $code=$_GET['code'];
        $email=$_GET['email'];
        include('../config/db_conect.php');
        $sql="select * from sinhvien where email_sv='$email'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
        $code_db=$row['code_sv'];
        if($code==$code_db){
            $sql_update_staus="UPDATE sinhvien SET status_sv =1 WHERE code_sv ='$code';";
            mysqli_query($conn,$sql_update_staus);
            $_SESSION['active_success']=' <div class="alert alert-success alert-dismissible fade show d-flex justify-content-sm-between" role="alert">
                    <div class="alter_about">
                        <h4 class="alert-heading">Thông báo!</h4>
                        <strong>Chúc mừng!</strong> Tài khoản của bạn đã được kích hoạt thành công.
                        <hr>
                        <p class="mb-0 "><a href="Login_TLU.php" class="text-danger">Bấm vào đây để đăng nhâp.</a></p>
                    </div>
                  
                     <div class=" text-center">
                        <i class="far fa-check-circle pt-2" style="font-size: 60px;color:green"></i>
                    </div>
                </div>';
            

        }
        else{
            echo 'that bai';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Active</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12 ">
               <?php
                  if(isset($_SESSION['active_success']))
                    {
                        echo $_SESSION['active_success'];
                        unset($_SESSION['active_success']);
                    }
               ?>
               
            </div>
            
        </div>
     
    </div>
</body>
</html>


