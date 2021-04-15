@extends('layouts.index')

@section('content')
    <div class="text-center my-5 py-5">
        <h1>PAGE HOME, partie frontend</h1>
        <a href="{{route('students.index')}}" class="btn btn-primary">Création de student</a>
    </div>
@endsection