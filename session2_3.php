<?php //lấy dữ liệu từ mysql đưa vào php
require_once("library/connect.php");
$products = getAll("labs6", "product");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PRODUCT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <h1 style="text-align: center; margin-top: 100px; margin-bottom: 50px">Thông tin sản phẩm</h1>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
        </tr>
        </thead>
        <tbody>
    <?php foreach ($products as $s): ?>
        <tr>
            <th scope="row"><?php echo $s["id"] ?></th>
            <td><?php echo $s["name"] ?></td>
            <td><?php echo $s["description"] ?></td>
            <td><?php echo $s["price"] ?></td>
            <td><?php echo $s["quantity"] ?></td>
        </tr>
    <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
