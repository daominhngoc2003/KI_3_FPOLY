<?php
if (is_array($sp)) {
    extract($sp);
}
$hinhpath = "../uploads/" . $image;
if (is_file($hinhpath)) {
    $image = "<img src='" . $hinhpath . "' height='80'>";
} else {
    $image = "no photo";
}
?>
<!--  Phàn content -->
<div class="main">
    <div class="main-content dashboard">
        <form action="./index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Danh mục</label>
                <select name="iddm" class="form-select" aria-label="Default select example">
                    <option value="0" selected>Tất cả</option>
                    <?php foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        if ($iddm == $id) $s = "selected";
                        else $s = "";
                        echo ' <option value="' . $id . '" ' . $s . '>' . $name . '</option>';
                    } ?>
                </select>
            </div>
            <!-- tên sản phẩm -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
                <input type="text" name="name" class="form-control" value="<?= $sp['name'] ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <!-- Giá -->
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Đơn giá</label>
                <input type="text" name="price" class="form-control" value="<?= $sp['price'] ?>" id="exampleInputPassword1">
            </div>
            <!-- Giảm giá -->
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Giảm giá</label>
                <input type="text" name="discount" value="<?= $sp['discount'] ?>" class="form-control" id="exampleInputPassword1">
            </div>
            <!-- image -->
            <div class="mb-3 ">
                <input type="hidden" name="image" value="<?= $sp['image'] ?>">
                <label for="exampleInputPassword1" class="form-label">Hình ảnh</label>
                <input type="file" name="image" class="form-control" id="inputGroupFile02">
                <?= $sp['image'] ?>
            </div>
            <!-- ngày nhập hàng -->
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Ngày nhập</label>
                <input type="date" name="date" class="form-control" value="<?= $sp['date'] ?>" id="exampleInputPassword1">
            </div>
            <!-- Mô tả ngắn-->
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Mô tả ngắn</label>
                <textarea class="form-control" name="mota_ngan" id="exampleFormControlTextarea1" rows="3"><?= $sp['mota_ngan'] ?></textarea>
            </div>
            <!-- Mô tả dài-->
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Mô tả dài</label>
                <textarea class="form-control" name="mota_dai" id="exampleFormControlTextarea1" rows="3"><?= $sp['mota_dai'] ?></textarea>
            </div>
            <br>
            <!-- SIZE -->
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Size</label>
                <input type="text" name="size_product" class="form-control" value="<?= $size_product ?>" id="exampleInputPassword1">
            </div>
            <!-- Màu sắc -->
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Color</label>
                <input type="text" name="color_product" class="form-control" value="<?= $color_product ?>" id="exampleInputPassword1">
            </div>
            <br>
            <!-- Button -->
            <input type="hidden" name="id" value="<?= $sp['id'] ?>">
            <input type="submit" class="btn btn-primary" name="capnhat" value="Cập nhật"></input>
            <a href="./index.php?act=updatesp"><input type="reset" class="btn btn-secondary" value="Nhập lại"></input></a>
            <a href="./index.php?act=listsp"><input type="button" class="btn btn-success" value="Danh sách"></input></a> <br>
            <?php if (isset($thongbao) && ($thongbao != "")) echo $thongbao; ?>
        </form>
    </div>
</div>