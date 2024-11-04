@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Kursus</h1>
        <a href="{{ route('courses.create') }}" class="btn btn-primary">Tambah Kursus Baru</a>
        
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Kursus</th>
                    <th>Deskripsi</th>
                    <th>Instruktur</th>
                    <th>Durasi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->course_name }}</td>
                        <td>{{ $course->description }}</td>
                        <td>{{ $course->instructor }}</td>
                        <td>{{ $course->duration }}</td>
                        <td>
                            <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
