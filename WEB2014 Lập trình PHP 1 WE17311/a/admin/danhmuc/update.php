<?php
if (is_array($dm)) {
    extract($dm);
}
?>
<!--   Phần content -->
<div class="main">
    <div class="main-content dashboard">
        <form action="./index.php?act=updatedm" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mã loại</label>
                <input type="text" class="form-control" value="<?= $id ?>" name="id" disabled>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Tên loại</label>
                <input type="text" name="name" value="<?= $name ?>" class="form-control">
            </div>
            <br>
            <input type="hidden" class="form-control" name="id" value="<?= $id ?>">
            <input type="submit" name="capnhat" class="btn btn-primary" value="Cập nhật"></input>
            <input type="index.php?act=updatedm" class="btn btn-secondary" value="Nhập lại"></input>
            <a href="./index.php?act=listdm" class="btn btn-success">Danh sách</a>
            <br>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
        </form>
    </div>
</div>