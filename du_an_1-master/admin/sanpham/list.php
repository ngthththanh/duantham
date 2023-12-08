<div class="page-wrapper">
    <div class="row">
        <div class="card-body">

            <h1 class="card-title">Danh Sách Sản Phẩm </h1>

            <table>
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>HÌNH</th>
                    <th>GIÁ </th>
                    <th>MO TA</th>
                    <th>LƯỢT XEM</th>
                    <th></th>
                </tr>
                <?php
                foreach(   $listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasp = "index.php?act=suasp&id_pr=".$id_pr;
                    $xoasp = "index.php?act=xoasp&id_pr=".$id_pr;
                    $hinhpath = "../upload/".$img;
                    if(is_file($hinhpath)) {
                        $hinh = "<img src='".$hinhpath."'height=80'>";

                    } else {
                        $hinh = "no photo";
                    }
                    # code...
                    echo '<tr>
                <td> <input type="checkbox" name="" id=""></td>
                <td>'.$id_pr.'</td>
                <td>'.$name.' </td>
                <td>'.$hinh.' </td>
                <td>'.$price.' </td>
                <td>'.$mota.' </td>
                <td>'.$luotxem.' </td>
                <td><a href="'.$suasp.' "><input type="button" value="sửa"></a> ,<a href="'.$xoasp.' " ><input type="button" value="xóa" ></a></td>
                 </tr>';
                }
                ?>


                <div class="border-top">
                    <div class="card-body">
                        <input type="hidden" name="id" value="<?php echo $id_pr ?>">
                        <input type="hidden" name="hinh" value="<?php echo $hinh ?>">
                        <input type="button" value="CHỌN TẤT CẢ " class="btn btn-primary">
                        <input type="button" value="BỎ CHỌN TẤT CẢ " class="btn btn-primary">
                        <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN  " class="btn btn-primary">
                        <a href="index.php?act=addsp"><input type="button" value="NHẬP THÊM "
                                class="btn btn-primary"></a>
                    </div>
                </div>



            </table>
            <?php

            ?>

           




        </div>



    </div>
</div>
