@extends('layouts.main')
@section('content')
    <div>
        @foreach($people as $person)
            <div><a href="{{ route('person.show', $person->id) }}">{{ $person->id }}.
                    {{ $person->name }} {{ $person->surname }}</a></div>
        @endforeach
    </div>
@endsection
