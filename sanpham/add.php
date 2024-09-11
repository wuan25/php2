<div class="container">
    <h2>Thêm mới sản phẩm</h2>
    <form method="post">
        <div class="mb-3">
            <label for="" class="form-label">Tên</label>
            <input type="text" class="form-control" name="name">

            <?php if (!empty($eName)) { ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong><?php echo $eName; ?></strong>
                </div>
            <?php } ?>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Giá</label>
            <input type="number" class="form-control" name="price">

            <?php if (!empty($ePrice)) { ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong><?php echo $ePrice; ?></strong>
                </div>
            <?php } ?>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Số lượng</label>
            <input type="number" class="form-control" name="quantity">

            <?php if (!empty($eQuantity)) { ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong><?php echo $eQuantity; ?></strong>
                </div>
            <?php } ?>
        </div>

        <input type="submit" class="btn btn-primary" name="themBtn" value="Submit">
        <a href="index.php" class="btn btn-primary">Quay lại</a>
    </form>
    <?php if (!empty($thong_bao)) { ?>
        <div class="alert alert-success  alert-dismissible fade show" role="alert">
            <strong><?php echo $thong_bao; ?></strong>
        </div>
    <?php } ?>
</div>