<div class="w70">
    <div class="row frmtitle center-mini-title">
        <h1>Đặt hàng thành công!</h1>
    </div>
    <div class="row frmcontent w50 center bg">
        <?php
            if(isset($bill)&&(is_array($bill))){
                extract($bill);
            }
            if($bill['paymethod_bill']=='1'){
                $paymethod='COD';
            }else{
                $paymethod='Chuyển khoản';
            }
        ?>
            <div class="row mb10">
                <h2 class="frmtitle">THÔNG TIN ĐƠN HÀNG</h2>
                <li class=" ">Mã đơn hàng: <b>FSB-<?=$bill['id_bill']?></b></li>
                <li class=" ">Ngày đặt hàng: <b><?=$bill['order_date']?></b></li>
                <li class=" ">Tổng đơn: <b><?=$bill['total_bill']?> VNĐ</b></li>
                <li class=" ">Phương thức thanh toán: <b><?=$paymethod?></b></li>
            </div>
            <div>
                <h3 class=" ">Người đặt hàng:</h3>
                <h4><?=$bill['name_bill']?></h4>
            </div>
            <div class="row mb10">
                <h3 class=" ">Địa chỉ:</h3>
                <h4><?=$bill['address_bill']?></h4>
            </div>
            <div class="row mb10">
                <h3 class=" ">Email:</h3>
                <h4><?=$bill['email_bill']?></h4>
            </div>
            <div class="row mb10">
                <h3 class=" ">Điện thoại:</h3>
                <h4><?=$bill['phone_bill']?></h4>
            </div>
            <div class="mb10">
                <a href="index.php"><input class="green" type="button" value="Trở về trang chủ"></a>
            </div>
            <?php
                if(isset($thongbao)&&($thongbao!="")) echo '<div class="green-alert"> '.$thongbao.'</div>';
            ?>
    </div>
    <div class="frmtitle">
        <h1>Chi tiết đơn hàng</h1>
    </div>
    <div>
        <div class="mb10 frmdssp">
            <table>
                <tr>
                    <th>STT</th>
                    <th>HÌNH</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>ĐƠN GIÁ</th>
                    <th>SỐ LƯỢNG</th>
                    <th>TỔNG TIỀN</th>
                </tr>
                <?php
                    show_bill_detail($bill_detail);
                ?>
            </table>
        </div>
    </div>
</div>