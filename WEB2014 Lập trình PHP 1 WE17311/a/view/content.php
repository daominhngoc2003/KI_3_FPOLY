<div class="hero-area ml-110">
    <div class="row">
        <div class="col-xxl-10 col-xl-9 col-lg-9 p-0">
            <div class="row">
                <div class="swiper-container hero-swiper-container">

                    <div class="swiper-wrapper">
                        <div class="swiper-slide hero-slider-item slider-item1 d-flex justify-content-center align-items-center position-relative">
                            <div class="slider-image-layer">
                            </div>
                            <div class="slider-content position-relative text-center">
                                <h5 class="slider-sub-title">Sản phẩm thịnh hành</h5>
                                <h2 class="slider-main-title"></h2>
                                <div class="banner-btn">
                                    <a href="product.html" class="eg-btn-xl"> Xem tất cả bộ sưu tập</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide hero-slider-item slider-item2 d-flex justify-content-center align-items-center position-relative">
                            <div class="slider-image-layer">
                            </div>
                            <div class="slider-content position-relative text-center">
                                <h5 class="slider-sub-title">Sản phẩm thịnh hành</h5>
                                <h2 class="slider-main-title">Bộ sưu tập tuyệt vời cho thời trang của bạn</h2>
                                <div class="banner-btn">
                                    <a href="product.html" class="eg-btn-xl-v2"> Xem tất cả bộ sưu tập</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide hero-slider-item slider-item3 d-flex justify-content-center align-items-center position-relative">
                            <div class="slider-image-layer">
                            </div>
                            <div class="slider-content position-relative text-center">
                                <h5 class="slider-sub-title">Sản phẩm thịnh hành</h5>
                                <h2 class="slider-main-title">Bộ sưu tập tuyệt vời cho thời trang của bạn</h2>
                                <div class="banner-btn">
                                    <a href="product.html" class="eg-btn-xl-v2"> Xem tất cả bộ sưu tập</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-button-next"><i class="flaticon-arrow-pointing-to-right"></i></div>
                    <div class="swiper-button-prev"><i class="flaticon-arrow-pointing-to-left"></i></div>

                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-xl-3 col-lg-3 p-0 d-flex justify-content-between feature-banner-col">
            <div class="banner-feature-item position-relative">
                <div class="b-feature-shape">
                    <img src="./src/assets/images/shapes/banner-feature-shape.png" alt="" class="position-absolute">
                </div>
                <div class="feature-head d-flex align-items-center position-relative">
                    <div class="feature-icon">
                        <i class="flaticon-shipping"></i>
                    </div>
                    <p>Chất lượng của chúng tôi</p>
                </div>
                <h5>Các tính năng nâng cao nhất</h5>
            </div>
            <div class="banner-feature-item position-relative">
                <div class="b-feature-shape">
                    <img src="./src/assets/images/shapes/banner-feature-shape.png" alt="" class="position-absolute">
                </div>
                <div class="feature-head d-flex align-items-center position-relative">
                    <div class="feature-icon">
                        <i class="flaticon-price-tag"></i>
                    </div>
                    <p>Hệ thống giá cả</p>
                </div>
                <h5>Giá cả rất hợp lý</h5>
            </div>
            <div class="banner-feature-item position-relative">
                <div class="b-feature-shape">
                    <img src="./src/assets/images/shapes/banner-feature-shape.png" alt="" class="position-absolute">
                </div>
                <div class="feature-head d-flex align-items-center position-relative">
                    <div class="feature-icon">
                        <i class="flaticon-puzzle"></i>
                    </div>
                    <p>
                        Hệ thống giao hàng</p>
                </div>
                <h5>Giao hàng tận tay sản phẩm</h5>
            </div>
            <div class="banner-feature-item position-relative">
                <div class="b-feature-shape">
                    <img src="./src/assets/images/shapes/banner-feature-shape.png" alt="" class="position-absolute">
                </div>
                <div class="feature-head d-flex align-items-center position-relative">
                    <div class="feature-icon">
                        <i class="flaticon-headphones"></i>
                    </div>
                    <p>Hỗ trợ khách hàng</p>
                </div>
                <h5>Hỗ trợ trực tiếp 24/7</h5>
            </div>
        </div>
    </div>
</div>


