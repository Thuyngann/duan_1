
<div class="row">
            <div class="row frmtitle">
                <h1>DANH SÁCH BÌNH LUẬN</h1>
            </div>
            <div class="row frmcontent ">
                    <div class="row mb frmlist_pro">
                        <table>
                            <tr>
                                <th>ID</th>
                                <th>NỘI DUNG BÌNH LUẬN</th>
                                <th>ID user</th>
                                <th>ID product</th>
                                <th>Ngày bình luận</th>
                                <th>Thao tác</th>
                            </tr>
                            <?php
                                foreach ($binh_luan as $bl) {
                                    extract ($bl);
                                    // $suabl="index.php?act=suabl&id=".$id;
                                    $xoabl="index.php?act=xoabl&id=".$id;
                                    echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$nl_id.'</td>
                                    <td>'.$bl_content.'</td>
                                    <td>'.$tk_id.'</td>
                                    <td>'.$sp_id.'</td>
                                    <td>'.$bl_date.'</td>
                                    <td> <a href="' . $editdm . '"><i class="fa-regular fa-pen-to-square fa-fade fa-xl" style="color: #20365a;"></i></a> | <a href="' . $deletedm . '"><i class="fa-solid fa-trash fa-fade fa-xl" style="color: #020c1d;"></i></a> </td>
                                    </tr>';
                                }
                            ?>
                        </table>
                    </div>

            </div>
        </div>
