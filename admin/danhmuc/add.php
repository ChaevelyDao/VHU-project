<div class="w70">
    <div class="row frmtitle">
        <h1>THÊM MỚI DANH MỤC</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=adddm" method="post">
            <div class="row mb10">
                Mã loại<br>
                <input type="text" name="id_cate" disabled placeholder="Mã loại sẽ được thêm mới tự động">
            </div>
            <div class="row mb10">
                Tên loại<br>
                <input type="text" name="name_cate">
            </div>
            <div class="mb10">
                <input type="submit" name="addnew" value="Thêm mới">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listdm"><input type="button" value="Xem danh sách"></a>
            </div>
            <?php
                if(isset($thongbao)&&($thongbao!="")) echo '<div class="green-alert"> '.$thongbao.'</div>';
            ?>
        </form>
    </div>
</div>