<div class="searchbar-area ml-110">
    <div class="container-fluid">
        <form action="index.php?act=product" method="POST" class="main-searchbar-form">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4">
                    <div class="custom-select product-filter-options">
                        <select name="iddm" id="">
                            <option value="0" selected>Tất cả</option>
                            <?php
                            foreach ($dsdm as $dm) {
                                extract($dm);
                                echo '<option value="' . $id . '">' . $name . '</option>';
                            }
                            ?>
                             
                        </select>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="searchbar-input">
                        <input type="text" name="kyw" placeholder="Tìm kiếm sản phẩm">
                        <button  name="listok" type="submit">Search</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="banner-md-area ml-110">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="banner-md banner-md1 position-relative">
                    <div class="banner-img">
                        <img src="../src/assets/images/comming-soon-bg.png" alt="banner" class="img-fluid">
                    </div>
                    <div class="banner-md-content position-absolute">
                        <div class="banner-md-content-wrap">
                            <div class="banner-lavel">New Arrivals</div>
                            <h3 class="banner-title">
                                Áo nữ Sale 2021
                            </h3>
                            <div class="banner-btn">
                                <a href="product.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="banner-md banner-md2 position-relative">
                    <div class="banner-img">
                        <img src="../uploads/aonam3.jpg" alt="banner" class="img-fluid">
                    </div>
                    <div class="banner-md-content position-absolute text-end">
                        <div class="banner-md-content-wrap">
                            <span>Featured Product Shoes</span>
                            <h3 class="banner-title">
                                Ultimate Booster
                                Blows you
                            </h3>
                            <div class="banner-btn">
                                <a href="product.html">Shop Now</a>
                            </div>
                            <div class="discount-lavel">
                                <span> 15% <br>
                                    OFF</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="banner-md banner-md3 position-relative">
                    <div class="banner-img">
                        <img src="../uploads/aonam1.jpg" alt="banner" class="img-fluid">
                    </div>
                    <div class="banner-md-content position-absolute">
                        <div class="banner-md-content-wrap">
                            <div class="banner-lavel">New Arrivals</div>
                            <h3 class="banner-title">
                                Men’s Casul Summer 2021
                            </h3>
                            <div class="banner-btn">
                                <a href="product.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="top-product-wrapper ml-110 mt-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-25">
                <div class="section-head">
                    <h2 class="section-title">CÁC SẢN PHẨM HIỆN CÓ</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-3 col-xl-3 col-lg-4">
                <div class="nav flex-column nav-pills category-tabs" id="v-pills-tab2" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active category-tab" id="eg-pills-1" data-bs-toggle="pill" data-bs-target="#eg-pills-one" type="button" role="tab" aria-controls="eg-pills-one" aria-selected="true">SẢN PHẨM MỚI NHẤT</button>
                    <button class="nav-link category-tab" id="eg-pills-2" data-bs-toggle="pill" data-bs-target="#eg-pills-two" type="button" role="tab" aria-controls="eg-pills-two" aria-selected="false">TOP SẢN PHẨM YÊU THÍCH</button>
                    <button class="nav-link category-tab" id="eg-pills-3" data-bs-toggle="pill" data-bs-target="#eg-pills-three" type="button" role="tab" aria-controls="eg-pills-three" aria-selected="false">SẢN PHẨM ĐANG ĐƯỢC SALE</button>
                </div>
            </div>
            <div class="col-xxl-9 col-xl-9 col-lg-8">
                <div class="tab-content eg-tab-content" id="v-pills-tabContent2">
                    <div class="tab-pane fade show active eg-product-tab-pane" id="eg-pills-one" role="tabpanel" aria-labelledby="eg-pills-1">
                        <div class="row">
                            <?php foreach ($spnew as $sp) {
                                extract($sp);
                                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                                $hinh = $img_path . $image;
                                echo '<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 ">
                                    <div class="product-card-m d-flex align-items-center">
                                        <div class="product-img-m">
                                            <a href="' . $linksp . '"><img src="' . $hinh . '"
                                                    alt=""></a>
                                            <div class="product-cart-icon">
                                                <form action="index.php?act=addtocart" method="post">
                                                    <input type="hidden" name="id" value="' . $id . '">
                                                    <input type="hidden" name="name" value="' . $name . '">
                                                    <input type="hidden" name="image" value="' . $image . '">
                                                    <input type="hidden" name="price" value="' . $price . '">
                                                    <input type="hidden" name="discount" value="' . $discount . '">
                                                    <input type="submit" name="addtocart" value="ADD TO CART"></i>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-details-m">
                                            <a class="product-title-m" href="' . $linksp . '">' . $name . '</a>
                                            <ul class="d-flex product-rating-m">
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star"></i></li>
                                            </ul>
                                            <div class="product-price">
                                                <del class="old-price">' . $discount . '</del><ins class="new-price">' . $price . ' đ</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                            } ?>
                        </div>
                    </div>
                    <div class="tab-pane fade eg-product-tab-pane" id="eg-pills-two" role="tabpanel" aria-labelledby="eg-pills-2">
                        <div class="row">
                            <?php foreach ($dstop10 as $sp) {
                                extract($sp);
                                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                                $hinh = $img_path . $image;
                                echo ' <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 ">
                                <div class="product-card-xl">
                                    <div class="product-img-xl">
                                        <a href="' . $linksp . '"><img src="' . $hinh . '" alt=""
                                                class="img-fluid"></a>
                                        <div class="product-actions-xl">
                                            <a href="#"><i class="flaticon-heart"></i></a>
                                            <a href="' . $linksp . '"><i class="flaticon-search"></i></a>
                                            <form action="index.php?act=addtocart" method="post">
                                                <input type="hidden" name="id" value="' . $id . '">
                                                <input type="hidden" name="name" value="' . $name . '">
                                                <input type="hidden" name="image" value="' . $image . '">
                                                <input type="hidden" name="price" value="' . $price . '">
                                                <input type="hidden" name="discount" value="' . $discount . '">
                                                <input type="submit" name="addtocart" value="ADD TO CART"></i>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-content-xl text-center">
                                        <ul class="d-flex product-rating-xl">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                        </ul>
                                        <a href="' . $linksp . '" class="product-title">' . $name . '</a>
                                        <div class="product-price">
                                            <del class="old-price">' . $discount . '</del><ins class="new-price">' . $price . '</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                            } ?>

                        </div>
                    </div>
                    <div class="tab-pane fade eg-product-tab-pane" id="eg-pills-three" role="tabpanel" aria-labelledby="eg-pills-3">
                        <div class="row">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 ">
                                <div class="product-card-m d-flex align-items-center">
                                    <div class="product-img-m">
                                        <a href="product-details.html"><img src="assets/images/product/pm1.png" alt=""></a>
                                        <div class="product-cart-icon"><a href="cart.html"><i class="flaticon-shopping-cart"></i></a></div>
                                    </div>
                                    <div class="product-details-m">
                                        <a class="product-title-m" href="product-details.html">Men Casual Summer
                                            Sale</a>
                                        <ul class="d-flex product-rating-m">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                        </ul>
                                        <div class="product-price">
                                            <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="product-card-m d-flex align-items-center">
                                    <div class="product-img-m">
                                        <a href="product-details.html"><img src="assets/images/product/pm-2.png" alt=""></a>
                                        <div class="product-cart-icon"><a href="cart.html"><i class="flaticon-shopping-cart"></i></a></div>
                                    </div>
                                    <div class="product-details-m">
                                        <a class="product-title-m" href="product-details.html">Men Casual Summer
                                            Sale</a>
                                        <ul class="d-flex product-rating-m">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                        </ul>
                                        <div class="product-price">
                                            <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="product-card-m d-flex align-items-center">
                                    <div class="product-img-m">
                                        <a href="product-details.html"><img src="assets/images/product/pm-3.png" alt=""></a>
                                        <div class="product-cart-icon"><a href="cart.html"><i class="flaticon-shopping-cart"></i></a></div>
                                    </div>
                                    <div class="product-details-m">
                                        <a class="product-title-m" href="product-details.html">Men Casual Summer
                                            Sale</a>
                                        <ul class="d-flex product-rating-m">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                        </ul>
                                        <div class="product-price">
                                            <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="product-card-m d-flex align-items-center">
                                    <div class="product-img-m">
                                        <a href="product-details.html"><img src="assets/images/product/pm-4.png" alt=""></a>
                                        <div class="product-cart-icon"><a href="cart.html"><i class="flaticon-shopping-cart"></i></a></div>
                                    </div>
                                    <div class="product-details-m">
                                        <a class="product-title-m" href="product-details.html">Men Casual Summer
                                            Sale</a>
                                        <ul class="d-flex product-rating-m">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                        </ul>
                                        <div class="product-price">
                                            <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6 ">
                                <div class="product-card-m d-flex align-items-center">
                                    <div class="product-img-m">
                                        <a href="product-details.html"><img src="assets/images/product/pm-5.png" alt=""></a>
                                        <div class="product-cart-icon"><a href="cart.html"><i class="flaticon-shopping-cart"></i></a></div>
                                    </div>
                                    <div class="product-details-m">
                                        <a class="product-title-m" href="product-details.html">Men Casual Summer
                                            Sale</a>
                                        <ul class="d-flex product-rating-m">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                        </ul>
                                        <div class="product-price">
                                            <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="product-card-m d-flex align-items-center">
                                    <div class="product-img-m">
                                        <a href="product-details.html"><img src="assets/images/product/pm-6.png" alt=""></a>
                                        <div class="product-cart-icon"><a href="cart.html"><i class="flaticon-shopping-cart"></i></a></div>
                                    </div>
                                    <div class="product-details-m">
                                        <a class="product-title-m" href="product-details.html">Men Casual Summer
                                            Sale</a>
                                        <ul class="d-flex product-rating-m">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                        </ul>
                                        <div class="product-price">
                                            <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="product-card-m d-flex align-items-center">
                                    <div class="product-img-m">
                                        <a href="product-details.html"><img src="assets/images/product/pm-7.png" alt=""></a>
                                        <div class="product-cart-icon"><a href="cart.html"><i class="flaticon-shopping-cart"></i></a></div>
                                    </div>
                                    <div class="product-details-m">
                                        <a class="product-title-m" href="product-details.html">Men Casual Summer
                                            Sale</a>
                                        <ul class="d-flex product-rating-m">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                        </ul>
                                        <div class="product-price">
                                            <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="product-card-m d-flex align-items-center">
                                    <div class="product-img-m">
                                        <a href="product-details.html"><img src="assets/images/product/pm-8.png" alt=""></a>
                                        <div class="product-cart-icon"><a href="cart.html"><i class="flaticon-shopping-cart"></i></a></div>
                                    </div>
                                    <div class="product-details-m">
                                        <a class="product-title-m" href="product-details.html">Men Casual Summer
                                            Sale</a>
                                        <ul class="d-flex product-rating-m">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                        </ul>
                                        <div class="product-price">
                                            <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6 ">
                                <div class="product-card-m d-flex align-items-center">
                                    <div class="product-img-m">
                                        <a href="product-details.html"><img src="assets/images/product/pm-9.png" alt=""></a>
                                        <div class="product-cart-icon"><a href="cart.html"><i class="flaticon-shopping-cart"></i></a></div>
                                    </div>
                                    <div class="product-details-m">
                                        <a class="product-title-m" href="product-details.html">Men Casual Summer
                                            Sale</a>
                                        <ul class="d-flex product-rating-m">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                        </ul>
                                        <div class="product-price">
                                            <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="product-card-m d-flex align-items-center">
                                    <div class="product-img-m">
                                        <a href="product-details.html"><img src="assets/images/product/pm-10.png" alt=""></a>
                                        <div class="product-cart-icon"><a href="cart.html"><i class="flaticon-shopping-cart"></i></a></div>
                                    </div>
                                    <div class="product-details-m">
                                        <a class="product-title-m" href="product-details.html">Men Casual Summer
                                            Sale</a>
                                        <ul class="d-flex product-rating-m">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                        </ul>
                                        <div class="product-price">
                                            <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="product-card-m d-flex align-items-center">
                                    <div class="product-img-m">
                                        <a href="product-details.html"><img src="assets/images/product/pm-11.png" alt=""></a>
                                        <div class="product-cart-icon"><a href="cart.html"><i class="flaticon-shopping-cart"></i></a></div>
                                    </div>
                                    <div class="product-details-m">
                                        <a class="product-title-m" href="product-details.html">Men Casual Summer
                                            Sale</a>
                                        <ul class="d-flex product-rating-m">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                        </ul>
                                        <div class="product-price">
                                            <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="product-card-m d-flex align-items-center">
                                    <div class="product-img-m">
                                        <a href="product-details.html"><img src="assets/images/product/pm1.png" alt=""></a>
                                        <div class="product-cart-icon"><a href="cart.html"><i class="flaticon-shopping-cart"></i></a></div>
                                    </div>
                                    <div class="product-details-m">
                                        <a class="product-title-m" href="product-details.html">Men Casual Summer
                                            Sale</a>
                                        <ul class="d-flex product-rating-m">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                        </ul>
                                        <div class="product-price">
                                            <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<div class="newslatter-area ml-110 mt-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="newslatter-wrap text-center">
                    <h5>Kết nối với shirt_fs</h5>
                    <h2 class="newslatter-title">Tham Gia Bản Tin Của Chúng Tôi</h2>
                    <p>Này bạn, chỉ đăng ký thôi, Nhận miễn phí chiếc áo phông phiên bản giới hạn này!</p>
                    <form action="#" method="POST">
                        <div class="newslatter-form">
                            <input type="text" placeholder="Type Your Email">
                            <button type="submit">Send <i class="bi bi-envelope-fill"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>