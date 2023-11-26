<?php

    function insert_danhmuc($name_cate){
        $sql = "INSERT INTO category(name_cate) VALUES('$name_cate')";
        pdo_execute($sql);
    }

    function delete_danhmuc($id_cate){
        $sql = "DELETE FROM category WHERE id_cate= ".$id_cate;
        pdo_execute($sql);
    }

    function loadall_danhmuc(){
        $sql = "SELECT * FROM category ORDER BY id_cate DESC";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }

    function loadone_danhmuc($id_cate){
        $sql = "SELECT * FROM category WHERE id_cate =".$id_cate;
        $dm = pdo_query_one($sql);
        return $dm;
    }

    // function loadsoluongsp_danhmuc($id_cate){
    //     $sql = "SELECT COUNT(id_product) AS NumberOfProducts FROM product WHERE id_cate_product =".$id_cate;
    //     $sl = pdo_query($sql);
    //     return $sl;
    // }

    function update_danhmuc($id_cate, $name_cate){
        $sql = "UPDATE category SET name_cate = '".$name_cate."' WHERE id_cate=".$id_cate;
        pdo_execute($sql);
    }
?>