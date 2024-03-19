<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Src\Auth\IdentityInterface;

class employees extends Model 
{
   use HasFactory;

   public $timestamps = false;

   protected $table = 'employees'; // Specify the table name

   protected $primaryKey = 'id'; // Specify the primary key field name

   protected $fillable = [
       'last_name',
       'first_name',
       'middle_name',
       'gender',
       'data_of_birth',
       'address',
       'position',
       'department_id',
   ];

   // Define the relationship between User and Кафедры
   public function department()
   {
       return $this->belongsTo(Department::class, 'id_кафедры', 'id');
   }

}
