<?php


function taodonhang($madh, $tong, $pttt, $userID, $name, $email, $diachi, $tel,$ngaymua) {
  $conn = pdo_get_connection();
  $sql = "INSERT INTO donhang(madh, tongdonhang, pthuctt, id_tk, name, email, diachi, tel,ngaymua) 
          VALUES (:madh, :tong, :pttt, :userID, :name, :email, :diachi, :tel,:ngaymua)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':madh', $madh);
  $stmt->bindParam(':tong', $tong);
  $stmt->bindParam(':pttt', $pttt); // Chú ý sửa tên tham số này thành :pttt
  $stmt->bindParam(':userID', $userID);
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':diachi', $diachi);
  $stmt->bindParam(':tel', $tel);
  $stmt->bindParam(':ngaymua', $ngaymua);
  $stmt->execute();
  $last_id = $conn->lastInsertId();
  return $last_id;
}

function iddh() {
  $sql = "SELECT donhang.id_dh FROM donhang ";
  $result = pdo_query($sql);
  return $result;
}
function addtocart($iddh, $id_pr, $tensp, $img, $gia, $sl) {
  $sql = "insert into carts (id_dh,id_pr,tensp,img,dongia,soluong)
values('$iddh','$id_pr',' $tensp',' $img',' $gia',' $sl')";
  pdo_execute($sql);
}
function showcart($iddh){
  $sql="select * from carts where id_dh='".$iddh."'";
  $sp=pdo_query_one($sql);
  return $sp;

}
function showtt($iddh){
  $sql="select * from donhang where id_dh='".$iddh."'";
  $sp=pdo_query_one($sql);
  return $sp;
     
}
function result_donhang(){
 
  $sql="SELECT  donhang.id_dh,donhang.madh ,donhang.tongdonhang ,donhang.pthuctt,donhang.name ,donhang.email,donhang.diachi,donhang.tel,donhang.trangthai, taikhoan.user 
  from donhang LEFT JOIN taikhoan on donhang.id_tk=taikhoan.id_tk order by donhang.id_dh desc ";
  $result = pdo_query($sql);
  return $result;
}
function alll_row_donhang(){
  $sql ="SELECT COUNT(donhang.id_dh) FROM donhang ";
  $result = pdo_query($sql);
  return $result;
}

function result_carts(){
 
  $sql="SELECT carts.id_cart, carts.soluong, carts.dongia ,carts.tensp, carts.img, donhang.madh 
  from carts left JOIN donhang on donhang.id_dh=carts.id_dh group by carts.id_cart 
  order by carts.id_cart desc ;";
  $result = pdo_query($sql);
  return $result;
}
function alll_row_carts(){
  $sql ="SELECT COUNT(carts.id_cart) FROM carts ";
  $result = pdo_query($sql);
  return $result;
}
function loadone_carts($id)
{
    $sql = "select *  from donhang where id_dh=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_carts($id,$tt){
  
  $sql="update donhang set trangthai='".$tt."' where id_dh=" .$id;
  pdo_execute($sql);
}
/* function update_carts($id, $tt) {
  $conn = pdo_get_connection();
  $sql = "UPDATE donhang SET trangthai = :tt WHERE id_dh = :id";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':tt', $tt);
  $stmt->bindParam(':id', $id);
  $stmt->execute();
} */

function loadall_carts()
{
  
    $sql = "select * from carts order by id_cart desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;

}

function loadall_trangthai($tt1=""){
  $sql="select * from donhang where 1 ";
   if($tt1!=""){
      $sql .= " and donhang.madh like '%" .$tt1. "%'";
   }
   
  $sql.= " GROUP BY donhang.id_dh 
   order by donhang.id_dh desc";
  $listdonhang=pdo_query($sql);
  return $listdonhang;
}

function loadone_donhang($id_dh){
  $sql="select * from donhang where id_dh=$id_dh";
  $t=pdo_query_one($sql);
  return $t;
}
function load_one_donhang($id){
  $sql="select * from donhang where id_dh=$id";
  $t=pdo_query_one($sql);
  return $t;
}
function load_bill($id){
  $sql="SELECT carts.tensp,carts.dongia,carts.soluong,donhang.trangthai,sanpham.img FROM carts LEFT JOIN donhang on donhang.id_dh=carts.id_dh
   LEFT JOIN sanpham on sanpham.id_pr=carts.id_pr WHERE donhang.id_dh= $id";
 
  $listdonhang=pdo_query($sql);
  return $listdonhang;
}
function loadone_cart($tt1){
  $sql="select * from sanpham where madh=".$tt1;

  $sp=pdo_query_one($sql);
  return $sp;
}