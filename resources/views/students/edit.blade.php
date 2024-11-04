@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Siswa</h1>
        
        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $student->name }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $student->email }}" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Telepon</label>
                <input type="text" name="phone" id="phone" class="form-control" value="{{ $student->phone }}" required>
            </div>
            <div class="mb-3">
                <label for="course_id" class="form-label">Kursus</label>
                <select name="course_id" id="course_id" class="form-select" required>
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}" {{ $student->course_id == $course->id ? 'selected' : '' }}>{{ $course->course_name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
