<div class="row ">
  <div class="title_row">
    <h1 style="background-color: gray; padding: 20px; margin-top: 0px; border-top: 1px solid ;">Danh Sách Loại Hàng</h1>
  </div>
  <table class="table px-4" border=1>
    <th scope="col"></th>
    <th scope="col">Mã Loại</th>
    <th scope="col">Tên Loại</th>
    <th scope="col">Thao tác</th>
    <?php
    foreach ($dsdanhmuc as $danhmuc) {
      extract($danhmuc);
      echo '<tr>
            <th scope="row"><input type="checkbox"></th>
            <td>' . $id . '</td>
            <td>' . $name . '</td>
            <td>
            <button>Xóa</button>
            <button>Sửa</button>
        </td>
            </tr>';
    }
    ?>
  </table>
</div>