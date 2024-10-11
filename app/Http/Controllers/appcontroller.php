<?php

namespace App\Http\Controllers;

use App\Http\Requests\departementrequest;
use App\Models\Configuration;
use App\Models\Departement;
use App\Models\Employer;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class appcontroller extends Controller
{

    public function dashboard()
    {
        $departement = Departement::all()->count();
        $employer = Employer::all()->count();
        $user = User::all()->count();
        $configuration = Configuration::all()->count();
        $defautpayementdate = null;
        $payementnotification = " ";
        $currentdate = Carbon::now()->day();
        $defautpayementdatequery = Configuration::where('type', 'PAYEMENT_DATE')->first();
        if ($defautpayementdatequery) {
            $defautpayementdate = $defautpayementdatequery->value;
            if ($defautpayementdate < $currentdate) {
                $payementnotification = "le paiement doit avoir lieu le" . " " . $defautpayementdate . " " . "de ce mois";
            } else {
                $nextmonth = Carbon::now()->addMonth();
                $nextmonthname = $nextmonth->format("F");
                $payementnotification = "le paiement doit avoir lieu le" . " " . $defautpayementdate . " " . "du mois " . $nextmonthname;
            }
        }

        return view('dashboard', compact('departement', 'employer', 'user', 'payementnotification', 'configuration'));
    }
}
