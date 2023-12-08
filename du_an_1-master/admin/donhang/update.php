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
                    <select name="tt" id="">
                        <option value="0" name="tt"> Chờ duyệt</option>
                        <option value="1" name="tt"> Đã duyêt</option>
                        <option value="2" name="tt"> Đang vận chuyển</option>
                        <option value="3" name="tt"> Đã giao </option>
                    </select>

                     
                </div>

               
            </div>
            <div class="border-top">
                <div class="card-body">
                    <input type="hidden" name="id" value="<?php if (isset($id_dh) && ($id_dh > 0))
                        echo $id_dh; ?>"
                    class="btn btn-primary">
                <input type="submit" name="capnhat" value="CẬP NHẬP" class="btn btn-primary">
                <input type="reset" value="NHẬP LẠI " class="btn btn-primary">
                <a href="index.php?act=listdh"><input type="button" value="DANH SACH" class="btn btn-primary"></a>
            </div>
        </div>
    </form>
    <?php
    if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao;
    ?>



</div>