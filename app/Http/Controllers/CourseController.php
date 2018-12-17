<?php

namespace App\Http\Controllers;

use App\Course;
use App\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = auth()->user()->role;
        if ($role == 'admin') {
            $courses = Course::with('teacher')->get();
            return view('admin.courses.index', ['courses' => $courses]);
        } else if ($role == 'student') {
            $courses = auth()->user()->inscriptions;
            return view('student.courses.index', ['courses' => $courses]);
        } else {
            $courses = auth()->user()->courses;
            return view('teacher.courses.index', ['courses' => $courses]);
        }
    }

    /**
     * Display a listing of students of a curse.
     * @param \App\Course $course
     * @return \Illuminate\Http\Response
     */
    public function students(Course $course)
    {
        $enableChangeNote = Course::allowedTime();
        return view('teacher.courses.students', ['course' => $course, 'enable' => $enableChangeNote]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.courses.create');
    }

    /**
     * Show the form for update note a student.
     *
     * @return \Illuminate\Http\Response
     */
    public function changeNote(Course $course, User $student)
    {
        return view('teacher.courses.change-note', ['course' => $course, 'student' => $student]);
    }

    /**
     * Update the note of a student.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @param  \App\User  $student
     * @return \Illuminate\Http\Response
     */
    public function updateNote(Request $request, Course $course, User $student)
    {
        $request->validate([
            'note' => 'required|numeric|min:0|max:20',
        ]);

        $student->inscriptions()->updateExistingPivot($course->id, ['qualification' => $request->note]);
        return redirect()->route('courses.students', [$course->id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = new Course;
        $course->name = $request->name;
        $course->save();
        return redirect()->route('courses.index');
    }

    /**
     * Display list of teachers to be assigned to a course.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function assignTeacher(Course $course)
    {
        $teachers = User::where('role', 'teacher')->get();
        return view('admin.courses.assign-teacher', ['course' => $course, 'teachers' => $teachers]);
    }

    /**
     * Assign a teacher to a course.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function saveTeacher(Request $request, Course $course)
    {
        $teacher = User::find($request->teacher_id);
        $course->teacher()->associate($teacher);
        $course->save();
        return redirect()->route('courses.index');
    }

    /**
     * Display list of teachers to be assigned to a course.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function addStudent(Course $course)
    {
        $students = User::where('role', 'student')->get();
        return view('admin.courses.assign-student', ['course' => $course, 'students' => $students]);
    }

    /**
     * Assign a teacher to a course..
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function saveStudent(Request $request, Course $course)
    {
        $course->students()->sync($request->student_id);
        return redirect()->route('courses.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('admin.courses.edit', ['course' => $course]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $course->name = $request->name;
        $course->save();
        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
