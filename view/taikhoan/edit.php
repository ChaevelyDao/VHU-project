<div class="w70 form-alone">
    <div class="row frmtitle center-mini-title">
        <h1>Cập nhật tài khoản</h1>
    </div>
    <div class="row frmcontent w50">
        <?php
            if(isset($_SESSION['username'])&&(is_array($_SESSION['username']))){
                extract($_SESSION['username']);
            }
        ?>
        <form action="index.php?act=edit" method="POST" class="center" enctype="multipart/form-data">
            <div class="row mb10">
                <h3 class="tal ml10">Tên đăng nhập</h3>
                <input type="text" name="username" autocomplete="off" value="<?=$username?>" disabled placeholder="" required>
            </div>
            <div class="row mb10">
                <h3 class="tal ml10">Mật khẩu</h3>
                <input id="password" type="password" name="pass" value="<?=$pass?>" required>
            </div>
            <div class="row mb10">
                <h3 class="tal ml10">Email</h3>
                <input id="email" type="text" name="email_user" value="<?=$email_user?>" required>
            </div>
            <div class="row mb10">
                <h3 class="tal ml10">Điện thoại</h3>
                <input id="client_phone" type="text" name="phone_user" value="<?=$phone_user?>">
            </div>
            <div class="row mb10">
                <h3 class="tal ml10">Tên</h3>
                <input id="client_name" type="text" name="name_user" value="<?=$name_user?>">
            </div>
            <div class="row mb10">
                <h3 class="tal ml10">Địa chỉ</h3>
                <input type="text" name="address_user" value="<?=$address_user?>">
            </div>
            <div class="mb10 center-obj mt24">
                <input type="hidden" name="id_user" value="<?=$id_user?>">
                <input class="prettybtn" type="submit" name="edit" value="Cập nhật">
                <input class="prettybtn" type="reset" value="Nhập lại">
                <a href="index.php"><input class="prettybtn" type="button" value="Trở về trang chủ"></a>
            </div>
            <?php
                if(isset($thongbao)&&($thongbao!="")) echo '<div class="green-alert"> '.$thongbao.'</div>';
            ?>
        </form>
    </div>
</div>