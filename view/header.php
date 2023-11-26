<?php
ob_start();
include "../global.php";
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-store" />
    <!-- <meta name="format-detection" content="telephone=no"> -->
    <title>Chaevely Shop - Mô hình đồ chơi Figure, Anime chính hãng</title>
    <link rel="icon" type="image/x-icon" href="../assets/img/anya-stick - Copy.png">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../assets/font/fontawesome-free-6.3.0-web/css/all.css">

    <script defer src="../main.js"></script>
</head>

<body>
    <main>
        <div id="cursor-tracking">
            <div class="img-scale">
                <img id="anchor" src="../assets/img/anya-stick.png">
                <div id="eyes">
                    <img style="top: -390px;left: 224px;" class="eye" src="../assets/img/eyes-anya.png">
                    <img style="top: -311px;left: 340px;" class="eye" src="../assets/img/eyes-anya.png">
                </div>
            </div>
            <div class="media-tracking">
                <div class="media-icon icon-fb">
                    <a href="https://www.facebook.com/chfigtest/"><i class="fa-brands fa-facebook"></i></a>
                </div>
                <div class="media-icon icon-yt">
                    <a href=""><i class="fa-brands fa-youtube"></i></a>
                </div>
                <div class="media-icon icon-tiktok">
                    <a href=""><i class="fa-brands fa-tiktok"></i></a>
                </div>
                <div class="media-icon icon-discord">
                    <a href="https://discordapp.com/users/366936864697090053"><i class="fa-brands fa-discord"></i></a>
                </div>
                <div class="media-icon icon-tw">
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div id="header">
            <a href="index.php"><img src="../assets/img/Logo.png" class="logo" alt="" /></a>
            <div class="nav">
                <div id="head-menu" class="navhover">
                    <a href="" class="head-menu-btn">
                        <i class="fa-solid fa-bars menu-icon"></i>

                    </a>
                    <div class="catalog-menu-dropdown">
                        <div class="catalog-menu-content">
                            <div id="main-catalog-title">
                                Danh mục sản phẩm
                            </div>
                            <div style="height: 12px; border-top: 1px solid #CDCFD0;"></div>
                            <div id="catalog-nav-section">

                                <?php
                                foreach ($category_list as $dm) {
                                    extract($dm);
                                    $link_category = "index.php?act=product&id_cate_product=" . $id_cate;
                                    echo ' <div class="catalog-content">
                                        <div class="sub-catalog-title">
                                            <i class="fa-solid fa-gamepad" style="color: rgb(51, 71, 156);">
                                            </i>
                                            <a href="' . $link_category . '" class="menu-title">' . $name_cate . '</a>
                                        </div>                                       
                                    </div>';
                                }
                                ?>
                                <!-- <div class="catalog-content">
                                    <div class="sub-catalog-title">
                                        <i class="fa-solid fa-gamepad" style="color: rgb(51, 71, 156);">
                                        </i>
                                        <a href="" class="menu-title">game</a>
                                    </div>
                                    <ul>
                                        <li class="catalog-content-nav"><a href="">arknights</a></li>
                                        <li class="catalog-content-nav"><a href="">azur lane</a></li>
                                        <li class="catalog-content-nav"><a href="">blue archive</a></li>
                                        <li class="catalog-content-nav"><a href="">genshin impact</a></li>
                                        <li class="catalog-content-nav"><a href="">honkai impact 3rd</a></li>
                                        <li class="catalog-content-nav"><a href="">league of legends</a></li>
                                        <li class="catalog-content-nav"><a href="">fate/grand order</a></li>
                                    </ul> 
                                </div>
                                <div class="catalog-content">
                                    <div class="sub-catalog-title">
                                        <i class="fa-solid fa-dice" style="color: rgb(51, 71, 156);">
                                        </i>
                                        <a href="" class="menu-title">anime</a>
                                    </div>
                                    <ul>
                                        <li class="catalog-content-nav"><a href="">86 - Eighty Six</a></li>
                                        <li class="catalog-content-nav"><a href="">bleach</a></li>
                                        <li class="catalog-content-nav"><a href="">chainsaw man</a></li>
                                        <li class="catalog-content-nav"><a href="">gintama</a></li>
                                        <li class="catalog-content-nav"><a href="">kimetsu no yaiba</a></li>
                                        <li class="catalog-content-nav"><a href="">one piece</a></li>
                                        <li class="catalog-content-nav"><a href="">spy x family</a></li>
                                    </ul> 
                                </div>
                                <div class="catalog-content">
                                    <div class="sub-catalog-title">
                                        <i class="fa-solid fa-chess" style="color: rgb(51, 71, 156);">
                                        </i>
                                        <a href="" class="menu-title">Figure brand</a>
                                    </div>
                                    <ul>
                                        <li class="catalog-content-nav"><a href="">Alter</a></li>
                                        <li class="catalog-content-nav"><a href="">Aniplex</a></li>
                                        <li class="catalog-content-nav"><a href="">Good Smile Company</a></li>
                                        <li class="catalog-content-nav"><a href="">Kotobukiya</a></li>
                                        <li class="catalog-content-nav"><a href="">Max Factory</a></li>
                                        <li class="catalog-content-nav"><a href="">Megahouse</a></li>
                                        <li class="catalog-content-nav"><a href="">Orange Rouge</a></li>
                                    </ul> 
                                </div>
                                <div class="catalog-content">
                                    <div class="sub-catalog-title">
                                        <i class="ti-github" style="color: rgb(51, 71, 156);">
                                        </i>
                                        <a href="" class="menu-title">Manga</a>
                                    </div>
                                    <ul>
                                        <li class="catalog-content-nav"><a href="">Shonen</a></li>
                                        <li class="catalog-content-nav"><a href="">comedy</a></li>
                                        <li class="catalog-content-nav"><a href="">horror</a></li>
                                        <li class="catalog-content-nav"><a href="">romance</a></li>
                                        <li class="catalog-content-nav"><a href="">slice of life</a></li>
                                        <li class="catalog-content-nav"><a href="">yuri</a></li>
                                        <li class="catalog-content-nav"><a href="">fantasy</a></li>
                                    </ul> 
                                </div>
                                <div class="catalog-content">
                                    <div class="sub-catalog-title">
                                        <i class="fa-solid fa-shirt" style="color: rgb(51, 71, 156);">
                                        </i>
                                        <a href="" class="menu-title">khác</a>
                                    </div>
                                    <ul>
                                        <li class="catalog-content-nav"><a href="">áo</a></li>
                                        <li class="catalog-content-nav"><a href="">ốp lưng</a></li>
                                        <li class="catalog-content-nav"><a href="">móc khóa</a></li>
                                        <li class="catalog-content-nav"><a href="">balo - túi xách</a></li>
                                        <li class="catalog-content-nav"><a href="">lót chuột</a></li>
                                        <li class="catalog-content-nav"><a href="">phụ kiện</a></li>
                                    </ul> 
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="index.php?act=product" method="post" class="search-bar">
                <input type="text" placeholder="Bạn muốn mua gì..." name="keyword">
                <input type="hidden" name="id_cate_product">
                <button type="submit" class="s-button pull-to-right">
                    <i class="fa-solid fa-magnifying-glass search-btn"></i>
                </button>
            </form>
            <ul class="nav">
                <li class="navhover"><a href="index.php?act=aboutus">
                        Về chúng tôi
                        <i class="fa-solid fa-chevron-down arrow-down"></i>
                    </a>
                    <div class="fake-triangle"></div>
                    <ul class="subnav">
                        <a href="#footer">
                            <li class="intro">Giới thiệu</li>
                        </a>
                        <div class="divbetween2li"></div>
                        <a href="index.php?act=category">
                            <li class="main-category">bộ sưu tập</li>
                        </a>
                        <div class="divbetween2li"></div>
                        <a href="index.php?act=blog">
                            <li class="blog">blog</li>
                        </a>
                        <div class="divbetween2li"></div>
                        <a href="index.php?act=feedback">
                            <li class="feedback">Feedback</li>
                        </a>
                    </ul>
                </li>
                <li class="navhover"><a href="index.php?act=login">
                        <i class="fa-solid fa-user"></i>
                        Tài khoản</a>
                    <div class="fake-triangle" style="margin-left: 105px;"></div>
                    <div id="logintop">
                        <?php
                        if (isset($_SESSION['username'])) {
                            extract($_SESSION['username']);
                        ?>
                            <div class="dflex">
                                <div class="mb10">Xin chào <strong><?= $username ?></strong></div>
                                <div>
                                    <p class="login-pick links"><a href="index.php?act=edit">Cập nhật thông tin</a></p>
                                    <p class="login-pick links"><a href="index.php?act=rspass">Quên mật khẩu</a></p>
                                    <?php
                                    if ($role == 1) { ?>
                                        <p class="login-pick links"><a href="http://localhost/VHU-project/admin/index.php">Admin</a></p>
                                    <?php } ?>
                                    <p class="login-pick links"><a href="index.php?act=logout">Đăng xuất</a></p>
                                </div>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="dflex">
                                <p class="mini-login-title">Đăng nhập</p>
                                <form action="index.php?act=login" method="post" class="center">
                                    <p>Tài khoản</p>

                                    <input type="text" name="username" autocomplete="off">
                                    <br />
                                    <p class="mt10">Mật khẩu</p>

                                    <input type="password" name="pass" autocomplete="off">
                                    <div>
                                        <input type="submit" value="Đăng nhập" name="login" class="logintopbutton">
                                    </div>
                                </form>
                                <span class="login-pick"><a href="index.php?act=rspass" class="links">Quên mật khẩu?</a></span>

                                <span class="login-pick"><a href="index.php?act=register" class="links">Đăng ký ngay!</a></span>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </li>
                <li class="h-cart navhover"><a href="">
                        <i class="fa-solid fa-cart-shopping"></i>
                        Giỏ hàng</a>
                    <div class="fake-triangle" style="margin-left: 105px;"></div>
                    <div id="head-cart">
                        <div class="cart-block">
                            <div class="center-mini-title">
                                <h3> Giỏ hàng của bạn</h3>
                            </div>
                        </div>
                        <?php if (empty($_SESSION['mycart']))
                            echo '<div class="empty-cart">
                                <p>Chưa có sản phẩm!!!</p>
                              </div>';
                        ?>
                        <div>
                            <!-- thong tin sp -->
                            <?php
                            $tong = 0;
                            $i = 0;
                            foreach ($_SESSION['mycart'] as $cart) {
                                $img_show = $img_path . $cart[1];
                                $cart_count = $cart[3] * $cart[4];
                                $tong += $cart_count;
                                $del_product = '<a href="index.php?act=delcart&idcart=' . $i . '" class="del-h-cart"><i class="fa-solid fa-xmark"></i></a>';
                                echo '<div class="cart-body">
                                                <img src="' . $img_show . '" alt="" class="img-cart">
                                                    <div class="cart-detail">
                                                        <b style="max-width: 35ch; overflow-wrap: break-word; text-wrap: balance;" class="l2">' . $cart[2] . '</b>
                                                        <p class="mt10">' . $cart[3] . ' <span>x' . $cart[4] . '</span></p>                                     
                                                    </div>
                                                    ' . $del_product . '
                                            </div>';
                                $i += 1;
                            }
                            ?>
                        </div>
                        <?php
                        echo '<div class="cart-block">
                                    <span class="text-left">Tổng cộng:</span>
                                    <span class="cash-amount-right">' . $tong . ' VNĐ</span>
                                    </div>';
                        ?>
                        <div id="head-pay-btn">
                            <form action="index.php?act=viewcart" method="post" class="payment">
                                <input type="hidden" name="id_product" value="'.$id_product.'">
                                <input type="hidden" name="img_show" value="'.$img_show.'">
                                <input type="hidden" name="name_product" value="'.$name_product.'">
                                <input type="hidden" name="price_product" value="'.$price_product.'">
                                <input type="submit" name="viewcart" value="Thanh Toán" class="btn">

                            </form>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="navhover"><a href="">
                        <i class="fa-solid fa-envelope"></i>
                        Liên hệ
                    </a>
                </li>
            </ul>
        </div>
        <div class="mobile-header">
            <div class="flex-mobile-header fdc">
                <div class="fdr">
                    <div class="header-upper-nav nav">
                        <div id="head-menu" class="navhover">
                            <a href="" class="head-menu-btn">
                                <i class="fa-solid fa-bars menu-icon"></i>

                            </a>
                            <div class="catalog-menu-dropdown">
                                <div class="catalog-menu-content">
                                    <div id="main-catalog-title">
                                        Danh mục sản phẩm
                                    </div>
                                    <div style="height: 12px; border-top: 1px solid #CDCFD0;"></div>
                                    <div id="catalog-nav-section">

                                        <?php
                                        foreach ($category_list as $dm) {
                                            extract($dm);
                                            $link_category = "index.php?act=product&id_cate_product=" . $id_cate;
                                            echo ' <div class="catalog-content">
                                                <div class="sub-catalog-title">
                                                    <i class="fa-solid fa-gamepad" style="color: rgb(51, 71, 156);">
                                                    </i>
                                                    <a href="' . $link_category . '" class="menu-title">' . $name_cate . '</a>
                                                </div>                                       
                                            </div>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-upper-logo">
                        <a href="index.php"><img src="../assets/img/Logo.png" class="logo" alt="HOME" /></a>
                    </div>
                    <ul class="header-upper-nav nav">
                        <li class=" navhover">
                            <?php
                            if (!isset($_SESSION['username'])) {

                            ?>
                                <a href="index.php?act=login"><i class="fa-solid fa-user"></i></a>
                                <!-- <div class="fake-triangle" style="margin-left: 105px;"></div> -->
                                <!-- <div id="logintop">
                                <?php
                                if (isset($_SESSION['username'])) {
                                    extract($_SESSION['username']);
                                ?>
                                    <div class="dflex">
                                        <div class="mb10">Xin chào <strong><?= $username ?></strong></div>
                                        <div>
                                            <p class="login-pick links"><a href="index.php?act=edit">Cập nhật thông tin</a></p>
                                            <p class="login-pick links"><a href="index.php?act=rspass">Quên mật khẩu</a></p>
                                            <?php
                                            if ($role == 1) { ?>
                                                <p class="login-pick links"><a href="http://localhost/VHU-project/admin/index.php">Admin</a></p>
                                            <?php } ?>
                                            <p class="login-pick links"><a href="index.php?act=logout">Đăng xuất</a></p>
                                        </div>
                                    </div>
                                <?php
                                } else {
                                ?>
                                    <div class="dflex">
                                        <p class="mini-login-title">Đăng nhập</p>
                                        <form action="index.php?act=login" method="post" class="center">
                                            <p>Tài khoản</p>

                                            <input type="text" name="username" autocomplete="off">
                                            <br />
                                            <p class="mt10">Mật khẩu</p>

                                            <input type="password" name="pass" autocomplete="off">
                                            <div>
                                                <input type="submit" value="Đăng nhập" name="login" class="logintopbutton">
                                            </div>
                                        </form>
                                        <span class="login-pick"><a href="" class="links">Quên mật khẩu?</a></span>

                                        <span class="login-pick"><a href="index.php?act=register" class="links">Đăng ký ngay!</a></span>
                                    </div>
                                <?php
                                }
                                ?>
                            </div> -->
                            <?php
                            }
                            ?>
                        </li>
                        <li class="h-cart removehover " onclick="toggleBtn()">
                            <a><i class="fa-solid fa-cart-shopping"></i></a>
                            <!-- <div class="fake-triangle" style="margin-left: 105px;"></div> -->
                            <div id="head-cart" class="mobile-head-cart">
                                <div class="cart-block">
                                    <div class="center-mini-title">
                                        <h3> Giỏ hàng của bạn</h3>
                                    </div>
                                </div>
                                <?php if (empty($_SESSION['mycart']))
                                    echo '  <div class="empty-cart">
                                                <p>Chưa có sản phẩm!!!</p>
                                            </div>';
                                ?>
                                <div>
                                    <!-- thong tin sp -->
                                    <?php
                                    $tong = 0;
                                    $i = 0;
                                    foreach ($_SESSION['mycart'] as $cart) {
                                        $img_show = $img_path . $cart[1];
                                        $cart_count = $cart[3] * $cart[4];
                                        $tong += $cart_count;
                                        $del_product = '<a href="index.php?act=delcart&idcart=' . $i . '" class="del-h-cart"><i class="fa-solid fa-xmark"></i></a>';
                                        echo '<div class="cart-body">
                                                    <img src="' . $img_show . '" alt="" class="img-cart">
                                                        <div class="cart-detail">
                                                            <b style="overflow-wrap: break-word; text-wrap: balance;" class="l2">' . $cart[2] . '</b>
                                                            <p class="mt10">' . $cart[3] . ' <span>x' . $cart[4] . '</span></p>                                     
                                                        </div>
                                                        ' . $del_product . '
                                                </div>';
                                        $i += 1;
                                    }
                                    ?>
                                </div>
                                <?php
                                echo '<div class="cart-block">
                                        <span class="text-left">Tổng cộng:</span>
                                        <span class="cash-amount-right">' . $tong . ' VNĐ</span>
                                        </div>';
                                ?>
                                <div id="head-pay-btn">
                                    <form action="index.php?act=viewcart" method="post" class="payment">
                                        <input type="hidden" name="id_product" value="'.$id_product.'">
                                        <input type="hidden" name="img_show" value="'.$img_show.'">
                                        <input type="hidden" name="name_product" value="'.$name_product.'">
                                        <input type="hidden" name="price_product" value="'.$price_product.'">
                                        <input type="submit" name="viewcart" value="Thanh Toán" class="btn">

                                    </form>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="divbetween2li">

                </div>
                <div class="center-obj w100">
                    <form action="index.php?act=product" method="post" class="search-bar">
                        <input type="text" placeholder="Bạn muốn mua gì..." name="keyword">
                        <input type="hidden" name="id_cate_product">
                        <button type="submit" class="s-button pull-to-right">
                            <i class="fa-solid fa-magnifying-glass search-btn"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="scroll-to-top" onclick="scrollToTop()">
            <i class="fa-solid fa-arrow-up scrolltop"></i>
        </div>
        <script src="../main.js"></script>