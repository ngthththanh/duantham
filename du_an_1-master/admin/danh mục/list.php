<div class="page-wrapper">
    <div class="row">
        <div class="card-body">
            <h1 class="card-title">Danh Sách Danh Muc </h1>
            <table>
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN LOẠI</th>
                    <th> HÀNH ĐỘNG</th>
                </tr>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    $suadm = "index.php?act=suadm&id=" . $id;
                    $xoadm = "index.php?act=xoadm&id=" . $id;
                    # code...
                    echo '<tr>
                            <td> <input type="checkbox" name="" id=""></td>
                            <td>' . $id . '</td>
                            <td>' . $namedm . ' </td>
                            <td><a href="' . $suadm . ' "><input type="button" value="sửa"></a> ,   <a href="' . $xoadm . ' "><input type="button" value="xóa"></a></td>
                             </tr>';
                }
                ?>
                <div class="border-top">
                    <div class="card-body">
                        <input type="button" value="CHỌN TẤT CẢ " class="btn btn-primary">
                        <input type="button" value="BỎ CHỌN TẤT CẢ " class="btn btn-primary">
                        <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN  " class="btn btn-primary">
                        <a href="index.php?act=adddm"><input type="button" value="NHẬP THÊM " class="btn btn-primary"></a>
                    </div>
                </div>
            </table>
      </div>
    </div>
</div>