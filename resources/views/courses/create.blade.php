@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Kursus Baru</h1>
        
        <form action="{{ route('courses.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="course_name" class="form-label">Nama Kursus</label>
                <input type="text" name="course_name" id="course_name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea name="description" id="description" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label for="instructor" class="form-label">Instruktur</label>
                <input type="text" name="instructor" id="instructor" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Durasi</label>
                <input type="text" name="duration" id="duration" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
