<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Src\Auth\IdentityInterface;

class Attach extends Model 
{
    use HasFactory;

    protected $table = 'attaches'; // Указываем название таблицы базы данных

    // Другие свойства и методы модели
}
