<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список сотрудников по кафедре</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
        }

        h1 {
            margin-bottom: 20px;
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <h1>Добавить новых сотрудников и дисциплины</h1>

    <form method="post">
        <label for="department">Добавить новую кафедру:</label>
        <input type="text" name="new_department" placeholder="Название кафедры" required>

        <label for="course">Добавить новую дисциплину:</label>
        <input type="text" name="new_course" placeholder="Название дисциплины" required>

        <label for="employee">Добавить нового сотрудника:</label>
        <input type="text" name="new_employee" placeholder="Имя сотрудника" required>

        <label for="employee_course">Прикрепить сотрудника к дисциплине:</label>
        <select name="employee_course" id="employee_course">
            <option value="1">Course 1</option>
            <option value="2">Course 2</option>
            <option value="3">Course 3</option>
            <!-- Добавляем новые дисциплины здесь: -->
            <option value="4">Course 4</option>
        </select>

        <button type="submit">Добавить</button>
    </form>

</body>

</html>
