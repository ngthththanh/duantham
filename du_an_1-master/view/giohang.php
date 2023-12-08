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

<body>
    <div id="pape">
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
                    <h1>Cart page</h1>
                </div>

                <!-- /page_header -->
                <table class="table table-striped cart-list">
                    <thead>
                        <tr>
                            <th>
                                Product
                            </th>
                            <th>
                                Price
                            </th>
                            <th>
                                Quantity
                            </th>
                            <th>
                                Subtotal
                            </th>
                            <th>

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        if(isset($_SESSION['user'])) {
                            $userID = $_SESSION['user']['id_tk'];
                            $key = "giohang-$userID";
                            $tong = 0;
                            if(!empty($_SESSION[$key])) {
                                foreach($_SESSION[$key] as $arr) {
                                    $tong += $arr['tt'];
                                    $linksp = "index.php?act=sanphamct&idsp=";
                                    echo '<tr>
                                        <td>
                                            <div class="thumb_cart">
                                            <a href="'.$linksp.'"><img src=" '.$arr['hinh'].'" class="lazy" alt="Image"></a>
                                            </div>
                                            <span class="item_cart">'.$arr['tensp'].'</span>
                                        </td>
                                        <td>
                                            <strong>'.$arr['giasp'].'</strong>
                                        </td>
                                        <td>
                                    
                                        
                                            <div class="numbers-row">
                                                <input type="text" value="'.$arr['sl'].'" id="quantity_1" class="qty2" name="sl">
                                            
                                            </div>
                                        
                                        
                                        </td>
                                        <td>
                                            <strong>'.$arr['tt'].'</strong>
                                        </td>
                                        <td class="options">
                                            <a href="index.php?act=decart&i='.$i.'"><i class="ti-trash" name="xoaspcart"></i></a>
                                        </td>
                                        
                                    </tr>';
                                    $i++;
                                }
                            }
                        }
                        ?>
                       
                    </tbody>
                </table>

                <div class="row add_top_30 flex-sm-row-reverse cart_actions">
                    <div class="col-sm-4 text-end">
                        <a href="index.php"><button type="button" class="btn_1 gray" name="xoagiohang">Tiếp tục mua
                                hàng</button></a>
                        <button type="button" class="btn_1 gray">Update Cart</button>
                        <a href="index.php?act=decart&xoagiohang=true"><button type="submit" class="btn_1 gray"
                                name="xoagiohang">Xoa
                                gio hang</button></a>
                    </div>

                    <div class="col-sm-8">
                        <div class="apply-coupon">
                            <div class="form-group">
                                <div class="row g-2">
                                    <div class="col-md-6"><input type="text" name="coupon-code" value=""
                                            placeholder="Promo code" class="form-control"></div>
                                    <div class="col-md-4"><button type="button" class="btn_1 outline">Apply
                                            Coupon</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /cart_actions -->

            </div>
            <!-- /container -->

            <div class="box_cart">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <ul>
                                <?php
                                echo ' <li>
                                <span>Subtotal</span> '.$tong.'
                            </li>
                            <li>
                                <span>Shipping</span> 0 VND
                            </li>
                            <li>
                                <span>Total</span>  '.$tong.' VND
                            </li>';
                                ?>
                                <!-- <li>
                                    <span>Subtotal</span> $240.00
                                </li>
                                <li>
                                    <span>Shipping</span> $7.00
                                </li>
                                <li>
                                    <span>Total</span> $247.00
                                </li> -->
                            </ul>
                            <a href="index.php?act=thongtin" class="btn_1 full-width cart" name="muangay">Mua ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /box_cart -->

        </main>
    </div>
</body>