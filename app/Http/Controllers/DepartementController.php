<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepartmentRequest;
use App\Models\Departement;


class DepartementController extends Controller
{
    public function index()
    {
        $departements = Departement::paginate(4);
        return view('departement.index', compact('departements'));
    }
    public function create()
    {
        return view('departement.create');
    }
    public function store(Departement $departement, DepartmentRequest $request)
    {
        $departement->name = $request->name;
        $departement->save();
        return redirect()->route('index')->with('success', 'Le departement a bien ete creer !');
    }

    public function edit(Departement $departement)
    {
        return view('departement.edit', compact('departement'));
    }
    public function update(Departement $departement, DepartmentRequest $request)
    {
        $departement->name = $request->name;
        $departement->save();
        return redirect()->route('index')->with('success', 'Le departement a bien ete modifie!');
    }
    public function delete(Departement $departement)
    {
        $departement->delete();
        return redirect()->route('index')->with('success', 'Le departement a bien ete supprime!');
    }
}
