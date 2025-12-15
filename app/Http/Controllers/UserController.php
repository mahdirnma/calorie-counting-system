<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('User.dashboard');
    }

    public function foods(Request $request)
    {
        $user=Auth::user();
        if($request->food_id){
            $date=date("Y-m-d");
            $food_id=$request->food_id;
            $weight=$request->weight;
            $user->foods()->attach($food_id, ['weight'=>$weight,'date'=>$date]);
        }
        $foods=Food::all();
        return view('User.foods',compact('foods','user'));
    }
}
