
<?php
// Model sanpham
function insert_sanpham($sp_name, $sp_price, $sp_price_new, $sp_image, $sp_desc, $sp_quantity, $dm_id){
    $sql="INSERT INTO `san_pham` (`sp_name`, `sp_image`, `sp_price_new`, `sp_price`, `sp_quantity`, `sp_desc`,  `dm_id`) VALUES ('$sp_name', '$sp_image', '$sp_price_new', '$sp_price', '$sp_quantity', '$sp_desc', '$dm_id')";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql="DELETE FROM san_pham WHERE `san_pham`.`sp_id` =" .$id;
    pdo_execute($sql);


}
function loadall_sanpham($kyw, $dm_id){
    $sql = "SELECT * FROM `san_pham` where 1 ";
    if ($kyw!="") { 
    $sql.="AND `sp_name` like '%".$kyw."%'"; 
    } 
    if ($dm_id>0) { 
    $sql.="AND `dm_id` = '".$dm_id."'"; 
    } 
    $sql.=" ORDER BY `sp_id` desc"; 
    $listsanpham=pdo_query($sql); 
    $listdanhmuc=pdo_query($sql);

    return $listsanpham; 
}
function load_tendanhmuc($dm_id){
    if ($dm_id>0) {
        $sql ="SELECT * FROM `danh_muc` WHERE `dm_id` = ".$dm_id;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $dm_name;
        } else {
        return "";
    }
    
}

function loadall_sanpham_top10(){
    $sql = "SELECT * FROM `san_pham`  ORDER BY `sp_view` limit 0,10 ";
    $listsanpham=pdo_query($sql);
    return $sanpham;
}
function loadall_sanpham_home(){
    $sql = "SELECT * FROM `san_pham` where 1 ORDER BY `sp_id` desc limit 0,9";
    $listsanpham=pdo_query($sql);
    $listdanhmuc=pdo_query($sql);
    return $listsanpham;
}
function loadone_sanpham($id){
    $sql ="SELECT * FROM `san_pham` WHERE `sp_id` = ".$id;
    $sp=pdo_query_one($sql);
    return $sp;
}
function load_sanpham_cungloai($id, $dm_id){
    $sql ="SELECT * FROM `san_pham` WHERE `dm_id`=".$dm_id." AND `sp_id` <> ".$id;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function update_sanpham($dm_id, $id, $sp_name, $sp_price_new, $sp_price, $sp_desc, $sp_quantity, $filename){
    if($filename==""){
        $sql = "UPDATE `san_pham` SET 
                    `dm_id` = '{$dm_id}', 
                    `sp_name` = '{$sp_name}',
                    `sp_price_new` = '{$sp_price_new}',
                    `sp_price` = '{$sp_price}', 
                    `sp_desc` = '{$sp_desc}', 
                    `sp_quantity` = '{$sp_quantity}' 
                WHERE `sp_id` ='{$id}'";
    }
    else {
        $sql = "UPDATE `san_pham` SET 
                    `dm_id` = '{$dm_id}', 
                    `sp_name` = '{$sp_name}',
                    `sp_price_new` = '{$sp_price_new}', 
                    `sp_price` = '{$sp_price}', 
                    `sp_desc` = '{$sp_desc}', 
                    `sp_quantity` = '{$sp_quantity}', 
                    `sp_image` = '{$filename}' 
                WHERE `sp_id` ='{$id}'";
    }
    
    pdo_execute($sql);
}
?>