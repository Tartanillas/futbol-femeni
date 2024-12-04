<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estadi;

class EstadiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $estadis = Estadi::all();
        return view('estadis.index', compact('estadis'));
    }
   
    public function show(Estadi $estadi) {
        return view('estadis.show', compact('estadi'));
    }
   
    public function create() {
        return view('estadis.create');
    }
   
    public function edit(Estadi $estadis) {
        return view('estadis.edit', compact('estadis'));
    }
   
    public function destroy(Estadi $estadi) {
        $estadi->equips()->delete();
        $estadi->delete();
        return redirect()->route('estadis.index')->with('success', 'Estadi esborrat correctament!');   
    }
    public function store(Request $request) {
        $validated = $request->validate([
            'nom' => 'required|unique:estadis',
            'capacitat' => 'integer|min:0',
        ]);
        Estadi::create($validated);
        return redirect()->route('estadis.index')->with('success', 'estadi creat correctament!');
    }

    public function update(Request $request, $id) {
        $validated = $request->validate([
            'nom' => 'required|unique:estadis,nom,'.$id,
            'ciutat' => 'required|exists:estadis,id',
            'capacitat' => 'integer|min:0',
        ]);
        $estadi = Estadi::findOrFail($id);
        $estadi->update($validated);
        return redirect()->route('estadis.index')->with('success', 'estadi actualitzat correctament!');
    }
}