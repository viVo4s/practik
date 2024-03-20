<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Src\Auth\IdentityInterface;


class Discipline extends Model 
{
    protected $table = 'disciplines'; // Название таблицы с дисциплинами

    protected $primaryKey = 'id'; // Первичный ключ таблицы

    protected $fillable = ['discipline_name']; // Заполняемое поле модели

    // Дополнительные отношения, если необходимо
}
