<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "'height=80'>";

} else {
    $hinh = "no photo";
}
?>
<div class="page-wrapper">



    <form class="form-horizontal" action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
        <div class="card-body">
            <h1 class="card-title">CẬP NHẬP SẢN PHẨM </h1>
            <div class="form-group row">
                <label for="fname" class="">Danh Muc </label>
                <select name="iddm">
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        if ($iddm == $id)
                            echo '<option value="' . $id . '" selected>' . $namedm . '</option>';
                        else
                            echo '<option value="' . $id . '" >' . $namedm . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="form-group row">
                <label for="fname" class="">Tên sản phẩm </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="fname" name="tensp" value="<?= $name ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="fname" class="">Giá </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="fname" name="giasp" value="<?= $price ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="fname" class="">Hình ảnh </label>
                <div class="col-sm-9">
                    <input type="file" class="form-control" id="fname" name="hinh">
                    <?= $hinh ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="cono1" class="">Mô tả</label>
                <div class="col-sm-9">
                    <textarea class="form-control" name="mota"><?= $mota ?></textarea>
                </div>
            </div>
        </div>
        <div class="border-top">
            <div class="card-body">
                <input type="hidden" name="id_pr" value=" <?= $id_pr ?>" class="btn btn-primary">
                <input type="submit" name="capnhap" value="CẬP NHẬP" class="btn btn-primary">
                <input type="reset" value="NHẬP LẠI " class="btn btn-primary">
                <a href="index.php?act=listsp"><input type="button" value="DANH SACH" class="btn btn-primary"></a>
            </div>
        </div>
    </form>
    <?php
    if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao;
    ?>



</div>