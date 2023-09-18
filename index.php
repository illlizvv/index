<!DOCTYPE html>
<html>
<head>
    <title>СК NEIT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Личный кабинет</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Общие сведения</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Мероприятия</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Документы</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Контакты</a></li>
        </ul>
    </header>
</div>
<div class="container">
    <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') { ?>
        <form action="form.php" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Имя пользователя</label>
                <input type="text" class="form-control" name="first name" id="exampleFormControlInput1" value="<?php echo $_POST['first name'] ?? '' ?>"placeholder="Введите имя">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Электронный адрес</label>
                <input type="text" class="form-control" name="lastname" id="exampleFormControlInput2" value="<?php echo $_POST['lastname'] ?? '' ?>" placeholder="Введите почту">
            </div>

            <div class="mb-3">
                <input type="submit" class="btn btn-primary" value="Отправить">
            </div>
        </form>
        <?php
    }
    ?>
</div>
<div class="container">
    <?php
    if (isset($_POST["firstname"])){
        echo 'Имя пользователя: '.($_POST["firstname"]??'').'<br>';
    }
    if (isset($_POST["lastname"])){
        echo 'Эл.адрес: '.($_POST["lastname"]??'');
    }

    ?>
</div>

</body>
</html>
