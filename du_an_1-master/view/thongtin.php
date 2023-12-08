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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="css/cart.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>
<div id="page">
    <main class="bg_gray">


        <div class="container margin_30">
            <div class="page_header">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Category</a></li>
                        <li>Page active</li>
                    </ul>
                </div>


            </div>
            <!-- /page_header -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <form action=" index.php?act=thongtin" method="post">
                        <div class="step first">
                            <h3>1.Thông tin người nhận và địa chỉ thanh toán</h3>
                            <?php if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                                extract($_SESSION['user']);

                            } ?>
                            <div class="tab-content checkout">
                                <div class="tab-pane fade show active" id="tab_1" role="tabpanel"
                                    aria-labelledby="tab_1">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="<?php echo $user ?>" required
                                            name="name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" value="<?php echo $email ?>" required
                                            name="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="<?php echo $diachi ?>" required
                                            name="diachi">
                                    </div>

                                    <!-- /row -->

                                    <!-- /row -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="<?php echo $tel ?>" name="tel">
                                    </div>
                                    <hr>



                                </div>
                                <!-- /tab_1 -->

                            </div>
                            <!-- /step -->
                        </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="step middle payments">
                        <h3>2. Thanh toán và vận chuyển</h3>
                        <ul>
                            <li>
                                <label class="container_radio">Thanh toán khi nhận hàng<a href="#0" class="info"
                                        data-bs-toggle="modal" data-bs-target="#payments_method"></a>
                                    <input type="radio" name="pttt" value="Thanh toán khi nhận hàng" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                            <li>
                                <label class="container_radio">Thẻ tín dụng<a href="#0" class="info"
                                        data-bs-toggle="modal" data-bs-target="#payments_method"></a>
                                    <input type="radio" name="pttt"  value="atm">
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                            <li>
                                <label class="container_radio">Momo<a href="#0" class="info" data-bs-toggle="modal"
                                        data-bs-target="#payments_method"></a>
                                    <input type="radio" name="pttt" value="Momo">
                                    <span class="checkmark"></span>
                                </label>
                            </li>


                        </ul>
                        <div class="payment_info d-none d-sm-block">
                            <figure><img src="img/cards_all.svg" alt=""></figure>

                        </div>

                        <h6 class="pb-2">Phương pháp vận chuyển</h6>


                        <ul>
                            <li>
                                <label class="container_radio">Standard shipping<a href="#0" class="info"
                                        data-bs-toggle="modal" data-bs-target="#payments_method"></a>
                                    <input type="radio" name="shipping" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                            <li>
                                <label class="container_radio">Express shipping<a href="#0" class="info"
                                        data-bs-toggle="modal" data-bs-target="#payments_method"></a>
                                    <input type="radio" name="shipping">
                                    <span class="checkmark"></span>
                                </label>
                            </li>

                        </ul>

                    </div>
                    <!-- /step -->

                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="step last">
                        <h3>3. Tóm tắt đơn hàng</h3>
                        <div class="box_general summary">

                            <?php
                            $i = 0;
                            $tong = 0;
                            if (isset($_SESSION['user'])) {
                                $userID = $_SESSION['user']['id_tk'];
                                $key = "giohang-$userID";
                                if (!empty($_SESSION[$key])) {
                                    foreach ($_SESSION[$key] as $arr) {
                                        $tong += $arr['tt'];
                                        echo '  <ul>                               
                                             <li class="clearfix"><em>' . $arr['sl'] . 'x ' . $arr['tensp'] . '</em> <span>' . $arr['giasp'] . '</span></li>                                       
                                            
                                             </ul> ';
                                    }
                                }

                            }
                            ?>

                            <!-- <ul>
                                    <li class="clearfix"><em>1x Armor Air X Fear</em> <span>$145.00</span></li>
                                    <li class="clearfix"><em>2x Armor Air Zoom Alpha</em> <span>$115.00</span></li>
                                </ul>-->
                            <ul>
                                <li class="clearfix"><em><strong>Subtotal</strong></em> <span>
                                        <?php echo $tong ?>
                                    </span></li>
                                <li class="clearfix"><em><strong>Shipping</strong></em> <span>$0</span></li>

                            </ul>
                            <div class="total clearfix">TOTAL <span>
                                    <?php echo $tong ?>
                                </span></div>
                            <div class="form-group">
                                <label class="container_check">Đăng kí nhận bản tin.
                                    <input type="checkbox" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <input type="hidden" name="tong" value="<?= $tong ?>">
                            <input type="hidden" name="id_tk" value="<?php $userID ?>">
                            <input type="hidden" name="iddh" value="<?= $iddh ?>">

                            <input type="submit" value="Xác nhận thanh toán" name="thanhtoan">
                             </form>
                            <!--  <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
                                action="xulythanhtoanmomo.php">
                                <input type="submit" value="Thanh toán MOMO atm" name="momo">
                            </form> -->


                        </div>

                        <!-- /box_general -->
                    </div>
                    <!-- /step -->
                </div>


                <!-- /row -->
            </div>
            <!-- /container -->
    </main>

</div>