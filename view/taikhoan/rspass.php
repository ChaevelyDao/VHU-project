<div class="w70 form-alone">
    <div class="row frmtitle center-mini-title">
        <h1>Đặt lại mật khẩu</h1>
    </div>
    <div class="row frmcontent w50">
        <form action="index.php?act=rspass" method="POST" class="center" enctype="multipart/form-data"  onsubmit="return validateForm();">
            <div class="row mb10">
                <h3>Nhập địa chỉ email</h3>
                <input type="email" id="email" name="email_user" autocomplete="off" required>
            </div>
            <div class="mb10 center-obj mt24">
                <input class="prettybtn" type="submit" name="send_email" value="Gửi">
                <input class="prettybtn" type="reset" value="Nhập lại">
                <a href="index.php"><input class="prettybtn" type="button" value="Trở về trang chủ"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo '<div class="' . $nclass . '"> ' . $thongbao . '</div>';
            ?>
        </form>
    </div>
</div>