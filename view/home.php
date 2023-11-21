<header>
        <div class="carousel">
            <button onclick="previous()" class="btn btn-prev">
                <i class="arrow left"></i>
            </button>
            <div class="carousel-slides">
                <div class="active slide slide1"></div>
                <div class="slide slide2"></div>
                <div class="slide slide3"></div>
            </div>
            <button onclick="next()" class="btn btn-next">
                <i class="arrow right"></i>
            </button>
        </div>
    </header>

    <h2>Sản phẩm yêu thích </h2>
     <section class="contents">
       <div class="hot-contents">

       <!--  -->
       <div class="hot-contents">
        <div class="c-img">
            <a href="#">   <img src="view/imgda1/news-p5-polo.jpg" alt="" > </a>
            
          </div>
          <div class="c-img">
              <a href="#">   <img src="view/imgda1/news-p3-quanSkinny.jpg" alt="" > </a>
            </div>
            <div class="c-img">
              <a href="#">   <img src="view/imgda1/news-p3-quanBaggy.jpg" alt="" > </a>
            </div>
       </div>
     </section><!-- contentts  -->
<main>
        <h3>Thời trang mới nhất </h3>
       
        <div class="products">
          <?php
            $i=0;
            foreach ($newPro as $pro) {
              extract($pro);

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
    