<div class="breadcrumb-area ml-110">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-bg d-flex justify-content-center align-items-center">
                    <div class="breadcrumb-shape1 position-absolute top-0 end-0">
                        <img src="./src/assets/images/shapes/bs-right.png" alt="">
                    </div>
                    <div class="breadcrumb-shape2 position-absolute bottom-0 start-0">
                        <img src="./src/assets/images/shapes/bs-left.png" alt="">
                    </div>
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Tất cả sản phẩm của chúng tôi</h2>
                        <ul class="page-switcher d-flex ">
                            <li><a href="../index.php">Trang chủ</a> <i class="flaticon-arrow-pointing-to-right"></i></li>
                            <li>Products</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="product-area ml-110 mt-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-3 col-xl-4 col-lg-4">
                <div class="product-sidebar">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sidebar-searchbar-wrap">
                                <form action="index.php?act=product" method="POST" class="sidebar-searchbar-form">
                                    <input type="text" name="kyw" id="sidebar-search-input" placeholder="Tìm kiếm sản phẩm">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="sidebar-category">
                                <h5 class="sb-title">DANH MỤC</h5>
                                <div class="sb-category-dropdown">
                                    <div class="accordion" id="accordionExample">
                                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                            <h2 class="accordion-header" id="headingOne">
                                                <?php foreach ($dsdm as $dm) {
                                                    extract($dm);
                                                    $linksp = "index.php?act=product&iddm=" . $id;
                                                    echo ' <div class="accordion-item">
                                                    <li><a  class="accordion-button" href="' . $linksp . '" >' . $name . ' </a></li>
                                               ';
                                                } ?>
                                            </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 ">
                            <div class="sb-pricing-range">
                                <h5 class="sb-title">PRICE</h5>
                                <form action="#" method="POST">
                                    <div class="price-range-slider">
                                        <div id="slider-range" class="range-bar"></div>
                                        <div class="pricing-range-buttom d-flex align-items-center justify-content-between">
                                            <div class="price-filter-btn">
                                                <button type="submit">Filter</button>
                                            </div>
                                            <div class="pricing-value">
                                                <span>Price : </span> <input type="text" id="amount" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="top-sell-cards">
                                <h5 class="sb-title">TOP SẢN PHẨM YÊU THÍCH</h5>
                                <div class="row">
                                    <?php foreach ($dstop10 as $sp) {
                                        extract($sp);
                                        $linksp = "index.php?act=sanphamct&idsp=" . $id;
                                        $hinh = $img_path .$image;
                                        echo '<div class="co-lg-12">
                                        <div class="product-card-m d-flex align-content-center">
                                            <div class="product-img-m">
                                                <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a>
                                                <div class="product-cart-icon"><a href="#"><i class="flaticon-shopping-cart"></i></a></div>
                                            </div>
                                            <div class="product-details-m">
                                                <a class="product-title-m" href="'.$linksp.'">'.$name.'</a>
                                                <ul class="d-flex product-rating-m">
                                                    <li><i class="bi bi-star-fill"></i></li>
                                                    <li><i class="bi bi-star-fill"></i></li>
                                                    <li><i class="bi bi-star-fill"></i></li>
                                                    <li><i class="bi bi-star-fill"></i></li>
                                                    <li><i class="bi bi-star"></i></li>
                                                </ul>
                                                <div class="product-price">
                                                    <del class="old-price">' . $discount . '</del><ins class="new-price">' . $price . '</ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                    } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="sb-tags">
                                <h5 class="sb-title">PRODUCT TAG</h5>
                                <ul class="sb-tag-list">
                                    <li><a href="#">Casual</a></li>
                                    <li><a href="#">Kurtas & Kurtis</a></li>
                                    <li><a href="#">Summer</a></li>
                                    <li><a href="#">Spring</a></li>
                                    <li><a href="#">Winter</a></li>
                                    <li><a href="#">Baby</a></li>
                                    <li><a href="#">Man</a></li>
                                    <li><a href="#">Coot</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-sidebar-banner">
                    <a href="#"><img src="./src/assets/images/banner/sb-banner1.png" alt=""></a>
                </div>
            </div>
            <div class="col-xxl-9 col-xl-8 col-lg-8">
                <div class="product-sorting d-flex justify-content-between align-items-center">
                    <div class="show-text"><span>Hiện có  <?php echo count($dssp) ?> Sản phẩm</span></div>
                    <div class="category-sort">
                        <select name="category-sort" id="category-sort">
                            <option selected>Default Soprting</option>
                            <option value="1">Sort by Size</option>
                            <option value="2">Sort by Price</option>
                            <option value="3">Sort by Color</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($dssp as $sp) {
                        extract($sp);
                        $linksp = "index.php?act=sanphamct&idsp=" . $id;
                        $hinh = $img_path . $image;
                        echo '<div class="col-xxl-3 col-xl-4 col-lg-4 col-sm-4">
                            <div class="product-card-l">
                                <div class="product-img">
                                    <a href="'.$linksp.'">
                                        <img src="' . $hinh . '" alt="">
                                        <img src="./src/assets/images/product/p-dbl2.png" alt="" class="hover-img">
                                    </a>
                                    <div class="product-lavels">
                                    </div>
                                    <div class="product-actions">
                                        <a href="#"><i class="flaticon-heart"></i></a>
                                        <a href="'.$linksp.'"><i class="flaticon-search"></i></a>
                                        <div class="product-cart-icon">
                                                <form action="index.php?act=addtocart" method="post">
                                                    <input type="hidden" name="id" value="' . $id . '">
                                                    <input type="hidden" name="name" value="' . $name . '">
                                                    <input type="hidden" name="image" value="' . $image . '">
                                                    <input type="hidden" name="price" value="' . $price . '">
                                                    <input type="hidden" name="discount" value="' . $discount . '">
                                                    <input type="submit" name="addtocart" value="CART"></i>
                                                </form>
                                            </div>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <ul class="d-flex product-rating">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star"></i></li>
                                        <li>(<span>8</span> Review)</li>
                                    </ul>
                                    <h3 class="product-title"><a href="'.$linksp.'">' . $name . '</a>
                                    </h3>
                                    <div class="product-price">
                                        <del class="old-price">' . $discount . '</del><ins class="new-price">' . $price . '</ins>
                                    </div>
                                </div>
                            </div>
                            </div>';
                    } ?>



                    <div class="col-lg-12 mt-50">
                        <div class="custom-pagination d-flex justify-content-center">
                            <ul class="d-flex pagination-links">
                                <li><a href="#" class="has-arrow"><i class="flaticon-arrow-pointing-to-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#" class="has-arrow"><i class="flaticon-arrow-pointing-to-right"></i></a></li>
                            </ul>
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
                    <h5>Connect To EG</h5>
                    <h2 class="newslatter-title">Join Our Newsletter</h2>
                    <p>Hey you, sign up it only, Get this limited-edition T-shirt Free!</p>
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