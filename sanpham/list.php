<div class="container">
    <h1>Danh sách</h1>
    <a class="btn btn-outline-primary" href="index.php?act=themMoi">Thêm mới</a>
    <h1>Thêm mới</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">price</th>
                <th scope="col">quantity</th>
                <th scope="col">Status</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data as $key => $pro) {
                ?>
                <tr>
                    <th scope="row"><?= $pro['id'] ?></th>
                    <td><?= $pro['name'] ?></td>
                    <td><?= $pro['price'] ?></td>
                    <td><?= $pro['quantity'] ?></td>
                    <td><?php if ($pro['quantity'] == 0) {
                        echo 'Hết hàng';
                    } else {
                        echo 'Còn hàng';
                    } ?></td>
                    <td>
                       <a href="index.php?act=suapro&id=<?=$pro['id'] ?>" class="btn btn-warning" >Sửa</a>
                       <a onclick="return xoa()" href="index.php?act=xoapro&id=<?=$pro['id'] ?>" class="btn btn-danger" >Xóa</a>
                    </td>
                </tr>
                <?php
            }
            ?>


        </tbody>
    </table>
</div>
<script>
    function xoa() {
        return confirm('Bạn muốn xóa sản phẩm này chứ?');
    }
</script>