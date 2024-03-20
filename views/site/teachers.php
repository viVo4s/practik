<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавление данных</title>
</head>
<body>
    <h1>Добавление данных</h1>

    <!-- Форма для добавления педагогических сотрудников -->
    <form action="/add_pedagogical_staff" method="POST">
        <label for="pedagogical_staff_name">Имя педагогического сотрудника:</label>
        <input type="text" id="pedagogical_staff_name" name="pedagogical_staff_name">
        <button type="submit">Добавить</button>
    </form>

    <!-- Форма для добавления кафедр -->
    <form action="/add_department" method="POST">
        <label for="department_name">Название кафедры:</label>
        <input type="text" id="department_name" name="department_name">
        <button type="submit">Добавить</button>
    </form>

    <!-- Форма для добавления дисциплин -->
    <form action="/add_discipline" method="POST">
        <label for="discipline_name">Название дисциплины:</label>
        <input type="text" id="discipline_name" name="discipline_name">
        <button type="submit">Добавить</button>
    </form>

    <!-- Форма для прикрепления сотрудника к дисциплине -->
    <form action="/attach_employee_to_discipline" method="POST">
        <label for="employee_id">Выберите педагогического сотрудника:</label>
        <select id="employee_id" name="employee_id">
            <!-- Варианты педагогических сотрудников будут загружены динамически -->
        </select>
        <label for="discipline_id">Выберите дисциплину:</label>
        <select id="discipline_id" name="discipline_id">
            <!-- Варианты дисциплин будут загружены динамически -->
        </select>
        <button type="submit">Прикрепить</button>
    </form>
</body>
</html>
