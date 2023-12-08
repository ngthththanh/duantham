<?php
function   insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan)
{
 
    $sql = "insert into binhluan (noidung,iduser,idpro,ngaybinhluan) values('$noidung','$iduser','$idpro','$ngaybinhluan')";
    pdo_execute($sql);
}
function loadall_binhluan($idpro)
{
    /*  $sql = " SELECT binhluan.id_bl, binhluan.noidung, taikhoan.user, binhluan.ngaybinhluan, sanpham.name FROM `binhluan` 
         LEFT JOIN taikhoan ON binhluan.iduser = taikhoan.id_tk
         LEFT JOIN sanpham ON binhluan.idpro = sanpham.id_pr
         WHERE  sanpham.id_pr = $idpro";     
         $sql .= " GROUP BY binhluan.id_bl
                 ORDER BY binhluan.id_bl DESC"; */
    $sql = "SELECT binhluan.id_bl, binhluan.noidung, taikhoan.user, binhluan.ngaybinhluan, sanpham.name FROM `binhluan` 
                LEFT JOIN taikhoan ON binhluan.iduser = taikhoan.id_tk 
                LEFT JOIN sanpham ON binhluan.idpro = sanpham.id_pr 
                WHERE sanpham.id_pr =$idpro 
                GROUP BY binhluan.id_bl";


    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}