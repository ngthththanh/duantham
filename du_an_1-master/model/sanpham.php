<?php
function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm){
    $sql="insert into sanpham(name,price,img,mota,iddm) values('$tensp','$giasp','$hinh','$mota','$iddm')";
    pdo_execute($sql);
}
/* function loadall_sanpham($kyw="",$iddm=0){
    $sql = "SELECT sanpham.*, COUNT(binhluan.id_bl) as soBinhLuan
    FROM sanpham LEFT JOIN binhluan ON binhluan.id_sp = sanpham.id_pr WHERE 1";
    if ($kyw != "") {
    $sql .= " AND sanpham.name LIKE '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
    $sql .= " AND sanpham.iddm = '" . $iddm . "'";
    }
    $sql .= " GROUP BY sanpham.id_pr
        ORDER BY sanpham.id_pr DESC";
        $listsanpham=pdo_query($sql);
    return $listsanpham;

} */
function loadall_sanpham($kyw="",$iddm=0){
    $sql="select * from sanpham where 1 ";
     if($kyw!=""){
        $sql .= " and sanpham.name like '%" .$kyw. "%'";
     }
     if($iddm>0){
        $sql .= " and sanpham.iddm='" .$iddm. "'";
     }
    $sql.= " GROUP BY sanpham.id_pr
     order by sanpham.id_pr desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function result_sanpham($limit,$start){
    $sql = "SELECT * FROM sanpham ORDER BY id_pr DESC LIMIT $start,$limit";
    $result = pdo_query($sql);
    return $result;
}
function alll_row_sanpham(){
    $sql ="SELECT COUNT(sanpham.id_pr) FROM sanpham ";
    $result = pdo_query($sql);
    return $result;
}
function loadall2_sanpham(){
    $sql="select * from sanpham where 1  order by sanpham.id_pr desc ";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}



function loadall_sanpham_home(){
    $sql="select * from sanpham where 1  order by id_pr desc limit 0,8 ";

  
    $listsanpham=pdo_query($sql);
    return $listsanpham;

}
function delete_sanpham($id_pr){
    $sql="delete from sanpham where id_pr=".$id_pr;
    pdo_execute($sql);
}
function loadone_sanpham($id_pr){
    $sql="select * from sanpham where id_pr=".$id_pr;
  
    $sp=pdo_query_one($sql);
    return $sp;
}
function loadall_sanpham_home_top10(){
    $sql="select *from sanpham where 1 order by luotxem desc limit 0,10 ";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

function load_sanpham_cungloai($id_pr,$iddm){
    $sql="select * from sanpham where iddm=".$iddm." AND id_pr <>".$id_pr;
    $listsanpham=pdo_query($sql);
    return $listsanpham;

}

function  update_sanpham($id_pr,$iddm,$tensp,$giasp,$mota,$hinh){
    if($hinh!="")
        $sql="update sanpham set iddm='".$iddm."', name='".$tensp."',price='".$giasp."',mota='".$mota."',hinh='".$hinh."'where id_pr=".$id_pr;
    else
        $sql="update sanpham set iddm='".$iddm."', name='".$tensp."',price='".$giasp."',mota='".$mota."'where id_pr=".$id_pr;
    pdo_execute($sql);
}
 ?>