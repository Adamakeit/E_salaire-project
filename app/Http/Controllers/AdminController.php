<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create()
    {
        return view('admin.create');
    }
    public function edit(User $users)
    {
        return view('admin.edit', compact('users'));
    }
    public function store()
    {
        //enregistrer un admin
    }
}
