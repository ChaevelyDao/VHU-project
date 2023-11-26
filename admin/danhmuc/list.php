<div class="w70">
    <div class="frmtitle">
        <h1>Danh sách danh mục</h1>
    </div>
    <div>
        <div class="mb10 frmdsloai">
            <table>
                <tr>
                    
                    <th>ĐÁNH DẤU</th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN LOẠI</th>
                    <th>HÀNH ĐỘNG</th>
                </tr>
                <?php
                    foreach($listdanhmuc as $danhmuc){
                        extract($danhmuc);
                        $suadm = "index.php?act=suadm&id_cate=" .$id_cate;
                        $xoadm = "index.php?act=xoadm&id_cate=" .$id_cate;
                        // $sl=loadsoluongsp_danhmuc($id_cate);
                        echo'<tr>
                                <th><input type="checkbox" name="" id=""></th>
                                <th>'.$id_cate.'</th>
                                <th>'.$name_cate.'</th>
                                
                                <th><a href="'.$suadm.'"><input type="button" value="Sửa"></a> <a href="'.$xoadm.'"><input class="red" type="button" value="Xóa"></a></th>
                            </tr>';
                    }
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
        <div class="mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" class="red" value="Xóa các mục đã chọn">
            <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
        </div>
    </div>
</div>