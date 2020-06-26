<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', ['data' => $students, 'judul' => 'Daftar mahasiswa']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create', ['judul' => 'Tambah data baru']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'nama' => 'required|unique:students|max:255',
            'nim' => 'required',
            'email' => 'required',
            'jurusan' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('students/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $student = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ];

        Student::create($student);
        return redirect('/students')->with('stat', 'Data berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {

        return view('students.show', ['data' => $student, 'judul' => 'Detail Students']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
      return view('students.edit', ['robi' => $student]);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request )
    {
        $wildan=[
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' =>$request->email,
            'jurusan'=>$request->jurusan,
        ];

        
        Student::whereId($request->id)->update($wildan);
        return redirect('/students');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($student)
    {
        Student::where('id',$student)->delete();
        
        return redirect('/students');
    }
}