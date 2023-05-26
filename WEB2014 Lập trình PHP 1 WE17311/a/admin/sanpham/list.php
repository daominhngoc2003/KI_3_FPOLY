<!--   Phần content -->
<div class="main">
    <div class="main-content dashboard">
        <form action="./index.php?act=listsp" method="post">
            <input type="text" name="kyw">
            <select name="iddm" id="">
                <option value="0" selected>Tất cả</option>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="<?= $id ?>"><?= $name ?></option>';
                }
                ?>
            </select>
            <input type="submit" name="listok" value="Search">
            <table class=" table">
                <tr class="table-primary">
                    <th></th>
                    <th>Mã loại</th>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh</th>
                    <th>Giảm giá</th>
                    <th>Giá</th>
                    <th>Mô tả ngắn</th>
                    <th>Mô tả dài</th>
                    <th>Ngày nhập hàng</th>
                    <th>Số lượt xem</th>
                    <th>Size</th>
                    <th>Color</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasp = "index.php?act=suasp&id=" . $id;
                    $xoasp = "index.php?act=xoasp&id=" . $id;
                    $hinhpath = "../uploads/" . $image;
                    if (is_file($hinhpath)) {
                        $image = "<img src='" . $hinhpath . "' height='80'>";
                    } else {
                        $image = "no photo";
                    }
                ?>
                    <tr class="table-success">
                        <td><input type="checkbox"></td>
                        <td><?= $id ?></td>
                        <td><?= $name ?></td>
                        <td><?= $image ?></td>
                        <td><?= $discount ?></td>
                        <td><?= $price ?></td>
                        <td><?= $mota_ngan ?></td>
                        <td><?= $mota_dai ?></td>
                        <td><?= $date ?></td>
                        <td><?= $view ?></td>
                        <td><?php if ($size_product == 1) { echo "M";
                                                                                                } else if($size_product == 2){
                                                                                                    echo "L";
                                                                                                } else if($size_product == 3){
                                                                                                        echo "XL";
                                                                                                }  else if($size_product == 4){
                                                                                                    echo "XXL";
                                                                                                } ?></td>
                        <td><?php if ($color_product == 1) {
                                                                                                    echo "Màu tím";
                                                                                                } else if($color_product == 2) {
                                                                                                    echo "Màu xanh";
                                                                                                } else if($color_product == 3) {
                                                                                                    echo "Màu đỏ";
                                                                                                }?></td>
                        <td>
                            <a href="<?= $suasp ?>"><input class="btn btn-success" type="button" name="sua" value="Sửa"></a>
                            <a onclick="return confirm(' Bạn có chắc chắn muốn xóa sản phẩm này')" href="<?= $xoasp ?>"><input class="btn btn-warning" type="button" name="delete" value="Xóa"></a>
                        </td>
                    </tr>
                <?php } ?>

            </table>
            <input type="submit" class="btn btn-success" value="Chọn tất cả"></input>
            <input type="submit" class="btn btn-danger" value="Bỏ chọn tất cả"></input>
            <input type="submit" class="btn btn-warning" value="Xóa các mục chọn"></input>
            <a href="./index.php?act=addsp"><input type="button" class="btn btn-info" value="Nhập lại"></input></a>
        </form>
    </div>
</div>