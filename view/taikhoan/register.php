<div class="w70 form-alone">
    <div class="row frmtitle center-mini-title">
        <h1>Đăng ký tài khoản</h1>
    </div>
    <div class="row frmcontent w50">
        <form id="registerForm" action="index.php?act=register" method="POST" class="center" enctype="multipart/form-data" autocomplete="off" onsubmit="return validateForm();">
            <div class="row mb10">
                <h3 class="tal ml10">Tên đăng nhập</h3>
                <input id="username" type="text" name="username" autocomplete="off">
            </div>
            <div class="row mb10">
                <h3 class="tal ml10">Mật khẩu</h3>
                <input id="password" type="password" name="pass" >
            </div>
            <div class="row mb10">
                <h3 class="tal ml10">Nhập lại mật khẩu</h3>
                <input id="repassword" type="password" name="repass" >
            </div>
            <div class="row mb10">
                <h3 class="tal ml10">Email</h3>
                <input id="email" type="email" name="email_user" >
            </div>
            <div class="mb10 center-obj mt24">
                <input class="prettybtn" type="submit" name="register" value="Đăng ký">
                <input class="prettybtn" type="reset" value="Nhập lại">
                <a href="index.php"><input class="prettybtn" type="button" value="Trở về trang chủ"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo '<div class="' . $nclass . '"> ' . $thongbao . '</div>';
            ?>
        </form>
    </div>
</div>