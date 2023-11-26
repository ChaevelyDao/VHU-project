<div class="w70">
    <div class="content-title">
        sản phẩm
    </div>


    <section id="product" class="section-1">
        <?php
        extract($one_product);
        $img_show = $img_path . $img_product;
        $link_category = "index.php?act=product&id_cate_product=" . $id_cate_product;
        echo '<div class="single-pro-image">
                    <img src="' . $img_show . '" width="100%"  id="main-img" alt="">
                    
                    <div class="small-img-group">
                        <div class="small-img-col">
                            <img src="' . $img_show . '" onmouseover="imgsrcswitch()" width="100%" class="small-img" alt="">
                        </div>
                        <div class="small-img-col">
                            <img src="../assets/img/lena-2.jpg" onmouseover="imgsrcswitch()" width="100%" class="small-img" alt="">
                        </div>
                        <div class="small-img-col">
                            <img src="../assets/img/anya-1.jpg" onmouseover="imgsrcswitch()" width="100%" class="small-img" alt="">
                        </div>
                        <div class="small-img-col">
                            <img src="../assets/img/kaori-1.png" onmouseover="imgsrcswitch()" width="100%" class="small-img" alt="">
                        </div>
    
                    </div>
                </div>
                <div class="single-pro-details">
                    <h4>Sản phẩm / <a class="links" href="' . $link_category . '">' . $name_cate . '</a></h4>
                    <h2>' . $name_product . '</h2>
                    <h1>' . $price_product . ' VNĐ</h1>
                    <form action="index.php?act=addtocartp" method="post" style="display:inline;">
                    <input type="number" placeholder="1" value="1"  name="quantity" class="pro_detail_amount">
                        <input type="hidden" name="id_product" value="' . $id_product . '">
                        <input type="hidden" name="img_product" value="' . $img_product . '">
                        <input type="hidden" name="name_product" value="' . $name_product . '">
                        <input type="hidden" name="price_product" value="' . $price_product . '">
                        <input type="submit" name="addtocartp" value="Thêm vào giỏ hàng" class="addtocart_productbtn">
                    </form>
                    
                    <h2>Thông tin sản phẩm:</h2>
                    <div class="detail_product_description">' . $ghichu_product . '</div>
                    
                </div>';
        ?>
    </section>

    <!-- <section id="product" class="section-1">
                <div class="single-pro-image">
                    <img src="./assets/img/lena-1.jpg" width="100%" id="main-img" alt="">
                    <div class="small-img-group">
                        <div class="small-img-col">
                            <img src="./assets/img/lena-1.jpg" onclick="imgsrcswitch()" width="100%" class="small-img" alt="">
                        </div>
                        <div class="small-img-col">
                            <img src="./assets/img/lena-2.jpg" onclick="imgsrcswitch()" width="100%" class="small-img" alt="">
                        </div>
                        <div class="small-img-col">
                            <img src="./assets/img/lena-1.jpg" onclick="imgsrcswitch()" width="100%" class="small-img" alt="">
                        </div>
                        <div class="small-img-col">
                            <img src="./assets/img/lena-2.jpg" onclick="imgsrcswitch()" width="100%" class="small-img" alt="">
                        </div>
    
                    </div>
                </div>
                <div class="single-pro-details">
                    <h4>Sản phẩm / Figure</h4>
                    <h2>Vladilena Milizé - (Good Smile Company)</h2>
                    <h1>860.000đ</h1>
                    <input type="number" value="1">
                    <button type="submit">Thêm vào giỏ hàng</button>
                    <h2>Thông tin sản phẩm</h2>
                    <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>
                    
                </div>
            </section> -->

    <div class="">
        <div class="content-title">
            Có thể bạn quan tâm
        </div>

        <div id="sub-title">
            Sản phẩm cùng phân loại với sản phẩm bạn vừa xem
        </div>

        <div class="item-box">
            <?php
            foreach ($same_category_product as $same_category_product) {
                extract($same_category_product);
                $img_show = $img_path . $img_product;
                $link_product_detail = "index.php?act=product_detail&id_product=" . $id_product;
                $link_category = "index.php?act=product&id_cate_product=" . $id_cate_product;
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
                                            <a href="' . $link_product_detail . '" class="product-name">
                                                ' . $name_product . ' 
                                            </a>
                                            <div class="nor-price">
                                                <p class="current-price">
                                                    ' . $price_product . ' VNĐ
                                                </p>
                
                                            </div>
                                            
                                            <div class="quanandcart">
                                                <div class="quantity-box">
                                                    <form action="index.php?act=addtocartp" method="post">
                                                    <input placeholder="1" type="number" value="1" name="quantity">
                                                </div>
                                                <div class="addtocart">
                                                        <input type="hidden" name="id_product" value="' . $id_product . '">
                                                        <input type="hidden" name="img_product" value="' . $img_product . '">
                                                        <input type="hidden" name="name_product" value="' . $name_product . '">
                                                        <input type="hidden" name="price_product" value="' . $price_product . '">
                                                        <input type="submit" name="addtocartp" value="Thêm vào giỏ" class="addtocartbtn">
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
                                    <img src="./assets/img/lena-1.jpg" alt="" class="preview-img">
                                    <div class="overlay-img">
                                        <a href=""><img src="./assets/img/lena-2.jpg" alt="" class="hover-img"></a>
                                    </div>
                                    <div class="discount-badge">-14%</div>
                                    <div class="order-badge">order</div>
                                </div>
                                
                            </div>
                            <div class="product-detail">
                                <a href="" class="category">
                                    Figure
                                </a>
                                <a href="" class="product-name">
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
                                    <img src="./assets/img/mona-1.jpg" alt="" class="preview-img">
                                    <div class="overlay-img">
                                        <a href=""><img src="./assets/img/mona-2.jpg" alt="" class="hover-img"></a>
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
                                    <img src="./assets/img/anya-1.jpg" alt="" class="preview-img">
                                    <div class="overlay-img">
                                        <a href=""><img src="./assets/img/anya-2.jpg" alt="" class="hover-img"></a>
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
                                    <img src="./assets/img/kaori-1.png" alt="" class="preview-img">
                                    <div class="overlay-img">
                                        <a href=""><img src="./assets/img/kaori-2.png" alt="" class="hover-img"></a>
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
                                    <img src="./assets/img/jjk-vol1-1.png" alt="" class="preview-img">
                                    <div class="overlay-img">
                                        <a href=""><img src="./assets/img/jjk-vol1-2.jpg" alt="" class="hover-img"></a>
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
                        </div> -->
        </div>

    </div>

</div>