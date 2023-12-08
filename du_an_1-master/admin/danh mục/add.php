<div class="page-wrapper">



    <form class="form-horizontal" action="index.php?act=adddm" method="post">
        <div class="card-body">
            <h1 class="card-title">Danh Mục </h1>
            <div class="form-group row">
                <label for="fname" class="">Tên Loại </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="fname" name="tenloai">
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
                <input type="submit" class="btn btn-primary" name="themmoi" value="thêm mới">
                <button type="reset" class="btn btn-primary">nhập lại</button>
                <a href="index.php?act=listdm"><button type="button" class="btn btn-primary">danh sách</button></a>
            </div>
        </div>
    </form>
    <?php
    if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao;
    ?>



</div>