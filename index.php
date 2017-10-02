<?php 
    include("ket_noi.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Web bán hàng</title>
		<link rel="stylesheet" type="text/css" href="CSS/style.css">
    </head>
    <body>
        <center>
            <table width="1000px">
                <tr>
                    <td colspan="3"><img src="hinh_anh/banner.jpg" width="1000px" height="300px"></td>
                </tr>
                <!--Menu Ngang -->
                <tr>
                    <td colspan="3" height="50px" >
                       <?php 
                            include("chuc_nang/menu_ngang/menu_ngang.php");
                        ?>
                    </td>
                </tr>
                
                <tr>
                    <!--Menu Dọc -->
                    <td width="170px" valign="top">
                    <div class="menu_doc"> <h2> Thương Hiệu </h2>
                        <?php 
                            include("chuc_nang/menu_doc/menu_doc.php");
                        ?>
                    </div>
                    </td>
                    <!--Trang Giữa -->
                    <td width="660px" valign="top">
                    <?php 
                            include("chuc_nang/dieu_huong.php");
                    ?>    
                    </td>

                    <td width="170px" valign="top">Cột phải</td>
                </tr>
                <tr>
                    <td colspan="3">Footer</td>
                </tr>
            </table>
        </center>
    </body>
</html>