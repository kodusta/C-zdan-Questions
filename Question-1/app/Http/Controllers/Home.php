<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        $users = User::where('position', 3)->get();
        return view('pages.full', compact('users'));

    }

    public function junior()
    {

        $users = User::where('authority', 1)->whereBetween('age', [18, 23])->get();
        return view('pages.junior', compact('users'));
    }

    public function age()
    {
        //age 18-25 and group by city and group by position user count //
        $users = User::select('city', 'position', 'age','name')->whereBetween('age', [18, 25])->groupBy('city')->groupBy('position')->get();
        //count and list all users by city and position
        $users = $users->map(function ($item) {
            $item->count = User::where('city', $item->city)->where('position', $item->position)->count();
            return $item;
        });
        return view('pages.age', compact('users'));
    }
}
