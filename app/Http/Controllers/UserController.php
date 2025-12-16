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
        $date=date("Y-m-d");
        $daysAgo = date("Y-m-d", strtotime( '-2 days' ) );
        if($request->food_id){
            if (!$request->weight){
                return redirect()->route('user.foods');
            }
            $food_id=$request->food_id;
            $weight=$request->weight;
            $user->foods()->attach($food_id, ['weight'=>$weight,'date'=>$date]);
            return redirect()->route('user.foods');
        }
        if ($request->yesterday){
            $date=date("Y-m-d", strtotime( '-1 days' ) );
        }elseif ($request->daysAgo){
            $date=date("Y-m-d", strtotime( '-2 days' ) );
        }
        $userFoods=[];
        foreach ($user->foods as $food){
            if ($food->pivot->date==$date){
                array_push($userFoods,$food);
            }
        }
        $calories=0;
        foreach ($userFoods as $food){
            $calories+=$food->calories*$food->pivot->weight;
        }
        $foods=Food::all();
        $period=$user->periods->last();
        return view('User.foods',compact('foods','userFoods','user','calories','period'));
    }
}
