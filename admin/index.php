<?php 
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "header.php";
    include "adminheader.php";
    // controller

    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            //controller cho danh mục
            case 'adddm':
                if(isset($_POST['addnew'])&&($_POST['addnew'])){
                    $name_cate=$_POST['name_cate'];
                    insert_danhmuc($name_cate);
                    $thongbao="Thêm thành công";
                }
                include "danhmuc/add.php";
                break;
            
            case 'xoadm':
                if(isset($_GET['id_cate'])&&($_GET['id_cate']>0)){
                    $id_cate = $_GET['id_cate'];
                    delete_danhmuc($id_cate);
                }
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;

            case 'suadm':
                if(isset($_GET['id_cate'])&&($_GET['id_cate']>0)){
                    $dm = loadone_danhmuc($_GET['id_cate']);
                }
                include "danhmuc/update.php";
                break;
            
            case 'updatedm':
                if(isset($_POST['update'])&&($_POST['update'])){
                    $name_cate=$_POST['name_cate'];
                    $id_cate=$_POST['id_cate'];
                    update_danhmuc($id_cate,$name_cate);
                    $thongbao="Sửa thông tin thành công";
                }
                
                $listdanhmuc = loadall_danhmuc();
                // echo"<script language='javascript'>
                //     alert('Sửa thông tin thành công')
                // </script>  ";        
                include "danhmuc/list.php";
                break;    
                
            case 'listdm':
            $listdanhmuc = loadall_danhmuc();
                    
                include "danhmuc/list.php";
                break;
            
            
            // controller cho sản phẩm 

            case 'addsp':
                if(isset($_POST['addnew'])&&($_POST['addnew'])){
                    $id_cate_product=$_POST['id_cate_product'];
                    $name_product=$_POST['name_product'];
                    $price_product=$_POST['price_product'];
                    $ghichu_product=$_POST['ghichu_product'];
                    $img_product=$_FILES['img_product']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["img_product"]["name"]);
                    move_uploaded_file($_FILES["img_product"]["tmp_name"], $target_file);
                    insert_sanpham($name_product,$img_product,$price_product,$ghichu_product,$id_cate_product);
                    $thongbao="Thêm thành công";
                }
                $listdanhmuc = loadall_danhmuc();   
                include "sanpham/add.php";
                break;
            
            case 'xoasp':
                if(isset($_GET['id_product'])&&($_GET['id_product']>0)){
                    $id_product = $_GET['id_product'];
                    delete_sanpham($id_product);
                }
                $listsanpham = loadall_sanpham("",0);
                include "sanpham/list.php";
                break;

            case 'suasp':
                if(isset($_GET['id_product'])&&($_GET['id_product']>0)){
                    $sp = loadone_sanpham($_GET['id_product']);
                }
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/update.php";
                break;
            
            case 'updatesp':
                if(isset($_POST['update'])&&($_POST['update'])){
                    
                    $id_product=$_POST['id_product'];
                    $id_cate_product=$_POST['id_cate_product'];
                    $name_product=$_POST['name_product'];
                    $img_product=$_FILES['img_product']['name'];
                    $price_product=$_POST['price_product'];
                    $ghichu_product=$_POST['ghichu_product'];
                    $target_dir = "../uploads/";
                    
                    $target_file = $target_dir . basename($_FILES["img_product"]["name"]);
                    update_sanpham($id_product,$name_product,$img_product,$price_product,$ghichu_product,$id_cate_product);
                    $thongbao="Cập nhật thành công";
                } 
                $listdanhmuc = loadall_danhmuc();            
                $listsanpham = loadall_sanpham("",$id_cate_product);
                // echo"<script language='javascript'>
                //     alert('Sửa thông tin thành công')
                // </script>  ";     
                   
                include "sanpham/list.php";
                break;    
                
            case 'listsp':
                if(isset($_POST['listok'])&&($_POST['listok'])){
                    $keyword=$_POST['keyword'];
                    $id_cate_product=$_POST['id_cate_product'];
                    
                }else{
                    $keyword='';
                    $id_cate_product=0;
                }
                $listdanhmuc = loadall_danhmuc(); 
                $listsanpham = loadall_sanpham($keyword,$id_cate_product);  
                $name_cate=loadtendm_sanpham($id_cate_product);           
                include "sanpham/list.php";
                break;
        
            default:
                include "home.php";
                break;
        }
    }else {
        include "home.php";
    }



    include "footer.php";
?>