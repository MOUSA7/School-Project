<?php

namespace App\Http\Controllers;

use App\Semester;
use App\StudentDetails;
use App\Students;
use App\Subjects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Students::all();

        return view('admin.student.index',compact('students'));
       // dd("It Works");

//        $details = Auth::user()->std_details;
//        return response()->json([
//            'details'=> $details
//        ],200);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Students $id)
    {
        $studentDetails = StudentDetails::all();
        $students = Students::all();
        $semesters = Semester::all();
        $subjects = Subjects::pluck('name','id')->all();
        return view('admin.student.details',compact('semesters','subjects','students','studentDetails'));
//        $details = StudentDetails::pluck('name','id');
//        return response()->json([
//            'details'=>$details
//        ],200);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        $user = Auth::user();
        $student_id = $request->students_id;
        $student = StudentDetails::where('students_id',$student_id)->first();

      //  $user->student()->whereId($student_id)->first()->create($request->all());
        $user->std_details()->create($request->all());

        return redirect('admin/students');
//        $request->validate([
//           'subject_id'=>'required',
//            'student_id'=>'required',
//            'grade'=>'required'
//        ]);
//
//       $detail = $request->user()->std_details()->create(
////           'subject_id'=> $request->subject_id,
////           'student_id'=> $request->student_id,
////           'grade'=> $request->grade
//       $request->all() );
//
//       return response()->json([
//           'detail'=>$detail
//       ]);
//        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,StudentDetails $std)
    {
        $student = Students::find($id);
        $student_details = StudentDetails::find($id)->all();
        return view('admin.student.show',compact('student_details','student'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Students::find($id);
        return view('admin.student.edit',compact('student'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
