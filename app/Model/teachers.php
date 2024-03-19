<?php

namespace Model;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model 
{
    protected $fillable = ['teacher_name']; // Добавляем 'teacher_name' как заполняемый атрибут

    public function addTeacher(Request $request)
    {
        $teacherData = $request->all();
        
        $teacher = Teacher::create($teacherData);

        return response()->json(['message' => 'New teacher added successfully', 'data' => $teacher]);
    }

    // Другие методы класса

       public function addDepartment(Request $request)
    {
        // Предполагается, что у вас есть соответствующая форма или данные для добавления новой кафедры
        $departmentData = $request->all();
        
        // Создание новой кафедры
        $department = Department::create($departmentData);

        return response()->json(['message' => 'New department added successfully', 'data' => $department]);
    }

    public function addDisciplineToTeacher(Request $request, $teacherId)
    {
        $disciplineId = $request->input('discipline_id');
        
        // Находим педагогического сотрудника
        $teacher = Teacher::findOrFail($teacherId);
        
        // Присоединяем дисциплину к данному сотруднику
        $teacher->disciplines()->attach($disciplineId);

        return response()->json(['message' => 'Discipline attached to teacher successfully']);
    }
}