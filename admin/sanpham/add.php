<div class="w70">
    <div class="row frmtitle">
        <h1>THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
            <div class="row mb10">
                Danh mục<br>
                <select name="id_cate_product">
                    <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            echo '<option value="'.$id_cate.'">'.$name_cate.'</option>';
                        }
                    ?>
                    
                </select>
            </div>
            <div class="row mb10">
                Tên sản phẩm<br>
                <input type="text" name="name_product">
            </div>
            <div class=" mb10">
                Hình<br>
                <input type="file" name="img_product" id="" accept="image/*">
            </div>
            <div class="row mb10">
                Giá<br>
                <input type="text" name="price_product">
            </div>
            <div class="row mb10">
                Ghi chú<br>
                <textarea name="ghichu_product" cols="30" rows="10"></textarea>
            </div>
            <!-- <div class="row mb10">
                Lượt xem<br>
                <input type="text" name="luotxemsp">
            </div>
            <div class="row mb10">
                Mã danh mục<br>
                <input type="text" name="maloai">
            </div> -->
            <div class="mb10">
                <input type="submit" name="addnew" value="Thêm mới">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listsp"><input type="button" value="Xem danh sách"></a>
            </div>
            <?php
                if(isset($thongbao)&&($thongbao!="")) echo '<div class="green-alert"> '.$thongbao.'</div>';
            ?>
        </form>
    </div>
</div>