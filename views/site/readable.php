<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Выбор дисциплин</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
        }
        form {
            text-align: center;
            margin-top: 20px;
        }
        label {
            font-weight: bold;
            margin-right: 10px;
        }
        select {
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            padding: 8px 15px;
            border-radius: 5px;
            border: none;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
        h2 {
            margin-top: 30px;
            text-align: center;
        }
        ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }
        li {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Выбор дисциплин</h1>
    <form method="post">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <label for="discipline_id">Выберите кафедру:</label>
        <select id="discipline_id" name=" ">
            <option value="">Все кафедры</option>
            <?php foreach ($discipline as $disc): ?>
                <option value="<?= $disc->id ?>"><?= $disc->name ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Показать</button>
    </form>

    <h2>Дисциплины</h2>
    <ul>
        <?php if (!empty($disciplines)): ?>
            <?php foreach ($disciplines as $disc): ?>
                <li><?= $disc->name ?></li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>Дисциплины не найдены</li>
        <?php endif; ?>
    </ul>
</body>
</html>
