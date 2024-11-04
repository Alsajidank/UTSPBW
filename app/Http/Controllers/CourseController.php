<?php
namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function home()
{
    $courses = Course::all(); // Mengambil semua data kursus
    return view('courses.home', compact('courses'));
}

    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        Course::create($request->validate([
            'course_name' => 'required',
            'description' => 'nullable',
            'instructor' => 'required',
            'duration' => 'required',
        ]));

        return redirect()->route('courses.index')->with('success', 'Course created successfully.');
    }

    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $course->update($request->validate([
            'course_name' => 'required',
            'description' => 'nullable',
            'instructor' => 'required',
            'duration' => 'required',
        ]));

        return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'Course deleted successfully.');
    }
}
