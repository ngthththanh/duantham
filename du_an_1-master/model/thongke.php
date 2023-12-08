<?php
function load_thongke_sanpham_danhmuc()
{
  $sql = "SELECT dm.id, dm.namedm, COUNT(*) 'soluong', MIN(price) 'gia_min',
     MAX(price) 'gia_max', AVG(price) 'gia_avg' FROM danhmuc dm JOIN sanpham sp ON dm.id=sp.iddm GROUP BY dm.id, dm.namedm ORDER BY soluong DESC";
  return pdo_query($sql);
}

function load_thongke_sanpham_banchay($bd, $kt)
{
  $sql = "SELECT
  sanpham.id_pr,
  sanpham.name,
  sanpham.img,
  COUNT(*) as soluong,
  sanpham.price
FROM
  `donhang`
  JOIN carts ON donhang.id_dh = carts.id_dh
  JOIN sanpham ON sanpham.id_pr = carts.id_pr
WHERE
  ngaymua BETWEEN '" . $bd . "' AND '" . $kt . "' 
GROUP BY sanpham.id_pr, sanpham.name  
ORDER BY `soluong` ASC;";
  return pdo_query($sql);
}
function doanhthu()
{
  $sql = "SELECT
  MONTH(ngaymua) as thang,
  SUM(tongdonhang) as total
FROM
  `donhang`
WHERE
  YEAR(ngaymua) = 2023
GROUP BY thang
ORDER BY thang;";
  return pdo_query($sql);
}
?>