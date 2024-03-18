<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Src\Auth\IdentityInterface;

class discipline extends Model 
{
    use HasFactory;

    protected $table = 'employees'; // Указываем название таблицы базы данных

    protected $primaryKey = 'id'; // Указываем название первичного ключа

    protected $fillable = ['name']; // Указываем заполняемые поля

    // Определяем обратное отношение с моделью "Employee"
    public function employees()
    {
        return $this->hasMany(Employee::class, 'id_кафедры', 'id');
    }
}


