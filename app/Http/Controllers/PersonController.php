<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $person = Person::find(1);
        dump('name: ' . $person->name);
        dump('surname' . $person->surname);
        dump('age' . $person->age);
        dump($person->email);
        dump($person->phone);
        dump($person->education);
        dump($person->job);
        dump($person->is_married);
    }
}
