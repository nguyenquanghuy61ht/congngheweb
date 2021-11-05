


<?php
include("partials/header.php")
?>
<div class="container">
    <div style="text-align:center">
        <h2>Liên Hệ Chung Tôi</h2>
        <p>Chúc Tất Cả Các Bạn Hạnh Phúc</p>
    </div>
    <div class="row">
     
        <div class="column m-auto">
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