<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function index()
    {
        $trainers = Trainer::all();
        return view('trainer.index', compact('trainers'));
    }
    
    public function create()
    {
        $trainers = Trainer::all();
        return view('trainer.create', compact( 'trainers'));
    }
    
    public function store(Request $request)
    {
        $trainer = Trainer::create([
            'name' => $request->name,
        ]);
        return redirect('trainer')->with('sucesso', 'Treinador criado com sucesso.');
    }
    
    public function edit($id)
    {
        $trainer = Trainer::findOrFail($id);
        return view('trainer.edit', compact('trainer'));
    }
    
    public function update(Request $request, $id)
    {
        $trainer = Trainer::findOrFail($id);
        $trainer->update($request->all());
        return redirect('trainer')->with('sucesso', 'Treinador editado com sucesso.');
    }
    
    public function destroy($id)
    {
        $trainer = Trainer::findOrFail($id);
        $trainer->delete();
        return redirect('trainer')->with('sucesso', 'Treinador deletado com sucesso.');
    }
}
