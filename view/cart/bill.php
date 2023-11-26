<div class="w70">
    <div class="row frmtitle center-mini-title">
        <h1>Xác nhận đơn hàng</h1>
    </div>
    <div class="row frmcontent w50">
        <?php
            if(isset($_SESSION['username'])){
                $name_user=$_SESSION['username']['name_user'];
                $address_user=$_SESSION['username']['address_user'];
                $email_user=$_SESSION['username']['email_user'];
                $phone_user=$_SESSION['username']['phone_user'];
            }else{
                $name_user="";
                $address_user="";
                $email_user="";
                $phone_user="";
            }
        ?>
        <form action="index.php?act=billconfirm" method="POST" class="center" enctype="multipart/form-data">
            <div class="row mb10">
                <h3 class="tal ml10">Người đặt hàng</h3>
                <input type="text" name="name_bill" value="<?=$name_user?>">
            </div>
            <div class="row mb10">
                <h3 class="tal ml10">Địa chỉ</h3>
                <input type="text" name="address_bill" value="<?=$address_user?>">
            </div>
            <div class="row mb10">
                <h3 class="tal ml10">Email</h3>
                <input type="text" name="email_bill" value="<?=$email_user?>">
            </div>
            <div class="row mb10">
                <h3 class="tal ml10">Điện thoại</h3>
                <input type="text" name="phone_bill" value="<?=$phone_user?>">
            </div>
            <div class="row mb10">
                <h3 class="tal ml10">Phương thức thanh toán</h3>
                <div style="font-size: 20px;padding:20px 0px;">
                    <input type="radio" name="paymethod_bill" value="1" checked> COD
                    <div class="p10il"></div>
                    <input type="radio" name="paymethod_bill" value="2" > Chuyển khoản
                </div>
            </div>
            <div class="mb10">
                <input type="hidden" name="id_user_cart" value="<?=$id_user?>">
                <input type="submit" name="accept_bill" value="Đồng ý đặt hàng!" class="green">
                <input type="reset" value="Nhập lại">
                <a href="index.php"><input type="button" value="Trở về trang chủ"></a>
            </div>
            <?php
                if(isset($thongbao)&&($thongbao!="")) echo '<div class="green-alert"> '.$thongbao.'</div>';
            ?>
        </form>
    </div>
    <div class="frmtitle">
        <h1>Giỏ hàng của bạn</h1>
    </div>
    <div>
        <div class="mb10">
            <a href="index.php"><input class="green" type="button" value="<< Mua thêm"></a>         
        </div>
        <div class="mb10 frmdssp">
            <table>
                <tr>
                    <th>HÌNH</th>
                    <th>SỐ LƯỢNG</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>ĐƠN GIÁ</th>
                    <th>TỔNG TIỀN</th>
                    <th>HÀNH ĐỘNG</th>
                </tr>
                <?php
                    viewcart();
                ?>
            </table>
        </div>
    </div>
</div>