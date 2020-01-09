<?php

namespace App\Http\Controllers;

use App\classes;
use App\Http\Requests\StudentRequest;
use App\photo;
use App\Semester;
use App\Students;
use App\Subjects;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentsController extends Controller
{
    public function __construct()
    {
       // $this->middleware=(['Lecturer'=>except('index','create','edit')]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$students = User::latest()->take(10)->where('role_id',2)->get();

        $students = Students::paginate(4);
        return view('admin.student.index',compact('students'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = classes::pluck('name','id')->all();

        $subjects = Subjects::latest()->get();
        return view('admin.student.create',compact('classes','subjects'));
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        $input =$request->all();
        $user  =Auth::user();


       if ($file = $request->file('photo_id')){
           $name = time().$file->getClientOriginalName();
           $file->move('images',$name);
           $photo = photo::create(['file'=>$name]);

       $input['photo_id']=$photo->id;

       }
       $student = $user->student()->create($input);


       if ($request->subject_id){
        $student->subject()->sync($request->subject_id);
       }
        // $students = Students::pluck('FullName','id')->all();
        //  $subjects = $request->input('name');
        //     $request['subject_id'] = $request->user()->subject->id;
        //$subjectid = $request->input('name');



       // dd($student);
        return redirect('admin/students');

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
        $classes = classes::pluck('name','id');
        return view('admin.student.edit',compact('student','classes'));
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
        $user  = Auth::user();

        $input = $request->all();


        if ($file = $request->file('photo_id')){
            $name = time().$file->getClientOriginalName();
            $file->move('images',$name);

            $photo = photo::create(['file'=>$name]);
            $input['photo_id']=$photo->id;

        }
        $user->student()->whereId($id)->first()->update($input);
        return redirect('/admin/students');
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
        $student = Students::find($id);
        $student->delete();

        return redirect('/admin/students');
        //
    }

//    public function details($id){
//        $student = Students::find($id);
//        $semesters = Semester::pluck('name','id');
//        $subjects = Subjects::pluck('name','id');
//
//        return view('admin.student.details',compact('semesters','subjects','student'));
//    }
    public function stu($id){
        $sd = Students::findOrFail($id);
        $students =$sd->std_details()->get();
        return view('admin.student.show',compact('sd','students'));
    }
}
