<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>Allaia | Bootstrap eCommerce Template - ThemeForest</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
        href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
        href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="../css/account.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="../css/custom.css" rel="stylesheet">

</head>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    table,
    th,
    td {
        border: 1px solid #ddd;
    }

    th,
    td {
        padding: 15px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    .bt {
        background-color: #f4511e;
        border: none;
        color: white;
        padding: 8px 16px;
        text-align: center;
        font-size: 16px;
        margin: 2px 1px;
        opacity: 0.6;
        transition: 0.3s;
        display: inline-block;
        text-decoration: none;
        cursor: pointer;
    }

    .anh {
        width: 80px;
    }

    .button1 {
        position: relative;
        background-color: #04AA6D;
        border: none;
        font-size: 16px;
        color: #FFFFFF;
        padding: 8px 16px;
        width: 50px;
        text-align: center;
        transition-duration: 0.4s;
        text-decoration: none;
        overflow: hidden;
        cursor: pointer;
    }

    .button1:after {
        content: "";
        background: #f1f1f1;
        display: block;
        position: absolute;
        padding-top: 3100%;
        padding-left: 30%;
        margin-left: -20px !important;
        margin-top: -120%;
        opacity: 0;
        transition: all 0.8s
    }

    .button1:active:after {
        padding: 0;
        margin: 0;
        opacity: 1;
        transition: 0s
    }

    .mm {
        background: red;
    }

    .m2 {
        width: 200px;
    }

    .m3 {
        background-color: yellow;
        width: 150px;
        color: black;
    }
</style>

<body>
    <div id="pape">
        <main class="bg_gray">

            <div class="track_order">


                <div class="container margin_60_35">
                    <?php if (isset($bill)):
                        /*  echo "<pre>";
                         print_r($bill);
                         die; */
                        ?>


                        <div class="main_title">
                            <h2>CHI TIẾT ĐƠN HÀNG</h2>

                        </div>
                        <!-- Bước 2: Thanh toán và vận chuyển -->
                        <div class="step last">
                            <h3>Đơn hàng của bạn</h3>
                            <div class="box_general summary">
                                <table style="border: 1px solid black; border-collapse: collapse;">
                                    <tr>
                                        <th>Tên sản phẩm</th>
                                        <th>img</th>
                                        <th>số lượng</th>
                                        <th>Giá</th>
                                        <th>Trang thai</th>
                                        <th></th>




                                    </tr>
                                    <?php
                                    foreach ($bill as $bill):
                                       
                                        $hinhpath = "../upload/" . $bill["img"];
                                        if (is_file($hinhpath)) {
                                            $hinh = "<img src='" . $hinhpath . "'height=80'>";

                                        } else {
                                            $hinh = "no photo";
                                        }
                                        ?>
                                        <tr>
                                            <td>3
                                                <?php echo $bill["tensp"] ?>
                                            </td>
                                            <td>
                                                <?php echo $hinh ?>
                                            </td>
                                            <td>
                                                <?php echo $bill["soluong"] ?>
                                            </td>
                                            <td>
                                                <?php echo $bill["dongia"] ?>
                                            </td>
                                            <td>
                                                <?php if ($bill["trangthai"] == 0) {
                                                    echo "chờ duyệt ";
                                                } elseif ($bill["trangthai"] == 1) {
                                                    echo "Đã xác nhận ";
                                                } elseif ($bill["trangthai"] == 2) {
                                                    echo "Đang vận chuyển";
                                                } elseif ($bill["trangthai"] == 3) {
                                                    echo "đã giao";
                                                }
                                                ?>
                                            </td>
                                            <?php if ($bill["trangthai"] == 3): ?>
                                                <td><a href="index.php ?act=binhluan&id="<?php echo $id_pr ?>><input type="submit" value="Đánh giá" class="button1 m3"></a></td>
                                            <?php endif; ?>



                                            <input type="hidden" name="id" value="<?php echo $id_pr ?>">
                                        </tr>
                                    <?php endforeach; ?>

                                </table>
                            </div>
                        </div>
                        <!-- /step -->

                        <!-- /products_carousel -->

                    <?php endif; ?>

                    <a href="index.php"> <input class="button1  m2" value="tiếp tục mua hàng"></a>

                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </main>
    </div>
</body>