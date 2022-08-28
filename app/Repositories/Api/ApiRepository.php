<?php
namespace App\Repositories\Api;

use App\Models\Student;
use App\Repositories\Api\ApiRepositoryInterface;
use App\Utility;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ApiRepository implements ApiRepositoryInterface{
    public function getAllStudents()
    {
        $students = DB::table('students')
                    ->select('id','name','city','distance','moons')
                    ->whereNull('deleted_at')
                    ->get();
        return $students;
    }
} 