<?php

namespace App\Http\Controllers;

use App\Repositories\Api\ApiRepositoryInterface;
use GrahamCampbell\ResultType\Success;
use JWTAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
class ApiController extends Controller
{
    public function authenticate(Request $request){
        
        $credentials = $request->only('name','password');
        $validator = Validator::make($credentials, [
            'name' => 'required',
            'password' => 'required',
        ]);
        if($validator->fails()){
            return response()->json([
                'error' => $validator->message
            ],200);
        }
        try{
            if( !$token=JWTAuth::attempt($credentials)){
                
                return response()->json([
                    'success' => false,
                    'message' => 'Login crendentials are invalid',
                ],400);
            }
        }catch(JWTException $e){
            return response()->json([
                'success' => false,
                'message' => 'Could not create token',
            ],500);
        }
        
         return response()->json([
            'success' => true,
            'token' => $token
         ]);

    }
    protected $apiRepository;
    public function __construct(ApiRepositoryInterface $apiRepository)
    {
        $this->apiRepository = $apiRepository;
    }
    public function getStudents(){
        $students = $this->apiRepository->getAllStudents();
        // dd($students);
        return response()->json($students);
    }
}
