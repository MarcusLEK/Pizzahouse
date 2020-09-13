<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    Public function index(){

        //$pizzas = Pizza::orderBy('name', 'desc')->get();
        //$pizzas = Pizza::where('type', 'hawaiian')->get();
        //$pizzas = Pizza::latest()->get();
        $pizzas = Pizza::all();

        return view('pizzas.index', [
            'pizzas' => $pizzas,
        ]);
    }

    public function show($id){
        // use the $id variable to query the db for a record
        $pizza = Pizza::findOrFail($id);

        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create(){
        // creates new pizza
        return view('pizzas.create');
    }

    public function store(){

        

        return redirect('/');
    }
}
