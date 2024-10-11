<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployerRequest;
use App\Models\Employer;
use App\Models\Departement;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function index()
    {
        $employers = Employer::with('departement')->paginate(7);
        return view('employer.index', compact('employers'));
    }
    public function create()
    {
        $departements = Departement::all();
        return view('employer.create', compact('departements'));
    }
    public function store(Employer $employer, EmployerRequest $request)
    {
        $employer->nom = $request->name;
        $employer->prenom = $request->prenom;
        $employer->email = $request->email;
        $employer->departement_id = $request->departement;
        $employer->contact = $request->contact;
        // $employer->montant_journalier = $request->montant_journalier;
        $employer->save();
        return redirect()->route('employer')->with('success', 'Employer created successfully');
    }
    public function editer(Employer $employer,)

    {
        $departement = Departement::all();
        return view('employer.edit', compact('employer', 'departement'));
    }
    public function update(Employer $employer, Request $request)
    {
        $employer->nom = $request->name;
        $employer->prenom = $request->prenom;
        $employer->email = $request->email;
        $employer->departement_id = $request->departement;
        $employer->contact = $request->contact;
        // $employer->montant_journalier = $request->montant_journalier;
        $employer->save();
        return redirect()->route('employer')->with('success', 'Employer updated successfully');
    }
    public function delete(Employer $employer)
    {
        $employer->delete();
        return redirect()->route('employer')->with('success', 'Employer deleted successfully');
    }
}
