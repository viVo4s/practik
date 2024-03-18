<!DOCTYPE html>
<html>
<head>
    <title>Форма добавления данных</title>
</head>
<body>
    <h2>Добавление данных</h2>
    <form method="post" action="process_data.php">
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
            <!-- Добавьте других педагогических сотрудников в аналогичном формате -->
        </select><br><br>

        <input type="submit" value="Отправить">
    </form>
</body>
</html>