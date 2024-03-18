<!DOCTYPE html>
<html>
<head>
    <title>Форма добавления данных</title>
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

        form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Выбрать преподователся</h2>
    <form method="post">
        <label>Имя педагогического сотрудника:</label>
        <input type="text" name="teacher_name" required><br><br>

        <label>Название кафедры:</label>
        <input type="text" name="department_name" required><br><br>

        <label>Название дисциплины:</label>
        <input type="text" name="subject_name" required><br><br>

        <label>Выберите педагогического сотрудника для прикрепления:</label>
        <select name="selected_teacher">
            <option value="teacher1">Педагогический сотрудник 1</option>
            <option value="teacher2">Педагогический сотрудник 2</option>
        </select><br><br>

        <input type="submit" value="Отправить">
    </form>
</body>
</html>