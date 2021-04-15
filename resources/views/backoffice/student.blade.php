@extends('layouts.index')
@section('content')
    <header class="text-center my-5">
        <h1>DashBoard</h1>
        <a href="{{route('students.create')}}" class="btn btn-success">Ajouter des membres</a>
        <a href="{{route('home')}}" class="btn btn-primary">Retour au site</a>
    </header>
    <section class=" mt-5">
        <h2>All students :</h2>
        <div class="row">
            @foreach($students as $student)
                @if($student->age > 24)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <p class="card-text text-danger">{{$student->name . ' ' . $student->gender . ' ' . $student->mail . ' ' . $student->age}}</p>
                    </div>
                </div>
                @elseif($student->age == 22 || $student->age == 23 )
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <p class="card-text text-primary">{{$student->name . ' ' . $student->gender . ' ' . $student->mail . ' ' . $student->age}}</p>
                    </div>
                </div>
                @else
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <p class="card-text">{{$student->name . ' ' . $student->gender . ' ' . $student->mail . ' ' . $student->age}}</p>
                    </div>
                </div>
                @endif    
            @endforeach
        </div>
    </section>
    <section class=" mt-5">
        <h2>Students filles:</h2>
        <div class="row">
            @foreach($students as $student)
                @if($student->gender == 'Fille')
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <p class="card-text">{{$student->name . ' ' . $student->gender . ' ' . $student->mail . ' ' . $student->age}}</p>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </section>
    <section class=" mt-5">
        <h2>Students garcon :</h2>
        <div class="row">
            @foreach($students as $student)
                @if($student->gender == 'Garçon')
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <p class="card-text">{{$student->name . ' ' . $student->gender . ' ' . $student->mail . ' ' . $student->age}}</p>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </section>
@endsection
