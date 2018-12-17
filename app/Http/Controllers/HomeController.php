<?php

namespace App\Http\Controllers;

use App\Course;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = auth()->user()->role;

        if ($role == 'admin') {
            $courses = Course::count();
            $students = User::where('role', 'student')->count();
            $teachers = User::where('role', 'teacher')->count();
            return view('admin.home', ['courses' => $courses, 'students' => $students, 'teachers' => $teachers]);
        } else if ($role == 'teacher') {
            return redirect()->route('courses.index');
        } else {
            return redirect()->route('courses.index');
        }
    }
}
