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
    <form method="POST">
        <details>
            <summary>Выберите дисциплину</summary>
            <select name="discipline_id" id="discipline_id">
                <option value="1">Course 1</option>
                <option value="2">Course 2</option>
                <option value="3">Course 3</option>
                <!-- Добавляем новые дисциплины здесь: -->
                <option value="4">Course 4</option>
            </select>
        </details>
        <br><br>
        <details>
            <summary>Выберите сотрудника</summary>
            <select name="employee_id" id="employee_id">
                <option value="1">Employee 1</option>
                <option value="2">Employee 2</option>
                <option value="3">Employee 3</option>
                <!-- Добавляем новых сотрудников здесь: -->
                <option value="4">Employee 4</option>
            </select>
        </details>
        <br><br>
        <button type="submit">Прикрепить</button>
    </form>
</body>

</html>
