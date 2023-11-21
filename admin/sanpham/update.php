<!-- Update -->
<?php
    if (is_array($sp)) {
        extract($sp);
    }
?>
<div class="row">
            <div class="row frmtitle">
                <h1>CẬP NHẬT SẢN PHẨM</h1>
            </div>
            <div class="row frmcontent ">
                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                <div class="row mb">
                        Danh mục <br>
                        <select name="dm_id" id="">
                            <?php
                                foreach ($listdanhmuc as $dm) {
                                   extract($dm);
                                   if ($dm_id==$dm_id) {
                                    echo '<option value="'.$dm_id.'" selected>'.$dm_name.'</option>';

                                   }
                                   else {
                                    echo '<option value="'.$dm_id.'">'.$dm_name.'</option>';

                                   }
                                }
                            ?>
                         </select>
                    </div>
                    <div class="row mb">
                        Tên sản phẩm <br>
                        <input type="text" name="sp_name" id="" value="<?=$sp_name?>">

                    </div>
                    <div class="row mb">
                        Giá <br>
                        <input type="text" name="sp_price" id="" value="<?=$sp_price?>">

                    </div>
                    <div class="row mb">
                        Giá khuyến mại <br>
                        <input type="text" name="sp_price_new" id="" value="<?=$sp_price_new?>"> 

                    </div>
                    <div class="row mb">
                        Số lượng <br>
                        <input type="text" name="sp_quantity" id="" value="<?=$sp_quantity?>">

                    </div>
                    <div class="row mb">
                        Hình ảnh <br>
                        <input type="file" name="sp_image" id="">
                        <img src="<?=$sp_image?>" alt="" width="50px">
                    </div>
                    <div class="row mb">
                        Mô tả <br>
                        <textarea name="sp_desc" id="" cols="30" rows="10" ><?=$sp_desc?></textarea>

                    </div>
                    <div class="row mb">
                        <input type="hidden" name="id" value="<?=$sp_id?>">
                        <input type="submit" name="update" value="CẬP NHẬT">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listsp"> <input type="button" value="DANH SÁCH">
                        </a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")){
                            echo $thongbao;
                        }
                    ?>
                </form>
            </div>
</div>
