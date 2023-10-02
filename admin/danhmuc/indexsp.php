<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Bảng thêm sản phẩm</h1>
    <td><button><a style="text-decoration: none; color: black;" href="/quantri?act=themsp">Thêm</a></button></td>
    <table border="1">
        <tbody>
            <thead class="tb_add_sp">
                <th>Mã Sản Phẩm</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá sản Phẩm</th>
                <th>Ảnh Sản Phẩm</th>
                <th>Mổ Tả Sản Phẩm</th>
                <th>Lượt Xem</th>
                <th>ID Danh Mục</th>
                <th>Thao Tác</th>
                </thead>
                <!-- <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button><a style="text-decoration: none; color: black;" href="/quantri?act=themsp">Thêm</a></button></td>
                </tr> -->
                <?php
                $sql = "SELECT * FROM sanpham";
                $result = pdo_query($sql);
               foreach ($result as $product) {
                echo "<tr>";
                echo "<td>{$product['id']}</td>";
                echo "<td>{$product['name']}</td>";
                echo "<td>{$product['price']}</td>";
                echo "<td><img src='{$product['img']}' alt='' style='width: 500px;'></td>";
                echo "<td>{$product['mota']}</td>";
                echo "<td>{$product['luotxem']}</td>";
                echo "<td>{$product['iddm']}</td>";
                echo "<td><button>Xóa</button>
                <button>Sửa</button></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>