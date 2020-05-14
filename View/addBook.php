<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng kí</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <h1 style="margin: 50px 0 50px 0; text-align: center">Đăng ký sách </h1>
    <form action="?route=postAddBook", method="post">
        <div class="form-group">
            <label for="exampleInputName1">Book Name</label>
            <input type="text" name="bookname" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" >
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Category</label>
            <input type="text" name="category" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
</div>
</body>
</html>
