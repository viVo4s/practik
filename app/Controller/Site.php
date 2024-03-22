<?php

namespace Controller;

use Model\Post;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;
use Model\Employees;
use Model\Discipline;
use Model\Attach;
use Model\Readable;
use Src\Validator\Validator;

class Site
{
    public function index(Request $request): string
    {
       $posts = Post::where('id', $request->id)->get();
       return (new View())->render('site.post', ['posts' => $posts]);
    }

    public function hello(): string
    {
       return (new View())->render('site.hello', ['message' => 'hello working']);
    }
   
    public function signup(Request $request): string
    {
      if ($request->method === 'POST') {
   
          $validator = new Validator($request->all(), [
              'name' => ['required'],
              'login' => ['required', 'unique:users,login'],
              'password' => ['required']
          ], [
              'required' => 'Поле :field пусто',
              'unique' => 'Поле :field должно быть уникально'
          ]);
   
          if($validator->fails()){
              return (new View())->render('site.signup', ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
          }
   
          if (User::create($request->all())) {
              app()->route->redirect('/login');
          }
      }
      return (new View())->render('site.signup');
   }
   

    public function login(Request $request): string
    {
    //Если просто обращение к странице, то отобразить форму
    if ($request->method === 'GET') {
        return (new View())->render('site.login');
    }
    //Если удалось аутентифицировать пользователя, то редирект
    if (Auth::attempt($request->all())) {
        app()->route->redirect('/hello');
    }
    //Если аутентификация не удалась, то сообщение об ошибке
    return (new View())->render('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/hello');
    }

    public function employees(Request $request): string
    {
        if ($request->method === 'POST' && Employees::create($request->all())) {
            app()->route->redirect('/employees');
        }
        
        $employees = Employees::all(); 
        
        return (new View())->render('site.employees', ['employees' => $employees]);
    }

    public function discipline(): string
    {
        $discipline = Discipline::all();   
        return (new View())->render('site.discipline', ['discipline' => $discipline]);
    }

    public function attaches(): string
    {
        $disciplines = Discipline::all();
        return (new View())->render('site.attach', ['disciplines' => $disciplines]);
    }
    
    public function teachers(): string
    {
        $disciplines = Discipline::all();
        return (new View())->render('site.teachers', ['disciplines' => $disciplines]);
    }
    
    public function readable(Request $request): string
    {
        // Получаем все записи из таблицы "readable" с соответствующими отношениями
        $readable = Readable::with('discipline')->get();
        
        // Получаем все дисциплины для дальнейшего отображения
        $disciplines = Discipline::all();

        // Возвращаем представление, передавая данные в виде массива
        return (new View())->render('site.readable', ['readable' => $readable, 'discipline' => $disciplines]);
    }
        
}
