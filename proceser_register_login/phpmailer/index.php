<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

// Instantiation and passing `true` enables exceptions
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
    $mail->setFrom('huyn67811@gmail.com', 'Văn phòng Khoa CNTT - Trường ĐH Thủy lợi');

    $mail->addReplyTo('huyn67811@gmail.com', 'Văn phòng Khoa CNTT - Trường ĐH Thủy lợi');
      
    $mail->addAddress('huyn67811@gmail.com'); // Add a recipient
    
    // Attachments
    // $mail->addAttachment('pdf/XTT/'.$data[11].'.pdf', $data[11].'_1.pdf'); // Add attachments
    $mail->addAttachment('pdf/Giay_bao_mat_sau.pdf'); // Optional name

    // Content
    $mail->isHTML(true);   // Set email format to HTML
    $tieude = '[Giấy báo nhập học] Tân sinh viên trúng tuyển theo hình thức Xét tuyển thẳng & Học bạ';
    $mail->Subject = $tieude;
    
    // Mail body content 
    $bodyContent = '<p>Thân gửi Tân sinh viên <b>Nguyễn Thị Tuyết Nhung</b></h1>'; 
    $bodyContent .= '<p>Trường Đại học Thủy lợi xin chúc mừng Em đã trở thành Tân sinh viên ngành <b>Hệ thống thông tin</b> của Khoa Công nghệ thông tin. </p>'; 
    $bodyContent .= '<p>Trong các ngày 08,09/9/2021 Nhà trường đã gửi Giấy báo nhập học tới địa chỉ của Em khi đăng ký xét tuyển trực tuyến. Hiện tại, dịch COVID-19 đang diễn biến phức tạp nên Nhà trường gửi bổ sung Giấy báo nhập học (bản pdf đính kèm) để hoàn tất các thủ tục tại địa phương (nếu cần).</p>'; 
    $bodyContent .= '<p>Mọi thắc mắc xin liên hệ Phòng Đào tạo – Trường Đại học Thủy lợi, Số điện thoại <b>0243.563.1537</b>, Email: <b>tuyensinh@tlu.edu.vn </b></p>'; 
    $bodyContent .= '<p>Một lần nữa, Trường Đại học Thủy lợi xin gửi tới Em và gia đình lời chúc mừng, chúc sức khỏe bình an, hạnh phúc.</p>'; 
    $bodyContent .= '<p>Chú ý: Văn phòng Khoa Công nghệ thông tin sẽ liên hệ trực tiếp bằng điện thoại đến từng em để hướng dẫn đăng ký chương trình Việt-Nhật, Việt-Anh hoặc Aptech.</p>';
    $bodyContent .= '<p><b>Thân mến!</b></p>';
    
    $mail->Body = $bodyContent;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    if($mail->send()){
        echo 'Thư đã được gửi đi';
    }else{
        echo 'Lỗi. Thư chưa gửi được';
    }  

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
