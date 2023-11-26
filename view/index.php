<?php
session_start();
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/cart.php";
include "../global.php";
$category_list = loadall_danhmuc();
$newest_products = loadall_sanpham_home();
$topview_products = loadall_sanpham_top8view();

if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];
include "header.php";

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'aboutus':
            include "aboutus.php";
            break;

        case 'category':
            include "category.php";
            break;

        case 'blog':
            include "blog.php";
            break;

        case 'feedback':
            include "feedback.php";
            break;
        case 'register':
            if (isset($_POST['register']) && ($_POST['register'])) {
                $username = $_POST['username'];
                $pass = $_POST['pass'];
                $email_user = $_POST['email_user'];
                insert_taikhoan($username, $pass, $email_user);
                $nclass = "green-alert";
                $thongbao = "Đăng ký thành công! Vui lòng đăng nhập để bắt đầu mua sắm!";
            }
            include "taikhoan/register.php";
            break;
        case 'login':
            if (isset($_POST['login']) && ($_POST['login'])) {
                $username = $_POST['username'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($username, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['username'] = $checkuser;
                    $nclass = "green-alert";
                    $thongbao = "Đăng nhập thành công!";
                    header("Location: index.php");
                } else {
                    $nclass = "red-alert";
                    $thongbao = "Đăng nhập không thành công!";
                }
            }
            include "taikhoan/login.php";
            break;
        case 'edit':
            if (isset($_POST['edit']) && ($_POST['edit'])) {
                $id_user = $_POST['id_user'];
                $username = $_POST['username'];
                $pass = $_POST['pass'];
                $email_user = $_POST['email_user'];
                $phone_user = $_POST['phone_user'];
                $name_user = $_POST['name_user'];
                $address_user = $_POST['address_user'];

                update_user($id_user, $username, $pass, $email_user, $phone_user, $name_user, $address_user);
                $_SESSION['username'] = checkuser($username, $pass);
                header("Location: index.php");
                $thongbao = "Cập nhật thành công!";
            }
            include "taikhoan/edit.php";
            break;
        case 'rspass':
            if (isset($_POST['send_email']) && ($_POST['send_email'])) {
                $email_user = $_POST['email_user'];
                $check_email = check_email($email_user);
                if (is_array($check_email)) {
                    $thongbao = "Email đặt lại mật khẩu đã được gửi đến địa chỉ email của bạn, vui lòng kiểm tra!";
                    $nclass = "green-alert";
                } else {
                    $thongbao = "Địa chỉ email không tồn tại!";
                    $nclass = "red-alert";
                }
            }
            include "taikhoan/rspass.php";
            break;

        case 'logout':
            session_unset();
            header("Location: index.php");
            break;

        case 'product_detail':
            if (isset($_GET['id_product']) && ($_GET['id_product'] > 0)) {
                $id_product = $_GET['id_product'];
                $one_product = loadone_sanpham($id_product);
                extract($one_product);
                $same_category_product = load_sanpham_cungloai($id_cate_product, $id_product);
                $name_cate = loadtendm_sanpham($id_cate_product);
                include "productdetail.php";
            } else {
                include "home.php";
            }
            break;

        case 'product':
            if (isset($_POST['keyword']) && ($_POST['keyword'] != "")) {
                $keyword = $_POST['keyword'];
            } else {
                $keyword = "";
            }
            if (isset($_GET['id_cate_product']) && ($_GET['id_cate_product'] > 0)) {
                $id_cate_product = $_GET['id_cate_product'];
            } else {
                $id_cate_product = 0;
            }
            $product_cate_list = loadall_sanpham($keyword, $id_cate_product);
            $name_cate = loadtendm_sanpham($id_cate_product);
            include "product.php";
            break;

        case 'addtocart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id_product = $_POST['id_product'];
                $name_product = $_POST['name_product'];
                $img_product = $_POST['img_product'];
                $price_product = $_POST['price_product'];
                $quantity = $_POST['quantity'];
                $total = $quantity * $price_product;
                // $newcart=[$id_product,$img_product,$name_product,$price_product, $quantity,$total];
                // array_push($_SESSION['mycart'],$newcart);
                $product_exists = false;

                // Loop through the cart to check if the product already exists.
                foreach ($_SESSION['mycart'] as &$item) {
                    if ($item[0] == $id_product) {
                        // Product with the same ID already exists in the cart.
                        // Increase the quantity and update the total cost.
                        $item[4] += $quantity; // Update quantity
                        $item[5] = $item[4] * $item[3]; // Update total cost
                        $product_exists = true;
                        break;
                    }
                }

                if (!$product_exists) {
                    // If the product is not already in the cart, add it as a new item.
                    $newcart = [$id_product, $img_product, $name_product, $price_product, $quantity, $total];
                    array_push($_SESSION['mycart'], $newcart);
                }
            }
            header("Location: index.php");
            break;
        case 'viewcart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id_product = $_POST['id_product'];
                $name_product = $_POST['name_product'];
                $img_show = $_POST['img_show'];
                $price_product = $_POST['price_product'];
                $quantity = $_POST['quantity'];
                $total = $quantity * $price_product;
                $newcart = [$id_product, $img_show, $name_product, $price_product, $quantity, $total];
                array_push($_SESSION['mycart'], $newcart);
            }
            include "./cart/viewcart.php";
            break;

        case 'addtocartp':
            if (isset($_POST['addtocartp']) && ($_POST['addtocartp'])) {
                $id_product = $_POST['id_product'];
                $name_product = $_POST['name_product'];
                $img_product = $_POST['img_product'];
                $price_product = $_POST['price_product'];
                $quantity = $_POST['quantity'];
                $total = $quantity * $price_product;
                // $newcart = [$id_product, $img_product, $name_product, $price_product, $quantity, $total];
                // array_push($_SESSION['mycart'], $newcart);
                $product_exists = false;

                foreach ($_SESSION['mycart'] as &$item) {
                    if ($item[0] == $id_product) {

                        $item[4] += $quantity; // Update quantity
                        $item[5] = $item[4] * $item[3]; // Update total cost
                        $product_exists = true;
                        break;
                    }
                }

                if (!$product_exists) {
                    // If the product is not already in the cart, add it as a new item.
                    $newcart = [$id_product, $img_product, $name_product, $price_product, $quantity, $total];
                    array_push($_SESSION['mycart'], $newcart);
                }
            }
            header("Location: index.php?act=product_detail&id_product=$id_product");
            break;

        case 'delcart':
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            }
            header("Location: index.php");
            break;

        case 'bill':
            include "./cart/bill.php";
            break;

        case 'billconfirm':
            if (isset($_POST['accept_bill']) && ($_POST['accept_bill'])) {
                $name_bill = $_POST['name_bill'];
                $email_bill = $_POST['email_bill'];
                $address_bill = $_POST['address_bill'];
                $phone_bill = $_POST['phone_bill'];
                $paymethod_bill = $_POST['paymethod_bill'];
                $order_date = date('h:i:sa d/m/y');
                $total_bill = total_cart();
                //tạo bill
                $idbill = insert_bill($name_bill, $email_bill, $address_bill, $phone_bill, $paymethod_bill, $order_date, $total_bill);

                //insert into cart: $_SESSION['mycart'] & idbill
                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['username']['id_user'], $cart[0], $cart[1], $cart[2], $cart[3], $cart[4], $cart[5], $idbill);
                }
                //xóa session cart
                $_SESSION['mycart'] = [];
            }

            $bill = loadone_bill($idbill);
            $bill_detail = loadall_cart($idbill);
            include "./cart/billconfirm.php";
            break;

        default:

            include "home.php";
            break;
    }
} else {

    include "home.php";
}

include "footer.php";
