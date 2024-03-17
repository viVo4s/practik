<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма для добавления сотрудника</title>
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
        <input type="date" id="dob" name="dob"><br>
        
        <label for="address">Адрес прописки:</label><br>
        <input type="text" id="address" name="address"><br>
        
        <label for="position">Должность:</label><br>
        <input type="text" id="position" name="position"><br>
        
        <label for="department_id">ID кафедры:</label><br>
        <input type="number" id="department_id" name="department_id"><br>
        
        <input type="submit" value="Добавить сотрудника">
    </form>
</body>
</html>