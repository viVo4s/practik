<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;

class readable extends Model
{
    protected $table = 'readable'; // Укажите имя вашей таблицы, если оно отличается от стандартного
    protected $primaryKey = 'id'; // Укажите имя первичного ключа, если оно отличается от 'id'

    public function getDisciplinesByDepartment($departmentId = null) {
        // Предположим, что у вас есть связь между таблицей readable и disciplines через teacher_id или discipline_id
        // Тогда вы можете получить дисциплины через Eloquent следующим образом:
        if ($departmentId !== null) {
            return $this->hasMany('Model\Discipline', 'teacher_id')->where('department_id', $departmentId)->get();
        } else {
            return $this->hasMany('Model\Discipline', 'teacher_id')->get();
        }
    }
}
