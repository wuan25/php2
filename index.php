<?php
require_once './models/pdo.php';
require_once './models/sanpham.php';
require_once './view/header.php';


if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'themMoi':
            $eror = $eName = $ePrice = $eQuantity = '';
            $eConut = 0;
            if (isset($_POST['themBtn'])) {
                $name = $_POST['name'];
                $price = $_POST['price'];
                $quantity = $_POST['quantity'];

                if (empty($name)) {
                    $eName = 'Không đc để trống tên';
                    $eConut++;
                }
                if (empty($price)) {
                    $ePrice = 'Không được để trống giá';
                    $eConut++;
                } elseif (!is_numeric($price) || $price <= 0) {
                    $ePrice = 'Giá phải là số và lớn hơn 0';
                    $eConut++;
                }
                if (empty($quantity)) {
                    $eQuantity = 'Không được để trống số lượng';
                    $eConut++;
                } elseif (!is_numeric($quantity) || $quantity < 0) {
                    $eQuantity = 'Số lượng phải là số và không âm';
                    $eConut++;
                }

                if ($eConut == 0) {
                    addPro($name, $price, $quantity);
                    $thong_bao = "Thêm mới thành công!";
                }
            }
            require_once './sanpham/add.php';
            break;
        case 'suapro':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            }
            $oneData = getOnePro($id);
            extract($oneData);
            require_once './sanpham/fix.php';
            break;
        case 'update':
            $eror = $eName = $ePrice = $eQuantity = '';
            $eConut = 0;
            if (isset($_POST['suaBtn'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $quantity = $_POST['quantity'];

                if (empty($name)) {
                    $eName = 'Không đc để trống tên';
                    $eConut++;
                }
                if (empty($price)) {
                    $ePrice = 'Không được để trống giá';
                    $eConut++;
                } elseif (!is_numeric($price) || $price <= 0) {
                    $ePrice = 'Giá phải là số và lớn hơn 0';
                    $eConut++;
                }
                if (empty($quantity)) {
                    $eQuantity = 'Không được để trống số lượng';
                    $eConut++;
                } elseif (!is_numeric($quantity) || $quantity < 0) {
                    $eQuantity = 'Số lượng phải là số và không âm';
                    $eConut++;
                }

                if ($eConut == 0) {
                    updateData($id, $name, $price, $quantity);
                    $thong_bao = "Thêm mới thành công!";
                }
            }
            header('location:index.php');
            break;
        case 'xoapro':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            }
            detetePro($id);
            header('location:index.php');
            break;
        default:
            $data = getPro();
            require_once './sanpham/list.php';
            break;
    }
} else {
    $data = getPro();
    require_once './sanpham/list.php';
}
require_once './view/footer.php';
?>