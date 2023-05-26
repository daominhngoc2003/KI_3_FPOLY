<div class="main">
    <div class="main-content dashboard">
        <form action="./index.php?act=listbl" method="post">
            <table class=" table">
                <tr class="table-primary">
                    <th></th>
                    <th>ID BÌNH LUẬN</th>
                    <th>TÊN ĐĂNG NHẬP</th>
                    <th>HỌ VÀ TÊN</th>
                    <th>MỘI DUNG</th>
                    <th>MÃ NGƯỜI DÙNG</th>
                    <th>MÃ SẢN PHẨM</th>
                    <th>NGÀY BÌNH LUẬN</th>
                    <th></th>
                </tr>
                <?php foreach ($listbinhluan as $bl) {
                   extract($bl);
                   $xoabl = "index.php?act=xoabl&id=".$id;
                ?>
                <tr class="table-success">
                    <td><input type="checkbox"></td>
                    <td><?= $id ?></td>
                    <td><?= $username ?></td>
                    <td><?= $full_name ?></td>
                    <td><?= $content ?></td>
                    <td><?= $iduser ?></td>
                    <td><?= $idsp ?></td>
                    <td><?= $ngaybinhluan ?></td>
                    <td>
                        <a href=""><input class="btn btn-success" type="button" name="sua" value="Sửa"></a>
                        <a href="<?= $xoabl ?>"><input class="btn btn-warning" type="button" value="Xóa"></a>
                    </td>
                </tr>
                <?php  }?>
            </table>
            <input type="submit" class="btn btn-success" value="Chọn tất cả"></input>
            <input type="submit" class="btn btn-danger" value="Bỏ chọn tất cả"></input>
            <input type="submit" class="btn btn-warning" value="Xóa các mục chọn"></input>
        </form>
    </div>
</div>