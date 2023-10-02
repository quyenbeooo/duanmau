<?php 
    $fetchApi = "SELECT * FROM danhmuc";

    $category_list = pdo_query($fetchApi);

    
?>
<h1 style="background-color: gray; padding: 20px; margin-top: 0px; border-top: 1px solid ;">Thêm mới sản phẩm</h1>
    <form class="form_add" action="/quantri?act=themsp" method="post" enctype="multipart/form-data">
        <div class="add">
            <label for="" style="color: red;">Mã Sản Phẩm:</label><br>
            <input type="text" name="id_product" placeholder="Mã Sản Phẩm"><br>
        </div>
        <div class="add">
            <label for="" style="color: red;">Tên sản phẩm:</label><br>
            <input type="text" name="name_product" placeholder="Tên sản phẩm"><br>
        </div>
        <div class="add">
            <label for="" style="color: red;">Giá sản phẩm:</label><br>
            <input type="text" name="price_product" placeholder="Giá sản phẩm"><br>
        </div>
        <div class="add">
            <label for="" style="color: red;">Ảnh sản phẩm:</label><br>
            <input type="file" name="file_image"  ><br>
        </div>
        <select name="iddm" id="">
            <?php
                foreach ($category_list as $key => $value) {
                    ?>
                        <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                    <?php
                }
            ?>
        </select>
        <div class="add">
            <label for="" style="color: red;">Mô tả sản phẩm:</label><br>
            <textarea rows="10" cols="30" name="mota"></textarea><br>
        </div>
        <div class="thao_tac">
            <button type="submit" name = 'them_submit' >Thêm Mới</button>
            <button>Nhập Lại</button>
            <button>Danh Sách</button>
        </div>
    </form>