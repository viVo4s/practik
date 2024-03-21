<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавление данных</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
        }

        form {
            width: 50%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Добавление данных</h1>

    <!-- Форма для добавления педагогических сотрудников -->
    <form method="POST">
        <label for="pedagogical_staff_name">ФИО преподователя:</label>
        <input type="text" id="pedagogical_staff_name" name="pedagogical_staff_name">
        <input type="text" id="pedagogical_staff_name" name="pedagogical_staff_name">
        <input type="text" id="pedagogical_staff_name" name="pedagogical_staff_name">   
        <button type="submit">Добавить</button>
    </form>

    <!-- Форма для добавления кафедр -->
    <form method="POST">
    <label for="department_id">ID кафедры:</label>
    <input type="text" id="department_id" name="department_id">
    <label for="department_name">Название кафедры:</label>
    <input type="text" id="department_name" name="department_name">
    <button type="submit">Добавить</button>
</form>


    <!-- Форма для добавления дисциплин -->
    <form method="POST">
        <label for="discipline_id">Название дисциплины:</label>
        <input type="text" id="discipline_name" name="discipline_name">
        <button type="submit">Добавить</button>
    </form>
</body>
</html>
