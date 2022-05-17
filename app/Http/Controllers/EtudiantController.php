<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index()
    {
        $etudiants=Etudiant::latest()->paginate(8);
        return view('etudiants.index',compact('etudiants'))
        ->with('i' (request()-> input('page',1)-1)*9);
    }

    public function create()
    {
        return view('etudiants.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'age'=>'required',
            'genre'=>'required',
            'adresse'=>'required',
            'telephone'=>'required',
            'email'=>'required'
        ]);

        Etudiant::create($request->all());
        return redirect()->route('etudiants.index')
        ->with('success','Etudiant created successfully.');
    }

    public function show(Etudiant $etudiant)
    {
        return view('etudiants.show',compact('etudiant'));
    }

    public function edit(Etudiant $etudiant)
    {
        return view('etudiants.edit',compact('etudiant'));
    }

    public function update(Request $request, Etudiant $etudiant)
    {
        $request->validate([

        ]);

        $etudiant->update($request->all());

        return redirect()->route('etudiants.index')
        ->with('success','Etudiant updated successfully.');
    }

    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();

        return redirect()->route('etudiants.index')
        ->with('success','Etudiant deleted successfully.');
    }
}
