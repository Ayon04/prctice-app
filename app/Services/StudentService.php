<?php
namespace App\Services;

use App\Http\Requests\StudentRequest;
use App\Models\Student;

class StudentService{

public function store(array $payloads)
{    

    return Student::query()->create($payloads);
}


public function update($id, array $payloads)
{
    $student = Student::findOrFail($id); 
    $student->update($payloads);
    return $student;
}




public function ViewStudent()
{
    
   // $students = Student::all();
    
     $students = Student::all();
}


// public function ViewStudent()
// {
    
//     $students = Student::all();
    
//     return view('student_view',compact('students'));
// }


// public function remove( $student_id) {
    
//     $student = Student::find($student_id);   
    

//    $student->delete();
//     return redirect('/student_view')->with('messge',"data deleted");
//  }


//  public function updateForm($student_id){
    
//     $student = Student::find($student_id);
             
//        return view('student_update_form',compact('student'));

//    }


//  public function update(UpdateRequest $req,$student_id){
    
//     $student = Student::find($student_id);
//     $student->name=$req->name;
//     $student->username = $req->username;
//     $student->mobile = $req->mobile;
//     $student->email = $req->email;
//     $student->password = $req->password;
//     $student->update();
  
//     return redirect()->back()->with('updatemsg',"Student details updated");  
//  }
}

?>