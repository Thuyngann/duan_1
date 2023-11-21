<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    $sp_id=$_REQUEST['sp_id'];
    $dsbl=loadall_binhluan($sp_id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
    <link rel="stylesheet" href="../css/productdetails.css">
</head>
<body>
<div class="cmt">
    <div class="cmt-under">BÌNH LUẬN</div>
    <div class="boxcontent2 menudoc">
        <ul>
            <?php
                foreach ($dsbl as $bl) {
                    extract($bl);
            ?>
            <div class="content-bl">
                <b><?php echo $tk_id?></b> <?php
                    echo $bl_date;
                ?> <br>
                <p class="ml10"><?php echo $bl_content;?></p>
            </div>
            <?php
                }
            ?>
        </ul>
    </div>
    <div class="boxfooter cmt-text">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
            <input type="hidden" name="sp_id" value="<?=$idpro?>">
            <input type="text" name="bl_content" placeholder="Viết bình luận...">
            <input type="submit" name="guibinhluan" value="Gửi">
            </form>
    </div>

    <?php
        if (isset($_POST['guibinhluan']) &&($_POST['guibinhluan'])) {
            $bl_content=$_POST['bl_content'];
            $sp_id=$_POST['sp_id'];
            $tk_id=$_SESSION['user']['user_id'];
            $bl_date=date('H:i:s d/m/Y');
            insert_binhluan($bl_content, $tk_id, $sp_id, $bl_date);
            header("Location: ".$_SERVER['HTTP_REFERER']);
        }
    ?>
</div>

</body>
</html>