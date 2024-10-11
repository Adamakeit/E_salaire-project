<?php

namespace App\Http\Controllers;

use App\Http\Requests\configrequest;
use App\Models\Configuration;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index(Configuration $configuration)
    {
        $configurations = Configuration::all();
        return view('config.index', compact('configurations'));
    }
    public function create()
    {
        return view('config.create');
    }
    public function store(Configuration $configuration, configrequest $request)
    {
        $configuration->type = $request->type;
        $configuration->value = $request->valeur;
        $configuration->save();
        return redirect()->route('index_config')->with('success', 'Configuration created successfully');
    }
    public function delete(Configuration $config)
    {
        $config->delete();
        return redirect()->route('index_config')->with('success', 'Configuration deleted successfully');
    }
}
