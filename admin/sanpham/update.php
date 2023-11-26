<?php
    if(is_array($sp)){
        extract($sp);
    }
    $imgpath = "../uploads/".$img_product;
        if(is_file($imgpath)){
            $img_product="<img src='".$imgpath."' height='100' width='100'>";
        }else{
            $img_product= "no image found";
        }
?>

<div class="w70">
    <div class="row frmtitle">
        <h1>CẬP NHẬT SẢN PHẨM</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
            <div class="row mb10">
                Danh mục<br>
                <select name="id_cate_product">
                    <option value="<?=$id_cate_product?>" selected>Không đổi</option>
                    <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            if($id_cate_product == $idcate) $s="selected"; else $s="";
                            echo '<option value="'.$id_cate.'" '.$s.'>'.$name_cate.'</option>';
                        }                     
                    ?>                 
                </select>
            </div>
            <?php
                // if(is_array($sp)){
                //     extract($sp);
                // }
                // $imgpath = "../uploads/".$img;
                //     if(is_file($imgpath)){
                //         $img="<img src='".$imgpath."' height='100' width='100'>";
                //     }else{
                //         $img= "no image found";
                //     }
            ?>
            <div class="row mb10">
                Tên sản phẩm<br>
                <input type="text" name="name_product" value="<?=$name_product?>">
            </div>
            <div class=" mb10">
                Hình<br>
                <input type="file" name="img_product" accept="image/*" value="">
                <?=$img_product?>
            </div>
            <div class="row mb10">
                Giá<br>
                <input type="text" name="price_product" value="<?=$price_product?>">
            </div>
            <div class="row mb10">
                Ghi chú<br>
                <textarea name="ghichu_product" cols="30" rows="10"><?=$ghichu_product?></textarea>
            </div>
            <div class="mb10"> 
                <!-- if(isset($id)&&($id > 0)) echo $id ; -->
                <input type="hidden" name="id_product" value="<?=$id_product?>">
                    
                <input type="submit" name="update" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listsp"><input type="button" value="Xem danh sách"></a>
            </div>
            <?php
                if(isset($thongbao)&&($thongbao!="")) echo '<div class="green-alert"> '.$thongbao.'</div>';
            ?>
        </form>
    </div>
</div>