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
                        <h2 class="page-title">Sản phẩm chi tiết</h2>
                        <ul class="page-switcher d-flex ">
                            <li><a href="../../index.php">Trang chủ</a> <i class="flaticon-arrow-pointing-to-right"></i></li>
                            <li>Trang mô tả sản phẩm</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="product-details-area mt-100 ml-110">
    <div class="container">
        <form action="index.php?act=addtocart" method="post">
            <div class="product-details-wrapper">
                <div class="row">
                    <?php extract($onesp); ?>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-8">
                        <div class="product-switcher-wrap">

                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <div class="pd-preview-img">
                                        <img src="uploads/<?= $onesp['image'] ?>" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    <div class="pd-preview-img">
                                        <img src="./src/assets/images/product/pd-xl3.png" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                    <div class="pd-preview-img">
                                        <img src="./src/assets/images/product/pd-xl14.png" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                    <div class="pd-preview-img">
                                        <img src="./src/assets/images/product/pd-xl1.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="product-details-wrap">
                            <div class="pd-top">
                                <ul class="product-rating d-flex align-items-center">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star"></i></li>
                                    <li class="count-review">(<span>23</span> Review)</li>
                                </ul>
                                <?php ?>
                                <h3 class="pd-title"><?php echo $name ?></h3>
                                <h5 class="pd-price"><?php echo $price ?></h5><del class="pd-price"><?php echo $discount ?></del>

                            </div>
                            <div class="pd-quick-discription">
                                <ul>
                                    <li class="d-flex align-items-center">
                                        <span>Color :</span>
                                        <div class="color-option d-flex align-items-center">
                                            <input type="radio" name="color" id="color1" value="1" checked>
                                            <label for="color1"><span class="c1 p-color"></span></label>
                                            <input type="radio" name="color" id="color2" value="2">
                                            <label for="color2"><span class="c2 p-color"></span></label>
                                            <input type="radio" name="color" id="color4" value="3">
                                            <label for="color4"><span class="c4 p-color"></span></label>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <span>Size :</span>
                                        <div class="size-option d-flex align-items-center">
                                            <input type="radio" name="size" id="size1" value="1" checked>
                                            <label for="size1">
                                                <span class="p-size">M</span>
                                            </label>
                                            <input type="radio" name="size" id="size2" value="2">
                                            <label for="size2">
                                                <span class="p-size">L</span>
                                            </label>
                                            <input type="radio" name="size" id="size3" value="3">
                                            <label for="size3">
                                                <span class="p-size">XL</span>
                                            </label>
                                            <input type="radio" name="size" id="size4" value="4">
                                            <label for="size4">
                                                <span class="p-size">XXL</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center pd-cart-btns">
                                        <div class="quantity">
                                            <input type="number" min="1" max="90" step="10" value="1">
                                        </div>
                                        <div class="product-cart-icon ">
                                            <form action="index.php?act=addtocart" method="post">
                                                <input type="hidden" name="id" value="<?= $id ?>">
                                                <input type="hidden" name="name" value="<?= $name ?>">
                                                <input type="hidden" name="image" value="<?= $image ?>">
                                                <input type="hidden" name="price" value="<?= $price ?>">
                                                <input type="hidden" name="discount" value="<?= $discount ?>">
                                                <input type="hidden" name="size_product" value="<?= $size_product ?>">
                                                <input type="hidden" name="color_product" value="<?= $color_product ?>">
                                                <input type="submit" class="pd-add-cart" name="addtocart" value="THÊM VÀO GIỎ"></i>
                                            </form>
                                        </div>
                                    </li>
                                    <p class="pd-small-info"><strong>Thông tin sản phẩm-</strong> <?= $mota_ngan ?> </p>
                                    <li class="pd-type">Product Type: <span>Woman Winter Dress</span></li>
                                    <li class="pd-type">Catagories: <span> Clothing, Hoodies</span></li>
                                    <li class="pd-type">Availabile: <span>89</span> </li>
                                    <li class="pd-type">Material : <span>100% Cotton, Jens</span> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-discription-wrapper mt-100">
                <div class="row">
                    <div class="col-xxl-3 col-xl-3">
                        <div class="nav flex-column nav-pills discription-bar" id="v-pills-tab2" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" id="pd-discription3" data-bs-toggle="pill" data-bs-target="#pd-discription-pill3" role="tab" aria-controls="pd-discription-pill3">
                                Thông tin sản phẩm
                            </button>
                            <button class="nav-link" id="pd-discription2" data-bs-toggle="pill" data-bs-target="#pd-discription-pill2" role="tab" aria-controls="pd-discription-pill2">Thông tin thêm</button>
                            <button class="nav-link" id="pd-discription1" data-bs-toggle="pill" data-bs-target="#pd-discription-pill1" role="tab" aria-controls="pd-discription-pill1">Đánh giá</button>
                        </div>
                    </div>
                    <div class="col-xxl-9 col-xl-9">
                        <div class="tab-content discribtion-tab-content" id="v-pills-tabContent2">
                            <div class="tab-pane fade show active" id="pd-discription-pill3" role="tabpanel" aria-labelledby="pd-discription3">
                                <div class="discription-texts">
                                    <p><?= $mota_dai ?></p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pd-discription-pill2" role="tabpanel" aria-labelledby="pd-discription2">
                                <div class="additional-discription">
                                    <ul>
                                        <li>
                                            <h5 class="additition-name">Color</h5>
                                            <div class="additition-variant"><span>:</span>Red, Green, Blue, Yellow,
                                                pink, </div>
                                        </li>
                                        <li>
                                            <h5 class="additition-name">Size</h5>
                                            <div class="additition-variant"><span>:</span>S, M, L, Xl, XXL</div>
                                        </li>
                                        <li>
                                            <h5 class="additition-name">Material</h5>
                                            <div class="additition-variant"><span>:</span>100% Cotton, Jens </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade " id="pd-discription-pill1" role="tabpanel" aria-labelledby="pd-discription1">
                                <div class="discription-review">
                                    <div class="clients-review-cards">
                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                                        <script>
                                            $(document).ready(function() {
                                                $("#binhluan").load("view/binhluan/binhluan-form.php", {
                                                    idsp: <?= $id ?>
                                                });
                                            });
                                        </script>
                                        <div class="row" id="binhluan">

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-discription-wrapper mt-100">
                <div class="row">
                    <div class="col-xxl-3 col-xl-3">
                        <h2>Sản phẩm cùng loại</h2>
                    </div>
                    <div class="col-xxl-3 col-xl-2">
                        <?php foreach ($sp_cungloai as $sp) {
                            extract($sp);
                            $hinh = $img_path . $image;
                            $linksp = "index.php?act=sanphamct&idsp=" . $id;
                            echo '<div class="co-lg-12">
                            <div class="product-card-m d-flex align-content-center">
                                <div class="product-img-m">
                                    <a href="' . $linksp . '"><img src="' . $hinh . '" alt=""></a>
                                    <div class="product-cart-icon"><a href="#"><i class="flaticon-shopping-cart"></i></a></div>
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
                                        <del class="old-price">' . $discount . '</del><ins class="new-price">' . $price . '</ins>
                                    </div>
                                </div>
                            </div>
                        </div>';
                        } ?>
                    </div>
                </div>
            </div>
        </form>
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