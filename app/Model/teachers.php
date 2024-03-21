<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teachers extends Model
{
    protected $table = 'teachers'; // Имя таблицы в базе данных 
    protected $fillable = ['name', 'position']; // Заполняемые поля модели  
    // Определяем отношение "один к одному" с моделью PedagogicalStaff
    public function pedagogicalStaff()
    {
        return $this->hasOne(PedagogicalStaff::class, 'id');
    }   
    // Определяем отношение "один к одному" с моделью Department
    public function department()
    {
        return $this->hasOne(Department::class, 'id');
    }   
    // Определяем отношение "многие ко многим" с моделью Discipline через промежуточную таблицу attaches
    public function disciplines()
    {
        return $this->belongsToMany(Discipline::class, 'employee_id', 'department_id', 'discipline_id');
    }   
}
