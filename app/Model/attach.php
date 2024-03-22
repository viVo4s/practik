<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Src\Auth\IdentityInterface;

class attach extends Model 
{
    use HasFactory;

    protected $table = 'attach'; // Указываем название таблицы базы данных

    // Другие свойства и методы модели
}
