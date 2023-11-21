<div class="row">
        <div class="row frm_title">
            <h1>DANH SÁCH TÀI KHOẢN</h1>
        </div>
        <div class="row frm_content">
            <div class="row mb10 frmlist">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ TÀI KHOẢN</th>
                        <th>TÊN ĐĂNG NHẬP</th>
                        <th>MẬT KHẨU</th>
                        <th>EMAIL</th>
                        <th>ĐỊA CHỈ</th>
                        <th>ĐIỆN THOẠI</th>
                        <th>VAI TRÒ</th>
                        <th>THAO TÁC</th>
                    </tr>
                    <?php
                    $list_taikhoan = loadall_taikhoan();
                    foreach ($list_taikhoan as $taikhoan) {
                        extract($taikhoan);
                        $edit_tk = "index.php?act=edit_tk&id=" . $tk_id;
                        $delete_tk = "index.php?act=delete_tk&id=" . $tk_id;
                        echo
                            '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>' . $tk_id . '</td>
                        <td>' . $tk_name . '</td>
                        <td>' . $tk_pass . '</td>
                        <td>' . $tk_email . '</td>
                        <td>' . $tk_address . '</td>
                        <td>' . $tk_sdt . '</td>
                        <td>' . $tk_role . '</td>
                        <td> <a href="'.$delete_tk.'"><i class="fa-solid fa-trash fa-fade fa-xl" style="color: #020c1d;"></i></a> </td>
                       
                    </tr>';
                    }
                    ?>
                </table>
            </div>
            
        </div>
    </div>
