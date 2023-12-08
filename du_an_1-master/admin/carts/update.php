<?php
if (is_array($dm)) {
    extract($dm);
}
?>
<div class="page-wrapper">



    <form class="form-horizontal" action="index.php?act=updatecart" method="post">
        <div class="card-body">
            <h1 class="card-title">CẬP NHẬP TRẠNG THÁI ĐƠN HÀNG</h1>
            <div class="form-group row">
                <label for="fname" class="">Trạng thái </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="fname" name="tt"
                        value=" <?php if (isset($trangthai) && ($trangthai != ""))
                            echo $trangthai ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="cono1" class="">Ghi Chú</label>
                    <div class="col-sm-9">
                        <p> 0 - đặt thành công đơn hàng </p>
                        <p> 1 - Đơn hàng đang đc giao </p>
                        <p> 2 - Giao hàng thành công </p>
                    </div>
                </div>
            </div>
            <div class="border-top">
                <div class="card-body">
                    <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>" class="btn btn-primary">
                <input type="submit" name="capnhat" value="CẬP NHẬP" class="btn btn-primary">
                <input type="reset" value="NHẬP LẠI " class="btn btn-primary">
                <a href="index.php?act=list_carts"><input type="button" value="DANH SACH" class="btn btn-primary"></a>
            </div>
        </div>
    </form>
    <?php
    if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao;
    ?>



</div>