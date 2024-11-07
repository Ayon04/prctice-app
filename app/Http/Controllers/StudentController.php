<?php
namespace App\Http\Controllers;

use App\Services\StudentService;
use App\Models\Student;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateRequest;


use App\Http\Requests\RequestService;
use App\Http\Requests\StudentRequest;
use Illuminate\Console\View\Components\Alert;

class StudentController extends Controller
{

   
    public function store(
        StudentRequest $request, 
        StudentService $studentService
        ){
          try{
            $student = $studentService->store($request->validated());

            return redirect()->back()->with('added',"Student Added");
        
           }
          catch(\Throwable $e){
           dd($e->getMessage());
            return redirect()->back()->with('message_fail',"Failed Operation");
          }
        
        }

   
        public function ViewStudent()
        {
            
            $students = Student::all();
            
            return view('students',compact('students'));
        }


        public function remove($id)
        {
            try{
                
                $student = Student::destroy($id);
               return redirect()->back()->with('deleted',"Data Deleted");


            }
            
            catch(\Throwable $ex){

                return redirect()->back()->with('message_fail',"Operation failed");
                
            }
        }
    
    



}
