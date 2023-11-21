<?php
    function insert_binhluan($bl_content, $tk_id, $sp_id, $bl_date){
        $sql="INSERT INTO `binh_luan` (`bl_content`,`tk_id`, `sp_id`, `bl_date`) VALUES ('$bl_content', '$tk_id', '$sp_id',' $bl_date')";
        pdo_execute($sql);
    
    }
    function loadall_binhluan($sp_id){
        $sql = "SELECT * FROM `binh_luan` where 1";
        if ($sp_id>0) {
            $sql.=" AND `sp_id`='".$sp_id."'";
        }
        $sql.=" ORDER BY `bl_id` desc";

        $binh_luan=pdo_query($sql);
        return $binh_luan;
    }
    function delete_binhluan($id){
        $sql="DELETE FROM binh_luan WHERE `binh_luan`.`id` =" .$id;
        pdo_execute( $sql);
    
    
    }
    
    
?>