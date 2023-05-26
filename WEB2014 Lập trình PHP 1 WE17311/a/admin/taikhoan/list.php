<div class="main">
    <div class="main-content dashboard">
        <form action="./index.php?act=listtaikhoan" method="post">
            <table class=" table">
                <tr class="table-primary">
                    <th></th>
                    <th>Mã tài khoản</th>
                    <th>Họ và tên</th>
                    <th>Tên đăng nhập</th>
                    <th>Mật khẩu</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Số điện thoại</th>
                    <th>Vai trò</th>
                    <th>Avata</th>
                    <th></th>
                </tr>
                <?php foreach ($listtaikhoan as $tk) {
                    extract($tk);
                    $xoatk = "index.php?act=xoatk&id=".$id;
                    $suatk = "index.php?act=suatk&id=".$id;
                ?>
                <tr class="table-success">
                    <td><input type="checkbox"></td>
                    <td><?= $id ?></td>
                    <td><?= $full_name ?></td>
                    <td><?= $username ?></td>
                    <td><?= $password ?></td>
                    <td><?= $email ?></td>
                    <td><?= $address ?></td>
                    <td><?= $phone ?></td>
                    <td><?php if($role==1){echo "quản trị viên";}else{echo "người dùng";} ?></td>
                    <td><?= $image_user ?></td>
                    <td>
                        <a href="<?= $suatk ?>"><input class="btn btn-success" type="button" name="suatk" value="Sửa"></a>
                        <a href="<?= $xoatk ?>"><input class="btn btn-warning" type="button" value="Xóa"></a>
                    </td>
                </tr>
                <?php }?>
            </table>
            <input type="submit" class="btn btn-success" value="Chọn tất cả"></input>
            <input type="submit" class="btn btn-danger" value="Bỏ chọn tất cả"></input>
            <input type="submit" class="btn btn-warning" value="Xóa các mục chọn"></input>
        </form>
    </div>
</div>