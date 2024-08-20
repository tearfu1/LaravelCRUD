@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route("person.store")}}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Your beautiful name">
            </div>
            <div class="form-group">
                <label for="content">Surname</label>
                <input type="text" name="surname" class="form-control" id="surname"
                       placeholder="Your beautiful surname">
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="text" name="age" class="form-control" id="age" placeholder="Your beautiful age">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Your beautiful Email">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" id="phone" placeholder="Your beautiful phone">
            </div>
            <div class="form-group">
                <label for="education">Education</label>
                <input type="text" name="education" class="form-control" id="education"
                       placeholder="Your beautiful education">
            </div>
            <div class="form-group">
                <label for="job">Job</label>
                <input type="text" name="job" class="form-control" id="job" placeholder="Your beautiful job">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" name="is_married" class="form-check-input" id="is_married">
                <label class="form-check-label" for="is_married">Married?</label>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
    </div>
@endsection
