<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Src\Auth\IdentityInterface;

class Discipline extends Model 
{
    use HasFactory;

    protected $table = 'disciplines'; // Изменено на название таблицы с дисциплинами

    protected $primaryKey = 'discipline_id'; // Изменено на название первичного ключа

    protected $fillable = ['discipline_name']; // Изменено на название поля с именем дисциплины

    // Определяем обратное отношение с моделью "Teacher" (или другое подходящее название)
    public function teachers()
    {
        return $this->hasMany(Teacher::class, 'discipline_id', 'discipline_id');
    }
}
