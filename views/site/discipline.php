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
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 300px;
         }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 3px;
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