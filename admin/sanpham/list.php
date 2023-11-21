<div class="row">
            <div class="row frmtitle mb">
                <h1>QUẢN LÝ SẢN PHẨM</h1>
            </div>
            <form action="" method="POST">
                            <input type="text" name="kyw" id="">
                            <select name="dm_id" id="">
                                <option value="0" selected>Tất cả</option>
                            <?php
                                foreach ($listdanhmuc as $dm) {
                                   extract($dm);
                                   echo '<option value="'.$dm_id.'">'.$dm_name.'</option>';
                                }
                            ?>
                         </select>
                         <input type="submit" style="margin-left:0%;" name="listok" value="LỌC">
                        </form>

            <div class="row frmcontent ">
                    <div class="row mb frmlist_pro">
                        <table>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>Tên sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th>Giá</th>
                                <th>Giá mới</th>
                                <th>Loại</th>
                                <th>Thao tác</th>

                            </tr>
                            <?php
                                foreach ($listsanpham as $sp) {
                                    extract ($sp);
                                    $suasp="index.php?act=suasp&id=".$sp_id;
                                    $xoasp="index.php?act=xoasp&id=".$sp_id;
                                    echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$sp_id.'</td>
                                    <td>'.$sp_name.'</td>
                                    <td> <img src="../upload/'.$sp_image.'" width="50px"></td>
                                    <td>'.$sp_price.'</td>
                                    <td>'.$sp_price_new.'</td>';
                                    foreach ($listdanhmuc as $dm) {
                                        // Kiểm tra điều kiện để hiển thị tên danh mục phù hợp với sản phẩm
                                        if ($dm['dm_id'] == $sp['dm_id']) {
                                            echo '<td>'.$dm['dm_name'].'</td>';
                                        }
                                    }
                                    echo'
                                    <td>
                                       <a href="'.$suasp.'"> <input type="button" value="Sửa" name="" id=""></a>
                                        <a href ="'.$xoasp.'"><input type="button" value="Xóa" name="" id=""></a>
                                    </td>
                                </tr>';
                                }
                            ?>
                        </table>
                    </div>
                    <div class="row mb">
                        <!-- <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa các mục đã chọn"> -->
                        <a href="index.php?act=addsp"> <input type="button" value="Nhập thêm">
                        </a>
                    </div>

            </div>
        </div>
