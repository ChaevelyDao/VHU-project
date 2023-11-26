<?php
if (is_array($dm)) {
    extract($dm);
}
?>

<div class="w70">
    <div class="row frmtitle">
        <h1>CẬP NHẬT DANH MỤC</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatedm" method="post">
            <div class="row mb10">
                Mã loại<br>
                <input type="text" name="id_cate" disabled placeholder="" value="<?php if (isset($id_cate) && ($id_cate != "")) echo $id_cate; ?>">
            </div>
            <div class="row mb10">
                Tên loại<br>
                <input type="text" name="name_cate" value="<?php if (isset($name_cate) && ($name_cate != "")) echo $name_cate; ?>">
            </div>
            <div class="mb10">
                <input type="hidden" name="id_cate" value="<?php if (isset($id_cate) && ($id_cate > 0)) echo $id_cate; ?>">
                <input type="submit" name="update" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listdm"><input type="button" value="Xem danh sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo '<div class="green-alert"> ' . $thongbao . '</div>';
            ?>
        </form>
    </div>
</div>