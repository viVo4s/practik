<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Прикрепление сотрудников к дисциплинам</title>
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
        }

        label {
            font-weight: bold;
        }

        select, button {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
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
