<?php
include('login_check.php')
?>


    <?php
    include("./admin/header_admin.php")
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
                <label for="fname">Họ và Tên Đệm </label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">
                <label for="lname">Tên</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                <label for="country">Quốc Gia</label>
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




