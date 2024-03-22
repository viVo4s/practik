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
            background-color: #f4f4f4; /* Добавляем цвет фона */
        }

        h1 {
            margin-bottom: 20px;
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 10px auto;
            background-color: #fff; /* Добавляем цвет фона */
            padding: 20px; /* Добавляем отступы */
            border-radius: 10px; /* Добавляем закругленные углы */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Добавляем тень */
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
            box-sizing: border-box; /* Добавляем box-sizing для корректного размера */
        }

        button {
            width: 100%; /* Делаем кнопку на всю ширину формы */
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s; /* Добавляем плавное изменение цвета при наведении */
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

        <button type="submit" name="add_department">Добавить кафедру</button>
    </form>

    <form method="post">
        <label for="course">Добавить новую дисциплину:</label>
        <input type="text" name="new_course" placeholder="Название дисциплины" required>

        <button type="submit" name="add_course">Добавить дисциплину</button>
    </form>

    <form method="post">
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

        <button type="submit" name="add_employee">Добавить сотрудника</button>
    </form>

</body>

</html>
