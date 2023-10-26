<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class DashboardController extends Controller
{
    function home(): View
    {
        $this->validate(request(), ['q' => 'nullable|string']);

        if (request()->q) {
            $users = User::search(request()->q)->get();
        }


        return view('dashboard', compact('users'));
    }
}
