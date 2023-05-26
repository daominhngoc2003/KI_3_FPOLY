<!--  Phàn content -->
<div class="main">
    <div class="main-content dashboard">
        <?php if (is_array($bill)) {
            extract($bill);
        } ?>
        <form action="index.php?act=updatebill" method="post" enctype="multipart/form-data">
            <!-- Trạng thái -->
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Vai trò: <strong> <?php if ($bill['status'] == 0) {
                                                                                    echo "Đơn hàng mới";
                                                                                } else if ($bill['status'] == 1) {
                                                                                    echo "Đang xử lý";
                                                                                } else if ($bill['status'] == 2) {
                                                                                    echo "Đang giao hàng";
                                                                                } else {
                                                                                    echo "Giao hàng thành công";
                                                                                } ?></strong></label> <br>
                <select name="role" id="">
                    <?php $arr = array('0' => "Đơn hàng mới", '1' => "Đang xử lý", '2' => "Đang giao hàng", '3' => "Giao hàng thành công"); ?>
                    <?php foreach ($arr as $key => $value) { ?>
                        <option value="<?= $key ?>" <?= $key == $role ? 'selected' : '' ?>><?= $value ?></option>
                    <?php } ?>
                </select>
            </div>
            <br>
            <!-- Button -->
            <input type="hidden" name="id" value="<?= $id ?>">
            <input type="submit" class="btn btn-primary" name="updatebill" value="Cập nhật"></input>
            <a href="./index.php?act=listbill"><input type="button" class="btn btn-success" value="Danh sách"></input></a> <br>
            <?php if (isset($thongbao) && ($thongbao != "")) echo $thongbao;  ?>
        </form>
    </div>
</div>