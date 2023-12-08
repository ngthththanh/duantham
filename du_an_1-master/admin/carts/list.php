<div class="page-wrapper">
    <div class="row">
        <div class="card-body">

            <h1 class="card-title">Danh Sách và trạng thái đơn hàng</h1>

            <table>
                <tr>
                    <th></th>
                    <th>MÃ ĐƠN HÀNG</th>
                    <th>TÊN SẢN PHẨM</th>
                   
                    <th>GIÁ </th>
                    <th>SỐ LƯỢNG</th>
                 
                    <th>CẬP NHẬT TT</th>
                    <th></th>
                </tr>
                <?php
                foreach( $result_carts as $sanpham) {
                    extract($sanpham);
               $suatt = "index.php?act=suacart&id=".$id_cart;
                   /* $hinhpatt = "../upload/".$img;
                    if(is_file($hinhpath)) {
                        $hinh = "<img src='".$hinhpath."'height=80'>";

                    } else {
                        $hinh = "no photo";
                    }  */
                    # code...
                    echo '<tr>
                <td> <input type="checkbox" name="" id=""></td>
                <td>'.$madh.'</td>
                <td>'.$tensp.' </td>
              
                <td>'.$dongia.' </td>
                <td>'.$soluong.' </td>
               
                <td><a href="'.$suatt.' "><input type="button" value="sửa"></a>
                 </tr>';
                }
                ?>


                <div class="border-top">
                    <div class="card-body">
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
