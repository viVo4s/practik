<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Src\Auth\IdentityInterface;

class teachers extends Model 
{
    public function addTeacher(Request $request)
    {
        // Предполагается, что у вас есть соответствующая форма или данные для добавления нового педагогического сотрудника
        $teacherData = $request->all();
        
        // Создание нового педагогического сотрудника
        $teacher = Teacher::create($teacherData);

        return response()->json(['message' => 'New teacher added successfully', 'data' => $teacher]);
    }

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