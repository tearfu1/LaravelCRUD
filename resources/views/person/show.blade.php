@extends('layouts.main')
@section('content')
    <div>{{ $person->id }}. {{ $person->name }} {{ $person->surname }}</div>
    <div>Age: {{ $person->age }}</div>
    <div>Email: {{ $person->email }}</div>
    <div>Phone: {{ $person->phone }}</div>
    <div>Education: {{ $person->education }}</div>
    <div>Job: {{ $person->job }}</div>
    <div>Married: {{ $person->Married }}</div>
    <div>
        <form action="{{ route("person.edit", $person->id) }}">
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
    <div>
        <form action="{{ route("person.destroy", $person->id) }}" method="post">
            @csrf
            @method("delete")
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection
