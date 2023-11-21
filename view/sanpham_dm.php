<section class=""></section>
<main>
        <h3 class="spdm"> SẢN PHẨM <?=$tendm?> </h3>
       
        <div class="products">
          <?php
            $i=0;
            foreach ($dssp as $sp) {
              extract($sp);

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

        <!-- end -->
          
      </div>
      <!-- end  products  -->

      <!-- ship -->



       
    </main>
    