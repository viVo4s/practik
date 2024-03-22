<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма для добавления сотрудника</title>
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
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 0 auto; /* Центрирование по горизонтали */
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input, select {
            width: calc(100% - 10px);
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
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
    <h1>Добавление нового сотрудника</h1>
    <form method="post">
        <label for="last_name">Фамилия:</label><br>
        <input type="text" id="last_name" name="last_name"><br>
        
        <label for="first_name">Имя:</label><br>
        <input type="text" id="first_name" name="first_name"><br>
        
        <label for="middle_name">Отчество:</label><br>
        <input type="text" id="middle_name" name="middle_name"><br>
        
        <label for="gender">Пол:</label><br>
        <input type="text" id="gender" name="gender"><br>
        
        <label for="dob">Дата рождения:</label><br>
        <input type="date" id="date_of_birth" name="date_of_birth"><br>
        
        <label for="address">Адрес прописки:</label><br>
        <input type="text" id="address" name="address"><br>
        
        <label for="position">Должность:</label><br>
        <input type="text" id="position" name="position"><br>
        
        <label for="department_id">Выберите кафедру:</label><br>
        <select id="department_id" name="department_id">
            <option value="1">Кафедра 1</option>
            <option value="2">Кафедра 2</option>
            <option value="3">Кафедра 3</option>
            <!-- Добавляем новые кафедры здесь: -->
            <option value="4">Кафедра 4</option>
        </select><br>
                
        <input type="submit" value="Добавить сотрудника">
    </form>
</body>
</html>
