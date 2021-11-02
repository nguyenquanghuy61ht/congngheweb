<?php
include('login_check.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Học Mãi Mãi </title>

</head>
<body>
    <?php
    include("./page-subject/header_lesson.php")
    ?>
        <div class="container">
        <div style="text-align:center">
            <h2>Liên Hệ Chung Tôi</h2>
            <p>Chúc Tất Cả Các Bạn Hạnh Phúc</p>
        </div>
        <div class="row">
            <div class="column">
            <img src="https://footballshoes.vn/image/catalog/tin-tuc/tin-tuc/Messi_PSG/messi-tai-psg.jpg" style="width:100%">
            </div>
            <div class="column">
            <form action="/action_page.php">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                <label for="country">Country</label>
                <select id="country" name="country">
                <option value="australia">Việt Nam</option>
                <option value="canada">China</option>
                <option value="usa">Nhật Bản </option>
                </select>
                <label for="subject">Liên Hệ</label>
                <textarea id="subject" name="subject" placeholder="viết gì đó ..." style="height:170px"></textarea>
                <input type="submit" value="Submit">
            </form>
            </div>
        </div>
    </div>



    <?php include "./partials/footer.php" ?>
</body>
<html>



