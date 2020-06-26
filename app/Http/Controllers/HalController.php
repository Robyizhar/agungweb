<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalController extends Controller
{

    // public function index(){
    //     return view('welcome', ['name' => 'Tugas Crud Laravel']);
    // }
    // public function home(){
    //     return view('index', ['name' => 'Tugas Crud Laravel']);
    // }
    public function about(){
        return view('about', ['name' => 'Tujuan WEB Data Mahasiswa STTL']);
    }
}