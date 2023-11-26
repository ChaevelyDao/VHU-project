<div class="w70 form-alone">
    <div class="row frmtitle center-mini-title">
        <h1>Đăng nhập</h1>
    </div>
    <div class="row frmcontent w50">
        <?php
            // if(isset($_SESSION['username'])&&(is_array($_SESSION['username']))){
            //     extract($_SESSION['username']);
            // }
        ?> 
        <form id="loginForm" action="index.php?act=login" method="POST" class="center" enctype="multipart/form-data" onsubmit="return validateForm();">
            <div class="row mb10">
                <h3 class="tal ml10">Tên đăng nhập</h3>
                <input id="username" type="text" name="username" autocomplete="off" placeholder="" >
            </div>
            <div class="row mb10">
                <h3 class="tal ml10">Mật khẩu</h3>
                <input id="password" type="password" name="pass" >
            </div>

            <div class="mb10 center-obj mt24">
                <input class="prettybtn" type="submit" value="Đăng nhập" name="login">
                <a href="index.php?act=rspass"><input class="prettybtn" type="button" value="Quên mật khẩu"></a>
                <a href="index.php?act=register"><input class="prettybtn" type="button" value="Đăng ký"></a>

                <!-- <a href="index.php"><input type="button" value="Trở về trang chủ"></a> -->
            </div>
            <?php
                if(isset($thongbao)&&($thongbao!="")) echo '<div class="'.$nclass.'"> '.$thongbao.'</div>';
            ?>
        </form>
    </div>
</div>