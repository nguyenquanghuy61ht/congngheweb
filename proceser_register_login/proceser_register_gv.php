<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
session_start();
if(isset($_POST["submit"])){
    $name=$_POST['name'];
    $sodt = $_POST['sdt'];
    $email=$_POST['email'];
    $password1=$_POST['password1'];
    $password2=$_POST['password2'];
    $str=rand();
    $code=md5($str);

    if (empty($name)||empty($lop)||empty($sodt)|| empty($email)||empty($password1)||empty($password2)) {  
        $_SESSION['check_empty'] ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>Vui lòng nhập tất cả các trường !</strong> 
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="outline:none" >
                                                <span aria-hidden="true">&times</span>
                                            </button>
                                        </div>';    

                  header('Location:http://localhost:7855/BTL/register_gv.php');          
    }else{
    if( $password1==$password2){
        include('../config/db_conect.php');
        $sql_check_email="SELECT * from giaovien where email_gv='$email'";
        $result_1=mysqli_query($conn,$sql_check_email);
        if(mysqli_num_rows($result_1) > 0)
        {
             $_SESSION['email_error'] ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>Email đã tồn tại.</strong> 
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="outline:none">
                                                <span aria-hidden="true">&times</span>
                                            </button>
                                        </div>';    

                  header('Location:http://localhost:7855/BTL/register.php');
        }else{
           
            $pass_hash = password_hash($password1,PASSWORD_DEFAULT);
            $sql_insert="INSERT INTO giaovien(tengv,sodt_gv, email_gv, pass_gv,code_gv) VALUES ('$name','$sodt','$email','$pass_hash','$code')";
            $result_2 = mysqli_query($conn,$sql_insert);  //Đối với lệnh INSERT, nếu CHÈN THÀNH CÔNG, nó trả về số NGUYÊN
           
    
            //gui email xac thuc
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;// Enable verbose debug output
                $mail->isSMTP();// gửi mail SMTP
                $mail->Host = 'smtp.gmail.com';// Set the SMTP server to send through
                $mail->SMTPAuth = true;// Enable SMTP authentication
                $mail->Username = 'huyn67811@gmail.com';// SMTP username
                $mail->Password = 'zvacpurvjtfwjsrz'; // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;// Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
                $mail->Port = 587; // TCP port to connect to
                $mail->CharSet = 'UTF-8';
                //Recipients
                $mail->setFrom('huyn67811@gmail.com', 'Học mãi - Kích hoạt tài khoản ');

                $mail->addReplyTo('huyn67811@gmail.com', 'Học mãi - Kích hoạt tài khoản ');
                
                $mail->addAddress($email); // Add a recipient
                
                // Content
                $mail->isHTML(true);   // Set email format to HTML
                $tieude = '[Đăng kí tài khoản] Kích hoạt tài khoản để sử dụng.';
                $mail->Subject = $tieude;
               
                // Mail body content 
                $bodyContent = '<p>Chào mừng bạn đến với học mãi.</b></h1>'; 
                $bodyContent .= '<p>Bạn vui lòng kích vào link dưới đây để kích hoạt tài khoản. </p>'; 
                $bodyContent .= '<p><a href="http://localhost:7855/BTL/proceser_register_login/activation.php?email='.$email.' & code='.$code.'">Click Here </a></p>'; 
               
                
                $mail->Body = $bodyContent;
                // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                if($mail->send()){
                    echo 'Thư đã được gửi đi';
                }else{
                    echo 'Lỗi. Thư chưa gửi được';
                }  

            } catch (Exception $e) {
                echo "Email không được gửi , email không tồn tại : {$mail->ErrorInfo}";
            }

            if($result_2>0){
                 $_SESSION['success'] ='<div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>Đăng ký thành công ! vui lòng kiểm tra email để kích hoạt.</strong> 
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="outline:none">
                                                <span aria-hidden="true">&times</span>
                                            </button>
                                        </div>';         
                 header('Location:http://localhost:7855/BTL/register.php');
              
            }else{
                $_SESSION['error'] ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>registration failed .</strong> 
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="outline:none">
                                                <span aria-hidden="true">&times</span>
                                            </button>
                                        </div>';    

                  header('Location:http://localhost:7855/BTL/register.php');
            }

        }
    }
    else{
            $_SESSION['password2_error'] ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Mật khẩu không giống nhau , vui lòng nhập lại !</strong> 
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="outline:none">
                                        <span aria-hidden="true">&times</span>
                                    </button>
                                </div>';    

            header('Location:http://localhost:7855/BTL/register.php');
    }
}

}
?>
  