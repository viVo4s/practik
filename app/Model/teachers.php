<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeanStaff extends Model
{
    use HasFactory;

    protected $table = 'dean_staff'; // Имя таблицы в базе данных

    protected $fillable = ['name', 'position']; // Заполняемые поля модели

    // Определяем отношение "один ко многим" с моделью PedagogicalStaff
    public function pedagogicalStaff()
    {
        return $this->hasMany(PedagogicalStaff::class);
    }

    // Определяем отношение "один ко многим" с моделью Department
    public function departments()
    {
        return $this->hasMany(Department::class);
    }

    // Определяем отношение "многие ко многим" с моделью Discipline через промежуточную таблицу attaches
    public function disciplines()
    {
        return $this->belongsToMany(Discipline::class, 'attaches', 'dean_staff_id', 'discipline_id');
    }
}
