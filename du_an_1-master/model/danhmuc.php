<?php
/* function insert_danhmuc($tenloai){
    $sql="insert into danhmuc(namedm) values('$tenloai')";
    pdo_execute($sql); */
function insert_danhmuc($tenloai)
{
    $sql = "insert into danhmuc(namedm) values('$tenloai')";
    pdo_execute($sql);
}
function loadall_danhmuc()
{
    $sql = "select * from danhmuc order by id desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;

}
function loadone_ten_dm($iddm){
    if($iddm>0){
        $sql="select * from danhmuc where id=".$iddm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $namedm;
    }else{
        return"";
    }
}

function delete_danhmuc($id)
{
    $sql = "delete from danhmuc where id=" . $id;
    pdo_execute($sql);
}
function loadone_danhmuc($id)
{
    $sql = "select * from danhmuc where id=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function sosanphamcuatungdanhmuc(){
    $sql="SELECT danhmuc.namedm, COUNT(sanpham.iddm) AS sosanpham
    FROM danhmuc
    LEFT JOIN sanpham ON sanpham.iddm = danhmuc.id
    GROUP BY danhmuc.id
    ORDER BY danhmuc.id DESC;";
    $sosanpham= pdo_query($sql);
    return $sosanpham;
}
function update_danhmuc($id,$tenloai){
    $sql="update danhmuc set namedm='".$tenloai."'where id=".$id;
    pdo_execute($sql);
}


?>