<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class StudentController extends Controller
{
    public function studentShow() 
    {
        $student_listing = DB::table('student')
                        ->join('teacher', 'student.class_teacher_id', '=', 'teacher.id')
                        ->select('student.*', 'teacher.class_teacher as teacher_name')
                        ->get();
        return view('admin.student.total_student',compact('student_listing'));
    }
    public function studentadd() 
    {
        $new = DB::table('teacher')
              ->get();

        return view('admin.student.studentAdd',compact('new'));
    }
    public function studentstore(Request $request)
    {
    $request->validate([
        'student_name' => ['required', 'regex:/^[\pL\s]+$/u'],
        'class' => 'required',
        'admission_date' => 'required',
        'yearly_fess' => 'required|numeric|min:0',  
        'class_teacher_id' => 'required',

    ]);
     
        $data = DB::table('student')->insert([
            'student_name' => $request->student_name,
            'class' => $request->class,
            'admission_date' => $request->admission_date,
            'yearly_fess' => $request->yearly_fess,
            'class_teacher_id' => $request->class_teacher_id,
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now(), 
        ]);

        if ($data) {
            return redirect()->route('studentShow')->with('status', 'Data inserted successfully');
        }     
    }
    public function studentedit($id)
    { 

        $new = DB::table('teacher')
              ->get();

        $data = DB::table('student')
                ->where('id', $id)
                ->first();
        return view('admin.student.studentEdit',compact('data','new'));
    }  
    public function studentupdate(Request $request, $id)
    {

    $request->validate([
        'student_name' => ['required', 'regex:/^[\pL\s]+$/u'],
        'class' => 'required',
        'admission_date' => 'required',
        'yearly_fess' => 'required|numeric|min:0',
        'class_teacher_id' => 'required',
  
    ]);

    
    $existingRecord = DB::table('student')
                    ->where('id', $id)
                    ->first();


    if ($existingRecord) {
        $data = DB::table('student')->where('id', $id)->update([
            'student_name' => $request->student_name,
            'class' => $request->class,
            'admission_date' => $request->admission_date,
            'yearly_fess' => $request->yearly_fess,
            'class_teacher_id' => $request->class_teacher_id,
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now(), 
        ]);

            return redirect()->route('studentShow')->with('status', 'Data updated successfully');
         }
    }
    public function studentdestory($id)
   {
     $existingRecord = DB::table('student')
                    ->where('id', $id)
                    ->first();
 
     if ($existingRecord) {
         DB::table('student')
            ->where('id', $id)
            ->delete();
 
         return redirect()->route('studentShow')->with('status', 'Data deleted successfully');
       }
    }
    
}
