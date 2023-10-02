<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="" type="" href="../css/style.css">
</head>

<body>
    <h1 class="title_ad" style="text-align: center;">ADMIN</h1>
    <?php
    require "connect.php";
    require "headerr.php";
    
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'home':
                // var_dump($productItem);
                require 'danhmuc/indexsp.php';
                break;
            case 'addm':
                if (isset($_POST['themmoi'])) {
                    $tenloai = $_POST['tenloai'];
                    $sql = "INSERT INTO danhmuc(name) VALUES ('$tenloai')";
                    pdo_execute($sql);
                }
                $thongbao = "Thêm thành công";
                require "danhmuc/add.php";
                break;
            case 'listdanhmuc':
                $sql = "SELECT * FROM danhmuc order by name";
                $dsdanhmuc = pdo_query($sql);
                require "danhmuc/list.php";
                break;
            case 'themsp':
                require "danhmuc/model.php";
                $sql = "SELECT * FROM sanpham";
                $product = pdo_query($sql);
                if (isset($_POST['them_submit'])) {
                    $name_sp = $_POST['name_product'];
                    $price_sp = $_POST['price_product'];
                    $mota_sp = $_POST['mota'];
                    $id_dm = $_POST['iddm'];
                    // echo $name_sp . '<br/>';
                    // echo $price_sp. '<br/>';
                    // echo $moto_sp. '<br/>';
                    // echo $id_dm . '<br/>';
                    // echo $_FILES['flie_image'];
                    $target_dir = 'images/';
                    if ($_FILES['file_image']) {
                        $img = $_FILES['file_image']['name'];
                        $random = rand(1, 10);
                        $target_file = $target_dir . '_' . $random . '_' . $img;
                        move_uploaded_file($_FILES['file_image']['tmp_name'], $target_file);
                    }
                    $sql = "INSERT INTO sanpham (name , price, img, mota, luotxem, iddm) 
                    VALUES (:name, :price, :img, :mota, :luotxem, :id_dm)";

                    $data = [
                        ':name' =>  $name_sp,
                        ':price' => $price_sp,
                        ':img' => $target_file,
                        ':mota' =>  $mota_sp,
                        ':luotxem' => '',
                        ':id_dm' => $id_dm
                    ];
                    // try {
                    //     pdo_execute($sql, $data);
                    //     echo "Thêm dữ liệu thành công!";
                    //     exit;
                    // } catch (PDOException $e) {
                    //     echo "Lỗi: " . $e->getMessage();
                    // }

                    $excuted = pdo_execute($sql, $data);
                    if ($excuted) {
                        echo '<script>window.location.href = "/quantri?act=home";</script>';
                        echo 123;
                        exit;
                    }
                }
                break;
            default:
                include "admin.php";
                break;
        }
    } else {
    }

    ?>
    <table>
        <th></th>
    </table>
</body>

</html>

<!-- require "danhmuc/indexsp.php";
                if (isset($_POST['them_submit'])) {
                    $name_sp = $_POST['name_product'];
                    $price_sp = $_POST['price_product'];
                    $moto_sp = $_POST['mota'];
                    // $view_sp = $_POST['luotxem'];
                    $id_dm = $_POST['iddm'];

                    $target_dir = 'img/';
                    if ($_FILES['flie_image']) {
                        $img = $_FILES['flie_image']['name'];
                        $random = rand(1, 10);
                        $target_file = $target_dir . '_' . $random . '_' . $img;
                        move_uploaded_file($_FILES['flie_image']['tmp_name'], $target_file);
                    }
                }
                $sql = "INSERT INTO sanpham (name , price, img, mota, luotxem, iddm)
                VALUES (:name, :price, :anh, :mota, :luotxem, :id_dm )";
                $data = [
                    ':name' =>  $name_sp,
                    ':price' => $price_sp,
                    ':mota' =>  $target_file,
                    ':anh' => $moto_sp,
                    ':luotxem' => '',
                    ':id_dm' => $id_dm,
                ];

                pdo_query($sql, $data);

                break; -->