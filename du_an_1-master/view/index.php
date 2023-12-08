<?php

session_start();
ob_start();
function check_input($data)
{
    $data = trim($data);
    $data = htmlspecialchars($data);
    return $data;
}
if (!isset($_SESSION['giohang']))
    $_SESSION['giohang'] = [];
include "../model/pdo.php";
include "../model/sanpham.php";
include "../model/danhmuc.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/donhang.php";
$dsdm = loadall_danhmuc();
if (isset($_GET['iddm']) && ($_GET['iddm'])) {
    $iddm = $_GET['iddm'];
} else {
    $iddm = 0;
}
$namedm = loadone_ten_dm($iddm);
include "header.php";
include "global.php";
$spnew = loadall_sanpham_home();
$dstop10 = loadall_sanpham_home_top10();

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':

            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm']) > 0) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $allsp = loadall2_sanpham();
            $dsdm2 = sosanphamcuatungdanhmuc();
            $dssp = loadall_sanpham($kyw, $iddm);
            $namedm = loadone_ten_dm($iddm);
            include "sp.php";
            break;
        case 'sanphamct':

            if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
                $noidung = $_POST['noidung'];
                $idpro = $_POST['id_pr'];
                $iduser = $_SESSION['user']['id_tk'];
                $ngaybinhluan = date('h:i:sa d/m/Y');
                insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
                echo '<script>alert("bạn đã bình luận thanh công");</script>';
                $dsbl = loadall_binhluan($idpro);
            }
            if (isset($_GET['idsp']) && ($_GET['idsp'])) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $sp_cung_loai = load_sanpham_cungloai($id_pr, $iddm);
                $dsbl = loadall_binhluan($_GET['idsp']);

                include "sanphamct.php";
            } else {
                include "home.php";
            }

            break;

        case 'locsp':

            $sosanpham1 = sosanphamcuatungdanhmuc();
            include "locsp.php";
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $user = $_POST['user'];
               
                // Check if the email is valid
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo '<script>alert("Lỗi: Email không hợp lệ!");</script>';
                    echo "<script>window.location.href='index.php?act=dangky';</script>";
                    exit();
                }

                // Check if the password contains both letters and numbers and is at least 6 characters long
                if (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/', $pass)) {
                    echo '<script>alert("Lỗi: Mật khẩu phải chứa ít nhất một chữ và một số, và dài ít nhất 6 ký tự!");</script>';
                    echo "<script>window.location.href='index.php?act=dangky';</script>";
                    exit();
                }

                // Check if the username or email already exists in the database
                if (checkusermail($user, $email)) {
                    echo '<script>alert("Lỗi: Tài khoản hoặc tên người dùng đã tồn tại!");</script>';
                    echo "<script>window.location.href='index.php?act=dangky';</script>";
                } else {
                    // Check if the username contains whitespace
                    if (strpos($user, ' ') !== false) {
                        echo '<script>alert("Lỗi: Tên người dùng không được chứa khoảng trắng!");</script>';
                        echo "<script>window.location.href='index.php?act=dangky';</script>";
                        exit();
                    }

                    // Continue with the registration logic
                    insert_taikhoan($user, $pass, $email);
                    echo '<script>alert("Đăng ký thành công");</script>';
                    echo "<script>window.location.href='index.php?act=dangky';</script>";
                }
               
            }
            include "taikhoan/dangki-dangnhap.php";
            break;
        case "dangnhap":
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    echo '<script>alert("Chúc mừng đăng nhập thành công");</script>';
                    // header('Location:index.php?act=home');
                    echo "<script>window.location.href='index.php';</script>";
                } else {
                    echo '<script>alert("Tài khoản không tồn tại");</script>';
                }
            }
            include "taikhoan/dangki-dangnhap.php";


            break;
        case "edit_taikhoan":
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {

                $pass = $_POST['pass'];
                $user = $_POST['user'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $tel = $_POST['tel'];
                $id_tk = $_POST['id_tk'];
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo '<script>alert("Lỗi: Email không hợp lệ!");</script>';
                    // Có thể thêm chuyển hướng hoặc các xử lý khác tùy thuộc vào yêu cầu của bạn
               }

               // Kiểm tra xem số điện thoại có đúng định dạng không
               if (!preg_match('/^0[0-9]{9}$/', $tel)) {
                    echo '<script>alert("Lỗi: Số điện thoại không hợp lệ!");</script>';
                    // Có thể thêm chuyển hướng hoặc các xử lý khác tùy thuộc vào yêu cầu của bạn
               }
                update_taikhoan($id_tk, $user, $pass, $email, $diachi, $tel);
                $_SESSION['user'] = checkuser($user, $pass);

                header('location:index.php?act=edit_taikhoan');
            }
            include "taikhoan/edit_taikhoan.php";

            break;
        case 'quenmk':

            if (isset($_POST['guimail']) && ($_POST['guimail'])) {
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = '<script>
                            var thongbao = new Object();
                            thongbao.name = "mật khẩu của bạn là:";
                            thongbao.name2="' . $checkemail['pass'] . '";
                        
                        
                            thongbao.intro = function() {
                                alert( "mật khẩu của bạn là:' . $checkemail['pass'] . '");
                    
                    
                            }
                        
                            thongbao.intro();
                        </script>';
                } else {
                    $thongbao = '<script>
                    var thongbao = new Object();
                    thongbao.name = "email này không tồn tại!" ;
                   
                   
                    thongbao.intro = function() {
                        alert( "email này không tồn tại!");
            
            
                    }
                  
                    thongbao.intro();
                </script>';
                }
            }
            include "taikhoan/quenmk.php";
            break;
        case 'thoat':
            //code//
            if (isset($_SESSION['user'])) {
                unset($_SESSION['user']);
            }
            header('Location: /view/index.php');
            exit();
            // echo "<script>window.location.href='index.php';</script>";
        case 'addcart':

            // session_destroy();
            // die;
            if (isset($_SESSION['user'])) {
                if (isset($_POST['addtocart'])) {
                    $userID = $_SESSION['user']['id_tk'];
                    $id_pr = $_POST['id_pr'];
                    $tensp = $_POST['tensp'];
                    $img = $_POST['hinh'];
                    $gia = $_POST['giasp'];
                    $sl = isset($_POST['sl']) ? $_POST['sl'] : 1;
                    $key = "giohang-$userID";
                    if (isset($_SESSION[$key][$id_pr])) {
                        $_SESSION[$key][$id_pr]['sl'] = intval($sl) + intval($_SESSION[$key][$id_pr]['sl']);
                        $_SESSION[$key][$id_pr]['tt'] = $_SESSION[$key][$id_pr]['sl'] * $_SESSION[$key][$id_pr]['giasp'];
                    } else {
                        $_SESSION[$key][$id_pr] = [
                            'id_pr' => $_POST['id_pr'],
                            'tensp' => $_POST['tensp'],
                            'hinh' => $_POST['hinh'],
                            'giasp' => intval($_POST['giasp']),
                            'sl' => $sl,
                            'tt' => intval($_POST['sl']) * intval($_POST['giasp'])
                        ];
                    }
                    //     echo "<pre>";
                    //    print_r($_SESSION);die;
                }

                include "giohang.php";
            } else {
                echo "<script>alert('vui lòng đăng nhập để thêm vào giỏ hàng')</script>";
                echo "<script>window.location.href='index.php?act=dangnhap';</script>";
            }

            break;
        case 'decart':

            if (isset($_GET['i']) && $_GET['i'] >= 0) {
                array_splice($_SESSION[$key], $_GET['i'], 1);
            }
            if (isset($_GET['xoagiohang'])) {
                $userID = $_SESSION['user']['id_tk'];
                $key = "giohang-$userID";
                unset($_SESSION[$key]);
                // var_dump($_SESSION);
            }
            if (isset($_SESSION['giohang']) && $_GET['i'] >= 0) {
                //header('locatinon:index.php?act=addcart');
                echo "<script>window.location.href='index.php?act=addcart';</script>";
            } else {
                echo "<script>window.location.href='index.php';</script>";
                //header('locatinon:index.php');
            }


        case 'thongtin':

            if (isset($_POST['thanhtoan'])) {
                $userID = $_SESSION['user']['id_tk'];
                $tong = $_POST['tong'];
                $name = $_POST['name'];
                $diachi = $_POST['diachi'];
                $email = $_POST['email'];
                $tel = $_POST['tel'];
                $pttt = $_POST['pttt'];
                $madh = "ABCD" . rand(0, 9999);
                $ngaymua = date(' Y/m/d');
                $_SESSION['tong'] = $tong;
                $_SESSION['madh'] = $madh;
                $iddh = taodonhang($madh, $tong, $pttt, $userID, $name, $email, $diachi, $tel, $ngaymua);
                $_SESSION['iddh'] = $iddh;
                /* $_SESSION[ $userID][$iddh] = [
                   
                    'tong' => $_POST['tong'],
                    'name' => $_POST['name'],
                    'diachi' => $_POST['diachi'],
                    'email' => $_POST['email'],
                    'tel' => $_POST['tel'],
                    'pttt' => $_POST['pttt'],
                    'madh' =>$madh
                ]; */
                $key = "giohang-$userID";
                if ((isset($_SESSION['user']))) {
                    if (!empty($_SESSION[$key])) {

                        foreach ($_SESSION[$key] as $arr) {
                            $a = addtocart($iddh, $arr['id_pr'], $arr['tensp'], $arr['hinh'], $arr['giasp'], $arr['sl']);
                        }
                        $showcart = showcart($_SESSION['iddh']);
                        $showtt = showtt($_SESSION['iddh']);
                        if ($_POST['pttt'] == "Momo") {
                            header('location:index.php?act=momo');
                        } elseif ($_POST['pttt'] == "atm") {
                            header('location:index.php?act=momo_atm');
                        } else {
                            echo '<script>alert("mã đơn hàng của quý khách là :' . $madh . '.sử dụng mã này để theo dõi đơn hàng");</script>';
                        }
                    }
                    unset($_SESSION[$key]);
                }
                header('locatinon:theodoionhang.php');
            }


            include 'thongtin.php';
            break;
            /*       case 'bill':
              $showcart = showcart($_SESSION['iddh']);
              $showtt = showtt($_SESSION['iddh']);
              include "bill.php";
              break; */
        case 'momo':

            include "xulythanhtoanmomo.php";
            break;
        case 'user':

            include "user.php";
            break;
        case 'momo_atm':

            /*   include "xulythanhtoanmomo_atm.php"; */
            include "t.php";
            break;
        case 'trangthai':
            if (isset($_POST['tt']) && ($_POST['tt'] != "")) {
                $tt1 = check_input($_POST['tt']);
                $trangthai0 = loadall_trangthai($tt1);
                if (isset($trangthai0)) {
                    foreach ($trangthai0 as $trangthai1) {
                        extract($trangthai1);
                        if ($trangthai == 0) {
                        } elseif ($trangthai == 1) {
                        } elseif ($trangthai == 2) {
                        } elseif ($trangthai == 3) {
                            echo '<script>alert("đơn hàng của bạn được giao thành công , hãy đánh giá và cho shop 5 sao nhá");</script>';
                        }
                    }
                }
                if (empty($trangthai0)) {
                    echo '<script>alert("mã đơn hàng của bạn tìm kiếm không tồn tại");</script>';
                }
            }

            /*  $donhang=loadone_cart($tt1);
          $trangthai=loadall_trangthai($tt1); */
            include "theodoidonhang.php";
            break;
        case 'bill':
            if (isset($_POST['chitiet'])) {
                $id = $_POST['id'];
            }
            if (isset($_POST['suatt'])) {
                $id = $_POST['id'];

                $ttsua = load_one_donhang($id);
                header('loaction:index.php?act=suatt.php');
            }

            $bill = load_bill($id);
            /*  echo "</pre>";
             print_r($bill);
             die; */
            include "bill.php";
            break;
        case 'suatt':
            if (isset($_POST['suatt'])) {
                $id = $_POST['id'];

                $ttsua = load_one_donhang($id);
            }



            $ttsua = load_one_donhang($id);

            include "suatt.php";
            break;
        case 'trogiup':

            include "trogiup.php";
            break;
        case 'lienhe':

            include "lienhe.php";
            break;
        case 'gioithieu':

            include "gioithieu.php";
            break;
        case 'blog':

            include "blog.php";
            break;
        default:
            //code//
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
