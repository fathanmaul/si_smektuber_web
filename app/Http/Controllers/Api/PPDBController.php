<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DetailRegistration;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class PPDBController extends Controller
{
    
    public function create(Request $request)
    {
        try{
            $validator = Validator::make($request->all(), [
                'nisn' => 'required|string',
                'full_name' => 'required|string',
                'date_birth' => 'required|date',
                'address' => 'required|string',
                'phone' => 'required|string',
                'father_name' => 'required|string',
                'mother_name' => 'required|string',
                'school_origin' => 'required|string',
                'graduation_year' => 'required|date',
                'major_id_1' => [
                    'required',
                    'integer',
                    Rule::exists('major', 'id')
                ],
                'major_id_2' => [
                    'required',
                    'integer',
                    Rule::exists('major', 'id')
                ],
            ]);
    
            if ($validator->fails()) {
                return Response::error('Validation Error', $validator->errors(), 422);
            }
    
            $user = auth()->user();
    
            // Check if user_id is already registered
            $isRegistered = Registration::where('user_id', $user->id)->exists();
            if ($isRegistered) {
                return Response::error('User is already registered', [], 400);
            }
            
    
            $data= DetailRegistration::create([
                'user_id' => $user->id,
                'nisn' => $request->nisn,
                'full_name' => $request->full_name,
                'date_birth' => $request->date_birth,
                'address' => $request->address,
                'phone' => $request->phone,
                'father_name' => $request->father_name,
                'mother_name' => $request->mother_name,
                'guardian_name'=>$request->guardian_name,
                'school_origin' => $request->school_origin,
                'graduation_year' => $request->graduation_year,
                'major_id_1' => $request->major_id_1,
                'major_id_2' => $request->major_id_2,
            ]);
        
            return Response::success($data, 'Registration successful', 200);
        } catch (\Exception $e) {
            return Response::error('internal server error', [], 500);
        }
    
    }
}
