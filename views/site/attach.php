<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Прикрепление сотрудников к дисциплинам</title>
</head>
<body>
    <h1>Прикрепление сотрудников к дисциплинам</h1>
    <form action="attach.php" method="POST">
    <label for="discipline_id">Выберите дисциплину:</label>
    <select name="discipline_id" id="discipline_id">
        <!-- Ваши варианты выбора дисциплин -->
    </select>
    <br><br>
    <label for="employee_id">Выберите сотрудника:</label>
    <select name="employee_id" id="employee_id">
        <!-- Ваши варианты выбора сотрудников -->
    </select>
    <br><br>
    <button type="submit">Прикрепить</button>
</form>

</body>
</html>
