<div class="page-wrapper">
    <div class="row">
        <div class="card-body">
            <div class="row2 font_titel">
                <h1>THỐNG KÊ SẢN PHẨM BÁN CHẠY</h1>
            </div>
           
            <div class="row2 from_content">
            <form action="index.php?act=thongkesp" method="post"    >
                Ngày bắt đầu : <input type="date" name="bd" value="ngay bat dou" ><br><br>
               Ngày kết thúc:  <input type="date" name="kt" id="" value="ngay ket thuc">
                <a href="index.php?act=thongkesp"><input type="submit" value="Gui" name="check">  </a>
             
            </form>
                <div class="row2 mb10 formds_loai">
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>Tên SẢN PHẨM</th>
                            <th>IMG</th>
                            <th>GIÁ</th>
                            <th>SỐ LƯỢNG</th>
                           
                        </tr>
                        <?php
                        if(!empty($dsthongke)){
                        foreach($dsthongke as $key=> $thongke) {
                            extract($thongke);
                            $hinhpath = "../upload/".$img;
                            if(is_file($hinhpath)) {
                                $hinh = "<img src='".$hinhpath."'height=100'>";

                            } else {
                                $hinh = "no photo";
                            }

                            ?>
                            <tr>
                                <td>
                                    <?php echo ++$key ?>
                                </td>
                                <td>
                                    <?php echo $name ?>
                                </td>
                                <td>
                                    <?php echo $hinh?>
                                </td>
                                <td>
                                    <?php echo $price ?> VND
                                </td>
                                <td>
                                    <?php echo $soluong ?>
                                </td>
                               
                            </tr>
                            <?php
                        }
                    }
                        ?>

                    </table>

                </div>
                <div class="border-top">
                    <div class="card-body">
                       
                        <!-- <a href="index.php?act=bieudosp-dm"><input type="button" value="Biểu đồ "
                                class="btn btn-primary"></a> -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>