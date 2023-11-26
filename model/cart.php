<?php
    function viewcart(){
        global $img_path;
        $tong=0;
        $i=0;
        foreach ($_SESSION['mycart'] as $cart){
            $img_show = $img_path.$cart[1];
            $cart_count = $cart[3] * $cart[4];
            $tong+=$cart_count;
            
            echo'<tr>
                    <th><img src="'.$img_show.'"width="100" height="100"></th>
                    <th>'.$cart[4].'</th>
                    <th>'.$cart[2].'</th>
                    <th>'.$cart[3].'</th>
                    <th>'.$cart_count.'</th>
                    <th><a href="index.php?act=delcart&idcart='.$i.'"><input class="red" type="button" value="Xóa"></a></th>
                </tr>';
                $i+=1;
        }
        echo'<tr>
            <th colspan="4">Tổng đơn hàng:</th>
            <th>'.$tong.' VNĐ</th>
            <th><a href="index.php?act=bill"><input class="green" type="button" value="Thanh toán >>"></a></th>
            </tr>';
    }

    function show_bill_detail($list_bill){
        global $img_path;
        $tong=0;
        $i=1;
        foreach ($list_bill as $cart){
            $img_show = $img_path.$cart['img_cart'];
            $tong+=$cart['total'];
            
            echo'<tr>
                    <th>'.$i.'</th>
                    <th><img src="'.$img_show.'"width="100" height="100"></th>
                    <th>'.$cart['name_cart'].'</th>
                    <th>'.$cart['price'].'</th>
                    <th>'.$cart['quantity'].'</th>
                    <th>'.$cart['total'].'</th>
                </tr>';
            $i+=1;
        }
        echo'<tr>
            <th colspan="5">Tổng đơn hàng:</th>
            <th>'.$tong.' VNĐ</th>
            </tr>';
    }

    function total_cart(){
       
        $tong=0;
        foreach ($_SESSION['mycart'] as $cart){
            $cart_count = $cart[3] * $cart[4];
            $tong+=$cart_count;
        }
        return $tong;
    }

    function insert_bill($name_bill,$email_bill,$address_bill,$phone_bill,$paymethod_bill,$order_date,$total_bill){
        $sql = "INSERT INTO bill(name_bill,email_bill,address_bill,phone_bill,paymethod_bill,order_date,total_bill) VALUES('$name_bill','$email_bill','$address_bill','$phone_bill','$paymethod_bill','$order_date','$total_bill')";
        return pdo_execute_return_lastInsertId($sql);
    }

    function insert_cart($id_user_cart,$id_product_cart,$img_cart,$name_cart,$price,$quantity,$total,$idbill){
        $sql = "INSERT INTO cart(id_user_cart,id_product_cart,img_cart,name_cart,price,quantity,total,idbill) VALUES('$id_user_cart','$id_product_cart','$img_cart','$name_cart','$price','$quantity','$total','$idbill')";
        return pdo_execute($sql);
    }

    function loadone_bill($idbill){
        $sql = "SELECT * FROM bill WHERE id_bill  =".$idbill;
        $bill = pdo_query_one($sql);
        return $bill;
    }

    function loadall_cart($idbill){
        $sql = "SELECT * FROM cart WHERE idbill  =".$idbill;
        $bill = pdo_query($sql);
        return $bill;
    }
?>