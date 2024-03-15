<h2>Регистрация нового пользователя</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
   <label>Имя <input type="text" name="name"></label>
   <label>Логин <input type="text" name="login"></label>
   <label>Пароль <input type="password" name="password"></label>
   <label>Роль 
      <select name="role">
         <option value="admin">Администратор</option>
         <option value="dean_staff">Сотрудник деканата</option>
      </select>
   </label><br>
   <button>Зарегистрироваться</button>
</form>
