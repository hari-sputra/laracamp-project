<?php

namespace App\Http\Controllers;

use App\Models\Camp;
use App\Models\CampBenefit;
use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $camps = Camp::get();
        $campBenefits = CampBenefit::get();

        return view('main', compact('camps', 'campBenefits'));
    }

    public function dashboard()
    {
        $checkouts = Checkout::with('Camp')->whereUserId(Auth::id())->get();


        return view('user.dashboard', compact('checkouts'));
    }
}
