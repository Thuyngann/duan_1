<div class="row">
            <div class="row frmtitle">
                <h1>THÊM MỚI SẢN PHẨM</h1>
            </div>
            <div class="row frmcontent ">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row mb">
                        Danh mục <br>
                        <select name="dm_id" id="">
                            <?php
                                foreach ($listdanhmuc as $dm) {
                                   extract($dm);
                                   echo '<option value="'.$dm_id.'">'.$dm_name.'</option>';
                                }
                            ?>
                         </select>
                    </div>
                    <div class="row mb">
                        Tên sản phẩm <br>
                        <input type="text" name="sp_name" id="" required>

                    </div>
                    <div class="row mb">
                        Giá <br>
                        <input type="text" name="sp_price" id="" required>

                    </div>
                    <div class="row mb">
                        Giá khuyến mại <br>
                        <input type="text" name="sp_price_new" id="" required>

                    </div>
                    <div class="row mb">
                        Số lượng <br>
                        <input type="text" name="sp_quantity" id="" required>

                    </div>
                    <div class="row mb">
                        Hình ảnh <br>
                        <input type="file" name="sp_image" id="" required>

                    </div>
                    <div class="row mb">
                        Mô tả <br>
                        <textarea name="sp_desc" id="" cols="30" rows="10"></textarea>

                    </div>
                    <div class="row mb">
                        <input type="submit" name="add" style="margin-left:0%;" value="THÊM MỚI">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listsp"> <input type="button" value="DANH SÁCH">
                        </a>
                    </div>
                    <div class="tb">
                    <?php
                        if(isset($thongbao)&&($thongbao!="")){
                            echo $thongbao;
                        }
                    ?>


                    </div>
                </form>
            </div>
        </div>
