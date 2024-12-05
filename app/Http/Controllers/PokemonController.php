<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PokemonController extends Controller
{
    public function index()
{
    $pokemon = Pokemon::all();
    return view('pokemon.index', compact('pokemon'));
}

public function create()
{
    Gate::authorize('create', Pokemon::class); 
    $trainers = Trainer::all();
    return view('pokemon.create' , compact('trainers'));
}

public function store(Request $request)
{
    $image = $request->file('image')->store('images', 'public');
    $pokemon = Pokemon::create([
        'name' => $request->name,
        'type' => $request->type,
        'strenght' => $request->strenght,
        'image' => $image,
        'trainer_id'=>$request->trainer_id
    ]);
    return redirect('pokemon')->with('sucesso', 'Pokemon criado com sucesso.');
}

public function edit($id)
{
    Gate::authorize('update', Pokemon::class);
    $pokemon = Pokemon::findOrFail($id);
    $trainer = Trainer::all();
    return view('pokemon.edit', compact('pokemon'));
}

public function update(Request $request, $id)
{
    $pokemon = Pokemon::findOrFail($id);
    $pokemon->update($request->all());
    return redirect('pokemon')->with('sucesso', 'Pokemon editado com sucesso.');
}

public function destroy($id)
{    Gate::authorize('delete', Pokemon::class);
    $pokemon = Pokemon::findOrFail($id);
    $pokemon->delete();
    return redirect('pokemon')->with('sucesso', 'Pokemon deletado com sucesso.');
}
}
