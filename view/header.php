<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/style_user.css">
    <link rel="stylesheet" href="view/css/productdetails.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="shortcut icon" href="view/image/h2_fashion_logo.png" type="image/x-icon">
    <title>Thời trang nam </title>
</head>
<body onload="loadTrang()">
    <div class="container">
       <nav>
        <div class="logo">
            <a href="#" target="_blank" rel="noopener noreferrer">
                <img src="view/image/h2_fashion_logo.png" width="50px"alt="#">
            </a>
        </div>
        <div class="navbar">
            <ul class="nav-links">
                <li class="nav-link">
                    <a href="index.php">Trang chủ </a>
                </li>
                <li class="nav-link services">
                    <a href="#">Danh mục sản phẩm<i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                    <ul class="drop-down">
                        <?php
                                    foreach ($dsdm as $dm) {
                                    $linkdm = "index.php?act=sanpham&id=" . $dm['dm_id'];
                                    echo '<a href="'.$linkdm.'"><li>'.$dm['dm_name'].'<li></a></li>';
                                    }
                                ?>
                    </ul>
                </li>
                <!-- <li class="nav-link services">
                    <a href="#">Quần nam  <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                    <ul class="drop-down">
                        <a href="#"> <li> Quần sơ mi </li></a>
                       <a href="#"> <li> Quần skinny  </li></a>
                       <a href="#"> <li> Quần baggy </li></a>
                      
                    </ul>
                </li> -->
                <li class="nav-link">
                    <a href="#">Thông tin  </a>
                </li>
                <li class="nav-link">
                    <a href="#">Liên hệ </a>
                </li>
                <li class="nav-link">
                    <a href="#">Sale </a>
                </li>
            </ul>
        </div>

        <div class="icons">
           <!-- <input type="text" name="" id="">  -->
            <i class="fas fa-search" id="search-icon"> </i>
            <a href="#" class="fas fa-shopping-cart"></a>
            <!-- <a href="#" class="fas fa-heart"></a> -->
            <i class="fa-solid fa-circle-user"></i>
        </div>

    </nav>
    <!-- header -->
