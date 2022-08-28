<?php
namespace App\Repositories\Student;

use App\Models\Student;
use App\Repositories\Student\StudentRepositoryInterface;
use App\Utility;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentRepository implements StudentRepositoryInterface{
    public function getAllStudents()
    {
        $students = DB::table('students')
                    ->select('id','name','city','distance','moons')
                    ->whereNull('deleted_at')
                    ->get();
        return $students;
    }
    public function getStudent($id){
        $student = DB::table('students')
                    ->select('id','name','city','distance','moons')
                    ->where('id',$id)
                    ->first();
        return $student;
    }

    public function deleteStudent($id){
        $userId = Auth::guard('Administrator')->user()->id;
        $result =[];
        $delete = DB::table('students')
                    ->where('id',$id)
                    ->update(['deleted_by' => $userId,'deleted_at' =>date('Y-m-d H:i')]);
        $result['status']=200;
        return $result;
    }
    public function updateStudent($data){
        $userId = Auth::guard('Administrator')->user()->id;
        $result =[];
        $obj = Student::findOrFail($data->id);
        // dd($data);
        $obj->name = $data->name;
        $obj->city = $data->city;
        $obj->distance = $data->distance;
        $obj->moons = $data->moons;
        $newObj = Utility::UpdateBy($obj);
        $newObj->save();
        $result['status'] = 200;
        return $result;
    }
    

}