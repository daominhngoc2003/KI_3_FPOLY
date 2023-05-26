<div class="main">
    <div class="main-content dashboard">
        <form action="./index.php?act=listbill" method="post">
            <table class=" table">
                <tr class="table-primary">
                    <th></th>
                    <th>Iduser</th>
                    <th>Thông tin người đặt</th>
                    <th>Phương thức thanh toán</th>
                    <th>Ngày đặt hàng</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                    <th></th>
                </tr>
                <?php foreach ($listbill as $bill) {
                    extract($bill);
                    $xoabill = "index.php?act=xoabill&id=".$id;
                    $suabill = "index.php?act=suabill&id=".$id;
                    $ptttt= "if($pttt==1)"
                ?>
                <tr class="table-success">
                    <td><input type="checkbox"></td>
                    <td><?= $iduser ?></td>
                    <td><?= $full_name?><br> <?= $username?><br><?= $address?><br><?= $phone?><br><?= $email?></td>
                    <td><?php if ($pttt == 1) {
                            echo "Thanh toán khi nhận hàng";
                        } else if ($pttt == 2) {
                            echo "Thanh toán bằng chuyển khoản";
                        } else if ($pttt == 3) {
                            echo "Thanh toán online";
                        } else {
                            echo "Không tìm thấy phương thức thanh toán";
                        }?></td>
                    <td><?=$ngaydathang?></td>
                    <td><?=$tongdonhang?></td>
                    <td><?php if ($bill['status'] == 0) {
                                                                                    echo "Đơn hàng mới";
                                                                                } elseif ($bill['status'] == 1) {
                                                                                    echo "Đang xử lý";
                                                                                } elseif ($bill['status'] == 2) {
                                                                                    echo "Đang giao hàng";
                                                                                } else {
                                                                                    echo "Giao hàng thành công";
                                                                                }?></td>
                    <td>
                    <a href="<?= $suabill ?>"><input class="btn btn-success" type="button" name="suabill" value="Sửa"></a>
                        <a href="<?= $xoabill ?>"><input class="btn btn-warning" type="button" value="Xóa"></a>
                    </td>
                   
                </tr>
                <?php } ?>
            </table>
            <input type="submit" class="btn btn-success" value="Chọn tất cả"></input>
            <input type="submit" class="btn btn-danger" value="Bỏ chọn tất cả"></input>
            <input type="submit" class="btn btn-warning" value="Xóa các mục chọn"></input>
        </form>
    </div>
</div>