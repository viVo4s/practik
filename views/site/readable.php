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
        <label for="department_id">Выберите кафедру:</label>
        <select id="department_id" name="department_id">
            <option value="">Все кафедры</option>
            <?php foreach ($departments as $department): ?>
                <option value="<?= $department->id ?>"><?= $department->name ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Показать</button>
    </form>

    <h2>Дисциплины</h2>
    <ul>
        <?php foreach ($disciplines as $discipline): ?>
            <li><?= $discipline->name ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
