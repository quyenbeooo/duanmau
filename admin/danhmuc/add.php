<div class="new_product">
    <h1>Thêm mới hàng hóa</h1>
</div>
<div class="form_product">
    <form action="" method="post">
        <div class="input_nhap">
            <label style="color: red;" for="">Mã Loại:</label><br>
            <input type="text" name="maloai" placeholder="Nhập mã loại">
        </div><br>
        <div class="input_nhap">
            <label style="color: red;" for="">Tên Loại:</label><br>
            <input type="text" name="tenloai" placeholder="Nhập tên loại">
        </div><br>
        <div class="btn_update">
            <button type="submit" name="themmoi">Thêm mới</button>
            <button type="reset">Nhập lại</button>
            <button type="submit" name="danhsach">
                <a style="color: black; text-decoration: none; width: 100%; height: 100%;" href="/quantri?act=listdanhmuc">
                    Danh sách
                </a>
            </button>
        </div>
        <?php
        if(isset($thongbao) && ($thong!='')) echo $thongbao;
        ?>
    </form>
    
</div>