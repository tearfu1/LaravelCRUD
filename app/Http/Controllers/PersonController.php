<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $people = Person::all();

        return view('people', compact('people'));
    }

    public function create()
    {
        return view('person.create');
    }

    public function store()
    {
        $person = request()->validate([
            "name" => "string",
            "surname" => "string",
            "age" => "integer",
            "email" => "",
            "phone" => "",
            "education" => "",
            "job" => "",
            "is_married" => "boolean",
        ]);
        Person::create($person);
        return redirect()->route('person.index');
    }

    public function show(Person $person)
    {
        return view('person.show', compact('person'));
    }

    public function edit(Person $person)
    {
        return view('person.edit', compact('person'));
    }

    public function update(Person $person)
    {
        $editedData = request()->validate([
            "name" => "string",
            "surname" => "string",
            "age" => "",
            "email" => "",
            "phone" => "",
            "education" => "",
            "job" => "",
            "is_married" => "boolean",
        ]);
        $person->update($editedData);
        return redirect()->route('person.show', $person->id);
    }

    public function destroy(Person $person)
    {
        $person->delete();
        return redirect()->route('person.index');
    }
}
