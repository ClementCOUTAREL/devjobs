<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index()
    {
        return view('offers.create');
    }

    public function show(Offer $offer)
    {
        return view('offers.details', ['offer' => $offer]);
    }

    public function destroy(Offer $offer)
    {
        $offer->delete();
        return redirect()->route('dashboard');
    }

}