<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TeacherController extends Controller
{
    public function teacherShow() 
    {
        $teacher_listing = DB::table('teacher')
                    ->orderBy('id', 'DESC')
                    ->get();
        return view('admin.teacher.total_teacher',compact('teacher_listing'));
    }
    public function teacheradd() 
    {
        return view('admin.teacher.teacherAdd');
    }
    public function teacherstore(Request $request)
    {
    $request->validate([
        'class_teacher' => ['required', 'regex:/^[\pL\s]+$/u'],
    ]);
     
        $data = DB::table('teacher')->insert([
            'class_teacher' => $request->class_teacher,
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now(), 
        ]);

        if ($data) {
            return redirect()->route('teacherShow')->with('status', 'Data inserted successfully');
        }     
    }
    public function teacheredit($id)
    { 
        $data = DB::table('teacher')
                ->where('id', $id)
                ->first();
        return view('admin.teacher.teacherEdit',compact('data'));
    }  
    public function teacherupdate(Request $request, $id)
    {

    $request->validate([
        'class_teacher' => ['required', 'regex:/^[\pL\s]+$/u'],
    ]);

    
    $existingRecord = DB::table('teacher')
                    ->where('id', $id)
                    ->first();


    if ($existingRecord) {
        $data = DB::table('teacher')->where('id', $id)->update([
            'class_teacher' => $request->class_teacher,
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now(), 
        ]);

            return redirect()->route('teacherShow')->with('status', 'Data updated successfully');
         }
    }
    public function teacherdestory($id)
   {
     $existingRecord = DB::table('teacher')
                    ->where('id', $id)
                    ->first();
 
     if ($existingRecord) {
         DB::table('teacher')
            ->where('id', $id)
            ->delete();
 
         return redirect()->route('teacherShow')->with('status', 'Data deleted successfully');
       }
    }
}
