<?php

namespace Controller;

use Model\Post;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;
use Model\employees;
use Model\teachers;
use Model\discipline;

class Site
{
    public function index(Request $request): string
    {
       $posts = Post::where('id', $request->id)->get();
       return (new View())->render('site.post', ['posts' => $posts]);
    }

   public function hello(): string
   {
       return new View('site.hello', ['message' => 'hello working']);
   }
   
   public function signup(Request $request): string
    {
    if ($request->method === 'POST' && User::create($request->all())) {
        app()->route->redirect('/hello');
    }
    return new View('site.signup');
    }

    public function login(Request $request): string
    {
    //Если просто обращение к странице, то отобразить форму
    if ($request->method === 'GET') {
        return new View('site.login');
    }
    //Если удалось аутентифицировать пользователя, то редирект
    if (Auth::attempt($request->all())) {
        app()->route->redirect('/hello');
    }
    //Если аутентификация не удалась, то сообщение об ошибке
    return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
    Auth::logout();
    app()->route->redirect('/hello');
    }

    public function employees(): string
    {
        $employees = employees::all();   
        return new View('site.employees', ['employees' => $employees]);
    }

    public function teachers(): string
    {
        $teachers = teachers::all();   
        return new View('site.teachers', ['teachers' => $teachers]);
    }

    public function discipline(): string
    {
        $discipline = discipline::all();   
        return new View('site.discipline', ['discipline' => $discipline]);
    }

}
