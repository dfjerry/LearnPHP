<?php require_once "User.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Lồng ghép HTML và PHP</title>
</head>
<body>
<div class="container">
    <h1 style="text-align: center; margin-top: 100px; margin-bottom: 50px">Thông tin sinh viên</h1>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php $users = new \ass1\User();
        ?>
        <?php foreach ($users->getUsers() as $s): //thay {} bằng { = : , } = endforeach; ?>
            <tr>
                <th scope="row"><?php echo $s["id"] ?></th>
                <td><a href="edit.php?id=<?php echo $s["id"]?>"><?php echo $s["name"] ?></a></td>
                <td><?php echo $s["email"] ?></td>
                <td><?php echo $s["password"] ?></td>
                <td><a href="delete.php?id=<?php echo $s["id"]?>">Delete</a></td>
            </tr>
        <?php endforeach;//lam the nay de khỏi lẫn với bọn khác như if else.......  ?>
        </tbody>
    </table>
</div>
</body>
</html>