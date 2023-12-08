<?php
// session_start();

// if (!isset($_SESSION['user']) || $_SESSION['user']['role'] == "0") {
//      header('location:../view/index.php');
// }
include "../model/pdo.php";
include "tulam.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/donhang.php";
include "../model/thongke.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

        case 'adddm':
            if (isset($_POST['themmoi']) && !empty($_POST['themmoi'])) {
                // Kiểm tra xem 'tenloai' đã được thiết lập và không rỗng
                if (isset($_POST['tenloai']) && !empty($_POST['tenloai'])) {
                    // Làm sạch dữ liệu đầu vào
                    $tenloai = htmlspecialchars($_POST['tenloai']);

                    // Thực hiện xác nhận bổ sung nếu cần

                    // Gọi hàm insert_danhmuc với dữ liệu đã được làm sạch
                    insert_danhmuc($tenloai);

                    // Hiển thị thông báo thành công bằng JavaScript
                    $thongbao = '<script>
                                    var thongbao = new Object();
                                    thongbao.name = "Bạn đã thêm thành công danh mục:";
                                    thongbao.nd = "' . $tenloai . '";
            
                                    thongbao.intro = function() {
                                        alert("Bạn đã thêm thành công danh mục: ' . $tenloai . '");
                                    }
            
                                    thongbao.intro();
                                </script>';
                } else {
                    // Hiển thị thông báo lỗi nếu 'tenloai' không được thiết lập hoặc rỗng
                    $thongbao = '<script>alert("Vui lòng nhập tên danh mục.");</script>';

                    // In thông báo lỗi chi tiết
                    echo "Lỗi: Tên danh mục không được để trống.";
                }
            } else {
                // In thông báo lỗi nếu không có yêu cầu POST hợp lệ
                echo "Lỗi: Yêu cầu không hợp lệ.";
            }


            include "danh mục/add.php";
            break;
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "danh mục/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "danh mục/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include "danh mục/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id, $tenloai);
                $thongbao = "banj đã sửa đổi thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danh mục/list.php";
            break;
        case 'addsp':

            if (isset($_POST['themmoi']) && !empty($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);

                // Kiểm tra xem đã upload hình ảnh thành công chưa
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // Kiểm tra kiểu MIME của tệp
                    $file_info = getimagesize($target_file);
                    $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];

                    if ($file_info !== false && in_array($file_info['mime'], $allowed_types)) {
                        // Kiểm tra giá và tên sản phẩm
                        if ($giasp > 0 && strlen($tensp) > 0 && strlen($tensp) <= 250) {
                            // Hình ảnh hợp lệ, giá và tên sản phẩm hợp lệ, tiếp tục thêm vào cơ sở dữ liệu
                            $mota = $_POST['mota'];
                            insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);

                            // Thông báo thành công bằng JavaScript
                            $thongbao = '<script>
                                var thongbao = new Object();
                                thongbao.name = "Bạn đã thêm sản phẩm thành công!";
                            
                                thongbao.intro = function() {
                                    alert("Bạn đã thêm sản phẩm thành công!");
                                }
                              
                                thongbao.intro();
                            </script>';
                        } else {
                            // Loại bỏ tệp hình ảnh nếu không hợp lệ
                            unlink($target_file);

                            // Thông báo lỗi nếu giá hoặc tên sản phẩm không hợp lệ
                            $thongbao = '<script>alert("Vui lòng nhập giá lớn hơn 0 và tên sản phẩm có độ dài từ 1 đến 250 ký tự.");</script>';
                        }
                    } else {
                        // Loại bỏ tệp hình ảnh nếu không hợp lệ
                        unlink($target_file);

                        // Thông báo lỗi nếu tệp không phải là hình ảnh hợp lệ
                        $thongbao = '<script>alert("Vui lòng chọn một tệp hình ảnh hợp lệ (JPEG, PNG, GIF).");</script>';
                    }
                } else {
                    // Thông báo lỗi nếu có lỗi khi upload hình ảnh
                    $thongbao = '<script>alert("Xin lỗi, có lỗi khi tải lên hình ảnh của bạn.");</script>';
                }
            }

            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;
        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = "";
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            /*  $limit = 5;
             if(isset($_GET['page'])) {
                 $page = $_GET['page'];

             } else {
                 $page = 1;
             }
             $start = ($page - 1) * $limit;
             $result_sanpham = result_sanpham($limit, $start); */
            include "sanpham/list.php";
            break;
        case 'xoasp':
            if (isset($_GET['id_pr']) && ($_GET['id_pr'] > 0)) {
                delete_sanpham($_GET['id_pr']);
            }
            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;
        case 'suasp':
            if (isset($_GET['id_pr']) && ($_GET['id_pr'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id_pr']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";
            break;
        case "updatesp":
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $id_pr = $_POST['id_pr'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($id_pr, $iddm, $tensp, $giasp, $mota, $hinh);
                $thongbao = "cap nhat thanh cong";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;
        case 'dskh':
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'xoatk':
            if (isset($_GET['id_tk']) && ($_GET['id_tk'] > 0)) {
                delete_taikhoan($_GET['id_tk']);
            }
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
        case 'listdh':


            $result_donhang = result_donhang();
            include "donhang/list.php";
            break;
        case 'list_carts':


            $result_carts = result_carts();
            include "carts/list.php";
            break;
        case 'suacart':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_donhang($_GET['id']);
            }
            include "donhang/update.php";
            break;
        case 'updatecart':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tt = $_POST['tt'];
                $id = $_POST['id'];
                update_carts($_POST['id'], $_POST['tt']);
                $thongbao = "banj đã sửa đổi thành công";
            }

            $result_donhang = result_donhang();
            include "donhang/list.php";
            break;
        case 'thongke':
            $dsthongke = load_thongke_sanpham_danhmuc();
            include "thongke/thongkesp-dm.php";
            break;
        case 'thongkesp':
            if (isset($_POST['check'])) {
                $bd = $_POST['bd'];
                $kt = $_POST['kt'];
                $dsthongke = load_thongke_sanpham_banchay($bd, $kt);
            }
            include "thongke/thongke-spbanchay.php";
            break;

        case 'bieudosp-dm':
            $dsthongke = load_thongke_sanpham_danhmuc();
            include "thongke/bieudosp-dm.php";
            break;
        case 'doanhthu':
            $dsthongke = doanhthu();
            include "thongke/doanhthu.php";
            break;



        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
