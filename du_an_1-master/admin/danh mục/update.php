<?php
if (is_array($dm)) {
    extract($dm);
}
?>
<div class="page-wrapper">



    <form class="form-horizontal" action="index.php?act=updatedm" method="post">
        <div class="card-body">
            <h1 class="card-title">CAP NHAP DANH MUC</h1>
            <div class="form-group row">
                <label for="fname" class="">Tên Loại </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="fname" name="tenloai"
                        value=" <?php if (isset($namedm) && ($namedm != ""))
                            echo $namedm ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="cono1" class="">Ghi Chú</label>
                    <div class="col-sm-9">
                        <textarea class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="border-top">
                <div class="card-body">
                    <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>" class="btn btn-primary">
                <input type="submit" name="capnhat" value="CẬP NHẬP" class="btn btn-primary">
                <input type="reset" value="NHẬP LẠI " class="btn btn-primary">
                <a href="index.php?act=listdm"><input type="button" value="DANH SACH" class="btn btn-primary"></a>
            </div>
        </div>
    </form>
    <?php
    if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao;
    ?>



</div>