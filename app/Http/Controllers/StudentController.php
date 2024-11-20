<?php
namespace App\Http\Controllers;
use App\Services\StudentService;
use App\Models\Student;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateRequest;
use \resources\views;
use App\Http\Requests\RequestService;
use App\Http\Requests\StudentRequest;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\File;

class StudentController extends Controller
{

    public function store(
        StudentRequest $request, 
        StudentService $studentService
        ){

     
          try {
            $studentData = $request->validated();
    
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('uploads', $filename, 'public');
                $studentData['image'] = $path; 
            }
    
            $student = $studentService->store($studentData);
    
            return redirect()->back()->with('added', "Student Added");
            
        }
          catch(\Throwable $e){
           //dd($e->getMessage());
            return redirect()->back()->with('message_fail',"Failed Operation");
          }
        
        }

        public function update(
          UpdateRequest  $updateRequest, 
          StudentService $studentService,$id
          ){
            try{
              $data = $updateRequest->validated();

              $student = Student::query()->findOrFail($id);
             
            
              if ($updateRequest->hasFile('image')) {

                if(!empty($student->image)){
                  $destination = 'storage/uploads/' . $student->image;
                  if(File::exists($destination))
                  {
                      File::delete($destination);
                  }
                }


                $file = $updateRequest->file('image');

                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file ->move('storage/uploads/',$filename);
                
                $data["image"]= $filename;
              
            }
            $student->update($data);

            return redirect()->back()->with('updated',"Successful update Operation");
          
             }
            catch(\Throwable $e){
          //dd($e->getMessage(), $updateRequest->all());
              return redirect()->back()->with('update_fail',"Failed update Operation");
              
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


        public function update_form($id){

            $student = Student::find($id);
           return view('update',compact('student'));
        }
    

}
