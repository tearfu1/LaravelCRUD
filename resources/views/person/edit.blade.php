@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route("person.update", $person->id)}}" method="post">
            @csrf
            @method("patch")
            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $person->name }}">
            </div>
            <div class="form-group">
                <label for="content">Surname</label>
                <input type="text" name="surname" class="form-control" id="surname"
                       value="{{ $person->surname }}">
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="text" name="age" class="form-control" id="age"  value="{{ $person->age }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email"  value="{{ $person->email }}">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" id="phone"  value="{{ $person->phone }}">
            </div>
            <div class="form-group">
                <label for="education">Education</label>
                <input type="text" name="education" class="form-control" id="education"
                       value="{{ $person->education }}">
            </div>
            <div class="form-group">
                <label for="job">Job</label>
                <input type="text" name="job" class="form-control" id="job"  value="{{ $person->job }}">
            </div>
            <div class="form-group">
                <label for="is_married">Married?</label>
                <input type="text" name="is_married" class="form-control" id="is_married"  value="{{ $person->is_married }}">
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection
