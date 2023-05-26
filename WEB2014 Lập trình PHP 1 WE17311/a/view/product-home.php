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
        <form action="#" method="POST" class="main-searchbar-form">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4">
                    <div class="custom-select product-filter-options">
                        <select>
                            <option value="0">Select your choose</option>
                            <option value="1"> Men’s Collection</option>
                            <option value="1">Women Collection</option>
                            <option value="2">Kids Collection</option>
                            <option value="3">Summer Collection</option>
                            <option value="3">Winter Collection</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="searchbar-input">
                        <input type="text" placeholder="Search Your Products">
                        <button type="submit">SEARCH</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>



<div class="top-product-wrapper ml-110 mt-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-25">
                <div class="section-head">
                    <h2 class="section-title">Sản phẩm mới nhất</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-3 col-xl-3 col-lg-4">
                <div class="nav flex-column nav-pills category-tabs" id="v-pills-tab2" role="tablist" aria-orientation="vertical">
                    <ul>
                        <?php
                        foreach ($dsdm as $dm) {
                            extract($dm);
                            $linkdm = "index.php?act=product&id=" . $id;
                            echo '<li><a href="' . $linkdm . '">' . $name . '</a></li>';
                        }
                        ?>

                    </ul>
                    <!-- <button class="nav-link active category-tab" id="eg-pills-1" data-bs-toggle="pill" data-bs-target="#eg-pills-one" type="button" role="tab" aria-controls="eg-pills-one" aria-selected="true">Tất cả bộ sưu tập</button>
                    <button class="nav-link category-tab" id="eg-pills-2" data-bs-toggle="pill" data-bs-target="#eg-pills-two" type="button" role="tab" aria-controls="eg-pills-two" aria-selected="false">Bộ sưu tập nam</button>
                    <button class="nav-link category-tab" id="eg-pills-3" data-bs-toggle="pill" data-bs-target="#eg-pills-three" type="button" role="tab" aria-controls="eg-pills-three" aria-selected="false">Bộ sưu tập nữ</button>
                    <button class="nav-link category-tab" id="eg-pills-4" data-bs-toggle="pill" data-bs-target="#eg-pills-four" type="button" role="tab" aria-controls="eg-pills-four" aria-selected="false">Bộ sưu tập trẻ con</button>
                    <button class="nav-link category-tab" id="eg-pills-5" data-bs-toggle="pill" data-bs-target="#eg-pills-five" type="button" role="tab" aria-controls="eg-pills-five" aria-selected="false">Bộ sưu tập mùa đông</button>
                    <button class="nav-link category-tab" id="eg-pills-6" data-bs-toggle="pill" data-bs-target="#eg-pills-six" type="button" role="tab" aria-controls="eg-pills-six" aria-selected="false">Bộ sưu tập mùa hè</button> -->
                </div>
            </div>
            <div class="col-xxl-9 col-xl-9 col-lg-8">
                <div class="tab-content eg-tab-content" id="v-pills-tabContent2">
                    <div class="tab-pane fade show active eg-product-tab-pane" id="eg-pills-one" role="tabpanel" aria-labelledby="eg-pills-1">
                        <div class="row">
                            <?php
                            $i = 0;
                            foreach ($dssp as $sp) {
                                extract($sp);
                                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                                $hinh =  $img_path . $image;
                                if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)) {
                                    $mr = "";
                                } else {
                                    $mr = "mr";
                                }
                                echo '<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6 ' . $mr . ' ">
                        <div class="product-card-m d-flex align-items-center">
                            <div class="product-img-m">
                                <a href="' . $linksp . '"><img src="' . $hinh . '" alt=""></a>
                                <div class="product-cart-icon"><a href="index.php?act=cart"><i class="flaticon-shopping-cart"></i></a></div>
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
                                    <del class="old-price"></del><ins class="new-price">' . $price . ' đ</ins>
                                </div>
                            </div>
                        </div>
                    </div>';
                                $i += 1;
                            }
                            ?>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6 ">
                                <div class="product-card-m d-flex align-items-center">
                                    <div class="product-img-m">
                                        <a href="index.php?act=sanphamct"><img src="./src/assets/images/product/pm1.png" alt=""></a>
                                        <div class="product-cart-icon"><a href="index.php?act=cart"><i class="flaticon-shopping-cart"></i></a></div>
                                    </div>
                                    <div class="product-details-m">
                                        <a class="product-title-m" href="index.php?act=sanphamct">Something Navy Jens
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


<div class="tranding-product-wrapper ml-110 mt-70 position-relative">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-50">
                <div class="section-head">
                    <h2 class="section-title">Top sản phẩm yêu thích</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="swiper-tranding-container overflow-hidden pb-30">

                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="product-card-xl">
                            <div class="product-img-xl">
                                <a href="index.php?act=sanphamct"><img src="./src/assets/images/product/pxl-1.png" alt="" class="img-fluid"></a>
                                <div class="product-actions-xl">
                                    <a href="#"><i class="flaticon-heart"></i></a>
                                    <a href="index.php?act=sanphamct"><i class="flaticon-search"></i></a>
                                    <a href="index.php?act=cart"><i class="flaticon-shopping-cart"></i></a>
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
                                <a href="index.php?act=sanphamct" class="product-title">Woman Dirty Casual Dress</a>
                                <div class="product-price">
                                    <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-card-xl">
                            <div class="product-img-xl">
                                <a href="index.php?act=sanphamct"><img src="./src/assets/images/product/pxl-2.png" alt="" class="img-fluid"></a>
                                <div class="product-actions-xl">
                                    <a href="#"><i class="flaticon-heart"></i></a>
                                    <a href="index.php?act=sanphamct"><i class="flaticon-search"></i></a>
                                    <a href="index.php?act=cart"><i class="flaticon-shopping-cart"></i></a>
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
                                <a href="index.php?act=sanphamct" class="product-title">Lined Zipper Hoodie</a>
                                <div class="product-price">
                                    <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-card-xl">
                            <div class="product-img-xl">
                                <a href="index.php?act=sanphamct"><img src="./src/assets/images/product/pxl-3.png" alt="" class="img-fluid"></a>
                                <div class="product-actions-xl">
                                    <a href="#"><i class="flaticon-heart"></i></a>
                                    <a href="index.php?act=sanphamct"><i class="flaticon-search"></i></a>
                                    <a href="index.php?act=cart"><i class="flaticon-shopping-cart"></i></a>
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
                                <a href="index.php?act=sanphamct" class="product-title">Super Kids Collection</a>
                                <div class="product-price">
                                    <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-card-xl">
                            <div class="product-img-xl">
                                <a href="index.php?act=sanphamct"><img src="./src/assets/images/product/pxl-4.png" alt="" class="img-fluid"></a>
                                <div class="product-actions-xl">
                                    <a href="#"><i class="flaticon-heart"></i></a>
                                    <a href="index.php?act=sanphamct"><i class="flaticon-search"></i></a>
                                    <a href="index.php?act=cart"><i class="flaticon-shopping-cart"></i></a>
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
                                <a href="index.php?act=sanphamct" class="product-title">Women Mannequin Tops</a>
                                <div class="product-price">
                                    <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-card-xl">
                            <div class="product-img-xl">
                                <a href="index.php?act=sanphamct"><img src="./src/assets/images/product/pxl-7.png" alt="" class="img-fluid"></a>
                                <div class="product-actions-xl">
                                    <a href="#"><i class="flaticon-heart"></i></a>
                                    <a href="index.php?act=sanphamct"><i class="flaticon-search"></i></a>
                                    <a href="index.php?act=cart"><i class="flaticon-shopping-cart"></i></a>
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
                                <a href="index.php?act=sanphamct" class="product-title">Ghost Mannequin Pant</a>
                                <div class="product-price">
                                    <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-card-xl">
                            <div class="product-img-xl">
                                <a href="index.php?act=sanphamct"><img src="./src/assets/images/product/pxl-6.png" alt="" class="img-fluid"></a>
                                <div class="product-actions-xl">
                                    <a href="#"><i class="flaticon-heart"></i></a>
                                    <a href="index.php?act=sanphamct"><i class="flaticon-search"></i></a>
                                    <a href="index.php?act=cart"><i class="flaticon-shopping-cart"></i></a>
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
                                <a href="index.php?act=sanphamct" class="product-title">Women Renta Winter Coat </a>
                                <div class="product-price">
                                    <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="swiper-button-next"><i class="flaticon-arrow-pointing-to-right"></i></div>
                <div class="swiper-button-prev"><i class="flaticon-arrow-pointing-to-left"></i></div>

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