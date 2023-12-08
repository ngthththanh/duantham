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
    <link href="css/home_1.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>
<div id="pape">
    <div class="bg_gray">
        <div class="container margin_30">
            <caption>
                <h1> Cập Nhật Thông Tin Đơn Hàng</h1>
            </caption>
            <?php
          if(!empty(   $ttsua)):    echo "</pre>";
          print_r( $ttsua);
          die;?>
           <?php foreach ( $ttsua as $key => $value) :
                # code...             
           ?>
          
            
            <form action="index.php?act=updatett" method="post" >
                <div class="form-group">
                    <label for="">Tên người nhận:</label>
                    <input type="text" class="form-control" required name="user" value="<?= $name?>">
                </div>
            
                <div class="form-group">
                    <label for="">Email:</label>
                    <input type="email" class="form-control" id="" required name="email" value="<?= $email ?>">
                </div>
                <div class="form-group">
                    <label for="">địa chỉ:</label>
                    <input type="text" class="form-control" name="diachi" required value="<?= $diachi ?>">
                </div>
                <div class="form-group">
                    <label for="">tel:</label>
                    <input type="text" class="form-control" name="tel" required value="<?= $tel ?>">
                </div>
                <input type="hidden" name="id_dh"value="<?php if(isset($id_dh)&&($id_dh)>0) echo $id_dh; ?>">
                <button type="submit" class="btn btn_1 " name="capnhat">Cập nhập </button>
                <button type="reset" class="btn btn_1 ">Nhập lại</button>
            </form>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>

</div>