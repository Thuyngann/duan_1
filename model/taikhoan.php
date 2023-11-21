<?php
function insert_taikhoan($tk_name, $tk_role, $tk_pass,$tk_email,$tk_sdt,$tk_address)
{
    $sql = "INSERT INTO tai_khoan(tk_name, tk_role, tk_pass,tk_email,tk_sdt,tk_address) VALUES('$tk_name','$tk_role','$tk_pass','$tk_email','$tk_sdt','$tk_address')";
    pdo_execute($sql);
}
function loadall_taikhoan()
{
    $sql = "SELECT * FROM tai_khoan ORDER BY tk_id DESC";
    $list_tk = pdo_query($sql);
    return $list_tk;
}
function delete_taikhoan($id){
    $sql="DELETE FROM tai_khoan WHERE `tai_khoan`.`tk_id` =" .$id;
    pdo_execute( $sql);


}

?>