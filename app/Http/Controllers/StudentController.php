<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Student::latest()->paginate(5);

        return view('create', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_name'          =>  'required|unique:students',
            'full_name'          =>  'required',
            'birthdate'          =>  'required|date',
            'phone'          =>  'required',
            'address_'          =>  'required',
            'password_'          =>  'required',
            'confirm_password'          =>  'required',
            'image_'          =>  'required',
            'email'          =>  'required',
        ]);

        $file_name = time() . '.' . $request->image_->getClientOriginalExtension();

        request()->image_->move(public_path('images'), $file_name);

        $student = new Student;

        $student->full_name = $request->full_name;
        $student->user_name = $request->user_name;
        $student->birthdate = $request->birthdate;
        $student->phone = $request->phone;
        $student->address_ = $request->address_;
        $student->password_ = $request->password_;
        $student->confirm_password = $request->confirm_password;
        $student->image_ = $file_name;
        $student->email = $request->email;

        

        $student->save();
        Mail::to('pandatommo70@gmail.com')->send(new TestMail($request->user_name));

        return redirect()->route('students.index')->with('success', 'Student Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'user_name'          =>  'required|unique:students',
        ]);

        $image_ = $request->hidden_image_;

        if($request->image_ != '')
        {
            $image_ = time() . '.' . request()->image_->getClientOriginalExtension();

            request()->image_->move(public_path('images'), $student_image);
        }

       $student = Student::find($request->hidden_user_name);/////

        
    $student->full_name = $request->full_name;
    $student->user_name = $request->user_name;
    $student->birthdate = $request->birthdate;
    $student->phone = $request->phone;
    $student->address_ = $request->address_;
    $student->password_ = $request->password_;
    $student->confirm_password = $request->confirm_password;
    $student->image_ = $file_name;
    $student->email = $request->email;

        $student->save();

        return redirect()->route('students.index')->with('success', 'Student Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
