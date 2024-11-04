@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Selamat Datang di Portal Kursus Online</h1>
        <p>Berikut adalah daftar kursus yang tersedia:</p>

        <div class="row">
            @foreach($courses as $course)
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $course->course_name }}</h5>
                            <p class="card-text">{{ $course->description }}</p>
                            <p><strong>Instruktur:</strong> {{ $course->instructor }}</p>
                            <p><strong>Durasi:</strong> {{ $course->duration }}</p>
                            <a href="{{ route('courses.show', $course->id) }}" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
