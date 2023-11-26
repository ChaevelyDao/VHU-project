<div class="w70">
    <div id="slider">
        <div class="slideshow-container">
            <!-- Full-width images -->
            <div class="mySlides fade">
                <img src="../assets/img/lantern-rite-2022.jpg" style="width:100%">

            </div>

            <div class="mySlides fade">
                <img src="../assets/img/86-united.jpg" style="width:100%">

            </div>

            <div class="mySlides fade">
                <img src="../assets/img/86-a-picutre.jpg" style="width:100%">

            </div>


            <a class="prev" onclick="prevSlide()">&#10094;</a>
            <a class="next" onclick="showSlides()">&#10095;</a>
        </div>
        <br>

        <div class="dot-style">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>

    <div id="content">
        <div class="content-repeat">
            <div class="content-title">
                sản phẩm mới
            </div>
            <div id="sub-title">
                luôn luôn đi đầu, ngầu 0 thể tả!!
            </div>

            <div class="item-box clear">
                <?php
                foreach ($newest_products as $sp) {
                    extract($sp);

                    $img_show = $img_path . $img_product;
                    $link_product_detail = "index.php?act=product_detail&id_product=" . $id_product;
                    $link_category = "index.php?act=product&id_cate_product=" . $id_cate_product;
                    $name_cate = loadtendm_sanpham($id_cate_product);
                    echo '<div class="product-list">
                                        <div class="product-queue">
                                            <div class="imgbox">
                                                <img src="' . $img_show . '" alt="" class="preview-img">
                                                <div class="overlay-img">
                                                    <a href="' . $link_product_detail . '"><img src="' . $img_show . '" alt="" class="hover-img"></a>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                        <div class="product-detail">
                                            <a href="' . $link_category . '" class="category">
                                                ' . $name_cate . '
                                            </a>
                                            <a href="' . $link_product_detail . '" class="product-name" title="' . $name_product . '">
                                                ' . $name_product . ' 
                                            </a>
                                            <div class="nor-price">
                                                <p class="current-price">
                                                    '.$price_product.' VNĐ
                                                </p>
                
                                            </div>
                                            
                                            <div class="quanandcart">
                                                <div class="quantity-box">
                                                    <form action="index.php?act=addtocart" method="post">
                                                    <input placeholder="1" type="number" value="1" name="quantity">
                                                </div>
                                                <div class="addtocart">
                                                        <input type="hidden" name="id_product" value="' . $id_product . '">
                                                        <input type="hidden" name="img_product" value="' . $img_product . '">
                                                        <input type="hidden" name="name_product" value="' . $name_product . '">
                                                        <input type="hidden" name="price_product" value="' . $price_product . '">
                                                        <input type="submit" name="addtocart" value="Thêm vào giỏ" class="addtocartbtn">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                }
                ?>
                <!-- <div class="product-list" >
                            <div class="product-queue">
                                <div class="imgbox">
                                    <img src="../assets/img/lena-1.jpg" alt="" class="preview-img">
                                    <div class="overlay-img">
                                        <a href="product.html"><img src="../assets/img/lena-2.jpg" alt="" class="hover-img"></a>
                                    </div>
                                    <div class="discount-badge">-14%</div>
                                    <div class="order-badge">order</div>
                                </div>
                                
                            </div>
                            <div class="product-detail">
                                <a href="" class="category">
                                    Figure
                                </a>
                                <a href="product.html" class="product-name">
                                    Vladilena Milizé - (Good Smile Company) Figure 
                                </a>
                                <div class="price">
                                    <p class="current-price">
                                        860,000đ
                                    </p>
                                    <p class="last-price">
                                        1,000,000đ
                                    </p>
                                </div>
                                <br/>
                                <div class="quanandcart">
                                    <div class="quantity-box">
                                        <input placeholder="" type="number" value="1" name="" id="">
                                    </div>
                                    <div class="addtocart">
                                        <a href=""><i class="fa-solid fa-cart-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-list">
                            <div class="product-queue">
                                <div class="imgbox">
                                    <img src="../assets/img/mona-1.jpg" alt="" class="preview-img">
                                    <div class="overlay-img">
                                        <a href=""><img src="../assets/img/mona-2.jpg" alt="" class="hover-img"></a>
                                    </div>
                                    <div class="discount-badge">-17%</div>
                                    <div class="order-badge">order</div>
                                </div>
                                
                            </div>
                            <div class="product-detail">
                                <a href="" class="category">
                                    Figure
                                </a>
                                <a href="" class="product-name">
                                    Mona Megistus - (Good Smile Company) Figure 
                                </a>
                                <div class="price">
                                    <p class="current-price">
                                        3,000,000đ
                                    </p>
                                    <p class="last-price">
                                        3,600,000đ
                                    </p>
                                </div>
                                <br/>
                                <div class="quanandcart">
                                    <div class="quantity-box">
                                        <input type="number" value="1" name="" id="">
                                    </div>
                                    <div class="addtocart">
                                        <a href=""><i class="fa-solid fa-cart-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-list">
                            <div class="product-queue">
                                <div class="imgbox">
                                    <img src="../assets/img/anya-1.jpg" alt="" class="preview-img">
                                    <div class="overlay-img">
                                        <a href=""><img src="../assets/img/anya-2.jpg" alt="" class="hover-img"></a>
                                    </div>
                                    <div class="discount-badge">-10%</div>
                                    <div class="order-badge">order</div>
                                </div>
                                
                            </div>
                            <div class="product-detail">
                                <a href="" class="category">
                                    Figure
                                </a>
                                <a href="" class="product-name">
                                    Anya Forger - (Good Smile Company) Figure
                                </a>
                                <div class="price">
                                    <p class="current-price">
                                        900,000đ
                                    </p>
                                    <p class="last-price">
                                        1,000,000đ
                                    </p>
                                </div>
                                <br/>
                                <div class="quanandcart">
                                    <div class="quantity-box">
                                        <input type="number" value="1" name="" id="">
                                    </div>
                                    <div class="addtocart">
                                        <a href=""><i class="fa-solid fa-cart-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-list">
                            <div class="product-queue">
                                <div class="imgbox">
                                    <img src="../assets/img/kaori-1.png" alt="" class="preview-img">
                                    <div class="overlay-img">
                                        <a href=""><img src="../assets/img/kaori-2.png" alt="" class="hover-img"></a>
                                    </div>
                                    <div class="discount-badge">-5%</div>
                                    <div class="order-badge">order</div>
                                </div>
                                
                            </div>
                            <div class="product-detail">
                                <a href="" class="category">
                                    Figure
                                </a>
                                <a href="" class="product-name">
                                    Kaori Miyazono - (Good Smile Company) Figure
                                </a>
                                <div class="price">
                                    <p class="current-price">
                                        4,000,000đ
                                    </p>
                                    <p class="last-price">
                                        4,200,000đ
                                    </p>
                                </div>
                                <br/>
                                <div class="quanandcart">
                                    <div class="quantity-box">
                                        <input type="number" value="1" name="" id="">
                                    </div>
                                    <div class="addtocart">
                                        <a href=""><i class="fa-solid fa-cart-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-list">
                            <div class="product-queue">
                                <div class="imgbox">
                                    <img src="../assets/img/jjk-vol1-1.png" alt="" class="preview-img">
                                    <div class="overlay-img">
                                        <a href=""><img src="../assets/img/jjk-vol1-2.jpg" alt="" class="hover-img"></a>
                                    </div>
                                </div>
                                <div class="discount-badge">-20%</div>
                                <div class="order-badge">order</div>
                            </div>
                            <div class="product-detail">
                                <a href="" class="category">
                                    Manga
                                </a>
                                <a href="" class="product-name">
                                    Chú Thuật Hồi Chiến Vol 1
                                </a>
                                <div class="price">
                                    <p class="current-price">
                                        30,000đ
                                    </p>
                                    <p class="last-price">
                                        50,000đ
                                    </p>
                                </div>
                                <br/>
                                <div class="quanandcart">
                                    <div class="quantity-box">
                                        <input type="number" value="1" name="" id="">
                                    </div>
                                    <div class="addtocart">
                                        <a href=""><i class="fa-solid fa-cart-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-list">
                            <div class="product-queue">
                                <div class="imgbox">
                                    <img src="../assets/img/anya-1.jpg" alt="" class="preview-img">
                                    <div class="overlay-img">
                                        <a href=""><img src="../assets/img/anya-2.jpg" alt="" class="hover-img"></a>
                                    </div>
                                    <div class="discount-badge">-10%</div>
                                    <div class="order-badge">order</div>
                                </div>
                                
                            </div>
                            <div class="product-detail">
                                <a href="" class="product-name">
                                    Anya Forger - (Good Smile Company) Figure
                                </a>
                                <div class="price">
                                    <p class="current-price">
                                        900,000đ
                                    </p>
                                    <p class="last-price">
                                        1,000,000đ
                                    </p>
                                </div>
                            </div>
                        </div> -->
            </div>
        </div>
        <div class="content-repeat">
            <div class="content-title">
                Sản phẩm bán chạy
            </div>
            <div id="sub-title">
                ngắm rồi thì sắm nhanh bạn ơi!!!
            </div>
            <div class="item-box">
                <?php
                foreach ($topview_products as $sp) {
                    extract($sp);
                    $img_show = $img_path . $img_product;
                    $link_product_detail = "index.php?act=product_detail&id_product=" . $id_product;
                    $link_category = "index.php?act=product&id_cate_product=" . $id_cate_product;
                    $name_cate = loadtendm_sanpham($id_cate_product);
                    echo '<div class="product-list">
                                    <div class="product-queue">
                                        <div class="imgbox">
                                            <img src="' . $img_show . '" alt="" class="preview-img">
                                            <div class="overlay-img">
                                                <a href="' . $link_product_detail . '"><img src="' . $img_show . '" alt="" class="hover-img"></a>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    <div class="product-detail">
                                        <a href="' . $link_category . '" class="category">
                                            ' . $name_cate . '
                                        </a>
                                        <a href="' . $link_product_detail . '" class="product-name" title="' . $name_product . '">
                                            ' . $name_product . ' 
                                        </a>
                                        <div class="nor-price">
                                            <p class="current-price">
                                                ' . $price_product . ' VNĐ
                                            </p>
            
                                        </div>
                                        
                                        <div class="quanandcart">
                                            <div class="quantity-box">
                                                <form action="index.php?act=addtocart" method="post">
                                                <input placeholder="1" type="number" value="1" name="quantity">
                                            </div>
                                            <div class="addtocart">
                                                    <input type="hidden" name="id_product" value="' . $id_product . '">
                                                    <input type="hidden" name="img_product" value="' . $img_product . '">
                                                    <input type="hidden" name="name_product" value="' . $name_product . '">
                                                    <input type="hidden" name="price_product" value="' . $price_product . '">
                                                    <input type="submit" name="addtocart" value="Thêm vào giỏ" class="addtocartbtn">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                }
                ?>
                <!-- <div class="product-list">
                            <div class="product-queue">
                                <div class="imgbox">
                                    <img src="../assets/img/anya-1.jpg" alt="" class="preview-img">
                                    <div class="overlay-img">
                                        <a href=""><img src="../assets/img/anya-2.jpg" alt="" class="hover-img"></a>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="product-detail">
                                <a href="" class="product-name">
                                    Anya Forger - (Good Smile Company) Figure
                                </a>
                                <div class="nor-price">
                                    <p class="current-price">
                                        900,000đ
                                    </p>
        
                                </div>
                            </div>
                        </div>
                        <div class="product-list">
                            <div class="product-queue">
                                <div class="imgbox">
                                    <img src="../assets/img/anya-1.jpg" alt="" class="preview-img">
                                    <div class="overlay-img">
                                        <a href=""><img src="../assets/img/anya-2.jpg" alt="" class="hover-img"></a>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="product-detail">
                                <a href="" class="product-name">
                                    Anya Forger - (Good Smile Company) Figure
                                </a>
                                <div class="nor-price">
                                    <p class="current-price">
                                        900,000đ
                                    </p>
        
                                </div>
                            </div>
                        </div>
                        <div class="product-list">
                            <div class="product-queue">
                                <div class="imgbox">
                                    <img src="../assets/img/anya-1.jpg" alt="" class="preview-img">
                                    <div class="overlay-img">
                                        <a href=""><img src="../assets/img/anya-2.jpg" alt="" class="hover-img"></a>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="product-detail">
                                <a href="" class="product-name">
                                    Anya Forger - (Good Smile Company) Figure
                                </a>
                                <div class="nor-price">
                                    <p class="current-price">
                                        900,000đ
                                    </p>
        
                                </div>
                            </div>
                        </div>
                        <div class="product-list">
                            <div class="product-queue">
                                <div class="imgbox">
                                    <img src="../assets/img/anya-1.jpg" alt="" class="preview-img">
                                    <div class="overlay-img">
                                        <a href=""><img src="../assets/img/anya-2.jpg" alt="" class="hover-img"></a>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="product-detail">
                                <a href="" class="product-name">
                                    Anya Forger - (Good Smile Company) Figure
                                </a>
                                <div class="nor-price">
                                    <p class="current-price">
                                        900,000đ
                                    </p>
        
                                </div>
                            </div>
                        </div>
                        <div class="product-list">
                            <div class="product-queue">
                                <div class="imgbox">
                                    <img src="../assets/img/anya-1.jpg" alt="" class="preview-img">
                                    <div class="overlay-img">
                                        <a href=""><img src="../assets/img/anya-2.jpg" alt="" class="hover-img"></a>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="product-detail">
                                <a href="" class="product-name">
                                    Anya Forger - (Good Smile Company) Figure
                                </a>
                                <div class="nor-price">
                                    <p class="current-price">
                                        900,000đ
                                    </p>
        
                                </div>
                            </div>
                        </div>
                        <div class="product-list">
                            <div class="product-queue">
                                <div class="imgbox">
                                    <img src="../assets/img/anya-1.jpg" alt="" class="preview-img">
                                    <div class="overlay-img">
                                        <a href=""><img src="../assets/img/anya-2.jpg" alt="" class="hover-img"></a>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="product-detail">
                                <a href="" class="product-name">
                                    Anya Forger - (Good Smile Company) Figure
                                </a>
                                <div class="nor-price">
                                    <p class="current-price">
                                        900,000đ
                                    </p>
        
                                </div>
                            </div>
                        </div>
                        <div class="product-list">
                            <div class="product-queue">
                                <div class="imgbox">
                                    <img src="../assets/img/anya-1.jpg" alt="" class="preview-img">
                                    <div class="overlay-img">
                                        <a href=""><img src="../assets/img/anya-2.jpg" alt="" class="hover-img"></a>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="product-detail">
                                <a href="" class="product-name">
                                    Anya Forger - (Good Smile Company) Figure
                                </a>
                                <div class="nor-price">
                                    <p class="current-price">
                                        900,000đ
                                    </p>
        
                                </div>
                            </div>
                        </div>
                        <div class="product-list">
                            <div class="product-queue">
                                <div class="imgbox">
                                    <img src="../assets/img/anya-1.jpg" alt="" class="preview-img">
                                    <div class="overlay-img">
                                        <a href=""><img src="../assets/img/anya-2.jpg" alt="" class="hover-img"></a>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="product-detail">
                                <a href="" class="product-name">
                                    Anya Forger - (Good Smile Company) Figure
                                </a>
                                <div class="nor-price">
                                    <p class="current-price">
                                        900,000đ
                                    </p>
        
                                </div>
                            </div> 
                        </div> -->
            </div>
        </div>
    </div>
</div>