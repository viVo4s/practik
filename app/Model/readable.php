<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;

class Readable extends Model
{
    protected $table = 'readable'; // Укажите имя вашей таблицы, если оно отличается от стандартного
    protected $primaryKey = 'id'; // Укажите имя первичного ключа, если оно отличается от 'id'

    public function disciplines()
    {
        return $this->hasMany(Discipline::class, 'teacher_id');
    }

    public function discipline()
    {
        return $this->belongsTo(discipline::class, 'discipline_id');
    }

    public static function getDisciplinesByDepartment($disciplineId = null) {
        // Предположим, что у вас есть связь между таблицей readable и disciplines через teacher_id или discipline_id
        // Тогда вы можете получить дисциплины через Eloquent следующим образом:
        if ($disciplineId !== null) {
            return self::where('discipline_id', $disciplineId)->with('disciplines')->get();
        } else {
            return self::with('disciplines')->get();
        }
    }
    
}
