<!--  Phàn content -->
<div class="main">
    <div class="main-content dashboard">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Danh mục</label>
                <select name="iddm" class="form-select" aria-label="Default select example">
                    <option>Choose</option>
                    <?php foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '
                            <option value="' . $id . '">' . $name . '</option>';
                    } ?>
                </select>
            </div>
            <!-- tên sản phẩm -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <!-- Giá -->
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Đơn giá</label>
                <input type="text" name="price" class="form-control" id="exampleInputPassword1">
            </div>
            <!-- Giảm giá -->
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Giảm giá</label>
                <input type="text" name="discount" class="form-control" id="exampleInputPassword1">
            </div>
            <!-- image -->
            <div class="mb-3 ">
                <label for="exampleInputPassword1" class="form-label">Hình ảnh</label>
                <input type="file" name="image" class="form-control" id="inputGroupFile02">
            </div>
            <!-- ngày nhập hàng -->
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Ngày nhập</label>
                <input type="date" name="date" class="form-control" id="exampleInputPassword1">
            </div>
            <!-- Mô tả ngắn-->
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Mô tả ngắn</label>
                <textarea class="form-control" name="mota_ngan" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <!-- Mô tả -->
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Mô tả dài</label>
                <textarea class="form-control" name="mota_dai" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <br>
             <!-- Size-->
             <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Size</label>
                <textarea class="form-control" name="size_product" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <br>
             <!-- Color-->
             <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Color</label>
                <textarea class="form-control" name="color_product" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <br>
            <!-- Button -->
            <input type="submit" class="btn btn-primary" name="themmoi" value="Thêm mới"></input>
            <a href="./index.php?act=addsp"><input type="reset" class="btn btn-secondary" value="Nhập lại"></input></a>
            <a href="./index.php?act=listsp"><input type="button" class="btn btn-success" value="Danh sách"></input></a> <br>
            <?php if (isset($thongbao) && ($thongbao != "")) echo $thongbao;  ?>
        </form>
    </div>
</div>