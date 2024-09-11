<?php
function addPro($name,$price,$quantity){
    $sql = "INSERT INTO  products(name,price,quantity) VALUES('$name','$price','$quantity')";
    pdo_execute($sql);
}
function getPro(){
    $sql = "SELECT * FROM products ";
    $data = pdo_query($sql);
    return $data;
}

function getOnePro($id){
    $sql = "SELECT * FROM products WHERE id = '$id' ";
    $oneData = pdo_query_one($sql);
    return $oneData;
}
function updateData($id,$name,$price,$quantity){
$sql = "UPDATE products SET name = '$name' , price = '$price',quantity = '$quantity' WHERE id = '$id' ";
pdo_execute($sql);
}

function detetePro($id){
    $sql = "DELETE FROM products WHERE id  = '$id'";
    pdo_execute($sql);
}
?>