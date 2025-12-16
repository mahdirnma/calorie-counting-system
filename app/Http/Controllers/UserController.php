<?php

namespace App\Http\Controllers;

use App\Models\Calorie;
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
        if (!$user->periods->last()->calorie) {
            return redirect()->back();
        }
        if($request->food_id){
            if (!$request->weight){
                return redirect()->route('user.foods');
            }
            $date=date("Y-m-d");
            $food_id=$request->food_id;
            $weight=$request->weight;
            $user->foods()->attach($food_id, ['weight'=>$weight,'date'=>$date]);
            return redirect()->route('user.foods');
        }
        $calories=0;
        foreach ($user->foods as $food){
            $calories+=$food->calories*$food->pivot->weight;
        }
        $foods=Food::all();
        $period=$user->periods->last();
        return view('User.foods',compact('foods','user','calories','period'));
    }
}
