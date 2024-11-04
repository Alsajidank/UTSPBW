@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Kursus</h1>
        
        <form action="{{ route('courses.update', $course->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="course_name" class="form-label">Nama Kursus</label>
                <input type="text" name="course_name" id="course_name" class="form-control" value="{{ $course->course_name }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea name="description" id="description" class="form-control" required>{{ $course->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="instructor" class="form-label">Instruktur</label>
                <input type="text" name="instructor" id="instructor" class="form-control" value="{{ $course->instructor }}" required>
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Durasi</label>
                <input type="text" name="duration" id="duration" class="form-control" value="{{ $course->duration }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
