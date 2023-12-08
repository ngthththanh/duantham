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
    <!-- GOOGLE WEB FONT -->

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="css/listing.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">


</head>

<body>
    <div id="page">
        <main>

            <div class="container margin_30">
                <div class="top_banner version_2">
                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0)">
                        <div class="container">
                            <div class="d-flex justify-content-center">
                                <h1>
                                Nước hoa thời thượng
                                </h1>
                            </div>
                        </div>
                    </div>
                    <img src="img/slides/slide_home_2.jpg" class="img-fluid" alt="">
                </div>
                <!-- /top_banner -->
                <div id="stick_here"></div>
                <div class="toolbox elemento_stick version_2">
                    <div class="container">
                        <ul class="clearfix">
                            <li>
                                <div class="sort_select">
                                    <select name="sort" id="sort">
                                        <option value="popularity" selected="selected">Sắp xếp theo mức độ phổ biến
                                        </option>
                                        <option value="rating">Sắp xếp đánh giá trung bình</option>
                                        <option value="date">sắp xếp theo độ mới</option>
                                        <option value="price">sắp xếp theo giá thấp đến cao</option>
                                        <option value="price-desc">sắp xếp theo giá cao đến thấp
                                    </select>
                                </div>
                            </li>
                            <li>
                                <a data-bs-toggle="collapse" href="#filters" role="button" aria-expanded="false"
                                    aria-controls="filters">
                                    <i class="ti-filter"></i><span>Filters</span>
                                </a>
                            </li>
                        </ul>
                        <div class="collapse" id="filters">
                            <div class="row small-gutters filters_listing_1">
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="drop">Danh muc</a>
                                        <div class="dropdown-menu">
                                            <div class="filter_type">
                                                <ul>
                                                    <?php

                                                    foreach ($dsdm2 as $dm) {
                                                        extract($dm);
                                                        echo '<li>
                                                            <label class="container_check">' . $namedm . '<small>' . $sosanpham . '</small>
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        </li>';
                                                    }
                                                    ?>
                                                </ul>
                                                <a href="#0" class="apply_filter">Apply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /dropdown -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="drop">Color</a>
                                        <div class="dropdown-menu">
                                            <div class="filter_type">
                                                <ul>
                                                    <li>
                                                        <label class="container_check">Blue <small>06</small>
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="container_check">Red <small>12</small>
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="container_check">Orange <small>17</small>
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="container_check">Black <small>43</small>
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                </ul>
                                                <a href="#0" class="apply_filter">Apply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /dropdown -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="drop">Brand</a>
                                        <div class="dropdown-menu">
                                            <div class="filter_type">
                                                <ul>
                                                    <li>
                                                        <label class="container_check">Adidas <small>11</small>
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="container_check">Nike <small>08</small>
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="container_check">Vans <small>05</small>
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="container_check">Puma <small>18</small>
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                </ul>
                                                <a href="#0" class="apply_filter">Apply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /dropdown -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="drop">Price</a>
                                        <div class="dropdown-menu">
                                            <div class="filter_type">
                                                <ul>
                                                    <li>
                                                        <label class="container_check">$0 — $50<small>11</small>
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="container_check">$50 — $100<small>08</small>
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="container_check">$100 — $150<small>05</small>
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="container_check">$150 — $200<small>18</small>
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                </ul>
                                                <a href="#0" class="apply_filter">Apply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /dropdown -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /toolbox -->
                <div class="row small-gutters">
                    <caption class="tt"><h1 >  <?= $namedm; ?></h1></caption>
                    <?php
                    
                    $i = 0;
                   
                        foreach ($dssp as $sp) {
                            extract($sp);
                            $hinh = $img_path . $img;
                            $linksp = "index.php?act=sanphamct&idsp=" . $id_pr;
                            echo '  <div class="col-6 col-md-4 col-xl-3"> 
                                    <form action="index.php?act=addcart" method="post">  
                                        <div class="item">
                                            <div class="grid_item ">
                                                <figure>
                                                    <span class="ribbon off">-30%</span>
                                                    <a href="' . $linksp . '">
                                                        <img class="img-fluid lazy" src="' . $hinh . '"  alt=""   height="400px"width="400px">
                                                    
                                                    </a>                         
                                                </figure>
                                                <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                                                <a href="' . $linksp . '">
                                                    <h3>' . $name . '</h3>
                                                </a>
                                                <div class="price_box">
                                                    <span class="new_price">' . $price . '</span>
                                                    <span class="old_price">$60.00</span>
                                                </div>
                                                <ul>
                                                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                                                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                                                    <li><a href="index.php?act=addcart" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart" ><i><input class="ti-shopping-cart" name="addtocart" type="submit" ></i><span>Add to cart</span></a></li>
                                                </ul>
                                
                                            </div>
                                        </div>
                                        <input type="hidden" name="id_pr" value="' . $id_pr . '">
                                        <input type="hidden" name="hinh" value="' . $hinh . '">
                                        <input type="hidden" name="giasp" value="' . $price . '">
                                        <input type="hidden" name="tensp" value="' . $name . '">
                                     </form>
                                </div>';
                        }
                   
                    ?>
                    
                    <!--  <div class="col-6 col-md-4 col-xl-3">
                <div class="grid_item">
                    <figure>
                        <span class="ribbon off">-30%</span>
                        <a href="product-detail-1.html">
                            <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/1.jpg" alt="">
                        </a>
                        <div data-countdown="2019/05/15" class="countdown"></div>
                    </figure>
                    <a href="product-detail-1.html">
                        <h3>Armor Air x Fear</h3>
                    </a>
                    <div class="price_box">
                        <span class="new_price">$48.00</span>
                        <span class="old_price">$60.00</span>
                    </div>
                    <ul>
                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                    </ul>
                </div>
              
            </div> -->

                </div>
                <!-- /row -->

                <div class="pagination__wrapper">
                    <ul class="pagination">
                        <li><a href="#0" class="prev" title="previous page">&#10094;</a></li>
                        <li>
                            <a href="#0" class="active">1</a>
                        </li>
                        <li>
                            <a href="#0">2</a>
                        </li>
                        <li>
                            <a href="#0">3</a>
                        </li>
                        <li>
                            <a href="#0">4</a>
                        </li>
                        <li><a href="#0" class="next" title="next page">&#10095;</a></li>
                    </ul>
                </div>

            </div>
            <!-- /container -->
        </main>
        <!-- /main -->

        <footer class="revealed">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <h3 data-bs-target="#collapse_1">Quick Links</h3>
                        <div class="collapse dont-collapse-sm links" id="collapse_1">
                            <ul>
                                <li><a href="about.html">About us</a></li>
                                <li><a href="help.html">Faq</a></li>
                                <li><a href="help.html">Help</a></li>
                                <li><a href="account.html">My account</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 data-bs-target="#collapse_2">Categories</h3>
                        <div class="collapse dont-collapse-sm links" id="collapse_2">
                            <ul>
                                <li><a href="listing-grid-1-full.html">Clothes</a></li>
                                <li><a href="listing-grid-2-full.html">Electronics</a></li>
                                <li><a href="listing-grid-1-full.html">Furniture</a></li>
                                <li><a href="listing-grid-3.html">Glasses</a></li>
                                <li><a href="listing-grid-1-full.html">Shoes</a></li>
                                <li><a href="listing-grid-1-full.html">Watches</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 data-bs-target="#collapse_3">Contacts</h3>
                        <div class="collapse dont-collapse-sm contacts" id="collapse_3">
                            <ul>
                                <li><i class="ti-home"></i>97845 Baker st. 567<br>Los Angeles - US</li>
                                <li><i class="ti-headphone-alt"></i>+94 423-23-221</li>
                                <li><i class="ti-email"></i><a href="#0">info@allaia.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 data-bs-target="#collapse_4">Keep in touch</h3>
                        <div class="collapse dont-collapse-sm" id="collapse_4">
                            <div id="newsletter">
                                <div class="form-group">
                                    <input type="email" name="email_newsletter" id="email_newsletter"
                                        class="form-control" placeholder="Your email">
                                    <button type="submit" id="submit-newsletter"><i
                                            class="ti-angle-double-right"></i></button>
                                </div>
                            </div>
                            <div class="follow_us">
                                <h5>Follow Us</h5>
                                <ul>
                                    <li>
                                        <a href="#0"><img
                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                data-src="img/twitter_icon.svg" alt="" class="lazy"></a>
                                    </li>
                                    <li>
                                        <a href="#0"><img
                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                data-src="img/facebook_icon.svg" alt="" class="lazy"></a>
                                    </li>
                                    <li>
                                        <a href="#0"><img
                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                data-src="img/instagram_icon.svg" alt="" class="lazy"></a>
                                    </li>
                                    <li>
                                        <a href="#0"><img
                                                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                data-src="img/youtube_icon.svg" alt="" class="lazy"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <hr>
                <div class="row add_bottom_25">
                    <div class="col-lg-6">
                        <ul class="footer-selector clearfix">
                            <li>
                                <div class="styled-select lang-selector">
                                    <select>
                                        <option value="English" selected>English</option>
                                        <option value="French">French</option>
                                        <option value="Spanish">Spanish</option>
                                        <option value="Russian">Russian</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="styled-select currency-selector">
                                    <select>
                                        <option value="US Dollars" selected>US Dollars</option>
                                        <option value="Euro">Euro</option>
                                    </select>
                                </div>
                            </li>
                            <li><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                    data-src="img/cards_all.svg" alt="" width="198" height="30" class="lazy"></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="additional_links">
                            <li><a href="#0">Terms and conditions</a></li>
                            <li><a href="#0">Privacy</a></li>
                            <li><span>© 2022 Allaia</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--/footer-->
    </div>
    <!-- page -->

    <div id="toTop"></div>
    <!-- Back to top button -->

    <!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.min.js"></script>
    <script src="js/main.js"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="js/sticky_sidebar.min.js"></script>
    <script src="js/specific_listing.js"></script>
</body>