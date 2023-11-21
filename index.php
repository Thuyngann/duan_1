<?php
    include "global.php";
    include "model/pdo.php";
    include "model/sanpham.php";
    include "model/danhmuc.php";
    $newPro=loadall_sanpham_home();
    $dsdm = loadall_danhmuc();

    include "view/header.php"; 

    if ((isset($_GET['act']))&&($_GET['act']!="")) {
        $act=$_GET['act'];
        switch ($act) {
            case 'sanpham':
                if ((isset($_GET['id']))&&($_GET['id']>0)) {
                    $dm_id=$_GET['id'];
                }
                else {
                    $dm_id=0;                    
                }
                $dssp=loadall_sanpham('', $dm_id);
                $tendm=load_tendanhmuc($dm_id);
                include "view/sanpham_dm.php";

                break;
                case 'ctsp':
                    if ((isset($_GET['id']))&&($_GET['id']>0)) {
                        $id=$_GET['id'];
                        $onesp= loadone_sanpham($id);
                        extract($onesp);
                        $sp_cung_loai=load_sanpham_cungloai($id, $dm_id);
                        include "view/ctsp.php";
        
                    }
                    else {
                    //    include "view/error.php";
                    }
                    break;
    
            }
            
    
        }
        else {
            include "view/home.php";

        }
    include "view/footer.php";
?>
