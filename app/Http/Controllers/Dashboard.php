<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Application;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index()
    {
        $offers=[];
        if(auth()->user()->role == 1){
            $offers = Offer::all();
        }else{
            $offers = auth()->user()->offers;
        }

        return view('dashboard', [
            'offers' => $offers
        ]);
    }
}