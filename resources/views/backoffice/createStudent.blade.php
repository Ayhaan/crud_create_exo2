@extends('layouts.index')
@section('content')
<form action="{{route('students.store')}}" method="post" class="w-50 mx-auto">
    @csrf
    <div class="text-center my-5">
        <h1>formulaire d'ajout student</h1>
        <a href="{{route('students.index')}}" class="btn btn-primary">Retour</a>
    </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Gender</label>
        <select class="form-control"  name="gender" id="">
          <option value="Fille">Fille</option>
          <option value="Garçon">Garçon</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Age</label>
        <input name="age" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">E-mail</label>
        <input name="mail" type="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection