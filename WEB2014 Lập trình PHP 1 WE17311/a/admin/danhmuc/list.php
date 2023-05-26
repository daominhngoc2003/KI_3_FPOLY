
<!--   Phần content -->
<div class="main">
    <div class="main-content dashboard">
        <div class="row">
            <form action="./index.php?act=listdm" method="get">
                <table class=" table">
                    <tr class="table-primary">
                        <th></th>
                        <th>Mã loại</th>
                        <th>Tên loại</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        $suadm = "index.php?act=suadm&id=".$id;
                        $xoadm = "index.php?act=xoadm&id=".$id;
                        echo '
                            <tr class="table-success">
                                <td><input type="checkbox"></td>
                                <td>' . $id . '</td>
                                <td>' . $name . '</td>
                                <td>
                                    <a href="' . $suadm . '"><input class="btn btn-success"  type="button" name="sua" value="Sửa"></a>
                                    <a href="' . $xoadm . '"><input class="btn btn-warning" type="button" name="delete" value="Xóa"></a>
                                </td>
                            </tr>
                            ';
                    }
                    ?>

                </table>
                <input type="button" class="btn btn-success" value="Chọn tất cả"></input>
                    <input type="button" class="btn btn-danger" value="Bỏ chọn tất cả"></input>
                    <input type="button" class="btn btn-warning" value="Xóa các mục chọn"></input>
                    <a href="./index.php?act=adddm"><input type="button" class="btn btn-info" value="Nhập lại"></input></a>
            </form>

        </div>

    </div>
</div>
