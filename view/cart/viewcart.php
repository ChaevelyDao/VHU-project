<?php
    include "../global.php";
?>
<div class="w70">
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
                <!-- <tr>
                    <th><input type="checkbox" name="" id=""></th>
                    <th>001</th>
                    <th>game</th>
                    <th><input type="button" value="Sửa"> <input class="red" type="button" value="Xóa"></th>
                </tr>
                <tr>
                    <th><input type="checkbox" name="" id=""></th>
                    <th>001</th>
                    <th>game</th>
                    <th><input type="button" value="Sửa"> <input class="red" type="button" value="Xóa"></th>
                </tr>
                <tr>
                    <th><input type="checkbox" name="" id=""></th>
                    <th>001</th>
                    <th>game</th>
                    <th><input type="button" value="Sửa"> <input class="red" type="button" value="Xóa"></th>
                </tr>
                <tr>
                    <th><input type="checkbox" name="" id=""></th>
                    <th>001</th>
                    <th>game</th>
                    <th><input type="button" value="Sửa"> <input class="red" type="button" value="Xóa"></th>
                </tr> -->
            </table>
        </div>
    </div>
</div>