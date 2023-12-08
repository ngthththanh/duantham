<!-- <?php  
    session_start();
    include "../model/pdo.php";
    include "../model/taikhoan.php";
  
    if(isset($_SESSION['user'])){
        if($_SESSION['user']['role'] == "1"){
            header("Location:admin/index.php");
        }elseif($_SESSION['user']['role'] == "0") {
            header("Location:view/index.php");
        }
    }else {
        header("Location:view/index.php");
    }
?> -->