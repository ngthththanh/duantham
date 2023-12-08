<div class="page-wrapper">
    <div class="row">
        <div class="card-body">

            <h1 class="card-title">Danh Sách và thông tin người nhận hàng</h1>

            <table>
                <tr>
                    <th></th>
             
                    <th>TÊN TÀI KHOẢN</th>
                    <th>TÊN NGƯỜI NHẬN</th>
                    <th>MÃ ĐƠN HÀNG</th>
                    <th>TỔNG TIỀN </th>
                    <th>ĐỊA CHỈ</th>
                    <th>EMAIL</th>
                    <th> SỐ ĐIỆN THOẠI </th>
                    <th>PHƯƠNG THỨC TT</th>
                    <th>TRẠNG THÁI</th>
            
                  
                    <th></th>
                </tr>
                <?php
                foreach( $result_donhang as $sanpham) {
                    extract($sanpham);
                    $suatt = "index.php?act=suacart&id=".$id_dh;
                    if($trangthai==0){
                       $tt= "chờ duyệt ";
                    }elseif($trangthai==1){
                       $tt= "Đã xác nhận ";
                    }elseif($trangthai==2){
                       $tt= "Đang vận chuyển";
                    }elseif($trangthai==3){
                        $tt= "đã giao";
                     }
                     

                   
                    echo '<tr>
                <td> <input type="checkbox" name="" id=""></td>
             
                <td>'.$user.'</td>
                <td>'.$name.' </td>
                <td>'.$madh.' </td>
                <td>'.$tongdonhang.' </td>
                <td>'.$diachi.' </td>
                <td>'.$email.' </td>
                <td>'.$tel.' </td>
                <td>'.$pthuctt.' </td>
                <td>'.$tt.' </td>
                <td><a href="'.$suatt.' "><input type="button" value="sửa"></a>
                 </tr>';
                }

                ?>
                
        


                <div class="border-top">
                    <div class="card-body">
             
                        <input type="button" value="CHỌN TẤT CẢ " class="btn btn-primary">
                        <input type="button" value="BỎ CHỌN TẤT CẢ " class="btn btn-primary">
                        <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN  " class="btn btn-primary">
                       
                    </div>
                </div>



            </table>
            <?php

            ?>

         



        </div>



    </div>
</div>
