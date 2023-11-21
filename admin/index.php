<?php
include "header.php";
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/sanpham.php";
if (isset($_GET["act"])) {
    $act = $_GET["act"];
    switch ($act) {
        case 'tk':
            include "taikhoan/list.php";
            break;
            case 'adddm':
                // kiểm tra ng dùng có ấn vào add ko
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    if ($_POST['tenloai'] != '') {
                        $tenloai = $_POST['tenloai'];
                        insert_danhmuc($tenloai);
                        $thongbaor = "Thêm thành công";
                    } else {
                        $thongbaor = 'Mời nhập tên danh mục';
                    }
                }
                include "danhmuc/add.php";
                break;
    
            case 'listdm':
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
    
            case 'deletedm':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc = loadall_danhmuc();
    
                include "danhmuc/list.php";
                break;
            case 'editdm':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $danhmuc = loadone_danhmuc($_GET['id']);
                }
                // $listdanhmuc = loadall_danhmuc();
                include "danhmuc/update.php";
                break;
            case 'updatedm':
                if (isset($_POST['capnhat']) && ($_POST['capnhat']) && ($_POST['tenloai'] != ' ')) {
                    $tenloai = $_POST['tenloai'];
                    $id = $_POST['id'];
                    update_danhmuc($id, $tenloai);
                    $thongbao = "cập nhật thành công";
                } else {
                    $thongbaor = 'tên rỗng';
                }
                $sql = "SELECT * FROM danhmuc ORDER BY id DESC";
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
                //controler sản phẩm
                case 'addsp':
                    //KT xem admin có click vào add hay k
                    if (isset($_POST['add']) && ($_POST['add'])) {
                        $dm_id = $_POST['dm_id'];
                        $sp_name = $_POST['sp_name'];
                        $sp_price = $_POST['sp_price'];
                        $sp_price_new = $_POST['sp_price_new'];
                        $sp_quantity = $_POST['sp_quantity'];
                        $sp_desc = $_POST['sp_desc'];
                        $filename = $_FILES['sp_image']['name'];

                        $target_dir = "../upload/";
                        $target_file = $target_dir.basename($_FILES["sp_image"]["name"]);
                        if (move_uploaded_file($_FILES["sp_image"]["tmp_name"], $target_file)) {
                            // echo "The file ". htmlspecialchars( basename( $_FILES["pro_img"]["name"])). " has been uploaded.";
                        } else {
                            //echo "Sorry, there was an error uploading your file.";
                        }
        
                        insert_sanpham($sp_name, $sp_price, $sp_price_new, $target_file, $sp_desc, $sp_quantity, $dm_id);
                                                $thongbao = "Thêm thành công";
                    }
                    $listdanhmuc = loadall_danhmuc();
                    include "sanpham/add.php";
                    break;
                case 'listsp':
                    if (isset($_POST['listok']) && ($_POST['listok'])) {
                        $kyw = $_POST['kyw'];
                        $dm_id = $_POST['dm_id'];
                    }
                    else {
                        $kyw = '';
                        $dm_id = 0;
                    }
                    $listsanpham = loadall_sanpham($kyw, $dm_id);
                    $listdanhmuc = loadall_danhmuc();
        
                            include "sanpham/list.php";
                    break;
                case 'xoasp':
                    if (isset($_GET['id']) && ($_GET['id']) > 0) {
                        delete_sanpham($_GET['id']);
                    }
                    $listsanpham = loadall_sanpham("", 0);
                    $listdanhmuc = loadall_danhmuc();
                            include "sanpham/list.php";
                    break;
                case 'suasp':
                    if (isset($_GET['id']) && ($_GET['id']) > 0) {
                        $sp = loadone_sanpham($_GET['id']);
        
                    }
                    $listdanhmuc = loadall_danhmuc();
        
                    include "sanpham/update.php";
                    break;
                case 'updatesp':
                    if (isset($_POST['update']) && ($_POST['update'])) {
                        $id = $_POST['id'];
                        $dm_id = $_POST['dm_id'];
                        $sp_name = $_POST['sp_name'];
                        $sp_price = $_POST['sp_price'];
                        $sp_price_new = $_POST['sp_price_new'];
                        $sp_quantity = $_POST['sp_quantity'];
                        $sp_desc = $_POST['sp_desc'];
                        $filename = $_FILES['sp_image']['name'];

                        // var_dump($_FILES['sp_image']);die;

                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($filename);
                        if (move_uploaded_file($_FILES["sp_image"]["tmp_name"], $target_file)) {
                            // echo "The file ". htmlspecialchars( basename( $_FILES["pro_img"]["name"])). " has been uploaded.";
                        } else {
                            //echo "Sorry, there was an error uploading your file.";
                        }
                        update_sanpham($dm_id, $id,$sp_name, $sp_price_new, $sp_price, $sp_desc, $sp_quantity, $filename);
                        $thongbao = "Cập nhật thành công";
                    }
        
                    $listsanpham = loadall_sanpham("", 0);
                    $listdanhmuc = loadall_danhmuc();
                    include "sanpham/list.php";
        
                    break;
        case 'bl':
            $binh_luan = loadall_binhluan(0);
            include "binhluan/list.php";
            break;
        //TÀi khoản
                case 'delete_tk':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                delete_taikhoan($_GET['id']);
            }
            $taikhoan = loadall_taikhoan();
                        include "taikhoan/list.php";

            break;
case 'dangxuat':
    if (isset($_SESSION['user'])) {
        session_destroy();
    }
    header("Location:../index.php");
    # code...
    break;
        default:
            include "home.php";
            break;
        }
    }
    else {
        include "home.php";
    }
include "footer.php";
?>