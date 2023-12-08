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
                    <h1>ĐĂNG NHẬP HOẶC TẠO TÀI KHOẢN</h1>
                </div>
                <!-- /page_header -->
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-8">
                        <div class="box_account">
                            <h3 class="client">Đăng nhập</h3>
                            <form action="index.php?act=dangnhap" method="post">
                                <div class="form_container">
                                    <div class="row no-gutters">
                                        <div class="col-lg-6 pr-lg-1">
                                            <a href="#0" class="social_bt facebook">Login with Facebook</a>
                                        </div>
                                        <div class="col-lg-6 pl-lg-1">
                                            <a href="#0" class="social_bt google">Login with Google</a>
                                        </div>
                                    </div>
                                    <div class="divider"><span>Or</span></div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="user" id="user"
                                            placeholder="Tên đăng nhập*">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="pass" id="password_in"
                                            value="" placeholder="Password*">
                                    </div>
                                    <div class="clearfix add_bottom_15">
                                        <div class="checkboxes float-start">
                                            <label class="container_check">Ghi nhớ mật khẩu
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="float-end"><a id="" href="index.php?act=quenmk ">Quên mật khẩu?</a>
                                        </div>
                                    </div>
                                    <div class="text-center"><input type="submit" value="Đăng Nhập"
                                            class="btn_1 full-width" name="dangnhap"></div>
                                    <?php
                                    if (isset($thongbao) && ($thongbao != ""))
                                        echo $thongbao;
                                    ?>
                                    <div id="forgot_pw">
                                       <form action="index.php?act=quenmk" method="post">
                                       <div class="form-group">
                                            <input type="email" class="form-control" name="email_forgot"
                                                id="email_forgot" placeholder="Nhập lại email của bạn">
                                        </div>
                                        <p>Mật khẩu mới sẽ sớm được gửi.</p>
                                        <div class="text-center"><input type="submit" value="Gửi lại mật khẩu"
                                                class="btn_1" name="guimail"></div>
                                       </form>
                                    </div>
                                </div>
                                <!-- /form_container -->
                            </form>
                        </div>
                        <!-- /box_account -->

                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-8">
                        <div class="box_account">
                            <h3 class="new_client">Khách hàng mới</h3> <small class="float-right pt-2">* bắt
                                buộc</small>
                            <form action="index.php?act=dangky" method="post">
                                <div class="form_container">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="user" id="password_in_2" value=""
                                            placeholder="tên người dùng*">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="pass" id="password_in_2"
                                            value="" placeholder="Password*">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email_2"
                                            placeholder="Email*">
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label class="container_check">đồng ý <a href="#0">các điều khoản và điều
                                                kiện</a>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="text-center"><input type="submit" value="Đăng ký"
                                            class="btn_1 full-width" name="dangky">
                                    </div>
                                    <?php
                                      if(isset($_SESSION['err'])){
                                        foreach($_SESSION['err'] as $thongbao):
                                      
                                      
                                    ?>
                                  <div class="err">
                                   
                                 <?php
                                echo $thongbao;

                                 ?>
                                  </div>
                                  <?php
                                 endforeach

                                  ?>
                                  <?php
                                      }
                                    
                                  ?>
                                  <div>
                                    <?php
                                   if(isset($_SESSION['success'])){
                                    echo $_SESSION['success'];
                                    unset ($_SESSION['success']);
                                   }
                                    ?>
                                  </div>
                                </div>
                                <!-- /form_container -->
                            </form>
                        </div>
                        <!-- /box_account -->
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </main>
    </div>
</body>