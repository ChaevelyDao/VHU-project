<?php

    function insert_sanpham($name_product,$img_product,$price_product,$ghichu_product,$id_cate_product ){
        $sql = "INSERT INTO product(name_product,img_product,price_product,ghichu_product,id_cate_product) VALUES('$name_product','$img_product','$price_product','$ghichu_product','$id_cate_product')";
        pdo_execute($sql);
    }

    function delete_sanpham($id_product ){
        $sql = "DELETE FROM product WHERE id_product = ".$id_product;
        pdo_execute($sql);
    }

    function loadall_sanpham_home(){
        $sql = "SELECT * FROM product WHERE 1 ORDER BY id_product DESC LIMIT 0,8";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    function loadall_sanpham_top8view(){
        $sql = "SELECT * FROM product WHERE 1 ORDER BY view_product DESC LIMIT 0,8";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    function loadall_sanpham($keyword,$id_cate_product){
        $sql = "SELECT * FROM product WHERE 1";
        if($keyword!=""){
            $sql.=" AND name_product LIKE '%".$keyword."%'";
        }
        if($id_cate_product>0){
            $sql.=" AND id_cate_product ='".$id_cate_product."'";
        }
        $sql.=" ORDER BY id_product DESC";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    function loadtendm_sanpham($id_cate_product){
        if($id_cate_product>0){
        $sql = "SELECT * FROM category WHERE id_cate =".$id_cate_product;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name_cate;
        }else{
            return "";
        }
    }

    function loadone_sanpham($id_product){
        $sql = "SELECT * FROM product WHERE id_product =".$id_product;
        $sp = pdo_query_one($sql);
        return $sp;
    }

    function load_sanpham_cungloai($id_cate_product,$id_product){
        $sql = "SELECT * FROM product WHERE id_cate_product =".$id_cate_product." AND id_product <>".$id_product;
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    
    function update_sanpham($id_product, $name_product,$img_product,$price_product,$ghichu_product, $id_cate_product){
        if($img_product!=""){
            $sql = "UPDATE product SET img_product = '".$img_product."', name_product ='".$name_product."' , price_product = '".$price_product."', ghichu_product = '".$ghichu_product."', id_cate_product ='".$id_cate_product."' WHERE id_product =".$id_product ;
        }else {
            $sql = "UPDATE product SET price_product = '".$price_product."', name_product = '".$name_product."' , ghichu_product = '".$ghichu_product."', id_cate_product ='".$id_cate_product."'  WHERE id_product =".$id_product ;          
        }
        pdo_execute($sql);
    }
?>