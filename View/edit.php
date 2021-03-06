
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sửa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <h1 style="margin: 50px 0 50px 0; text-align: center">Sửa thông tin người dùng </h1>
    <form action="?route=post_edit", method="post">
        <?php
        $id = $_GET["id"];
        $user = new \Model\User();
        $user = $user->find($id);
        $current = $_SESSION['user'];
        ?>
        <h2>Name <?php echo $current['name'];?></h2>
        <input type="hidden" name="id" value="<?php echo $user->id; ?>">
        <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input name="name" value="<?php echo $user->name; ?>" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" >
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input name="email" value="<?php echo $user->email; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" class="form-control" id="exampleInputPassword1" >
        </div>
        <button type="submit" class="btn btn-primary">Sửa</button>
    </form>
</div>
</body>
</html>
