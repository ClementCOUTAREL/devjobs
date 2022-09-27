<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index(Offer $offer){
        
        return view('application.create', [
            'offer' =>$offer
        ]);
    }

    public function show()
    {
        $result = auth()->user()->applications;
        return view('application.show', ["applications" => $result]);
    }
}