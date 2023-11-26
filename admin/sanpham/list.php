<div class="w70">
    <div class="frmtitle">
        <h1>Danh sách sản phẩm</h1>
    </div>
    <div>
        <div class="mb10 frmdssp">
            <form action="index.php?act=listsp" method="POST" class="frmtitle">
                <input type="hidden" name="keyword" >
                    <select class="standard-btn" name="id_cate_product">
                        <option value="0">All</option>
                        <?php
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                echo '<option value="'.$id_cate.'">'.$name_cate.'</option>';
                            }
                        ?>
                    </select>
                <input type="submit" name="listok" value="Lọc theo danh mục">
            </form>
            <table>
                <tr>
                    
                    <th>TÊN DANH MỤC</th>
                    <th>MÃ SẢN PHẨM</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>HÌNH</th>
                    <th>GIÁ</th>
                    <th>LƯỢT XEM</th>
                    <th>HÀNH ĐỘNG</th>
                </tr>
                <?php
                    foreach($listsanpham as $sanpham){
                        extract($sanpham);
                        $suasp = "index.php?act=suasp&id_product=" .$id_product;
                        $xoasp = "index.php?act=xoasp&id_product=" .$id_product;
                        $imgpath = "../uploads/".$img_product;
                        $name_cate=loadtendm_sanpham($id_cate_product);
                        if(is_file($imgpath)){
                            $img_product="<img src='".$imgpath."' height='100' width='100'>";
                        }else{
                            $img_product= "no image found";
                        }
                        echo'<tr>
                                <th>'.$name_cate.'</th>
                                <th>'.$id_product.'</th>
                                <th>'.$name_product.'</th>
                                <th>'.$img_product.'</th>
                                <th>'.$price_product.'</th>
                                <th>'.$view_product.'</th>
                                <th><a href="'.$suasp.'"><input type="button" value="Sửa"></a> <a href="'.$xoasp.'"><input class="red" type="button" value="Xóa"></a></th>
                            </tr>';
                    }
                ?>
                <tr>
                    
                </tr>
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
        <div class="mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" class="red" value="Xóa các mục đã chọn">
            <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
        </div>
    </div>
</div>