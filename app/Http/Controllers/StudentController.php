<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $Students = student::all();
        // return view('Students.index')-> with('Students'," $Student");
        return view('students.index', ['students' => Student::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'address' => ['required'],
            'mobile' => ['required'],
            'dateofbirth' => ['required'],
            'religion'=>['required'],
        ]);
        $intro= [
            'name' => $request->name,
            'address' => $request->address,
            'mobile' => $request->mobile,
            'dateofbirth' => $request->dateofbirth,
            'religion' => $request->religion,
        ];

        $is_created = Student::create($intro);
        if($is_created){
            return back()->with(['success' => 'Magic Has Been Spelled! :)']);
        }
        else{
            return back()->with(['Failure' => ' Magic Has failed to Spell! :)']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => ['required'],
            'address' => ['required'],
            'mobile' => ['required'],
            'dateofbirth' => ['required'],
            'religion'=>['required'],
        ]);
        $intro= [
            'name' => $request->name,
            'address' => $request->address,
            'mobile' => $request->mobile,
            'dateofbirth' => $request->dateofbirth,
            'religion' => $request->religion,
        ];
        $is_updated = $student->update($intro);
        if($is_updated){
            return back()->with(['success' => 'Magic Has Been Spelled! :)']);
        }
        else{
            return back()->with(['Failure' => ' Magic Has failed to Spell! :)']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student )
    {
        $is_deleted = $student->delete();
        if($is_deleted){
            return back()->with(['success' => 'Magic Has Been Spelled! :)']);
        }
        else{
            return back()->with(['Failure' => ' Magic Has failed to Spell! :)']);
        }
    }
}
