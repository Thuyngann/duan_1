<main>
    <!-- product  -->
    <div class="flex-box">
        <div class="m-left">
            <div class="big-img">
                <?php
                        $img=$img_path.$sp_image;
                        ?>
                <img src="<?=$img?>">
            </div>

        </div>

        <div class="m-right">
            <!-- <div class="url">Home > Product > T-Shirt</div> -->
            <div class="pname">
                <?=$sp_name?>
            </div>
            <div class="ratings">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">
                <p> Giá bán : </p>
                <span class="price-1">
                    <?=$sp_price_new?>.000
                </span>
                <del>
                    <?=$sp_price?>.000
                </del>
            </div>
            <div class="size">
                <p>Kích cỡ :</p>
                <div class="psize">M</div>
                <div class="psize">L</div>
                <div class="psize">XL</div>
                <div class="psize">XXL</div>
            </div>
            <!-- mau sác -->
            <!-- <div class="color">
                        <p>Màu sắc :</p>
                        <div class="color-1">den  </div>
                    <div class="color-2"> green </div>
                      
                    </div> -->

            <div class="quantity">
                <p>Số lượng :</p>
                <input type="number" min="1" max="100" value="1">
            </div>
            <div class="descrip">
                <h3>Mô tả sản phẩm</h3>
                <p>
                    <?=$sp_desc?>
                </p>
            </div>
            <div class="btn-box">
                <a href="#"> <button class="cart-btn"> <i class="fa-solid fa-cart-shopping"></i> Thêm vào giỏ hàng
                    </button> </a>
                <a href="#"> <button class="buy-btn">Mua ngay </button> </a>
            </div>
        </div>


    </div>
    <div class="cmt">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#binhluan").load("view/binhluan/binhluanform.php", { sp_id: <?= $sp_id ?>});
            });
        </script>
        <div class="row " id="binhluan"></div>
    </div>




    <h2> Sản phẩm liên quan </h2>
    <section class="products">
        <?php
            $i=0;
            foreach ($sp_cung_loai as $spcl) {
              extract($spcl);
              $linksp = "index.php?act=ctsp&idsp=".$sp_id;
              $img=$img_path.$sp_image;
              echo '<div class="products-item">
              <div class="products-top">
                  <a href="index.php?act=ctsp&id='.$sp_id.'" class="products-thumb" target="_blank">
                      <img src="'.$img.'" alt="" height="" srcset="">
                  </a>
                  <!-- mua ngay -->
                  <a href="" class="buy-now">  
                      <i class="fa-solid fa-cart-shopping"></i> 
                      <i class="fa-solid fa-heart"></i> 
                   </a>
                 </a>

                  
              </div>
              <div class="products-info">
                  <a href="index.php?act=ctsp&id='.$sp_id.'" class="products-name">'.$sp_name.'</a>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <!-- <i class="fa-solid fa-star"></i> -->
                  <i class="fa-solid fa-star-half"></i>

                  <div class="products-price">'.$sp_price_new.'.000  <del>'.$sp_price.'.000</del> </div>
              </div>
  
          </div>';
            }
          ?>

    </section>
    <!-- end  products  -->
</main>